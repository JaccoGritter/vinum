<?php
use App\Http\Controllers\WineController;
use App\Http\Controllers\PaymentController;

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

Route::get('/createreview/{wine}', 'WineController@createReview')->name('createreview');

Route::post('/addreview', 'WineController@addReview')->name('addreview');

Route::get('/loginwarning', function() {
    return view('loginwarning');
    });

Route::get('/nostock', function() {
    return view('nostock');
    });

Route::get('/addone/{id}', 'WineController@addOne')->name('addone');
Route::get('/decreaseone/{id}', 'WineController@decreaseOne')->name('decreaseone');

Route::get('/pay', 'PaymentController@preparePayment')->name('pay');
Route::get('/orderresponse', 'PaymentController@orderResponse')->name('orderresponse');
Route::name('webhooks.mollie')->post('webhooks/mollie', 'MollieWebhookController@handle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
