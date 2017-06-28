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

Route::get('/careers-home', function () {
    return view('home');
});

Route::get('/careers-internform', function () {
    return view('internform');
});

Route::get('/careers-proform', function () {
    return view('proform');
});

Route::get('/careers-careersearch', function () {
    return view('careersearch');
});

Route::get('/careers-success', function () {
    return view('success');
});

Route::get('/careers-bankform', function () {
    return view('bankform');
});