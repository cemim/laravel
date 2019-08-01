<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Clientes</h3>
	<a href="{{ route('clientes.create') }}">Novor</a>
	<ol>
		@foreach ($clientes as $c)
		<li>
			{{ $c['nome'] }} |
			<a href="{{ route('clientes.edit', $c['id']) }}">Editar</a>
		</li>
		@endforeach
	</ol>
</body>
</html>