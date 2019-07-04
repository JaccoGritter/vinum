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

Route::get('/show/{wine}', 'WineController@show')->name('show');

Route::get('/addtocart/{wine}', 'WineController@addToCart')->name('addtocart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
