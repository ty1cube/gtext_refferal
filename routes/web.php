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

Route::view('/', 'master', ['as'=> 'login']);
Route::view('/add-products', 'addProducts', ['as'=> 'addProducts']);
Route::view('/find-products', 'findProducts', ['as'=> 'findProducts']);
Route::view('/dashboard', 'dashboard', ['as'=> 'dashboard']);
Route::view('/profile', 'profile', ['as'=> 'profile']);
