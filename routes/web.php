<?php

use App\Http\Controllers\MySecondController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/first-page', [MyFirstController::class, 'index']);
Route::get('/second-page', [MySecondController::class, 'index']);
