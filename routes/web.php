<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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

Route::get('/users', '\App\Http\Controllers\UserController@indexUsers')->name('users');
Route::get('/users/create', '\App\Http\Controllers\UserController@createUser')->name('createUser');
Route::post('/users/create/store', '\App\Http\Controllers\UserController@storeUser')->name('storeUser');
Route::get('/users/show/{id}', '\App\Http\Controllers\UserController@showUser');
Route::put('/users/show/update/{id}', '\App\Http\Controllers\UserController@updateUser');
Route::delete('/users/show/delete/{id}', '\App\Http\Controllers\UserController@deleteUser');
