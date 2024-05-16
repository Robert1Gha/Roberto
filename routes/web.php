<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\MarcaController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('holamundo');
});

Route::get('/Carro', [CarroController::class, 'index']);
Route::get('/Carro/Create', [CarroController::class, 'create']);
Route::post('/Carro', [CarroController::class, 'store']);
Route::get('/carro/{id}', [CarroController::class, 'show']);
Route::get('/carro/{id}/edit', [CarroController::class, 'edit']);
Route::patch('/carro/{id}', [CarroController::class, 'update']);
Route::delete('/carro/{id}', [CarroController::class, 'destroy']);

Route::get('/Marca', [MarcaController::class, 'index']);
Route::get('/Marca/Create', [MarcaController::class, 'create']);
Route::post('/Marca', [MarcaController::class, 'store']);
Route::get('/marca/{id}', [MarcaController::class, 'show']);
Route::get('/marca/{id}/edit', [MarcaController::class, 'edit']);
Route::patch('/marca/{id}', [MarcaController::class, 'update']);
Route::delete('/marca/{id}', [MarcaController::class, 'destroy']);


//Route::resource('Carro', CarroController::class);


