<!DOCTYPE html>
<html>
<head>
	<title>Criar Cliente</title>
</head>
<body>
<h1>Novo Cliente</h1>
<form action="{{ route('clientes.update', $cliente['id']) }}" method="post">
	@csrf
	@method('put')
	<input type="text" name="nome" value="{{$cliente['nome']}}">
	<input type="submit" value="Salvar">
</form>

</body>
</html>