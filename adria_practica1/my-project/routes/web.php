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

/*
| --------------------------------------------------------------------------
| Grup de rutes definides amb un prefix (Adrià)
| --------------------------------------------------------------------------
| Fem ::get de la ruta i segons si té paràmetres o no criden una funció o
| una altra de la nostra classe controlador 'SignController'.
| Possibles rutes:
|   - /signin -->> crida a la funció signIn()
|   - /signin/param1/param2/param3/param4 -->> crida a la funció signIn2(var1, var2, var3, var4)
|   - /signup -->> crida a la funció signUp()
|   - /signin/param1/param2/param3 -->> crida a la funció signUp2(var1, var2, var3)
*/
Route::prefix('Adria')->group( function() {
    Route::get('/signin', [SignController::class, 'signin'] )->name('signin');
    Route::get('/signin/{var1}/{var2}/{var3}/{var4}', [SignController::class, 'signin2']);
    Route::get('/signup', [SignController::class, 'signup'] )->name('signup');
    Route::get('/signup/{var1}/{var2}/{var3}', [SignController::class, 'signup2']);
});
