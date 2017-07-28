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
    return view('home');
});
Route::get('/Map', function () {
    return view('Map/TouristMap');
});
Route::get('/Desc', function () {
    return view('Map/LocationDesc');
});
Route::get('/Provinces', function () {
    return view('provinces/provinces');
});
Route::get('/Infos', function () {
    return view('provinces/info');
});
Route::get('/About', function () {
    return view('about');
});
