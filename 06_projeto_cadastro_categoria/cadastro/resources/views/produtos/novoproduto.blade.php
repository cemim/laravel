@extends('layout.app')
@section('title', 'Novo Produto')
@section('body')
	<div class="card border">
		<div class="card-body">
			<form action="{{route('produtos.store')}}" method="POST">
				@csrf
				<div class="form-group">
					<label for="idProduto">Nome do Produto</label>
					<input type="text" class="form-control" name="nome" id="idProduto" placeholder="Produto">
				</div>
				<div class="form-group">
					<label for="idQtd">Quantidade</label>
					<input type="text" class="form-control" name="estoque" id="idQtd" placeholder="Quantidade">
				</div>
				<div class="form-group">
					<label for="idPreco">Preço</label>
					<input type="text" class="form-control" name="preco" id="idPreco" placeholder="Preço">
				</div>
				<div class="form-group">
					<label for="idCategoria">Categoria</label>
					<select name="categoria_id" id="idCategoria" class="custom-select mr-sm-2">
						@foreach($cats as $cat)
							<option value="{{$cat->id}}">{{$cat->nome}}</option>
						@endforeach
					</select>					
				</div>
				<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
				<a href="{{route('produtos.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
			</form>
		</div>
	</div>
@endsection