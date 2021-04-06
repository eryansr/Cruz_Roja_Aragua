@extends('layout')

@section('title', 'Registros Eliminados')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Registros Eliminados</h1>
	</div>
	<p class="lead text-secondary">Registros Eliminados realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	<table class="table table-striped bg-white p-5 shadow rounded" cellspacing="0" width="100%" id="censos-table">
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
				<td colspan="2" class="font-weight-bold">Acciones</td>
			</tr>
		</thead>
		<tbody>
			@forelse ($censos as $censo)
				<tr>
					<td>{{ $censo->cedula }}</td>
					<td class="text-capitalize">{{ $censo->apellido }}</td>
					<td>{{ $censo->sexos->pluck('nombre')->implode(' - ') }}</td>
					<td>{{ $censo->ocupacions->nombre }}</td>
					<td>{{ $censo->instruccions->nombre  }}</td>
					<td>{{ $censo->edad  }}</td>
					<td>{{ $censo->estados->estado }}</td>
					<td>{{ $censo->municipios->municipio }}</td>
					<td>{{ $censo->parroquias->parroquia }}</td>
					<td class="d-flex justify-content-center btn-group">
						<a class="btn btn-sm btn-primary" href="{{ route('papelerascenso.restore', $censo) }}">Restaurar</a>
						<a id="eliminar" class="btn btn-sm btn-danger" href="#cedula" delete-link="{{ route('papelerascenso.force', $censo) }}">Eliminar</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="10">No hay registros eliminados para mostrar</td>
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

<script>
	$(document).on('click', 'a#eliminar', function (event) {
		event.preventDefault();

		let buttonDiv = $(this).parent().parent();
		let deleteLink = $(this).attr('delete-link');

		Swal.fire({
		  title: '¿Estás seguro?',
		  text: "¡No podrás revertir este proceso!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: '¡Si, eliminar!'
		}).then((result) => {
		  if (result.value) {

		  	$.ajax({
		  		url: deleteLink,
		  	}).done(function() {
				Swal.fire(
			      '¡Eliminado!',
			      'El registro ha sido eliminado permanentemente.',
			      'success'
			    );
			    $(buttonDiv).remove();
			}).fail(function() {
				Swal.fire(
			      '¡Error!',
			      'No se ha podido eliminar el registro.',
			      'warning'
			    );
			});
		  }
		})
	});
</script>
@endsection