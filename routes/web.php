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
    Route::get('/index', [App\Http\Controllers\Aluno::class, 'indexAluno'])->name('aluno.index');
    Route::post('/create', [App\Http\Controllers\Aluno::class, 'createAluno'])->name('aluno.create');
    Route::get('/read', [App\Http\Controllers\Aluno::class, 'readAluno'])->name('aluno.read');
    Route::get('/update/{id}', [App\Http\Controllers\Aluno::class, 'updateAluno'])->name('aluno.update');
    Route::get('/delete/{id}', [App\Http\Controllers\Aluno::class, 'deleteAluno'])->name('aluno.delete');
    Route::post('/save', [App\Http\Controllers\Aluno::class, 'saveAluno'])->name('aluno.save');
});

Route::prefix('/curso')->group(function(){
    Route::get('/index', [App\Http\Controllers\Curso::class, 'indexCurso'])->name('curso.index');
    Route::post('/create', [App\Http\Controllers\Curso::class, 'createCurso'])->name('curso.create');
    Route::get('/read', [App\Http\Controllers\Curso::class, 'readCurso'])->name('curso.read');
    Route::get('/update/{id}', [App\Http\Controllers\Curso::class, 'updateCurso'])->name('curso.update');
    Route::get('/delete/{id}', [App\Http\Controllers\Curso::class, 'deleteCurso'])->name('curso.delete');
    Route::post('/save', [App\Http\Controllers\Curso::class, 'saveCurso'])->name('curso.save');
});

Route::prefix('/professor')->group(function(){
    Route::get('/index', [App\Http\Controllers\Professor::class, 'indexProfessor'])->name('professor.index');
    Route::post('/create', [App\Http\Controllers\Professor::class, 'createProfessor'])->name('professor.create');
    Route::get('/read', [App\Http\Controllers\Professor::class, 'readProfessor'])->name('professor.read');
    Route::get('/update/{id}', [App\Http\Controllers\Professor::class, 'updateProfessor'])->name('professor.update');
    Route::get('/delete/{id}', [App\Http\Controllers\Professor::class, 'deleteProfessor'])->name('professor.delete');
    Route::post('/save', [App\Http\Controllers\Professor::class, 'saveProfessor'])->name('professor.save');
});

Route::prefix('/adminstrador')->group(function(){
    Route::get('/index', [App\Http\Controllers\Adminstrador::class, 'indexAdminstrador'])->name('adminstrador.index');
    Route::post('/create', [App\Http\Controllers\Adminstrador::class, 'createAdminstrador'])->name('adminstrador.create');
    Route::get('/read', [App\Http\Controllers\Adminstrador::class, 'readAdminstrador'])->name('adminstrador.read');
    Route::get('/update/{id}', [App\Http\Controllers\Adminstrador::class, 'updateAdminstrador'])->name('adminstrador.update');
    Route::get('/delete/{id}', [App\Http\Controllers\Adminstrador::class, 'deleteAdminstrador'])->name('adminstrador.delete');
    Route::post('/save', [App\Http\Controllers\Adminstrador::class, 'saveAdminstrador'])->name('adminstrador.save');
});

Route::prefix('/componente')->group(function(){
    Route::get('/index', [App\Http\Controllers\Componente::class, 'indexComponente'])->name('componente.index');
    Route::post('/create', [App\Http\Controllers\Componente::class, 'createComponente'])->name('componente.create');
    Route::get('/read', [App\Http\Controllers\Componente::class, 'readComponente'])->name('componente.read');
    Route::get('/update/{id}', [App\Http\Controllers\Componente::class, 'updateComponente'])->name('componente.update');
    Route::get('/delete/{id}', [App\Http\Controllers\Componente::class, 'deleteComponente'])->name('componente.delete');
    Route::post('/save', [App\Http\Controllers\Componente::class, 'saveComponente'])->name('componente.save');
});