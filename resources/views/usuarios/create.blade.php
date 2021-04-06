@extends('layout')

@section('title', 'Crear Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Usuario</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.store') }}">
					@include('usuarios._form', ['btnText' => 'Guardar'])
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection