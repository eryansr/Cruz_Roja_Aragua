@extends('layout')

@section('title', 'Editar censo')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-12 mx-auto">


			@include('partials.validation-errors')

			<form class="bg-white py-3 px-4 shadow rounded"
				method="POST"
				action="{{ route('censos.update', $censo )}}">
				@method('PATCH')
				<h1 class="display-4">Editar censo de {{ $censo->nombre }}</h1>
				<hr>
				<div class="form-row">
					<div class="form-group col-lg-3">
					<label for="estados">Estado</label>
						<select class="form-control" name="estado_id" id="estados">
							<option
								value="{{ $censo->estados->id }}"
								{{ ( old('estado_id', $censo->estados->id) == $censo->estados->id ) ? 'selected' : '' }}
								disabled="true"
								> {{ $censo->estados->estado }}
							</option>
								@foreach ($estados as $estado)
									<option value="{{ $estado->id }}">{{ $estado->estado }}</option>
								@endforeach
						</select>
					</div>

					<div class="form-group col-lg-3">
						<label for="ciudads">Ciudad</label>
						<select class="form-control" name="ciudad_id" id="ciudads">
							<option
								value="{{ $censo->ciudads->id }}"
								{{ ( old('ciudad_id', $censo->ciudads->id) == $censo->ciudads->id ) ? 'selected' : '' }}
								disabled="true"
								> {{ $censo->ciudads->ciudad }}
							</option>
						</select>
					</div>

					<div class="form-group col-lg-3">
						<label for="municipios">Municipio</label>
						<select class="form-control" name="municipio_id" id="municipios">
							<option
								value="{{ $censo->municipios->id }}"
								{{ ( old('municipio_id', $censo->municipios->id) == $censo->municipios->id ) ? 'selected' : '' }}
								disabled="true"
								> {{ $censo->municipios->municipio }}
							</option>
						</select>
					</div>

					<div class="form-group col-lg-3">
						<label for="parroquias">Parroquia</label>
						<select class="form-control" name="parroquia_id" id="parroquias">
							<option
								value="{{ $censo->parroquias->id }}"
								{{ ( old('parroquia_id', $censo->parroquias->id) == $censo->parroquias->id ) ? 'selected' : '' }}
								disabled="true"
								> {{ $censo->parroquias->parroquia }}
							</option>
						</select>
					</div>

					@section('select')
						<div class="form group col-lg-4 py-2">
							<label for="instruccion_id">Grado de instrucción</label><br>
							<select class="form-control" name="instruccion_id" id="instruccion_id" required="required">
								<option value="0" disabled>Seleccione grado de instrucción</option>
								@foreach ($instruccions as $instruccion)
									<option
										value="{{ $instruccion->id }}"
										{{ old('instruccion_id', $censo->instruccions->id) == $instruccion->id ? "selected" : "" }}
										> {{ $instruccion->nombre}}
									</option>
								@endforeach
							</select>
						</div>

						<div class="form group col-lg-4 py-2">
							<label for="profesion_id">Profesión</label><br>
							<select class="form-control" name="profesion_id" id="profesion_id" required="required">
								<option value="0" disabled>Seleccione profesión</option>
								@foreach ($profesions as $profesion)
									<option
										value="{{ $profesion->id }}"
										{{ old('profesion_id', $censo->profesions->id) == $profesion->id ? "selected" : "" }}
										> {{ $profesion->nombre}}
									</option>
								@endforeach
							</select>
						</div>

						<div class="form group col-lg-4 py-2">
							<label for="ocupacion_id">Ocupación</label><br>
							<select class="form-control" name="ocupacion_id" id="ocupacion_id" required="required">
								<option value="0" disabled>Seleccione ocupación</option>
								@foreach ($ocupacions as $ocupacion)
									<option
										value="{{ $ocupacion->id }}"
										{{ old('ocupacion_id', $censo->ocupacions->id) == $ocupacion->id ? "selected" : "" }}
										> {{ $ocupacion->nombre}}
									</option>
								@endforeach
							</select>
						</div>
					@stop

					@section('cargaedit')
						<div class="col-12">
							<h4>Cargas Familiar Registradas</h4>
							<hr>
						</div>

						@foreach($censo->familias as $carga)
						<div class="col-12 row" id="carga-familiar">
							<div class="btn col-lg-12 text-right my-0 py-0">
								<a id="eliminar-carga" class="badge badge-danger" href="#cedulaf" delete-link="{{ route('censos.destroyCarga', $carga->id) }}"> X </a>
							</div>

							<div class="form-group input-group-sm col-lg-3">
								<label for="cedulaf">Cédula</label>
								<input  readonly
									class="form-control @error('cedulaf') is-invalid @enderror"
									type="text"
									name="cedulaf[]"
									value="{{ $carga->cedulaf }}"
								>
								@error('cedulaf')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="form-group input-group-sm col-lg-3">
								<label for="apellidof">Apellido</label>
								<input
									class="form-control @error('apellidof') is-invalid @enderror"
									type="text"
									name="apellidof[]"
									value="{{ $carga->apellidof }}"
								>
							</div>

							<div class="form-group input-group-sm col-lg-3">
								<label for="nombref">Nombre</label>
								<input
									class="form-control @error('nombref') is-invalid @enderror"
									type="text"
									name="nombref[]"
									value="{{ $carga->nombref }}"
								>
							</div>

							<div class="form-group input-group-sm col-lg-1">
								<label for="edadf">Edad</label>
								<input
									class="form-control @error('edadf') is-invalid @enderror"
									type="number"
									name="edadf[]"
									value="{{ $carga->edadf }}"
								>
							</div>

							<div class="form-group input-group-sm col-lg-2">
								<label for="sexof">Sexo</label><br>
								<input
									class="form-control @error('sexof') is-invalid @enderror"
									type="text"
									name="sexof[]"
									value="{{ $carga->sexof }}"
								>
							</div>

							<div class="form-group input-group-sm col-lg-2">
								<label for="civilf">Estado cívil</label><br>
								<input
									class="form-control @error('civilf') is-invalid @enderror"
									type="text"
									name="civilf[]"
									value="{{ $carga->civilf }}"
								>
							</div>

							<div class="form-group input-group-sm col-lg-2">
								<label for="filiacion">Filiación</label><br>
								<input
									class="form-control @error('filiacion') is-invalid @enderror"
									type="text"
									name="filiacion[]"
									value="{{ $carga->filiacion }}"
								>
							</div>

							<div class="form-group input-group-sm col-lg-2">
								<label for="instruccionf">Grado de instrucción</label><br>
								<input
									class="form-control @error('instruccionf') is-invalid @enderror"
									type="text"
									name="instruccionf[]"
									value="{{ $carga->instruccionf }}"
								>
							</div>

							<div class="form-group input-group-sm col-lg-3">
								<label for="ocupacionf">Ocupación</label><br>
								<input
									class="form-control @error('ocupacionf') is-invalid @enderror"
									type="text"
									name="ocupacionf[]"
									value="{{ $carga->ocupacionf }}"
								>
							</div>

							<div class="form-group input-group-sm col-lg-3">
								<label for="enfermedad">Enfermedad</label>
								<input
									class="form-control @error('enfermedad') is-invalid @enderror"
									type="text"
									name="enfermedad[]"
									value="{{ $carga->enfermedad }}"
								>
							</div>

							<div class="col-lg-12"><hr></div>
						</div>

						@endforeach
					@stop
					@include('censos._form', ['btnText' => 'Actualizar'])
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	$(document).on('click', 'a#eliminar-carga', function (event) {
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
			      'La carga ha sido eliminada.',
			      'success'
			    );
			    $(buttonDiv).remove();
			}).fail(function() {
				Swal.fire(
			      '¡Error!',
			      'No se ha podido eliminar la carga.',
			      'warning'
			    );
			});
		  }
		})
	});
</script>
@endsection