<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(uri: '/login', action: 'App\Http\Controllers\LoginController@index');

Route::get(uri: '/profile', action: 'App\Http\Controllers\ProfileController@index');

Route::get(uri: '/wall', action: 'App\Http\Controllers\WallController@index');

Route::get(uri: '/hello', action: 'App\Http\Controllers\HelloController@index');



