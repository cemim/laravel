<!DOCTYPE html>
<html>
<head>
	<title>Criar Cliente</title>
</head>
<body>
<h1>Novo Cliente</h1>
<form action="{{ route('clientes.store') }}" method="post">
	@csrf
	<input type="text" name="nome">
	<input type="submit" value="Salvar">
</form>

</body>
</html>