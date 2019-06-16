<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;


//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('admin.users.index');
Route::get('/users/{user}', 'UserController@edit')->name('admin.users.edit');
Route::put('/users/{user}', 'UserController@update')->name('admin.users.update');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/send-mail','HomeController@prepareShipping')->name('send.mail');


