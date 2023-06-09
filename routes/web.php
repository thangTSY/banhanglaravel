<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MenuController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');


Route::resource('/category', CategoryController::class);

Route::resource('/product', ProductController::class);

Route::resource('/client', ClientController::class);

// Route::resource('/adminauth', AdminAuthController::class);

Route::group(['prefix' => 'adminauth', 'namespace' => 'Admin'], function () {
    Route::get('/', [AdminAuthController::class, 'index'])->name('admin.login');

    Route::post('/form', [AdminAuthController::class, 'customLogin'])->name('admin.customLogin');

    Route::post('/create', [AdminAuthController::class, 'create'])->name('create');

    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/register', [AdminAuthController::class, 'register'])->name('admin.register');

    Route::post('/custom-register', [AdminAuthController::class, 'customRegister'])->name('register.custom');

    Route::get('/', [AdminAuthController::class, 'index2'])->name('admin.index');

});


Route::prefix('menus')->group(function () {
    Route::get('/', [MenuController::class, 'index' ])->name('menus.index');

    Route::get('/create', [MenuController::class, 'create' ])->name('menus.create');

    Route::post('/store', [MenuController::class, 'store' ])->name('menus.store');


});

Route::post('/searchpr', [ProductController::class, 'search' ])->name('product.search');

Route::post('/searchcl', [ClientController::class, 'search' ])->name('client.search');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
