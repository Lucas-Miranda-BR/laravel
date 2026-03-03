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
Route::get('/', [App\Http\Controllers\Contato::class, 'contato']);
Route::get('/', [App\Http\Controllers\Configuracao::class, 'configuracao']);
Route::get('/', [App\Http\Controllers\Pesquisa::class, 'pesquisa']);
Route::get('/', [App\Http\Controllers\Carrinho::class, 'carrinho']);
Route::get('/', [App\Http\Controllers\Produto::class, 'produto']);
Route::get('/', [App\Http\Controllers\Sobre::class, 'sobre']);
Route::get('/', [App\Http\Controllers\Usuario::class, 'usuario']);
Route::get('/', [App\Http\Controllers\Admin::class, 'admin']);
Route::get('/admin/usuario', [App\Http\Controllers\AdminUsuario::class, 'gerenciarUsuario']);
Route::get('/admin/produto', [App\Http\Controllers\AdminProduto::class, 'gerenciarProduto']);




