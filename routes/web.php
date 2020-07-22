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
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::resource('home','Admin\HomeController');
});

Route::get('/', 'HomeController@home')->name('home.home');
Route::get('/product', 'HomeController@product')->name('home.product');
Route::get('/client', 'HomeController@client')->name('home.client');
Route::get('/contact-us', 'HomeController@contact')->name('home.contact');


