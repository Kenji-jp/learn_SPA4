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
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

