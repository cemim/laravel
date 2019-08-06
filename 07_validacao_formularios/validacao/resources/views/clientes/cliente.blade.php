<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
	<main role="main">
		<div class="row">
			<div class="container col-md-8 offset-md-2">
				<div class="card border">
					<div class="card-header">
						<div class="card-title">
							Clientes
						</div>
					</div>					
					<div class="card-body">
						<table class="table table-bordered table-hover" id="tabelaprodutos">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nome</th>
									<th>Endereço</th>
									<th>E-mail</th>
								</tr>								
							</thead>
							<tbody>
								@foreach($clientes as $c)
									<tr>
										<td>{{$c->id}}</td>
										<td>{{$c->nome}}</td>
										<td>{{$c->endereco}}</td>
										<td>{{$c->email}}</td>
										<td></td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>	
	<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
