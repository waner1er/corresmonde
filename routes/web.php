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

//page d'accueil

use App\Http\Controllers\UsersController;

Route::get('/', 'WelcomeController@accueil');


// ADMIN
Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('products', 'ProductController');
Route::resource('ressources', 'PublicProductController');
Auth::routes();

















Route::get('/projet', function () {
    return view('frontend/projet');
});

Route::get('/deroule', function () {
    return view('frontend/deroule');
});

// Route::get('/ressources', function () {
//     return view('frontend/ressources');
// });
Route::get('/travaux', function () {
    return view('frontend/travaux');
});

Route::get('/infos', function () {
    return view('frontend/infos');
});
Route::get('/map', function () {
    return view('frontend/map');
});


Route::get('/premier', function () {
    return view('backend/premier');
});
Route::get('/deuxieme', function () {
    return view('backend/deuxieme');
});
Route::get('/troisieme', function () {
    return view('backend/troisieme');
});
Route::get('/quatrieme', function () {
    return view('backend/quatrieme');
});
Route::get('/cinquieme', function () {
    return view('backend/cinquieme');
});




//
