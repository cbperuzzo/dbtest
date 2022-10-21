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

Route::resource('emprestimos',EmprestimoController::class);

Route::get('contatos/buscar',[ContatosController::class,'buscar']);
Route::put('emprestimos/{emprestimo}/devolver',[EmprestimoController::class,'devolver'])->name('emprestimos.devolver');
Route::resource('contatos',ContatosController::class);

Route::resource('livros',LivrosController::class);