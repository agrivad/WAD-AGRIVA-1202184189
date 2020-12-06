<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/products', 'productsController@index');
Route::get('/addproduct', 'productsController@addproduct');
Route::post('/addproduct', 'productsController@add');
Route::get('/orders', 'ordersController@index');
