<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

    /*
    
    |__________________________________________________________________________|
    | ************************************************************************ |
    | **********  Grup de rutes definides amb middleware 'admin_db' ********** |
    | ************************************************************************ |
    | Fem ::get o ::post segons el tractament de dades que dessitjem fer       |
    | Rutes declarades:                                                        |
    |   - /admin_view -> consta de dues rutes                                  |
    |       -> una amb post, ja que l'usuari li passa paràmetres que no volem  |
    |          mostrar (com ho faria ::get)                                    |
    |       -> una amb get, que usem per tornar a la vista admin_view          |
    |   - /centres -> vista dels centres                                       |
    |   - /professorat -> vista del professorat                                |
    |   - /alumnat -> vista de l'alumnat                                       |
    |__________________________________________________________________________|
    */
    Route::middleware(['admin_db'])->group(function(){
        Route::post('/admin_view', [AdminController::class,  'usuaris'])->name('admin_view');
        Route::get('/admin_view', [AdminController::class,  'viewAdmin'])->name('back');
        Route::get('/centres', [AdminController::class, 'centres'])->name('centres');
        Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');
        Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');
    });