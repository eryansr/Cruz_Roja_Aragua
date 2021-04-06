@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4" src="/laravel/public/img/404.svg" alt="No se encontró la página">
		</div>
		<div class="col-12 col-lg-6 align-self-center">
			<h1 class="display-4 text-primary text-center">Error 404</h1>
			<a class="btn btn-lg btn-block btn-primary"
				href="/laravel/public"
			>Volver a inicio</a>
		</div>
	</div>
</div>
@endsection