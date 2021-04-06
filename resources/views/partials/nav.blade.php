<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<div class="container">
		<button class="btn" id="menu-toggle">Menú</button>

	    <div>
			<ul class="nav nav-pills navbar-nav ml-auto">
				@auth
					<div class="dropdown">
						<a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Bienvenido {{ auth()->user()->name }} {{ auth()->user()->roles->pluck('display_name')->implode(' | ') }}
						</a>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item"
								href="#"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();"
							>Cerrar sesión</a>
						</div>
					</div>
				@else
					<li class="nav-item">
						<a class="nav-link"
							href="{{ route('login') }}"
						>Iniciar sesión</a>
					</li>
				@endauth
			</ul>
		</div>
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
</form>