@extends('layout')

@section('title', 'Usuarios')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Usuarios</h1>

		@auth
			<a class="btn btn-primary"
				href="{{ route('usuarios.create')}}"
			>Crear Usuario</a>
		@endauth
	</div>
	<p class="lead text-secondary">Usuarios realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	<table class="table table-striped bg-white p-5 shadow rounded" cellspacing="0" width="100%" id="users-table">
	  <thead>
	    <tr>
		    <td class="font-weight-bold">Nombre</td>
		    <td class="font-weight-bold">Correo electrónico</td>
		    <td class="font-weight-bold">Rol</td>
		    <td class="font-weight-bold">Acciones</td>
	    </tr>
	  </thead>
	    <tbody>
		    @forelse ($usuarios as $usuario)
				<tr>
					<td>{{ $usuario->name }}</td>
					<td>{{ $usuario->email }}</td>
					<td>
						{{ $usuario->roles->pluck('display_name')->implode(' - ') }}
					</td>
					<td>
						<div class="btn-group btn-group-sm">
							<a class="btn btn-success" href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
							<a class="btn btn-danger" id="eliminar" href="#" >Eliminar</a>
						</div>
						<form id="delete-usuario"
							class="d-none"
							method="POST"
							action="{{ route('usuarios.destroy', $usuario->id) }}">
							@csrf @method('DELETE')
						</form>
					</td>
			@empty
				<td colspan="4">No hay usuarios para mostrar</td>
			@endforelse
				</tr>
	    </tbody>
	</table>
</div>
<script>
$(document).ready(function() {
	$('#users-table').DataTable()
});
</script>

<script>
	$(document).on('click', 'a#eliminar', function (event) {
		let buttonDiv = $(this).parent();
		let form = $(buttonDiv).next();

		Swal.fire({
		  title: '¿Estás Seguro de Eliminar?',
		  text: "¡No podrás revertir este proceso!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: '¡Si, Eliminar!'
		}).then((result) => {
		  if (result.value) {
		    Swal.fire(
		      '¡Eliminado!',
		      'El registro ha sido eliminado.',
		      'success'
		    )
		    form.submit();
		  }
		})
	});
</script>
@endsection