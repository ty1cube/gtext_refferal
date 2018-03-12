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

// Route::get('/',  ['as'=> 'login']);
// Route::get('/add-products', 'addProducts', ['as'=> 'addProducts']);
// Route::get('/products', 'ProductsController@index');
// Route::get('/dashboard', 'dashboard', ['as'=> 'dashboard']);
// Route::get('/profile', 'profile', ['as'=> 'profile']);

	Route::resource('/', 'DashboardController');
 	Route::get('/userprofile', 'ProfileController@show');
 	Route::resource('transaction', 'TransactionController');
 	Route::get('/findproducts', 'ProductsController@index');
 	Route::get('/products', 'ProductsController@show');
 	Route::get('/newproducts', 'ProductdisplayController@index');
 	Route::resource('resources', 'ResourcesController');
 	Route::view('profile', 'profile');




Route::group(['middleware' => ['auth']], function () {
    //Route::get('/dashboard', 'DashboardController@index');

   // Route::get('/products', 'ProductsController@show');
   
  //Route::get('/profile', 'ProfileController@show');
  //Route::resource('/profile', 'ProfileController@show');


  
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
