<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActiviteitController;


use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;


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
})->middleware('auth');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('/storeLogin', [SessionController::class, 'store']);

Route::get('/overzicht', function () {
    return view('overzicht');
})->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
})->middleware('guest');

Route::post('/overzicht', function () {
    return view('overzicht');
})->middleware('auth');

Route::get('/detailPagina', function () {
    return view('detailPagina');
})->middleware('auth');


Route::get('/activiteit/add', [ActiviteitController::class, 'addActiviteit']);
Route::get('/activiteit/delete', [ActiviteitController::class, 'deleteActiviteit']);

Route::post('/activiteit/add', [\App\Http\Controllers\ActiviteitController::class, 'addActiviteit']);

Auth::routes();

Route::group(['middleware' => ['admin']], function () {
    Route::post('/activityoverzicht', function () {
        return view('activityoverzicht');
    });

    Route::get('/activityoverzicht', function () {
        return view('activityoverzicht');
    });

    Route::post('/useroverzicht', function () {
        return view('useroverzicht');
    });

    Route::get('/useroverzicht', function () {
        return view('useroverzicht');
    });

    Route::get('/adminToevoegen', function () {
        return view('adminToevoegen');
    });

    Route::get('/adminDetail', function () {
        return view('adminDetail');
    });
});


