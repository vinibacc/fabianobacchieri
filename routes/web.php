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
Route::get('/mais-pampa-menos-povo', function () {
    return view('discos.maispampa');
});
Route::get('/marca-aovivo', function () {
    return view('discos.marca');
});
Route::get('/saludo', function () {
    return view('discos.saludo');
});
Route::get('/bio', function () {
    return view('bio');
});
Route::get('/bio', function () {
    return view('bio');
});
