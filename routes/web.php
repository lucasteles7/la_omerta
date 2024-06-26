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
    return view('home');
});

Auth::routes();

Route::resource('orders', 'OrderController');

Route::resource('products', 'ProductController');

Route::resource('customers', 'CustomerController');

Route::resource('customer_payment', 'CustomerPaymentController');

Route::get('pedidos/get-all', 'OrderController@getAll');

