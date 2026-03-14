<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', HomeController::class);

Route::prefix('product')->controller(ProductController::class)->group(function () {

    Route::get('/', 'index')->name('product.index');

    Route::get('/create', 'create')->name('product.create');

    Route::post('/store', 'store')->name('product.store');

    Route::get('/{producto}', 'show')->name('product.show');

    Route::delete('/{producto}', 'destroy')->name('product.destroy');

});
Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // CRUD Categorías
    Route::resource('categories', CategoryController::class);

});