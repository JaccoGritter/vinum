<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wine;
use App\Order;
use Auth;

class WineController extends Controller
{

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
            $order = new Order;
            $order->user_id = $user->id;
            $order->wine_id = $wine->id;
            $order->quantity = 1;
            $order->price = $wine->price;

            $order->save();

            $wine->decrement('units');

            return view('addtocart', compact('wine'));
        }

    }

    public function cart() {
        $wines = Auth::user()->wines;
        return view('cart', compact('wines'));
    }

}
