<?php

use App\Http\Controllers\TghController;
use App\Http\Controllers\JojoController;
use App\Http\Controllers\MavueController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BillController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layout');
// });

// Route::get('/connexion', [TghController::class, 'connexion'])->name('co'); //comment cela s'utilise

// Route::get('/layout', [JojoController::class, 'tout']);
// Route::get('/ma_vue', [MavueController::class, 'voir']);

// route::get('string', function(){
//     return "super ca marche!!!";
// }
// );

// Route::get('a', [ArticleController::class, 'arti']);

// Route::get('/voir', [BillController::class, 'bill']);
Route::get('/', function () {
    return view('acceuil');
})->name('acceuil');
Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');
Route::get('/liste-inscrits', function () {
    return view('inscrits');
})->name('inscrits');
Route::get('/a-propos', function () {
    return view('apropos');
})->name('apropos');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Route::get('/layout', function(){
//  return view ('layout');
// });
