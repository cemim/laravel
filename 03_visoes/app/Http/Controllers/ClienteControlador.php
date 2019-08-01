<?php
/**
* Comando para criar o controlador com os métodos padrões:
* php artisan make:controller ClienteControlador --resource
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
	private $clientes = 
	[
		['id'=>1, 'nome'=>'Ademir'],
		['id'=>2, 'nome'=>'Joao'],
		['id'=>3, 'nome'=>'Maria'],
		['id'=>4, 'nome'=>'Aline']
	];

	// Salvar os valores na sessão
	public function __construct() {
		$clientes = session('clientes');
		if (!isset($clientes))
		{
			session(['clientes' => $this->clientes]);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$clientes = session('clientes');
		$titulo = 'Todos os Clientes';

		return view('clientes.index',
			['clientes'=>$clientes,
			 'titulo'  =>$titulo]);
		/*return view('clientes.index')
			->with('clientes',$clientes)
			->with('titulo',$titulo);*/
		// return view('clientes.index', compact('clientes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('clientes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{   
		if (!$request->nome) {
			return redirect()->route('clientes.index');
		}
		// Recebe todos os valores com o token csrf
		// $dados = $request->all();
		// dd($dados);
		$clientes = session('clientes');
		$id = end($clientes)['id'] + 1;//Pega o ultimo elemento
		$nome = $request->nome;
		$dados = ['id'=> $id, 'nome'=>$nome]; 
		$clientes[] = $dados; // Adicionar novo cliente
		session(['clientes'=>$clientes]);
		//dd($this->clientes);
		// Redirecionar
		return redirect()->route('clientes.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$clientes = session('clientes');
		$index = $this->getIndex($id,$clientes); // Pega a posição do id
		$cliente = $clientes[$index];
		return view('clientes.info', compact(['cliente']));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$clientes = session('clientes');
		$index = $this->getIndex($id,$clientes); // Pega a posição do id
		$cliente = $clientes[$index];
		return view('clientes.edit', compact('cliente'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$clientes = session('clientes');
		$index = $this->getIndex($id,$clientes); // Pega a posição do id		
		$clientes[$index]['nome'] = $request->nome;
		session(['clientes'=>$clientes]);
		return redirect()->route('clientes.index');        
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$clientes = session('clientes');
		$index = $this->getIndex($id,$clientes); // Pega a posição do id
		array_splice($clientes, $index, 1); // Apagar um unico elemento do index
		session(['clientes'=>$clientes]);
		return redirect()->route('clientes.index');
	}

	public function getIndex($id, $clientes)
	{
		$ids = array_column($clientes, 'id'); // Pega todos os IDs
		$index = array_search($id, $ids); // Procura id dentro do array
		return $index;
	}

}
