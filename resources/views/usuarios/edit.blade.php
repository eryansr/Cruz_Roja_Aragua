@extends('layout')

@section('title', 'Editar usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	<div class="card-header">Editar usuario de {{ $usuario->name }}</div>

                <div class="card-body">
					<form method="POST" action="{{ route('usuarios.update', $usuario )}}">
						@method('PATCH')
						@include('usuarios._form', ['btnText' => 'Actualizar'])
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection