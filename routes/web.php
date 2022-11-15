<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomedController;
use App\Http\Controllers\HomeinsController;
use App\Http\Controllers\HomelockController;
use App\Http\Controllers\RgtableController;

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
    return view('welcome');
});

Route::get('/dashboard', [HomedController::class, 'dashboard'])->name('dashboard');

Route::get('/rgtable', [RgtableController::class, 'rgtable'])->name('table');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/inscription', [HomeinsController::class, 'inscription'])->name('inscription');
Route::get('/fermeture', [HomelockController::class, 'fermeture'])->name('fermeture');
