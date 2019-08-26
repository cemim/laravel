<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteControlador extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$clientes = Cliente::all();
		return view('clientes.cliente', compact('clientes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('clientes.novocliente');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// Validar dados obrigatórios
		// Minimo e máximo de caracteres
		// Campo nome único na tabela clientes
		// Validar campo email
		$regras = [
			'nome'		=> 'required|min:3|max:20|unique:clientes',
			'idade'		=> 'required',
			'endereco'	=> 'required',
			'email'		=> 'required|email'
		];

		$mensagens = [
			'required' => 'O atributo :attribute não pode estar em branco',
            'nome.required' => 'É necessário nome', // Mensagem específica para o nome
			'nome.min' => 'É necessário no mínimo 3 caracteres',
			'nome.max' => 'É permitido no máximo 20 caracteres',
			'nome.unique' => 'Cliente já existe',
			'email.email' => 'Endereço de email não é válido'

		]; // Personalizar mensagens

		$request->validate($regras, $mensagens);

		/*$request->validate([
			'nome'		=> 'required|min:3|max:20|unique:clientes',
			'idade'		=> 'required',
			'endereco'	=> 'required',
			'email'		=> 'required|email'
		], $mensagens);*/



		$cliente = new Cliente();
		$cliente->nome = $request->input('nome');
		$cliente->idade = $request->input('idade');
		$cliente->endereco = $request->input('endereco');
		$cliente->email = $request->input('email');
		$cliente->save();
		return redirect('/');
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
		//
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
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
