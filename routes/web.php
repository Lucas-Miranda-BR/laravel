<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('pagina-principal');
Route::get('/sobre', [App\Http\Controllers\Principal::class, 'sobre'])->name('sobre');
Route::get('/contato', [App\Http\Controllers\Principal::class, 'contato'])->name('contato');
Route::get('/meio-ambiente', [App\Http\Controllers\Principal::class, 'cursoMa'])->name('meio-ambiente');
Route::get('/adminstracao', [App\Http\Controllers\Principal::class, 'cursoAdm'])->name('adminstracao');
Route::get('/analise-e-desenvolvimento-de-sistemas', [App\Http\Controllers\Principal::class, 'cursoAds'])->name('analise-e-desenvolvimento-de-sistemas');



