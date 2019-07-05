<?php
use App\Http\Controllers\WineController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'WineController@index')->name('index');

Route::get('/search', 'WineController@searchWines');

Route::get('/about', 'WineController@about')->name('about');

Route::get('/show/{wine}', 'WineController@show')->name('show');

Route::get('/cart', 'WineController@cart')->name('cart');

Route::get('/addtocart/{wine}', 'WineController@addToCart')->name('addtocart');

Route::get('/loginwarning', function() {
    return view('loginwarning');
    });

Route::get('/addone/{id}', 'WineController@addOne')->name('addone');
Route::get('/decreaseone/{id}', 'WineController@decreaseOne')->name('decreaseone');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
