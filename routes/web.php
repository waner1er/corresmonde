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
// FRONTEND

Route::get('/', 'WelcomeController@accueil');

// Route::get('/', ['as' => 'index', 'uses' => 'WelcomeController@accueil']);


// Route::get('ressources', 'ProductController@publicIndex');
Route::resource('projet', 'PublicProjectController');
Route::resource('deroule', 'PublicDerouleController');
Route::resource('ressources', 'PublicProductController');
Route::resource('understanding', 'PublicUnderstandingController');



// ADMIN
Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('products', 'ProductController');
Route::resource('projects', 'ProjectController');
Route::resource('deroules', 'DerouleController');
Route::resource('understandings', 'UnderstandingMigrationsController');
Route::resource('periples', 'PeriplesController');

Auth::routes();


