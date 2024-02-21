<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
// return view('welcome');
// });

Route::resource('retraites', RetraiteController::class);
Route::get('/', [RetraiteController::class, 'index']);

Route::resource('ems', EmsController::class);
Route::get('ems/{id}', [EmsController::class, 'single'])->name('ems.show');

