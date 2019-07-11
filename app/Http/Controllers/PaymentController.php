<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use App\Order;
use Auth;

class PaymentController extends Controller
{
    public function preparePayment()
    {
        
        $ordertotal = strval (number_format(Auth::user()->getOrderValue(),2));
        $payment = Mollie::api()->payments()->create([
        'amount' => [
            'currency' => 'EUR',
            'value' => $ordertotal, // You must send the correct number of decimals, thus we enforce the use of strings
        ],
        'description' => 'Vinum order ' . Auth::user()->orders->first()->id,
        'webhookUrl' => route('webhooks.mollie'),
        'redirectUrl' => route('orderresponse'),
        ]);
        
        $payment = Mollie::api()->payments()->get($payment->id);
        $payment_id = $payment->id;
        session(['payment_id' => $payment_id]);
        
        //dd(session('payment_id'));
    
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
    
    /**
     * After the customer has completed the transaction,
     * you can fetch, check and process the payment.
     * (See the webhook docs for more information.)
     */
    public function orderResponse() {
        
        $payment = Mollie::api()->payments()->get(session('payment_id'));
        //possible statuses: paid canceled expired failed open expired
        
        switch ($payment->status) {
            case 'paid':
                $msg = "De betaling is gelukt. Hartelijk dank!";
                $orders = Order::where('user_id', Auth::user()->id)->get();
                foreach ($orders as $order) $order->delete();
                break;
            case 'canceled':
                $msg = "De betaling is afgebroken. Probeer het opnieuw";
                break;
            case 'failed':
                $msg = "Helaas is de betaling niet gelukt.";
                break;
            case 'expired':
                $msg = "De server doet er te lang over om te reageren. Probeer het opnieuw.";
                break;
            case 'open':
                $msg = "De betaling staat open. U krijgt bericht zodra de betaling is goedgekeurd";
                $orders = Order::where('user_id', Auth::user()->id)->get();
                foreach ($orders as $order) $order->delete();
                break;
            default:
                $msg = $payment->status;
        }

        return view('orderresponse')->with('msg', $msg);
    }

}
