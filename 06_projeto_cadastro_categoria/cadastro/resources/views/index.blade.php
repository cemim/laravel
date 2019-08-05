@extends('layout.app')

@section('body')
	<div class="jumbotron bglight border border-secondary">
		<div class="row">
			<div class="card-deck">
				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title">Cadastro de Produtos</h5>
						<p class="card-text">
							Aqui você cadastra seus produtos
							Só não se esqueça de cadastrar previamente as categorias
						</p>
						<a href="{{route('produtos.index')}}" class="btn btn-primary">Cadastre seus produtos</a>
					</div>
				</div>
				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title">Cadastro de Categorias</h5>
						<p class="card-text">
							Aqui você cadastra suas categorias							
						</p>
						<a href="{{route('categorias.index')}}" class="btn btn-primary">Cadastre suas categorias</a>
					</div>
				</div>				
			</div>
		</div>
	</div>
@endsection