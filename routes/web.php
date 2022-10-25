<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContatosController;

use App\Http\Controllers\LivrosController;

use App\Http\Controllers\EmprestimoController;


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

Route::resource('contatos',ContatosController::class);
Route::get('contatos/buscar/ns',[ContatosController::class,'buscar']);

Route::resource('emprestimos',EmprestimoController::class);
Route::get('emprestimos/buscar/ns',[EmprestimoController::class,'buscar']);
Route::put('emprestimos/{emprestimo}/devolver',[EmprestimoController::class,'devolver'])->name('emprestimos.devolver');

Route::resource('livros',LivrosController::class);
Route::get('livros/buscar/ns',[LivrosController::class,'buscar']);