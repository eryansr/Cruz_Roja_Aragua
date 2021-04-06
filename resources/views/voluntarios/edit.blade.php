@extends('layout')

@section('title', 'Editar voluntario')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-12 mx-auto">

			@include('partials.validation-errors')

			<form class="bg-white py-3 px-4 shadow rounded"
				method="POST"
				action="{{ route('voluntarios.update', $voluntario )}}">
				@method('PATCH')
				<h1 class="display-4">Editar voluntario</h1>
				<hr>

				<div class="form-row">
					<div class="form-group col-lg-3">
					<label for="estados">Estado</label>
						<select class="form-control" name="estado_id" id="estados">
							<option
								value="{{ $voluntario->estados->id }}"
								{{ ( old('estado_id', $voluntario->estados->id) == $voluntario->estados->id ) ? 'selected' : '' }}
								disabled="true"
								> {{ $voluntario->estados->estado }}
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
								value="{{ $voluntario->ciudads->id }}"
								{{ ( old('ciudad_id', $voluntario->ciudads->id) == $voluntario->ciudads->id ) ? 'selected' : '' }}
								disabled="true"
								> {{ $voluntario->ciudads->ciudad }}
							</option>
						</select>
					</div>

					<div class="form-group col-lg-3">
						<label for="municipios">Municipio</label>
						<select class="form-control" name="municipio_id" id="municipios">
							<option
								value="{{ $voluntario->municipios->id }}"
								{{ ( old('municipio_id', $voluntario->municipios->id) == $voluntario->municipios->id ) ? 'selected' : '' }}
								disabled="true"
								> {{ $voluntario->municipios->municipio }}
							</option>
						</select>
					</div>

					<div class="form-group col-lg-3">
						<label for="parroquias">Parroquia</label>
						<select class="form-control" name="parroquia_id" id="parroquias">
							<option
								value="{{ $voluntario->parroquias->id }}"
								{{ ( old('parroquia_id', $voluntario->parroquias->id) == $voluntario->parroquias->id ) ? 'selected' : '' }}
								disabled="true"
								> {{ $voluntario->parroquias->parroquia }}
							</option>
						</select>
					</div>

					@section('select')
						<div class="form group col-lg-3 py-2">
							<label for="instruccion_id">Grado de instrucción</label><br>
							<select class="form-control" name="instruccion_id" id="instruccion_id" required="required">
								<option value="0" disabled>Seleccione grado de instrucción</option>
								@foreach ($instruccions as $instruccion)
									<option
										value="{{ $instruccion->id }}"
										{{ old('instruccion_id', $voluntario->instruccions->id) == $instruccion->id ? "selected" : "" }}
										> {{ $instruccion->nombre}}
									</option>
								@endforeach
							</select>
						</div>

						<div class="form group col-lg-3 py-2">
							<label for="profesion_id">Profesión</label><br>
							<select class="form-control" name="profesion_id" id="profesion_id" required="required">
								<option value="0" disabled>Seleccione profesión</option>
								@foreach ($profesions as $profesion)
									<option
										value="{{ $profesion->id }}"
										{{ old('profesion_id', $voluntario->profesions->id) == $profesion->id ? "selected" : "" }}
										> {{ $profesion->nombre}}
									</option>
								@endforeach
							</select>
						</div>

						<div class="form group col-lg-3 py-2">
							<label for="ocupacion_id">Ocupación</label><br>
							<select class="form-control" name="ocupacion_id" id="ocupacion_id" required="required">
								<option value="0" disabled>Seleccione ocupación</option>
								@foreach ($ocupacions as $ocupacion)
									<option
										value="{{ $ocupacion->id }}"
										{{ old('ocupacion_id', $voluntario->ocupacions->id) == $ocupacion->id ? "selected" : "" }}
										> {{ $ocupacion->nombre}}
									</option>
								@endforeach
							</select>
						</div>

						<div class="form group col-lg-3 py-2">
							<label for="sanguineo_id">Grupo sanguineo</label><br>
							<select class="form-control" name="sanguineo_id" id="sanguineo_id" required="required">
								<option value="0" disabled>Seleccione Grupo sanguineo</option>
								@foreach ($sanguineos as $sanguineo)
									<option
										value="{{ $sanguineo->id }}"
										{{ old('sanguineo_id', $voluntario->sanguineos->id) == $sanguineo->id ? "selected" : "" }}
										> {{ $sanguineo->nombre}}
									</option>
								@endforeach
							</select>
						</div>
					@stop
					@include('voluntarios._form', ['btnText' => 'Actualizar'])
				</div>
			</form>
		</div>
	</div>
</div>
@endsection