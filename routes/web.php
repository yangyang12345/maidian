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
Route::get('/OtherStore','IndexController@other_store')->name('otherstore');
Route::get('/SellStore','IndexController@sell_store')->name('sellstore');

Route::prefix('Center')->group(function () {
    Route::get('/','CenterController@index')->name('center')->middleware('auth');
    Route::get('IWantSell','CenterController@iwantsell')->name('center.iwantsell')->middleware('auth');
});




Auth::routes();


