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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/somar/{n1}/{n2}', [App\Http\Controllers\PrincipalController::class, 'somar']);
Route::get('/subtrair/{n1}/{n2}', [App\Http\Controllers\PrincipalController::class, 'subtrair']);
Route::get('/dividir/{n1}/{n2}', [App\Http\Controllers\PrincipalController::class, 'dividir']);
Route::get('/multiplicar/{n1}/{n2}', [App\Http\Controllers\PrincipalController::class, 'multiplicar']);

Route::get('/compras', [App\Http\Controllers\PrincipalController::class, 'compras']);




