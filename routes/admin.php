<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::middleware('auth:admin')->group(function (){
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
});