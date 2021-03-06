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

Route::get('register', 'AuthController@showRegister')->name('register');
Route::post('register', 'AuthController@register')->name('register');

Route::get('login', 'AuthController@showLogin')->name('login');
Route::post('login', 'AuthController@login')->name('login');

Route::post('logout', 'AuthController@logout')->name('logout');

Route::get('home', 'HomeController@index')->name('home');

Route::get('password-request', 'AuthController@requestPassword')->name('password.request');

Route::group([
    'prefix' => 'account'
], function() {
    Route::get('/', 'AccountController@index')->name('account');
    Route::post('/', 'AccountController@update')->name('account.update');
});
