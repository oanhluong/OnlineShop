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


Route::group(['prefix'=>'admin-system'], function(){
	Route::get('/', 'Admin\HomeController@index')->name('admin-home');
    Route::get('/login', 'Admin\LoginController@showLogin')->name('admin-login-show');
    Route::post('/login', 'Admin\LoginController@login')->name('admin-login-login');
    Route::post('/logout', 'Admin\LoginController@logout')->name('admin-login-logout');


    Route::group(['prefix' => 'users-management'], function(){
        Route::get('/', 'Admin\UserController@list')->name('admin-user-list');
        Route::get('/create-new', 'Admin\UserController@create')->name('admin-user-create');
    });

    Route::get('/create-user', 'Admin\HomeController@createUser')->name('admin-home-create-user');
});