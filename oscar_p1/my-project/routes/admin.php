<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


    Route::middleware(['admin_db'])->group(function() {
        Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');

        Route::get('/centres', [AdminController::class, 'centres'])->name('centres');

        Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');

        Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');
    });


?>