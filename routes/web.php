<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);  // todos os registros

Route::get('/events/create', [EventController::class, 'create'])->middleware('auth'); // criar um registro no banco
Route::post('/events', [EventController::class, 'Store']); // pra enviar os dados do banco

Route::get('/produtos', [EventController::class, 'produtos']);

Route::get('/produtos_teste/{id?}', [EventController::class, 'produtosteste']);

Route::get('/contato', [EventController::class, 'contato']);

Route::get('/events/{id?}', [EventController::class, 'show']); // mostrar um dado especifico

// http://127.0.0.1:8000/produtos?search=fome // como pesquisar no navegador

Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');

Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/updade/{id}', [EventController::class, 'update'])->middleware('auth');

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');