<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Cadastro de Produtos')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<style type="text/css">
		body {
			padding: 20px;
		}
		.navbar {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	@component('componente_navbar')
	@endcomponent
	<main role="main">
		@hasSection('body')
			@yield('body')
		@endif
	</main>
</div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html> 