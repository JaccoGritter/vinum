<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wine;
use App\Order;
use App\Review;
use Auth;

class WineController extends Controller
{

    public function about() {
        return view('about');
    }

    public function index() {
        // voorlopig een random aanbieding
        //$offer = rand(1, 10);
        $offer = 5;
        $wine = Wine::find($offer);
        
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
            
            if($wine->units <= 0) {
                return view('nostock');
            }

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
        if ($wine->units >= 1) {
            $order->increment('quantity');
            $wine->decrement('units');
        }
        $wines = Auth::user()->wines;
        return view('cart', compact('wines'));

    }

    public function decreaseOne($id) {
        $order = Order::findOrFail($id);
        $wine = Wine::findOrFail($order->wine_id);
        if ($order->quantity >= 1) {
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

    public function createReview(Wine $wine){

        return view('createreview', compact('wine'));
    }
    
    public function addReview(Request $request){

        $review = new Review;
        $review->wine_id = $request->get('wine_id');
        if ($request->screen_name == "") {
            $review->screen_name = 'Anoniem';
            } else {
                $review->screen_name = $request->get('screen_name');
            }
        $review->user_id = Auth::id();
        $review->stars = $request->get('stars');
        $review->comment = $request->get('comment');

        $review->save();

        return view('addreview');
    }

}
