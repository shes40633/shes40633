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
Route::get('/', 'test2@welcome'); 
Route::get('/index', 'test2@index'); 
Route::get('/about', 'test2@about'); 
Route::get('/news', 'test2@news'); 
Route::get('/product', 'test2@product'); 
Route::get('/contact', 'test2@contact'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
