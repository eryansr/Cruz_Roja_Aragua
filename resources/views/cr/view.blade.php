@extends("layouts.cr")

@section("body")
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1 class="text-capitalize pb-3">{{ $censo->nombre}} {{ $censo->apellido}}</h1>
		<div class="form-row col-12 pb-3">
			<div class="col-lg-2">
				<label>Cédula:</label>
				<p class="text-black">{{ $censo->cedula }}</p>
			</div>

			<div class="col-lg-2">
				<label>Edad:</label>
				<p class="text-black">{{ $censo->edad }}</p>
			</div>

			<div class="col-lg-2">
				<label>Teléfono:</label>
				<p class="text-black">{{ $censo->telefono }}</p>
			</div>

			<div class="col-lg-3">
				<label>Lugar y Fecha de Nacimiento:</label>
				<p class="text-black">{{ $censo->lugar }} - {{ $censo->fecha }}</p>
			</div>

			<div class="col-lg-3">
				<label>Dirección:</label>
				<p class="text-black">
					{{ $censo->direccion }}
				</p>
			</div>
		</div>
			<p class="col-12 text-black">Censado {{ $censo->created_at }}</p>
		</div>
	</div>
</div>


@endsection