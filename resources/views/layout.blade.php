<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Cruz Roja')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">

		<main>
			<div class="d-flex" id="wrapper" >
				@include('partials.sidebar')
				<div id="page-content-wrapper">
					@include('partials.nav')
					@include('partials.session-status')
					<div class="container-fluid my-5">
						@yield('content')
					</div>
				</div>
			</div>
		</main>

		<footer class="bg-white text-center text-black-50 pt-3 shadow">
			{{ config('app.name') }} | Copyright © {{ date('Y') }}
			<h5 class="text-center">Principios Fundamentales del Movimiento de la Cruz Roja y de la Media Luna Roja</h5>
			<p class="text-center">Humanidad – Imparcialidad – Neutralidad – Independencia – Voluntariado – Unidad - Universidad<p>
		</footer>
	</div>
	<script src="{{ asset('/js/estados.js') }}"></script>
	<script src="{{ asset('/js/carga.js') }}"></script>
	<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
	<script>
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
	</script>
</body>
</html>