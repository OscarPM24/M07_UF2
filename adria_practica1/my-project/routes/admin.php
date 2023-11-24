<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

    Route::middleware(['admin_db'])->group(function(){
        Route::post('/admin_view', [AdminController::class,  'usuaris'])->name('admin_view');
        Route::post('/centres', [AdminController::class, 'centres'])->name('centres');
    });