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

Route::get('/teste', function(){
	echo "olá";
});

// Rota com parâmetro
Route::get('/ola/{nome}', function($nome){
	echo "Ola seja bem vindo " . $nome. "!";
});

// Rota com parâmetro opcional
Route::get('/teste2/{nome?}', function($nome=null){
	echo "Neste caso o parametro é opcional: " . $nome;
});

// Rota com regras
Route::get('/rotacomregras/{nome}/{n}', function($nome, $n){
	for($i=0; $i<$n; $i++){
		echo "Ola! Seja bem vindo, $nome! <br>";
	}
})
->where('nome', '[A-Za-z]+')
->where('n', '[0-9]+');

// Agrupar rotas e nomear rotas 
Route::prefix('/app')->group(function() {
	Route::get('/', function() {
		return view('app');
	})->name('app');
	Route::get('/user', function() {
		return view('user');
	})->name('app.user');	
	Route::get('/profile', function() {
		return view('profile');
	})->name('app.profile');	
});

Route::get('/produtos', function (){
	echo "<h1>Produtos</h1>";
	echo "<ol>";
	echo "<li>Notebook</li>";
	echo "<li>Impressora</li>";
	echo "<li>Mouse</li>";
	echo "</ol>";
})->name('meusprodutos');

// Redirecionamento de rotas
Route::redirect('todosprodutos1', 'produtos', 301);
Route::get('todosprodutos2', function() {
	return redirect()->route('meusprodutos');
});

/** 
* Métodos HTTP:
* - Necessário importar a classe Request
* - Para os métodos que não sejam GET deve-se retirar a proteção CSRF
* - No arquivo app/Http/Middleware/VerifyCsrfToken.php alterar:
* protected $except = ['requisicoes'];
* Testar rota com o Postman ou outra aplicação de teste
*/
Route::any('/requisicoes', function(Request $request) { 
	return $request;
});