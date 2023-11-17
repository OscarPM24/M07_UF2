<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;

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

// Pagina de welcome
Route::get("/", function() {
    return view("welcome");
});

// Controlador
Route::prefix("oscar")->group(function () {
    // Signin 4 parametres
    Route::get('/signin/{iniciar}/{sessio}/{de}/{usuari}', [SignController::class, 'signin2']);
    // Signup 3 parametres
    Route::get('/signup/{creacio}/{usuari}/{nou}', [SignController::class, 'signup2']);
});