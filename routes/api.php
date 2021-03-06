<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// added
// Route::post('login', 'UserController@login');
// Route::post('register', 'UserController@register');
// Route::get('/products', 'ProductController@index');

// Route::group(['middleware' => 'auth:api'], function(){
//     // Route::get('/users','UserController@index');
//     // Route::get('users/{user}','UserController@show');
//     // Route::patch('users/{user}','UserController@update');
//     // Route::get('users/{user}/orders','UserController@showOrders');
//     // Route::patch('products/{product}/units/add','ProductController@updateUnits');
//     // Route::patch('orders/{order}/deliver','OrderController@deliverOrder');
//     // Route::resource('/orders', 'OrderController');
// //     Route::resource('/products', 'ProductController')->except(['index','show']);
// });

// before
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Auth::routes();

Route::middleware('auth:api')->resource('products', 'ApiProductController');
// Route::middleware('auth:api')->resource('admin/products', 'ApiProductController');

// Route::get('products', 'ApiProductsController@index');

