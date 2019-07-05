<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wine;
use App\Order;
use Auth;

class WineController extends Controller
{

    public function about() {
        return view('about');
    }

    public function index() {
        // voorlopig een random aanbieding
        $number = rand(1, 10);
        $wine = Wine::find($number);
        
        return view('index', compact('wine'));

    }

    public function searchWines(Request $request) {

        $brand = $request->input('brand');
        $name = $request->input('name');
        $variety = $request->input('variety');
        $country = $request->input('country');
        

        $wines = Wine::where('brand', 'like', "%".$brand."%")->where('name', 'like', "%".$name."%")->where('variety', 'like', "%".$variety."%")->where('country', 'like', "%".$country."%")->paginate(4);

        return view ('searchresults', compact('wines'));
    }

    public function show(Wine $wine){

        return view('show', compact('wine'));
    }
    
    public function addToCart(Wine $wine){

        if (!Auth::check()) {
            return view('loginwarning');

        } else {
            $user = Auth::user();

            $order = Order::where('user_id', $user->id)->where('wine_id', $wine->id)->where('myprice', $wine->price)->get();

            if(!$order->isEmpty()) {
                $order = $order->first();
                $order->increment('quantity');
            } else {
                $order = new Order;
                $order->user_id = $user->id;
                $order->wine_id = $wine->id;
                $order->quantity = 1;
                $order->myprice = $wine->price;

                $order->save(); 
            }

            $wine->decrement('units');
            return view('addtocart', compact('wine'));

        }

    }

    public function addOne($id) {
        $order = Order::findOrFail($id);
        $wine = Wine::findOrFail($order->wine_id);
        if ($wine->units > 0) {
            $order->increment('quantity');
            $wine->decrement('units');
        }
        $wines = Auth::user()->wines;
        return view('cart', compact('wines'));

    }

    public function decreaseOne($id) {
        $order = Order::findOrFail($id);
        $wine = Wine::findOrFail($order->wine_id);
        if ($order->quantity > 0) {
            $order->decrement('quantity');
            $wine->increment('units');
            if ($order->quantity == 0) {
                $order->delete();
            }
        }
        
        $wines = Auth::user()->wines;
        return view('cart', compact('wines'));

    }

    public function cart() {
        if (!Auth::check()) {
            return view('loginwarning');

        } else {
            $wines = Auth::user()->wines;
            return view('cart', compact('wines'));
        }
    }

}
