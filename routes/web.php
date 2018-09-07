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

Route::any('admin/login', 'Admin\AuthController@login')->name('admin.login');


Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 'Admin\AdminController@dashboard')->name('admin.dashboard');

	Route::group(['prefix' => 'admin'], function(){
		Route::get('/', 'Admin\AdminController@index')->name('admin.admin.index');
		Route::any('create', 'Admin\AdminController@create')->name('admin.admin.create');
		Route::any('edit/{id}', 'Admin\AdminController@create')->name('admin.admin.edit');
		Route::get('delete/{id}', 'Admin\AdminController@delete')->name('admin.admin.delete');
	});

});