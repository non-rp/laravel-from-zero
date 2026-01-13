<?php

use App\Http\Controllers\AboutController;
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
    return view('welcome');
});

Route::group(['namespace' => 'Post'], function () {
    Route::get('/posts', [IndexController::class])->name('posts.index');
    Route::get('/posts/create', [CreateController::class])->name('posts.create');

    Route::post('/posts', [StoreController::class ])->name('posts.store');
    Route::get('/posts/{post}', [ShowController::class ])->name('posts.show');

    Route::get('/posts/{post}/edit', [EditController::class ])->name('posts.edit');
    Route::put('/posts/{post}', [UpdateController::class ])->name('posts.update');
    Route::delete('/posts/{post}', [DestroyController::class])->name('posts.destroy');
});


Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
