<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MenuController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::resource('categories', CategoriesController::class);

Route::prefix('categories')->group(function () {
    Route::get('/create', [CategoriesController::class, 'create' ])->name('categories.create');

    Route::get('/', [CategoriesController::class, 'index' ])->name('categories.index');

    Route::post('/store', [CategoriesController::class, 'store' ])->name('categories.store');

    Route::get('/edit/{id}', [CategoriesController::class, 'edit' ])->name('categories.edit');

    Route::post('/update/{id}', [CategoriesController::class, 'update' ])->name('categories.update');

    Route::get('/delete/{id}', [CategoriesController::class, 'delete' ])->name('categories.delete');


});

Route::prefix('menus')->group(function () {
    Route::get('/', [MenuController::class, 'index' ])->name('menus.index');

    Route::get('/create', [MenuController::class, 'create' ])->name('menus.create');

    Route::post('/store', [MenuController::class, 'store' ])->name('menus.store');


});


