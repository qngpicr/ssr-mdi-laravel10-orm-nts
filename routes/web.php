<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// /home → HomeController@index
Route::get('/home', [HomeController::class, 'index']);

// /index → HomeController@index
Route::get('/index', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

