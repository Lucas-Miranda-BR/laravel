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
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'indexAluno'])->name('aluno.index');
    Route::post('/create', [App\Http\Controllers\AlunoController::class, 'createAluno'])->name('aluno.create');
    Route::get('/read', [App\Http\Controllers\AlunoController::class, 'readAluno'])->name('aluno.read');
    Route::get('/update/{id}', [App\Http\Controllers\AlunoController::class, 'updateAluno'])->name('aluno.update');
    Route::get('/delete/{id}', [App\Http\Controllers\AlunoController::class, 'deleteAluno'])->name('aluno.delete');
    Route::post('/save', [App\Http\Controllers\AlunoController::class, 'saveAluno'])->name('aluno.save');
});

Route::prefix('/curso')->group(function(){
    Route::get('/index', [App\Http\Controllers\CursoController::class, 'indexCurso'])->name('curso.index');
    Route::post('/create', [App\Http\Controllers\CursoController::class, 'createCurso'])->name('curso.create');
    Route::get('/read', [App\Http\Controllers\CursoController::class, 'readCurso'])->name('curso.read');
    Route::get('/update/{id}', [App\Http\Controllers\CursoController::class, 'updateCurso'])->name('curso.update');
    Route::get('/delete/{id}', [App\Http\Controllers\CursoController::class, 'deleteCurso'])->name('curso.delete');
    Route::post('/save', [App\Http\Controllers\CursoController::class, 'saveCurso'])->name('curso.save');
});

Route::prefix('/professor')->group(function(){
    Route::get('/index', [App\Http\Controllers\ProfessorController::class, 'indexProfessor'])->name('professor.index');
    Route::post('/create', [App\Http\Controllers\ProfessorController::class, 'createProfessor'])->name('professor.create');
    Route::get('/read', [App\Http\Controllers\ProfessorController::class, 'readProfessor'])->name('professor.read');
    Route::get('/update/{id}', [App\Http\Controllers\ProfessorController::class, 'updateProfessor'])->name('professor.update');
    Route::get('/delete/{id}', [App\Http\Controllers\ProfessorController::class, 'deleteProfessor'])->name('professor.delete');
    Route::post('/save', [App\Http\Controllers\ProfessorController::class, 'saveProfessor'])->name('professor.save');
});

Route::prefix('/adminstrador')->group(function(){
    Route::get('/index', [App\Http\Controllers\AdminstradorController::class, 'indexAdminstrador'])->name('adminstrador.index');
    Route::post('/create', [App\Http\Controllers\AdminstradorController::class, 'createAdminstrador'])->name('adminstrador.create');
    Route::get('/read', [App\Http\Controllers\AdminstradorController::class, 'readAdminstrador'])->name('adminstrador.read');
    Route::get('/update/{id}', [App\Http\Controllers\AdminstradorController::class, 'updateAdminstrador'])->name('adminstrador.update');
    Route::get('/delete/{id}', [App\Http\Controllers\AdminstradorController::class, 'deleteAdminstrador'])->name('adminstrador.delete');
    Route::post('/save', [App\Http\Controllers\AdminstradorController::class, 'saveAdminstrador'])->name('adminstrador.save');
});

Route::prefix('/componente')->group(function(){
    Route::get('/index', [App\Http\Controllers\ComponenteController::class, 'indexComponente'])->name('componente.index');
    Route::post('/create', [App\Http\Controllers\ComponenteController::class, 'createComponente'])->name('componente.create');
    Route::get('/read', [App\Http\Controllers\ComponenteController::class, 'readComponente'])->name('componente.read');
    Route::get('/update/{id}', [App\Http\Controllers\ComponenteController::class, 'updateComponente'])->name('componente.update');
    Route::get('/delete/{id}', [App\Http\Controllers\ComponenteController::class, 'deleteComponente'])->name('componente.delete');
    Route::post('/save', [App\Http\Controllers\ComponenteController::class, 'saveComponente'])->name('componente.save');
});