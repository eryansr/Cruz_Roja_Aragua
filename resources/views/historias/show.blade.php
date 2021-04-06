@extends('layout')

@section('title', 'Paciente | ' . $historia->nombre)

@section('content')
<div class="container">
	<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1 class="text-capitalize pb-3">Paciente {{ $historia->nombre}} {{ $historia->apellido}}</h1>
		<hr>
		<div class="form-row col-12 pb-3">

			<div class="col-lg-2 pl-2 pb-3">
				<label>Cédula:</label>
				<p class="text-black">{{ $historia->cedula }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Grupo de Sanguineo:</label>
				<p class="text-black">{{ $historia->sanguineos->nombre }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Fecha de Nacimiento:</label>
				<p class="text-black">{{ $historia->nacimiento }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Correo Electrónico:</label>
				<p class="text-black">{{ $historia->email }}</p>
			</div>

			<div class="col-lg-1 pb-3">
				<label>Edad:</label>
				<p class="text-black text-center">{{ $historia->edad }}</p>
			</div>

			<div class="col-lg-1 pb-3">
				<label>Altura:</label>
				<p class="text-black">{{ $historia->altura }} cm</p>
			</div>

			<div class="col-lg-1 pb-3">
				<label>Peso:</label>
				<p class="text-black">{{ $historia->peso }} Kg</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Discapacidad:</label>
				<p class="text-black">{{ $historia->discapacidad }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Alergias a:</label>
				<p class="text-black">{{ $historia->alergia }}</p>
			</div>


			<div class="col-lg-2 pb-3">
				<label>Dirección:</label>
				<p class="text-black">
					{{ $historia->habitacion }}
				</p>
			</div>

			<div class="col-lg-3 pb-3">
				<label>Datos del Trabajo:</label>
				<li class="text-black">{{ $historia->trabajo }}</li>
				<li class="text-black">{{ $historia->tel_trabajo }}</li>
			</div>

			<div class="col-lg-3 pb-3">
				<label>Teléfonos:</label>
				<li class="text-black">Móvil: {{ $historia->tel_movil }}</li>
				<li class="text-black">Fijo: {{ $historia->tel_fijo }}</li>
				<li class="text-black">Emergencia: {{ $historia->tel_emergencia }}</li>
			</div>

			<div class="col-12 pb-3">
				<label>Observaciones:</label>
				<p class="text-black col-12 border border-info">{{ $historia->observaciones1 }}</p>
			</div>

			<h1 class="text-capitalize col-12">Especialista {{ $historia->nombree}} {{ $historia->apellidoe}}</h1>

			<div class="col-12"><hr></div>

			<div class="col-lg-6 pb-3">
				<label>Especialista en:</label>
				<p class="text-black">{{ $historia->especializacion }}</p>
			</div>

			<div class="col-lg-6 pb-3">
				<label>Tipo de consulta:</label>
				<p class="text-black">{{ $historia->consulta }}</p>
			</div>

			<div class="col-12 pb-3">
				<label>Observaciones:</label>
				<p class="text-black col-12 border border-info">{{ $historia->observaciones2 }}</p>
			</div>

		</div>


		<div class="form-row col-12 pb-3">

			<div class="col-12"><hr></div>

			<p class="col-12 text-black">Atendido {{ $historia->created_at->diffForHumans() }}</p>
			<p class="col-12 text-black">Día de la consulta {{ $historia->created_at->format('d-m-Y') }}</p>
			<p class="col-12 text-black">Consulta Actualizada el {{ $historia->updated_at->format('d-m-Y') }}</p>
		</div>


		<div class="d-flex justify-content-between align-items-center">
			<a href="{{ route('historias.index')}}">
				Regresar
			</a>
			@auth
				<div class="btn-group btn-group-sm">
					<a class="btn btn-primary" href="{{ route('historias.edit', $historia) }}">Editar</a>
					<a id="eliminar" class="btn btn-danger" href="#">Eliminar</a>
				</div>
				<form id="delete-historia"
					class="d-none"
					method="POST"
					action="{{ route('historias.destroy', $historia) }}">
					@csrf @method('DELETE')
				</form>
			@endauth

		</div>
	</div>
</div>
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