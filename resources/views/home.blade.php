@extends('layout')
<head>
<title></title>

@section('title', 'Home')

@section('content')
<div class="container">
	<div class="d-flex justify-content-center">
        <div class="row">

        

		<div class="card m-2">
			<img class="img-fluid mx-2 mt-2" width="190" height="190" src="/laravel/public/img/cruz-roja-aragua.png" alt="Censados">
			<div class="card-body">
				<h4 class="card-title text-center">Censados</h4>
				<h1 class="text-center">{{ $censo }}</h1>
				<a class="btn btn-primary btn-block" href="{{ route('censos.create') }}">Registrar</a>
			</div>
		</div>


		<div class="card m-2">
			<img class="img-fluid mx-2 mt-2" width="190" height="190" src="/laravel/public/img/direccion.png" alt="Dirección">
			<div class="card-body">
				<h4 class="card-title text-center">Voluntarios</h4>
				<h1 class="text-center">{{ $voluntario }}</h1>
				<a class="btn btn-primary btn-block" href="{{ route('voluntarios.create') }}">Registrar</a>
			</div>
		</div>

        <div class="card m-2">
            <img class="img-fluid mx-2 mt-2" width="190" height="190" src="/laravel/public/img/charts2.jpg" alt="Dirección">
            <div class="card-body">
                <h4 class="card-title text-center">Gráficas</h4>
                <h1 class="text-center"></h1>
                <h1 class="text-center">&nbsp</h1>
                <a class="btn btn-primary btn-block" href="{{ route('charts.charts') }}">Ver Gráficas</a>
            </div>
        </div>
        </div>
	</div>
    



</div>


@endsection
