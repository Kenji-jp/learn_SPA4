<?php

use Illuminate\Http\Request;

// register
Route::post('/register', 'Auth\RegisterController@register')->name('register');

// login
Route::post('/login', 'Auth\LoginController@login')->name('login');

// logout
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// login user
Route::get('/user', fn() => Auth::user())->name('user');