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

Route::get('/principal', [App\Http\Controllers\Principal::class, 'principal']);
Route::get('/principal/sobre', [App\Http\Controllers\Sobre::class, 'sobreEmpressa']);
Route::get('/principal/contato', [App\Http\Controllers\Contato::class, 'contato']);
Route::get('/principal/contrato', [App\Http\Controllers\Contrato::class, 'contrato']);
Route::get('/usuario', [App\Http\Controllers\Usuario::class, 'usuario']);
Route::get('/usuario/configuracao', [App\Http\Controllers\Configuracao::class, 'configuracao']);
Route::get('/funcionario', [App\Http\Controllers\Funcionario::class, 'funcionarioInformacao']);
Route::get('/funcionario/trabalho', [App\Http\Controllers\FuncionarioTrabalho::class, 'areaTrabalho']);
Route::get('/admin', [App\Http\Controllers\Admin::class, 'admin']);
Route::get('/admin/usuario', [App\Http\Controllers\AdminUsuario::class, 'gerenciarUsuario']);
Route::get('/admin/produto', [App\Http\Controllers\AdminProduto::class, 'gerenciarProduto']);




