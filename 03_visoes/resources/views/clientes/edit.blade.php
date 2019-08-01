@extends('layouts.principal')
@section('titulo', 'Editar')
@section('conteudo')

<h1>Editar Cliente</h1>
<form action="{{ route('clientes.update', $cliente['id']) }}" method="post">
	@csrf
	@method('put')
	<input type="text" name="nome" value="{{$cliente['nome']}}">
	<input type="submit" value="Salvar">
</form>
@endsection