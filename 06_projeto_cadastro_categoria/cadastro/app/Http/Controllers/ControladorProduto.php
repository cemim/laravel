<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;

class ControladorProduto extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$prods = Produto::all();
		return view('produtos.produtos', compact('prods'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$cats = Categoria::all();
		return view('produtos.novoproduto', compact('cats'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$prod = new Produto();
		$prod->nome = $request->input('nome');
		$prod->estoque = $request->input('estoque');
		$prod->preco = $request->input('preco');
		$prod->categoria_id = $request->input('categoria_id');
		$prod->save();
		return redirect()->route('produtos.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$prod = Produto::find($id);
		$cats = Categoria::all();
		if(isset($prod)){
			return view('produtos.editarproduto', compact('prod', 'cats'));
		}
		else{
			return redirect()->route('produtos.index');
		}
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
		$prod = Produto::find($id);
		if(isset($prod)){
			$prod->nome = $request->input('nome');
			$prod->estoque = $request->input('estoque');
			$prod->preco = $request->input('preco');
			$prod->categoria_id = $request->input('categoria_id');
			$prod->save();
		}
		return redirect()->route('produtos.index');  
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$prod = Produto::find($id);
		if(isset($prod)){
			$prod->delete();
		}
		return redirect()->route('produtos.index'); 
	}
}
