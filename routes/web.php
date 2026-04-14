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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'indexAluno'])->name("aluno.index");
    Route::post('/adicionar', [App\Http\Controllers\AlunoController::class, 'createAluno'])->name("aluno.create");
    Route::post('/exibir', [App\Http\Controllers\AlunoController::class, 'readAluno'])->name("aluno.read");
    Route::post('/editar', [App\Http\Controllers\AlunoController::class, 'updateAluno'])->name("aluno.update");
    Route::get('/remover', [App\Http\Controllers\AlunoController::class, 'deleteAluno'])->name("aluno.delete");
});




