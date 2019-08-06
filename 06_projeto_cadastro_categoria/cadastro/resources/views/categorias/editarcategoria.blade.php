@extends('layout.app')
@section('title', 'Editar Categoria')
@section('body')
	<div class="card border">
		<div class="card-body">
			<form action="{{route('categorias.update', $cat->id)}}" method="POST">
				@csrf
				@method('put')
				<div class="form-group">
					<label for="idCategoria">Nome da Categoria</label>
					<input type="text" class="form-control" name="nome" id="idCategoria" placeholder="Categoria" value="{{$cat->nome}}">
				</div>
				<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
				<a href="{{route('categorias.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
			</form>
		</div>
	</div>
@endsection