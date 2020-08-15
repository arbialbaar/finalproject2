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

Auth::routes();
// Route::prefix('/admin')->middleware('auth')->group(function () {

// });

Route::get('/', 'IndexController@home')->name('home.home');
Route::get('/product', 'IndexController@product')->name('home.product');
Route::get('/clients', 'IndexController@client')->name('home.client');
Route::get('/contact-us', 'IndexController@contact')->name('home.contact');


//auth
Route::get('/admin', 'Admin\HomeController@index')->name('admin.home.index');
Route::get('/admin/homes/create', 'Admin\HomeController@create')->name('admin.home.create');
Route::get('admin/homes/{home}/edit', 'Admin\HomeController@edit')->name('admin.home.edit');
Route::post('/admin/homes', 'Admin\HomeController@store')->name('admin.home.store');
Route::patch('/admin/homes/{home}', 'Admin\HomeController@update')->name('admin.home.update');
Route::delete('admin/homes/{home}', 'Admin\HomeController@delete')->name('admin.home.destroy');

//product
Route::get('admin/product', 'ProductController@index')->name('admin.product.index');
Route::get('admin/product/create', 'ProductController@create')->name('admin.product.create');
Route::get('admin/product/{product}/edit', 'ProductController@edit')->name('admin.product.edit');
Route::post('admin/product', 'ProductController@store')->name('admin.product.store');
Route::patch('/admin/product/{product}', 'ProductController@update')->name('admin.product.update');
Route::delete('/admin/product/{product}', 'ProductController@destroy')->name('admin.product.destroy');

// footer
Route::resource('/footer', 'FooterController');

// contact us
Route::resource('/contact', 'ContactController');

// client
Route::resource('/client', 'ClientController');

// Pesan
Route::resource('/pesan', 'PesanController');

// Route::prefix('admin')->group(function () {
//     Route::get('',);
// });
