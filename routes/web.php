<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',
function () { return view('inicio');})
->name('inicio');

Route::get('teste', 
[App\Http\Controllers\TesteController::class, 'index'])
->name('teste');

Route::get('/home', 
[App\Http\Controllers\HomeController::class, 'index'])
->name('home');

//READ
Route::get('disciplinas.index', 
[App\Http\Controllers\DisciplinaController::class, 'index'])
->name('disciplinas.index');

//EDIT
Route::get('disciplina/editar',
[App\Http\Controllers\DisciplinaController::class, 'edit'])
->name('disciplina.editar');

Route::put('disciplina.atualizar/{id}',
[App\Http\Controllers\DisciplinaController::class, 'update'])
->name('disciplina.atualizar');


//CREATE
Route::get('/disciplina/novo',
[App\Http\Controllers\DisciplinaController::class, 'create'])
->name('disciplina.novo');

Route::post('/disciplina/incluir',
[App\Http\Controllers\DisciplinaController::class, 'store'])
->name('disciplina.incluir');


//DELETE
Route::get('/disciplina/{id}/excluir',
[App\Http\Controllers\DisciplinaController::class, 'destroy'])
->name('disciplina.excluir');

Auth::routes();