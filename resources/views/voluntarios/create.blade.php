@extends('layout')

@section('title', 'Crear voluntario')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-12 mx-auto">

			@include('partials.validation-errors')

			<form class="bg-white py-3 px-4 shadow rounded"
				method="POST"
				action="{{ route('voluntarios.store' ) }}">
				<div class="d-flex justify-content-between align-items-center">
					<img class="float-left" width="60px" height="60px"
						src="/laravel/public/img/cruz-roja-aragua.png"
						alt="Cruz Roja">
					<div>

						<p class="h4 text-center text-primary">Cruz Roja Venezolana</p>
						<p class="h5 text-center text-black-50">Dirección de Voluntariado</p>
					</div>

					<img class="float-left" width="60px" height="60px"
						src="/laravel/public/img/direccion.png"
						alt="Dirección">
				</div>
				<hr>

				<div class="form-row">
					<div class="form-group col-lg-3">
					<label for="estados">Estado</label>
						<select class="form-control" name="estado_id" id="estados" required>
							<option
								value=""
								disabled
								selected> Seleccionar Estado
							</option>
								@foreach ($estados as $estado)
									<option value="{{ $estado->id }}">{{ $estado->estado }}</option>
								@endforeach
						</select>
					</div>

					<div class="form-group col-lg-3">
						<label for="ciudads">Ciudad</label>
						<select class="form-control" name="ciudad_id" id="ciudads" required>
							<option value=""
								disabled
								selected> Seleccionar Ciudad
							</option>
							<option></option>
						</select>
					</div>

					<div class="form-group col-lg-3">
						<label for="municipios">Municipio</label>
						<select class="form-control" name="municipio_id" id="municipios" required>
							<option
								value=""
								disabled
								selected> Seleccionar Municipio
							</option>
						</select>
					</div>

					<div class="form-group col-lg-3">
						<label for="parroquias">Parroquia</label>
						<select class="form-control" name="parroquia_id" id="parroquias" required>
							<option
								value=""
								disabled
								selected> Seleccionar Parroquia
							</option>
						</select>
					</div>

				<div class="form-row">
					@section('select')
						<div class="form group col-lg-3 py-2">
							<label for="instruccion_id">Grado de instrucción</label><br>
							<select class="form-control" name="instruccion_id" id="instruccion_id" required>
								<option value="0" disabled selected>Seleccione grado de instrucción</option>
								@foreach ($instruccions as $instruccion)
									<option value="{{ $instruccion->id }}" {{ old('instruccion_id') == $instruccion->id ? "selected" : "" }}> {{ $instruccion->nombre}} </option>
								@endforeach
							</select>
						</div>

						<div class="form group col-lg-3 py-2">
							<label for="profesion_id">Profesión</label><br>
							<select class="form-control" name="profesion_id" id="profesion_id" required>
								<option value="0" disabled selected>Seleccione profesión</option>
								@foreach ($profesions as $profesion)
									<option value="{{ $profesion->id }}" {{ old('profesion_id') == $profesion->id ? "selected" : "" }}> {{ $profesion->nombre}} </option>
								@endforeach
							</select>
						</div>

						<div class="form group col-lg-3 py-2">
							<label for="ocupacion_id">Ocupación</label><br>
							<select class="form-control" name="ocupacion_id" id="ocupacion_id" required>
								<option value="0" disabled selected>Seleccione ocupación</option>
								@foreach ($ocupacions as $ocupacion)
									<option value="{{ $ocupacion->id }}" {{ old('ocupacion_id') == $ocupacion->id ? "selected" : "" }}> {{ $ocupacion->nombre}} </option>
								@endforeach
							</select>
						</div>

						<div class="form group col-lg-3 py-2">
							<label for="sanguineo_id">Grupo sanguineo</label><br>
							<select class="form-control" name="sanguineo_id" id="sanguineo_id" required>
								<option value="0" disabled selected>Seleccione Grupo sanguineo</option>
								@foreach ($sanguineos as $sanguineo)
									<option value="{{ $sanguineo->id }}" {{ old('sanguineo_id') == $sanguineo->id ? "selected" : "" }}> {{ $sanguineo->nombre}} </option>
								@endforeach
							</select>
						</div>
					@stop
					@include('voluntarios._form', ['btnText' => 'Guardar'])
				</div>
			</form>
		</div>
	</div>
</div>
@endsection