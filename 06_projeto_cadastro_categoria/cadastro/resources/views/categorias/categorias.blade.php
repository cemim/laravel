@extends('layout.app')
@section('title', 'Categorias')
@section('body')
	<div class="card border">
		<div class="card-body">
			<h5 class="card-title">Categorias</h5>
			@if(count($cats) > 0)
				<table class="table table-ordered table-hover">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nome da Categoria</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cats as $cat)
							<tr>
								<td>{{$cat->id}}</td>
								<td>{{$cat->nome}}</td>
								<td>									
									<form action="{{ route('categorias.destroy', $cat->id) }}" method="post">
										@csrf										
										@method('delete')				
										<a href="{{route('categorias.edit', $cat->id)}}" class="btn btn-sm btn-primary">Editar</a>
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
			<a href="{{route('categorias.create')}}" class="btn btn-sm btn-primary" role="button">Nova Categoria</a>
		</div>
	</div>
@endsection