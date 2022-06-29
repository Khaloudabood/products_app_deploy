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
    return view('welcome');
});

//created by khulood
Route::view('products', 'products.index');
Route::post('products/store', 'ProductsController@store');
Route::get('displayproducts', 'ProductsController@display');
//Route::view('orders', 'products.admin.orders-index');
Route::get('orders', 'OrderController@index');
//created by thurya
Route::get('preview/{id}','ProductsController@store');
Route::view('product-list', 'products.product-list');
//Auth routs
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
