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

Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('/admin/users', 'UserController');
    Route::resource('/admin/roles', 'RoleController');
    Route::resource('/admin/posts', 'PostController');
});
