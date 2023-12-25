<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('');
});

Route::get('/', [RegisterController::class, 'index'])->name('index');
Route::get('/inscription', [RegisterController::class, 'inscription'])->name('inscription');

Route::get('/facture', [FactController::class, 'facture'])->name('facture');