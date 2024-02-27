<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('bid-analysis');
});

Route::get('/preview2', function () {
    return view('bid-gen');
});

Route::get('/preview3', function () {
    return view('bid-ver');
});

Route::get('/bid-generator', function () {
    return view('bid-generator');
});

Route::get('/preview', function () {
    return view('bid-verbiage');
});
