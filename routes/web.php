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
Route::resource('periple', 'PublicPeripleController');
Route::resource('source', 'PublicSourceController');
Route::resource('rencontre', 'PublicRencontreController');
Route::get('/maps', function(){
    return view('product.map');
});
Route::get('/countries', function(){
    return view('product.countries');
});
Route::get('foo', function () {
    return 'Hello World';
});




// ADMIN
Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('products', 'ProductController');

Route::resource('projects', 'ProjectController');
Route::resource('deroules', 'DerouleController');
Route::resource('understandings', 'UnderstandingMigrationsController');
Route::resource('periples', 'PeripleController');
Route::resource('rencontres', 'RencontreController');
Route::resource('sources', 'SourceController');
Route::resource('illustrations', 'IllustrationController');
Route::resource('commants', 'CommantsController');
// Route::post('commants', 'CommantsController@store');

Route::resource ('illustration', 'IllustrationsController', [
        'only' => ['create', 'store', 'destroy', 'update']
    ]);
Auth::routes();
