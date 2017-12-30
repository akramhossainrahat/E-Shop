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

Route::get('/', 'SiteController@index');
Route::get('products-list-view', 'SiteController@products_list_view');
Route::get('product-quick-view/{id}', 'SiteController@product_quick_view');
Route::post('save-feedback', 'SiteController@save_feedback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product-add', 'HomeController@product_add');
Route::post('/add-new-product', 'HomeController@add_new_product');
Route::get('/add-product-category', 'HomeController@add_product_category');
Route::post('/save-product-category', 'HomeController@save_product_category');