@extends('layouts.principal')

@section('titulo', 'Novo')

@section('conteudo')

<h1>Novo Cliente</h1>
<form action="{{ route('clientes.store') }}" method="post">
	@csrf
	<input type="text" name="nome">
	<input type="submit" value="Salvar">
</form>

@endsection