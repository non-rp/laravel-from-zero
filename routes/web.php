<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Page\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\Post\DestroyController;
use App\Http\Controllers\Admin\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Admin\Post\UpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Post\StoreController;
use App\Http\Controllers\Admin\Post\CreateController;
use App\Http\Controllers\Admin\Post\IndexController as AdminPostIndexController;

Route::get('/', function () {
    return view('main');
})->name('main.index');

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/{post}', ShowController::class)->name('show');

});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', AdminController::class)->name('index');

    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('/', AdminPostIndexController::class)->name('index');
        Route::get('/create', CreateController::class)->name('create');
        Route::post('/', StoreController::class)->name('store');
        Route::get('/{post}/edit', EditController::class)->name('edit');
        Route::put('/{post}', UpdateController::class)->name('update');
        Route::delete('/{post}', DestroyController::class)->name('destroy');
    });

    Route::resource('pages', PageController::class);
});


Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
