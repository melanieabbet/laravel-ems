<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RetraiteController;
use App\Http\Controllers\EmsController;

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
// Route pour afficher le formulaire de connexion/inscription
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');

// Route pour gérer la soumission du formulaire de connexion/inscription
Route::post('/login', [UserController::class, 'loginOrRegister'])->name('login.post');

// Route pour la déconnexion
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('retraites', RetraiteController::class)->except('index');
    Route::get('/', [RetraiteController::class, 'index'])->name('retraites.index');

    Route::resource('ems', EmsController::class)->except('single');
    Route::get('ems/{id}', [EmsController::class, 'single'])->name('ems.show');
});

