<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

    Route::middleware(['admin_db'])->group(function(){
        Route::post('/admin_view', [AdminController::class,  'usuaris'])->name('admin_view');
        Route::get('/centres', [AdminController::class, 'centres'])->name('centres');
        Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');
        Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');
        Route::get('/signin', [AdminController::class, 'logout'])->name('logout');
    });