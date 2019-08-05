<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item {{request()->routeIs('home') ? 'active' : '' }}">
				<a class="nav-link" href="{{route('home')}}">Home </a>
			</li>
			<li class="nav-item {{request()->routeIs('produtos*') ? 'active' : '' }}">
				<a class="nav-link" href="{{route('produtos.index')}}">Produtos </a>
			</li>
			<li class="nav-item {{request()->routeIs('categorias*') ? 'active' : '' }}">
				<a class="nav-link" href="{{route('categorias.index')}}">Categorias </a>
			</li>
		</ul>
	</div>
</nav>