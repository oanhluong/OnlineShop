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
    return view('welcome');
});


Route::group(['prefix'=>'adminsys'], function(){
	Route::get('/', 'Admin\HomeController@index')->name('admin-home');	
	Route::group(['prefix'=>'login'], function(){
		Route::get('/', 'Admin\LoginController@index')->name('admin-login');
		Route::post('/login', 'Admin\LoginController@login')->name('admin-login-login');
	});
});