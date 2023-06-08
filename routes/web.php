<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::resource('/category', CategoryController::class);
Route::resource('/product', ProductController::class);

// Route::prefix('category')->group(function () {
//     Route::get('/create', [CategoryController::class, 'create' ])->name('category.create');

//     Route::get('/', [CategoryController::class, 'index' ])->name('category.index');

//     Route::post('/store', [CategoryController::class, 'store' ])->name('category.store');

//     Route::get('/edit/{id}', [CategoryController::class, 'edit' ])->name('category.edit');

//     Route::post('/update/{id}', [CategoryController::class, 'update' ])->name('category.update');

//     Route::get('/delete/{id}', [CategoryController::class, 'delete' ])->name('category.delete');


// });

Route::prefix('menus')->group(function () {
    Route::get('/', [MenuController::class, 'index' ])->name('menus.index');

    Route::get('/create', [MenuController::class, 'create' ])->name('menus.create');

    Route::post('/store', [MenuController::class, 'store' ])->name('menus.store');


});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
