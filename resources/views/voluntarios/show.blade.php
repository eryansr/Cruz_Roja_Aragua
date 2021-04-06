@extends('layout')

@section('title', 'Voluntario | ' . $voluntario->nombre)

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1 class="text-capitalize pb-3">{{ $voluntario->nombre}} {{ $voluntario->apellido}}</h1>
		<hr>
		<div class="form-row col-12 pb-3">

			<div class="col-lg-2 pl-2 pb-3">
				<label>Cédula:</label>
				<p class="text-black-50">{{ $voluntario->nacionalidads->pluck('nombre')->implode(' - ') }} - {{ $voluntario->cedula }}</p>
			</div>

			<div class="col-lg-2 pl-2 pb-3">
				<label>Pasaporte:</label>
				<p class="text-black-50">{{ $voluntario->pasaporte }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Estado Cívil:</label>
				<p class="text-black-50">{{ $voluntario->civils->pluck('display_name')->implode(' - ') }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Sexo:</label>
				<p class="text-black-50">{{ $voluntario->sexos->pluck('display_name')->implode(' - ') }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Edad:</label>
				<p class="text-black-50">{{ $voluntario->edad }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Altura:</label>
				<p class="text-black-50">{{ $voluntario->altura }} cm</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Grado de Instrucción:</label>
				<p class="text-black-50">{{ $voluntario->instruccions->nombre }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Grupo de Sanguineo:</label>
				<p class="text-black-50">{{ $voluntario->sanguineos->nombre }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Ocupación:</label>
				<p class="text-black-50">{{ $voluntario->ocupacions->nombre }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Profesión:</label>
				<p class="text-black-50">{{ $voluntario->profesions->nombre }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Fecha de Nacimiento:</label>
				<p class="text-black-50">{{ $voluntario->nacimiento }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Peso:</label>
				<p class="text-black-50">{{ $voluntario->peso }} Kg</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Talla de Franela:</label>
				<p class="text-black-50">{{ $voluntario->talla_franela }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Talla de Pantalón:</label>
				<p class="text-black-50">{{ $voluntario->talla_pantalon }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Talla de Calzado:</label>
				<p class="text-black-50">{{ $voluntario->talla_calzado }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Discapacidad:</label>
				<p class="text-black-50">{{ $voluntario->discapacidad }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Alergias a:</label>
				<p class="text-black-50">{{ $voluntario->alergia }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>¿Es Donante?</label>
				<p class="text-black-50">{{ $voluntario->donantes->pluck('nombre')->implode(' - ') }}</p>
			</div>

			<div class="col-lg-2 pb-3">
				<label>Datos del Trabajo:</label>
				<li class="text-black-50">{{ $voluntario->trabajo }}</li>
				<li class="text-black-50">{{ $voluntario->tel_trabajo }}</li>
			</div>

			<div class="col-lg-2 pb-3">
				<label>¿Tiene Hijos?</label>
				<li class="text-black-50">{{ $voluntario->hijos->pluck('nombre')->implode(' - ') }}</li>
				<li class="text-black-50">{{ $voluntario->boys }} Niño/s</li>
				<li class="text-black-50">{{ $voluntario->girls }} Niña/s</li>
			</div>

			<div class="col-lg-4 pb-3">
				<label>Contacto:</label>
					<li class="text-black-50">Correo: {{ $voluntario->email }}</li>
					<li class="text-black-50">Móvil: {{ $voluntario->tel_movil }}</li>
					<li class="text-black-50">Fijo: {{ $voluntario->tel_fijo }}</li>
					<li class="text-black-50">Emergencia: {{ $voluntario->tel_emergencia }}</li>
			</div>

			<div class="col-lg-4 pb-3">
				<label>Ubicación:</label>
				<p class="text-black-50">
					{{ $voluntario->estados->estado }} -
					{{ $voluntario->ciudads->ciudad }} -
					{{ $voluntario->municipios->municipio }} -
					{{ $voluntario->parroquias->parroquia }} -
					{{ $voluntario->habitacion }}
				</p>
			</div>

			<div class="col-12"><hr></div>

			<div class="col-lg-3 pb-3">
				<label>¿Ha tenido alguna experiencia como voluntario?</label>
				<p class="text-black-50">{{ $voluntario->experiencia }}</p>
			</div>

			<div class="col-lg-3 pb-3">
				<label>¿Qué labores ha realizado como voluntario?</label>
				<p class="text-black-50">{{ $voluntario->labores }}</p>
			</div>

			<div class="col-lg-3 pb-3">
				<label>¿Cuáles son sus hobbies e intereses?</label>
				<p class="text-black-50">{{ $voluntario->hobbies }}</p>
			</div>

			<div class="col-lg-3 pb-3">
				<label>¿Qué es para ud. La Cruz Roja Venezolana?</label>
				<p class="text-black-50">{{ $voluntario->cruz_roja }}</p>
			</div>

			<div class="col-lg-3 pb-3">
				<label>¿Cómo tuvo conocimiento del servicio de Voluntario?</label>
				<p class="text-black-50">{{ $voluntario->conocimiento }}</p>
			</div>

			<div class="col-lg-3 pb-3">
				<label>El tiempo libre que dispone para ejercer el voluntariado</label>
				<p class="text-black-50">{{ $voluntario->tiempo }}</p>
			</div>

			<div class="col-lg-3 pb-3">
				<label>Enfermedad Crónica</label>
				<p class="text-black-50">{{ $voluntario->cronica }}</p>
			</div>

			<div class="col-lg-3 pb-3">
				<label>¿Pertenece a algún Cuerpo de seguridad?</label>
				<p class="text-black-50">{{ $voluntario->seguridad }}</p>
			</div>

		</div>


		<div class="form-row col-12 pb-3">

			<div class="col-12"><hr></div>

			<p class="col-12 text-black">Registrado {{ $voluntario->created_at->diffForHumans() }}</p>
			<p class="col-12 text-black">Día del Registro {{ $voluntario->created_at->format('d-m-Y') }}</p>
			<p class="col-12 text-black">Actualizado el {{ $voluntario->updated_at->format('d-m-Y') }}</p>
		</div>

		<div class="d-flex justify-content-between align-items-center">
			<a href="{{ route('voluntarios.index')}}">
				Regresar
			</a>
			@auth
				<div class="btn-group btn-group-sm">
					<a class="btn btn-primary" href="{{ route('voluntarios.edit', $voluntario) }}">Editar</a>
					<a href="{{ route('pdf.voluntario', $voluntario->id) }}" class="btn btn-success btn-sm">Descargar PDF</a>
					<a id="eliminar" class="btn btn-danger" href="#">Eliminar</a>
				</div>
				<form id="delete-voluntario"
					class="d-none"
					method="POST"
					action="{{ route('voluntarios.destroy', $voluntario) }}">
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