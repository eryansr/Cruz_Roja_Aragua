@extends('layout')

@section('title', 'Censo | ' . $censo->nombre)

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1 class="text-capitalize pb-3">{{ $censo->nombre}} {{ $censo->apellido}}</h1>
		<div class="form-row col-12 pb-3">
			<div class="col-lg-2">
				<label>Cédula:</label>
				<p class="text-black-50">{{ $censo->nacionalidads->pluck('nombre')->implode(' - ') }} - {{ $censo->cedula }}</p>
			</div>

			<div class="col-lg-2">
				<label>Estado Cívil:</label>
				<p class="text-black-50">{{ $censo->civils->pluck('display_name')->implode(' - ') }}</p>
			</div>

			<div class="col-lg-2">
				<label>Sexo:</label>
				<p class="text-black-50">{{ $censo->sexos->pluck('display_name')->implode(' - ') }}</p>
			</div>

			<div class="col-lg-2">
				<label>Edad:</label>
				<p class="text-black-50">{{ $censo->edad }}</p>
			</div>

			<div class="col-lg-2">
				<label>Teléfono:</label>
				<p class="text-black-50">{{ $censo->telefono }}</p>
			</div>

			<div class="col-lg-3">
				<label>Lugar y Fecha de Nacimiento:</label>
				<p class="text-black-50">{{ $censo->lugar }} - {{ $censo->fecha }}</p>
			</div>

			<div class="col-lg-3">
				<label>Grado de Instrucción:</label>
				<p class="text-black-50">{{ $censo->instruccions->nombre }}</p>
			</div>

			<div class="col-lg-2">
				<label>Ocupación:</label>
				<p class="text-black-50">{{ $censo->ocupacions->nombre }}</p>
			</div>

			<div class="col-lg-2">
				<label>Profesión:</label>
				<p class="text-black-50">{{ $censo->profesions->nombre }}</p>
			</div>

			<div class="col-lg-12">
				<label>Ubicación:</label>
				<p class="text-black-50">
					{{ $censo->estados->estado }} -
					{{ $censo->ciudads->ciudad }} -
					{{ $censo->municipios->municipio }} -
					{{ $censo->parroquias->parroquia }} -
					{{ $censo->direccion }}
				</p>
			</div>
		</div>

		<h3 class="col-12">Carga Familiar</h3>

		<div class="table-responsive col-12">
			<table class="table table-striped bg-white col-12 rounded">
				<thead>
					<tr class="text-nowrap">
						<th class="font-weight-bold">Apellido</th>
						<th class="font-weight-bold">Nombre</th>
						<th class="font-weight-bold">Cédula</th>
						<th class="font-weight-bold">Edad</th>
						<th class="font-weight-bold">Sexo</th>
						<th class="font-weight-bold">Estado Cívil</th>
						<th class="font-weight-bold">Filiación</th>
						<th class="font-weight-bold">Grado de Instrucción</th>
						<th class="font-weight-bold">Ocupación</th>
						<th class="font-weight-bold">Enfermedad/ Discapacidad</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($censo->familias as $carga)
					<tr>
						<td class="text-capitalize">{{ $carga->apellidof }}</td>
						<td class="text-capitalize">{{ $carga->nombref }}</td>
						<td>{{ $carga->cedulaf }}</td>
						<td>{{ $carga->edadf }}</td>
						<td>{{ $carga->sexof }}</td>
						<td>{{ $carga->civilf }}</td>
						<td>{{ $carga->filiacion }}</td>
						<td>{{ $carga->instruccionf }}</td>
						<td>{{ $carga->ocupacionf }}</td>
						<td>{{ $carga->enfermedad }}</td>
					@empty
						<td colspan="4">No tiene carga familiar</td>
					@endforelse
					</tr>
				</tbody>
			</table>
		</div>

		<h3 class="col-12 pt-3">Información General</h3>
		<div class="col-12"><hr></div>

		<div class="form-row col-12 pb-3">
			<div class="col-lg-2 py-3">
				<label>1. Tipo de Vivienda</label><br>
				@foreach ($censo->viviendas as $vivienda)
					<div class="px-3">
						<li class="text-black-50" for="viviendas">
							{{ $vivienda->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-4 py-3">
				<label>2. Condiciones Sanitarias</label><br>
				<div class="form-group px-3">
					<li class="text-black-50">Piso: {{ $censo->piso }}</li>
				</div>

				<div class="form-group px-3">
					<li class="text-black-50">Techo: {{ $censo->techo }}</li>
				</div>

				<div class="form-group px-3">
					<li class="text-black-50">Nro. Habitación: {{ $censo->habitacion }}</li>
				</div>

				<div class="form-group px-3">
					<li class="text-black-50">Baños: {{ $censo->wc }}</li>
				</div>

				<div class="form-group px-3">
					<li class="text-black-50">Agua: {{ $censo->agua }}</li>
				</div>
			</div>

			<div class="col-lg-4 py-3">
				<label>3. Tipo de Vivienda</label><br>
				<div class="form-group px-3">
					<li class="text-black-50">Piso: {{ $censo->piso }}</li>
				</div>

				<div class="form-group px-3">
					<li class="text-black-50">Techo: {{ $censo->techo }}</li>
				</div>

				<div class="form-group px-3">
					<li class="text-black-50">Nro. Habitación: {{ $censo->habitacion }}</li>
				</div>

				<div class="form-group px-3">
					<li class="text-black-50">Baños: {{ $censo->wc }}</li>
				</div>

				<div class="form-group px-3">
					<li class="text-black-50">Agua: {{ $censo->agua }}</li>
				</div>
			</div>

			<div class="col-lg-2 py-3">
				<label>4. Centros de Salud</label><br>
				@foreach ($censo->saluds as $salud)
					<div class="px-3">
						<li class="text-black-50" for="saluds">
							{{ $salud->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-2 py-3">
				<label>5. Agua de Consumo</label><br>
				@foreach ($censo->consumos as $consumo)
					<div class="px-3">
						<li class="text-black-50" for="consumos">
							{{ $consumo->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-2 py-3">
				<label>6. Aguas Blancas</label><br>
				@foreach ($censo->blancas as $blanca)
					<div class="px-3">
						<li class="text-black-50" for="blancas">
							{{ $blanca->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-2 py-3">
				<label>7. Basura</label><br>
				@foreach ($censo->basuras as $basura)
					<div class="px-3">
						<li class="text-black-50" for="basuras">
							{{ $basura->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-3 py-3">
				<label>8. Almacenamiento de Agua</label><br>
				@foreach ($censo->almacenamientos as $almacenamiento)
					<div class="px-3">
						<li class="text-black-50" for="almacenamientos">
							{{ $almacenamiento->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-3 py-3">
				<label>9. Preparación de Alimentos</label><br>
				@foreach ($censo->preparacions as $preparacion)
					<div class="px-3">
						<li class="text-black-50" for="preparacions">
							{{ $preparacion->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-2 py-3">
				<label>10. Aguas Servidas</label><br>
				@foreach ($censo->servidas as $servida)
					<div class="px-3">
						<li class="text-black-50" for="servidas">
							{{ $servida->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-3 py-3">
				<label>11. Manipulación de Alimentos</label><br>
				@foreach ($censo->manipulacions as $manipulacion)
					<div class="px-3">
						<li class="text-black-50" for="manipulacions">
							{{ $manipulacion->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-2 py-3">
				<label>12. Mascotas</label><br>
				@foreach ($censo->mascotas as $mascota)
					<div class="px-3">
						<li class="text-black-50" for="mascotas">
							{{ $mascota->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-3 py-3">
				<label>13. Condiciones Asociadas</label><br>
				@foreach ($censo->asociadas as $asociada)
					<div class="px-3">
						<li class="text-black-50" for="asociadas">
							{{ $asociada->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-lg-2 py-3">
				<label>14. Recreación</label><br>
				@foreach ($censo->recreacions as $recreacion)
					<div class="px-3">
						<li class="text-black-50" for="recreacions">
							{{ $recreacion->nombre }}
						</li>
					</div>
				@endforeach
			</div>

			<div class="col-12"><hr></div>

			<p class="col-12 text-black">Censado {{ $censo->created_at->diffForHumans() }}</p>
			<p class="col-12 text-black">Día del censo {{ $censo->created_at->format('d-m-Y') }}</p>
			<p class="col-12 text-black">Actualizado el {{ $censo->updated_at->format('d-m-Y') }}</p>
		</div>
		<div class="d-flex justify-content-between align-items-center">
			<a href="{{ route('censos.index')}}">
				Regresar
			</a>
			@auth
				<div class="btn-group btn-group-sm">
					<a class="btn btn-success" href="{{ route('censos.edit', $censo) }}">Editar</a>
					<a class="btn btn-danger" id="eliminar" href="#">Eliminar</a>
				</div>
				<form id="delete-censo"
					class="d-none"
					method="POST"
					action="{{ route('censos.destroy', $censo) }}">
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
