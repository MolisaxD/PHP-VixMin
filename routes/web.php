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

Auth::routes();

Route::get('/home', 
[App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::get('disciplinas', 
[App\Http\Controllers\DisciplinaController::class, 'index'])
->name('disciplinas');

Route::get('editar',
[App\Http\Controllers\DisciplinaController::class, 'edit'])
->name('editar');

Route::put('atualizar',
[App\Http\Controllers\DisciplinaController::class, 'update'])
->name('atualizar');