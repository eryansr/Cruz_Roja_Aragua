@extends('layout')

@section('title', 'Voluntario')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Voluntarios</h1>
		<a class="btn btn-primary" href="{{ route('voluntarios.create') }}">Crear Voluntario</a>
	</div>
	<p class="lead text-secondary">Voluntariado realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	<table class="table table-striped bg-white p-5 shadow rounded" cellspacing="0" width="100%" id="voluntarios-table">
		<thead>
			<tr>
				<td class="font-weight-bold">Cédula</td>
				<td class="font-weight-bold">Apellido</td>
				<td class="font-weight-bold">Sexo</td>
				<td class="font-weight-bold">Ocupación</td>
				<td class="font-weight-bold">Grado de Instrucción</td>
				<td class="font-weight-bold">Edad</td>
				<td class="font-weight-bold">Estado</td>
				<td class="font-weight-bold">Municipio</td>
				<td class="font-weight-bold">Parroquia</td>
				<td class="font-weight-bold">Acciones</td>
			</tr>
		</thead>
		<tbody>
			@forelse ($voluntarios as $voluntario)
				<tr>
					<td>{{ $voluntario->cedula }}</td>
					<td class="text-capitalize">{{ $voluntario->apellido }}</td>
					<td>{{ $voluntario->sexos->pluck('nombre')->implode(' - ') }}</td>
					<td>{{ $voluntario->ocupacions->nombre }}</td>
					<td>{{ $voluntario->instruccions->nombre  }}</td>
					<td>{{ $voluntario->edad  }}</td>
					<td>{{ $voluntario->estados->estado }}</td>
					<td>{{ $voluntario->municipios->municipio }}</td>
					<td>{{ $voluntario->parroquias->parroquia }}</td>
					<td>
						<a class="btn btn-sm btn-primary" href="{{ route('voluntarios.show', $voluntario) }}">Detalles</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="10">No hay voluntarios para mostrar</td>
				</tr>
			@endforelse
		</tbody>
	</table>
</div>
<script>
$(document).ready(function() {
	$('#voluntarios-table').DataTable()
});
</script>
@endsection