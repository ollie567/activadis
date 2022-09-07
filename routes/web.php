<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/overzicht', function () {
    return view('overzicht');
});

Route::get('/adminoverzicht', function () {
    return view('adminoverzicht');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/adminDetail', function () {
    return view('adminDetail');
});

Route::get('/adminToevoegen', function () {
    return view('adminToevoegen');
});

Route::post('/overzicht', function () {
    return view('overzicht');
});

Route::post('/adminoverzicht', function () {
    return view('adminoverzicht');
});

Route::get('/detailPagina', function () {
    return view('detailPagina');
});
