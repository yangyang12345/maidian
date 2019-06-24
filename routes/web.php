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


// 前端页面路由
Route::get('/','IndexController@index')->name('index');
Route::get('/Tmall','IndexController@tmall')->name('tmallstore');
Route::get('/TmallNew','IndexController@tmall_new')->name('tmallnew');
Route::get('/Otherstore','IndexController@other_store')->name('otherstore');
Route::get('/Sellstore','IndexController@sell_store')->name('sellstore');

Route::get('/Center','CenterController@index')->name('center');



Auth::routes();


