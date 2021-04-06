@extends('layout')

@section('title', 'Crear historia')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-12 mx-auto">

			@include('partials.validation-errors')

			<form class="bg-white py-3 px-4 shadow rounded"
				method="POST"
				action="{{ route('historias.store' ) }}">
				<div class="form-row d-flex justify-content-between align-items-center">
					<p class="h3 text-center text-primary">Paciente</p>
				</div>
				<hr>
				<div class="form-row">
					@section('select')
						<div class="form group col-lg-3 py-2">
							<label for="sanguineo_id">Grupo sanguineo</label><br>
							<select class="form-control" name="sanguineo_id" id="sanguineo_id" required="required">
								<option value="0" disabled selected>Seleccione Grupo sanguineo</option>
								@foreach ($sanguineos as $sanguineo)
									<option value="{{ $sanguineo->id }}" {{ old('sanguineo_id') == $sanguineo->id ? "selected" : "" }}> {{ $sanguineo->nombre}} </option>
								@endforeach
							</select>
						</div>
					@stop
					@include('historias._form', ['btnText' => 'Guardar'])
				</div>
			</form>
		</div>
	</div>
</div>
@endsection