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


Route::get('/about', function () {
    return view('verk2/about');
});

Route::get('/bio', function () {
    return view('verk2/bio');
});

Route::get('/photosjobs', function () {
    return view('verk2/photosjobs');
});

/*Route::get('/verk3', function () {
    return view('verk3/books/index');
});*/

Route::get('/verk3', 'V3Controller@index');
Route::get('/verk3/books/{id}', 'V3Controller@show');