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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     // return view('welcome');
//     return '<h1>Hello World</h1>';
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/announcements', 'PagesController@announcements');
Route::get('/bus-routes', 'PagesController@busRoutes');
Route::get('/map-complete', 'PagesController@mapComplete');
Route::get('/bus-routes/romatza-eglikada', 'PagesController@romatzaEglikada');
Route::get('/bus-routes/taraboura-neosdromos', 'PagesController@tarabouraNeosdromos');
