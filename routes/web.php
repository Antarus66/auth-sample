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

Route::get('/cookie-sample/raw/set', 'RawPHPCookieController@setCookie');
Route::get('/cookie-sample/raw/unset', 'RawPHPCookieController@unsetCookie');

Route::get('/cookie-sample/laravel/set', 'LaravelCookieController@setCookie');
Route::get('/cookie-sample/laravel/unset', 'LaravelCookieController@unsetCookie');