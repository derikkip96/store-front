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


Route::get('/', 'HomeController@home')->name('home');
Route::resource('products','ProductsController')->only(['index','show']);
Route::resource('brands','BrandsController')->only(['index','show']);
Route::resource('categories','CategoriesController')->only(['index','show']);
Route::get('/shop/cart','ShopsController@cart');
Route::get('/checkout','ShopsController@checkout');
