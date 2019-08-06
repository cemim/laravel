@extends('layout.app')
@section('title', 'Produtos')
@section('body')
	<div class="card border">
		<div class="card-body">
			<h5 class="card-title">Produtos</h5>
			@if(count($prods) > 0)
				<table class="table table-ordered table-hover">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nome</th>
							<th>Estoque</th>
							<th>Preço</th>
							<th>Categoria</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($prods as $prod)
							<tr>
								<td>{{$prod->id}}</td>
								<td>{{$prod->nome}}</td>
								<td>{{$prod->estoque}}</td>
								<td>{{$prod->preco}}</td>
								<td>{{$prod->categoria_id}}</td>
								<td>									
									<form action="{{ route('produtos.destroy', $prod->id) }}" method="post">
										@csrf										
										@method('delete')				
										<a href="{{route('produtos.edit', $prod->id)}}" class="btn btn-sm btn-primary">Editar</a>
										<input type="submit" class="btn btn-sm btn-danger" value="Apagar">
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@else
			<h5 class="card-title">Não há categorias cadastradas</h5>
			@endif
		</div>
		<div class="card-footer">
			<a href="{{route('produtos.create')}}" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
		</div>
	</div>
@endsection