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

Route::get('produtos', function(){
	return view('outras.produtos');
})->name('produtos');
Route::get('departamentos', function(){
	return view('outras.departamentos');
})->name('departamentos');

Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar')->where('n1', '[0-9]+')->where('n2', '[0-9]+');

// Associa todos os métodos do controlador a rota
// Para ver todas as chamadas:
// php artisan route: list
Route::resource('clientes', 'ClienteControlador');

Route::get('opcoes/{opcao?}', function($opcao=null){
	return view('outras.opcoes', compact(['opcao']));
})->name('opcoes');

Route::get('bootstrap', function(){
	return view('outras.exemplo');
})->name('bootstrap');

 