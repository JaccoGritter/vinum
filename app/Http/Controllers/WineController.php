<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wine;

class WineController extends Controller
{
    public function searchWines(Request $request) {

        $brand = $request->input('brand');
        $name = $request->input('name');
        $variety = $request->input('variety');
        $country = $request->input('country');
        

        $wines = Wine::where('brand', 'like', "%".$brand."%")->where('name', 'like', "%".$name."%")->where('variety', 'like', "%".$variety."%")->where('country', 'like', "%".$country."%")->get();

        // $wines = Wine::where('brand', 'like', "%".$brand."%")->where('name', 'like', "%".$name."%")->get();

        return view ('searchresults', compact('wines'));
    }
}
