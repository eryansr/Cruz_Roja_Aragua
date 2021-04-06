@extends('layout')

@section('title', 'Historia')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Pacientes</h1>
		<a class="btn btn-primary" href="{{ route('historias.create') }}">Crear Historia</a>
	</div>
	<p class="lead text-secondary">Pacientes realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	<table class="table table-striped bg-white p-5 shadow rounded" cellspacing="0" width="100%" id="historias-table">
		<thead>
			<tr>
				<td class="font-weight-bold">Cédula</td>
				<td class="font-weight-bold">Nombre</td>
				<td class="font-weight-bold">Registrado</td>
				<td class="font-weight-bold">Acciones</td>
			</tr>
		</thead>
		<tbody>
			@forelse ($historias as $historia)
				<tr>
					<td>{{ $historia->cedula  }}</td>
					<td>{{ $historia->nombre  }}</td>
					<td>{{ $historia->created_at->format('d/m/Y') }}</td>
					<td>
						<a class="btn btn-sm btn-primary" href="{{ route('historias.show', $historia) }}">Detalles</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="4">No hay historias para mostrar</td>
				</tr>
			@endforelse
		</tbody>
	</table>
</div>
<script>
$(document).ready(function() {
	$('#historias-table').DataTable()
});
</script>
@endsection