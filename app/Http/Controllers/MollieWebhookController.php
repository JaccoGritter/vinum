<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class MollieWebhookController extends Controller
{

    public function handle(Request $request) {
        //dd($request);
        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if($payment->isPaid()) {
            dd('paid!');
        }
    }

}
