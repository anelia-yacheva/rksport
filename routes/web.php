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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/{lang?}', PagesController@index);
Route::get('/bg', function($lang='bg') {
    App::setlocale($lang);
    return view('pages.index');
});
Route::get('/en', function($lang='en') {
    App::setlocale($lang);
    return view('pages.index');
});
Route::get('/it', function($lang='it') {
    App::setlocale($lang);
    return view('pages.index');
});

// Route::get('/{lang?}/about', function ($lang=null) {
//     return view('pages.about');
// });

// Route::get('/{lang?}/about', 'PagesController@about');

// Route::get('/bg/about', function($lang='bg') {
//     App::setlocale($lang);
//     return view('pages.about');
// });
// Route::get('/en/about', function($lang='en') {
//     App::setlocale($lang);
//     return view('pages.about');
// });
// Route::get('/it/about', function($lang='it') {
//     App::setlocale($lang);
//     return view('pages.about');
// });

// Route::get('/{lang?}/gallery', function ($lang=null) {
//     return view('pages.gallery');
// });

// Route::get('/{lang?}/gallery', 'PagesController@gallery');
// Route::get('/bg/gallery', 'ImageController@index');
// Route::get('/en/gallery', 'ImageController@index');
// Route::get('/it/gallery', 'ImageController@index');

// Route::get('/admin/create', 'ImageController@create');
// Route::post('/admin/store', 'ImageController@store');
// Route::get('/gallery/edit', 'ImageController@edit');
// Route::put('/admin/update', 'ImageController@update');

Route::resource('gallery', 'ImageController');
// Route::resource('/bg/gallery', 'ImageController');
// Route::resource('/en/gallery', 'ImageController');
// Route::resource('/it/gallery', 'ImageController');
Route::get('/bg/gallery', 'ImageController@showuser');
Route::get('/en/gallery', 'ImageController@showuser');
Route::get('/it/gallery', 'ImageController@showuser');

Route::get('survey', 'SurveyController@index')->name('survey');
Route::post('survey', 'SurveyController@store')->name('survey');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/admin', 'DashboardController@index');