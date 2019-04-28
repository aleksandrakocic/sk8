<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('products', 'ProductController');
Route::get('products', 'ProductController@index')->name('products');
// Route::get('products', 'ProductController@index')->name('productslist'); prvo napravi productlist
Route::get('products', 'ProductController@index')->name('productslist');


// ovo mi je za orders
Route::resource('orders', 'OrdersController');
Route::get('orders', 'ProductController@index')->name('orders');


