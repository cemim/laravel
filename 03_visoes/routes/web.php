<?php

use Illuminate\Http\Request;

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

Route::get('/', function () {
	return view('welcome');
});

Route::get('produtos', 'MeuControlador@produtos');

Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar')->where('n1', '[0-9]+')->where('n2', '[0-9]+');

// Associa todos os métodos do controlador a rota
// Para ver todas as chamadas:
// php artisan route: list
Route::resource('clientes', 'ClienteControlador');
 