<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/create', CreateController::class)->name('create');

    Route::post('/', StoreController::class)->name('store');
    Route::get('/{post}', ShowController::class)->name('show');

    Route::get('/{post}/edit', EditController::class)->name('edit');
    Route::put('/{post}', UpdateController::class)->name('update');
    Route::delete('/{post}', DestroyController::class)->name('destroy');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', AdminController::class)->name('index');
});


Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
