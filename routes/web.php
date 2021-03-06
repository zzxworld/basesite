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

Route::get('/home', 'User\HomeController@index')->name('user_home');
Route::get('/user/change_password', 'User\ProfileController@changePassword');
Route::post('/user/change_password', 'User\ProfileController@postChangePassword');
