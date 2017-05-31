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
    return view('AdminDashboard');
});

Route::get('/Page', 'CobaController@Page');
Route::get('/Post', 'CobaController@Post');
Route::get('/User', 'CobaController@User');
Route::get('/HalamanInformasi', 'CobaController@HalamanInformasi');
Route::get('/Slideshow', 'CobaController@slideshow');
Route::get('/Banner', 'CobaController@banner');
Route::get('/FAQ', 'CobaController@FAQ');
Route::get('/Customer', 'CobaController@Customer');
Route::get('/Kategori', 'CobaController@kategori');
Route::get('/LihatKategori', 'CobaController@LihatKategori');
