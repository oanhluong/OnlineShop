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

Route::get('/', function () {
    return view('admin.pages.login');
});


Route::group(['prefix'=>'adminsys'], function(){
	Route::get('/', 'Admin\HomeController@index')->name('admin-home');
    Route::get('/login', 'Admin\LoginController@showLogin')->name('admin-login-show');
    Route::post('/login', 'Admin\LoginController@login')->name('admin-login-login');
});