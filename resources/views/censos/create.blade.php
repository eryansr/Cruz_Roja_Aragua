@extends('layout')

@section('title', 'Crear Censo')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-12 mx-auto">

			@include('partials.validation-errors')

			<form class="bg-white py-3 px-4 shadow rounded"
				method="POST"
				action="{{ route('censos.store' )}}">
				<div class="d-flex justify-content-between align-items-center">
					<img class="float-left" width="60px" height="60px"
						src="/laravel/public/img/cruz-roja-aragua.png"
						alt="Cruz Roja">
					<p class="h4 text-center text-primary">Censo (Ayuda Humanitaria)</p>
					<p class="h4 text-center text-secondary">Cruz Roja Venezolana Seccional Aragua</p>
				</div>

				<hr>
				<div class="form-row">
					<div class="form-group col-lg-3">
					<label for="estados">Estado</label>
						<select class="form-control" name="estado_id" id="estados" required="required">
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
						<select class="form-control" name="ciudad_id" id="ciudads" required="required">
							<option value=""
								disabled
								selected> Seleccionar Ciudad
							</option>
						</select>
					</div>

					<div class="form-group col-lg-3">
						<label for="municipios">Municipio</label>
						<select class="form-control" name="municipio_id" id="municipios" required="required">
							<option
								value=""
								disabled
								selected> Seleccionar Municipio
							</option>
						</select>
					</div>

					<div class="form-group col-lg-3">
						<label for="parroquias">Parroquia</label>
						<select class="form-control" name="parroquia_id" id="parroquias" required="required">
							<option
								value=""
								disabled
								selected> Seleccionar Parroquia
							</option>
						</select>
					</div>
					@section('select')

						<div class="form group col-lg-4 py-3">
							<label for="instruccion_id">Grado de instrucción</label><br>
							<select class="form-control" name="instruccion_id" id="instruccion_id" required="required">
								<option value="0" disabled selected>Seleccione grado de instrucción</option>
								@foreach ($instruccions as $instruccion)
									<option value="{{ $instruccion->id }}" {{ old('instruccion_id') == $instruccion->id ? "selected" : "" }}> {{ $instruccion->nombre}} </option>
								@endforeach
							</select>
						</div>

						<div class="form group col-lg-4 py-3">
							<label for="ocupacion_id">Ocupación</label><br>
							<select class="form-control" name="ocupacion_id" required="required">
								<option value="0" disabled selected>Seleccione ocupación</option>
								@foreach ($ocupacions as $ocupacion)
									<option value="{{ $ocupacion->id }}" {{ old('ocupacion_id') == $ocupacion->id ? "selected" : "" }}> {{ $ocupacion->nombre}} </option>
								@endforeach
							</select>
						</div>

						<div class="form group col-lg-4 py-3">
							<label for="profesion_id">Profesión</label><br>
							<select class="form-control" name="profesion_id" required="required">
								<option value="0" disabled selected>Seleccione profesión</option>
								@foreach ($profesions as $profesion)
									<option value="{{ $profesion->id }}" {{ old('profesion_id') == $profesion->id ? "selected" : "" }}> {{ $profesion->nombre}} </option>
								@endforeach
							</select>
						</div>
					@endsection
					@include('censos._form', ['btnText' => 'Guardar'])
				</div>
			</form>
		</div>
	</div>
</div>
@endsection