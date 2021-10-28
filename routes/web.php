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
Route::get('/users/{id}', '\App\Http\Controllers\UserController@showUser')->name('userId');

// Route::get('/assinante/vagas',"JobOpeningController@indexSubscriber");
// Route::post('/assinante/vagas',"JobOpeningController@storeSubscriber");
// Route::get('/assinante/vagas/{id}',"JobOpeningController@showSubscriber");

// Route::get('/assinante/vagas/edit/{id}',"JobOpeningController@editSubscriber");
// Route::put('/assinante/vagas/{id}',"JobOpeningController@updateSubscriber");

// Route::delete('/assinante/vagas/{id}',"JobOpeningController@destroySubscriber");