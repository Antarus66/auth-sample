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

Route::get('/session-sample/raw/set', 'RawPHPSessionController@setSession');
Route::get('/session-sample/raw/unset', 'RawPHPSessionController@unsetSession');

Route::get('/session-sample/laravel/set', 'LaravelSessionController@setSession');
Route::get('/session-sample/laravel/unset', 'LaravelSessionController@unsetSession');
