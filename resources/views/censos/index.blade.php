@extends('layout')

@section('title', 'Censo')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Censados</h1>
		<a class="btn btn-primary" href="{{ route('censos.create') }}">Crear Censo</a>
	</div>
	<p class="lead text-secondary">Censos realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	<table class="table table-striped bg-white p-5 shadow rounded" cellspacing="0" width="100%" id="censos-table">
		<thead>
			<tr>
				<td class="font-weight-bold">Cédula</td>
				<td class="font-weight-bold">Nombre</td>
				<td class="font-weight-bold">Registrado</td>
				<td class="font-weight-bold">Acciones</td>
			</tr>
		</thead>
		<tbody>
			@forelse ($censos as $censo)
				<tr>
					<td>{{ $censo->cedula  }}</td>
					<td>{{ $censo->nombre  }}</td>
					<td>{{ $censo->created_at->format('d/m/Y') }}</td>
					<td>
						<a class="btn btn-sm btn-primary" href="{{ route('censos.show', $censo) }}">Detalles</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="4">No hay Censos para mostrar</td>
				</tr>
			@endforelse
		</tbody>
	</table>
</div>
<script>
$(document).ready(function() {
	$('#censos-table').DataTable()
});
</script>
@endsection