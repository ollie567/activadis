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
    return view('activity');
})->middleware('auth');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('/storeLogin', [SessionController::class, 'store']);

Route::get('/activity', function () {
    return view('activity');
})->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/activity', function () {
    return view('activity');
})->middleware('auth');

Route::get('/userActivityDetail', function () {
    return view('userActivityDetail');
})->middleware('auth');


Route::get('/activiteit/add', [ActiviteitController::class, 'addActiviteit']);
Route::get('/activiteit/delete', [ActiviteitController::class, 'deleteActiviteit']);
Route::post('/activiteit/edit', [ActiviteitController::class, 'editActiviteit']);

//Route::post('/activiteit/add', [\App\Http\Controllers\ActiviteitController::class, 'addActiviteit']);

Auth::routes();

Route::group(['middleware' => ['admin']], function () {
    Route::post('/adminActivityView', function () {
        return view('adminActivityView');
    });

    Route::get('/adminActivityView', function () {
        return view('adminActivityView');
    });

    Route::post('/adminUserView', function () {
        return view('adminUserView');
    });

    Route::get('/adminUserView', function () {
        return view('adminUserView');
    });

    Route::get('/adminToevoegen', function () {
        return view('adminToevoegen');
    });

    Route::get('/adminActivityCreate', function () {
        return view('adminActivityCreate');
    });

    Route::get('/adminActivityUpdate', function () {
        return view('adminActivityUpdate');
    });
});


