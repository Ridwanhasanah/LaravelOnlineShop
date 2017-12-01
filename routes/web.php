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
/*Route::get('/', function(){
	return view('layouts.layout');
});*/
Route::get('/', 'FrontController@index');

Route::get('/home', 'FrontController@index');
Route::get('/products', 'FrontController@products');
Route::get('/products/details/{id}', 'FrontController@product_details');
Route::get('/products/categories', 'FrontController@product_categories');
Route::get('/products/brands', 'FrontController@product_brands');

Route::get('/blog', 'FrontController@blog');
Route::get('/blog/post/{id}', 'FrontController@blog_post');

Route::get('/contact-us', 'FrontController@contact_us');
Route::get('/login', 'FrontController@login');
Route::get('/logout', 'FrontController@logout');
Route::get('/cart', 'FrontController@cart');
Route::get('/checkout', 'FrontController@checkout');
Route::get('/search/{query}', 'FrontController@search');