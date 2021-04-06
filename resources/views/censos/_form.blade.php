@csrf

<div class="form group col-lg-6 py-2">
	<label for="encuestador">Encuestador</label><br>
	<input 
		class="form-control bg-light shadow-sm @error('encuestador') is-invalid @enderror"
		id="encuestador"
		type="text"
		pattern="[A-Za-z ]{3,}"
		required
		name="encuestador"
		value="{{ old('encuestador', $censo->encuestador) }}"
	>
	@error('encuestador')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form group col-lg-6 py-2">
	<label for="organizacion">Organización a la que pertenece</label><br>
	<input class="form-control bg-light shadow-sm @error('organizacion') is-invalid @enderror"
		id="organizacion"
		type="text"
		pattern="[A-Za-z ]{3,}"
		required
		name="organizacion"
		value="{{ old('organizacion', $censo->organizacion) }}"
	>
	@error('organizacion')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="col-lg-12 py-2">
	<h5><strong>Datos del jefe de familia</strong></h5>
</div>

<div class="form group col-lg-4 py-2">
	<label for="cedula">Cédula</label><br>
	<input class="form-control bg-light shadow-sm @error('cedula') is-invalid @enderror"
		id="cedula"
		type="number"
		pattern="[0-9]{3}"
		required
		name="cedula"
		value="{{ old('cedula', $censo->cedula) }}"
	>
	@error('cedula')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form group col-lg-4 py-2">
	<label for="nombre">Nombre</label><br>
	<input class="form-control bg-light shadow-sm @error('nombre') is-invalid @enderror"
		id="nombre"
		type="text"
		pattern="[A-Za-z ]{3,}"
		required
		name="nombre"
		value="{{ old('nombre', $censo->nombre) }}"
	>
	@error('nombre')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form group col-lg-4 py-2">
	<label for="apellido">Apellido</label><br>
	<input class="form-control bg-light shadow-sm @error('apellido') is-invalid @enderror"
		id="apellido"
		type="text"
		pattern="[A-Za-z ]{3,}"
		required
		name="apellido"
		value="{{ old('apellido', $censo->apellido) }}"
	>
	@error('apellido')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group input-group input-group-md mb-3 col-lg-12 py-3">
	<div class="input-group-prepend">
		<span class="input-group-text bg-light shadow-sm">Lugar y fecha de nacimiento</span>
	</div>
	<input 
		placeholder="Lugar de nacimiento"
		type="text"
		pattern="[A-Za-z ]{3,}"
		required
		name="lugar"
		class="form-control col-lg-8 bg-light shadow-sm @error('lugar') is-invalid @enderror"
		aria-label="Small"
		aria-describedby="inputGroup-sizing-md"
		value="{{ old('lugar', $censo->lugar) }}"
	>
	@error('lugar')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror

	<input
		type="date"
		pattern="[A-Za-z ]{3,}"
		required
		name="fecha"
		class="form-control col-lg-4 bg-light shadow-sm"
		aria-label="Small"
		aria-describedby="inputGroup-sizing-md"
		value="{{ old('fecha', $censo->fecha) }}"
	>
</div>

<div class="checkbox col-lg-2">
	<label>Nacionalidad</label><br>
	@foreach ($nacionalidads as $id => $nombre)
		<label class="text-black-50" for="nacionalidads">
			<input
				type="radio"
				pattern="[A-Za-z ]{3,}"
				required
				value="{{ $id }}"
				{{ $censo->nacionalidads->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('nacionalidads', [])) ? 'checked' : '' }}
				name="nacionalidads[]">
			{{ $nombre }}
		</label>
	@endforeach
</div>

<div class="checkbox col-lg-2">
	<label>Sexo</label><br>
	@foreach ($sexos as $id => $nombre)
		<label class="text-black-50" for="sexos">
			<input
				type="radio"
				pattern="[A-Za-z ]{3,}"
				required
				value="{{ $id }}"
				{{ $censo->sexos->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('sexos', [])) ? 'checked' : '' }}
				name="sexos[]">
			{{ $nombre }}
		</label>
	@endforeach
</div>

<div class="checkbox col-lg-3">
	<label>Estado cívil</label><br>
	@foreach ($civils as $id => $nombre)
		<label class="text-black-50" for="civils">
			<input
				type="radio"
				pattern="[A-Za-z ]{3,}"
				required
				value="{{ $id }}"
				{{ $censo->civils->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('civils', [])) ? 'checked' : '' }}
				name="civils[]">
			{{ $nombre }}
		</label>
	@endforeach
</div>

<div class="form group col-lg-2">
	<label for="edad">Edad</label><br>
	<input class="form-control bg-light shadow-sm @error('edad') is-invalid @enderror"
		id="edad"
		type="number"
		pattern="[0-9]{3}"
		required
		name="edad"
		value="{{ old('edad', $censo->edad) }}"
	>
	@error('edad')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form group col-lg-3">
	<label for="telefono">Teléfono</label><br>
	<input class="form-control bg-light shadow-sm @error('telefono') is-invalid @enderror"
		id="telefono"
		type="number"
		pattern="[0-9]{3}"
		required
		name="telefono"
		placeholder="(Código de área) Número"
		value="{{ old('telefono', $censo->telefono) }}"
	>
	@error('telefono')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

@yield('select')

<div class="form group col-lg-12 py-3">
	<label for="direccion">Dirección</label><br>
	<textarea 
		class="form-control bg-light shadow-sm @error('direccion') is-invalid @enderror"
		name="direccion"
		required
	>
	{{ old('direccion', $censo->direccion) }}
	</textarea>
	@error('direccion')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

									{{-- Aquí empieza la Carga Familiar --}}

<div class="col-lg-12 pt-4 d-flex justify-content-between">
	<h4 class="pr-3">Carga Familiar</h4>
	<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal">?</button>
	<hr>
</div>

<!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Instrucciones de ingreso de cargas familiares (no cedulados)</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="">
          <p>Para ingresar a un niño o niña no cedulados en su núcleo familiar, se debe hacer mediante su número de partida de nacimiento.</p>

          <p>En caso de no poseer estos datos, se debe ingresar mediante lo siguientes pasos:</p>
          <ol>
	          <li>Se deberá hacer el ingreso de niños desde el mayor de edad al menor.</li>
	          <li>Colocar la cédula del padre seguida de la madre ( en ese orden especifico ), o representantes legales.</li>
	          <li>En caso de solo tener un representante legal y no se conoce los datos del padre o la madre, utilizar los datos que se  logren obtener.</li>
	          <li>Seguido de una barra (-) y la primera letra del alfabeto.</li>
	          <li>En el caso de tener dos personas no ceduladas o mas, se debe seguir con el mismo procedimiento, colocando la siguiente letra del alfabeto.</li>
	          <li>Si se llega a la ultima letra del alfabeto, reutilizar el procedimiento con una segunda letra (AA/AB).</li>
          </ol>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>

<div class="form-group col-lg-3">
	<label for="cedulaf">Cédula</label>
	<input 
		id="cedulaf"
		pattern="[A-Za-z ]{1,}"
		class="form-control" 
		type="number">
</div>

<div class="form-group col-lg-3">
	<label for="nombref">Nombre</label>
	<input 
		id="nombref"
		pattern="[A-Za-z ]{1,}"
		class="form-control" 
		type="text">
</div>

<div class="form-group col-lg-3">
	<label for="apellidof">Apellido</label>
	<input 
		id="apellidof"
		pattern="[A-Za-z ]{1,}"
	    class="form-control" 
	    type="text">
</div>

<div class="form-group col-lg-1">
	<label for="edadf">Edad</label>
	<input 
		id="edadf" 
		pattern="[0-9]{1,}"
		class="form-control" 
		type="number">
</div>

<div class="form group col-lg-2">
	<label for="sexof">Sexo</label><br>
	<select class="form-control" id="sexof">
		<option value="" disabled selected>Seleccione</option>
		@foreach ($sexos as $id => $nombre)
			<option value="{{ $nombre }}"> {{ $nombre}} </option>
		@endforeach
	</select>
</div>

<div class="form group col-lg-2">
	<label for="civilf">Estado cívil</label><br>
	<select class="form-control" id="civilf">
		<option value="" disabled selected>Seleccione</option>
		@foreach ($civils as $id => $nombre)
			<option value="{{ $nombre }}"> {{ $nombre}} </option>
		@endforeach
	</select>
</div>

<div class="form group col-lg-2">
	<label for="filiacion">Filiación</label><br>
	<select class="form-control" id="filiacion">
		<option value="" disabled selected>Seleccione</option>
		@foreach ($filiacions as $filiacion)
			<option value="{{ $filiacion->nombre }}"> {{ $filiacion->nombre}} </option>
		@endforeach
	</select>
</div>

<div class="form group col-lg-2">
	<label for="instruccionf">Grado de instrucción</label><br>
	<select class="form-control" id="instruccionf">
		<option value="" disabled selected>Seleccione</option>
		@foreach ($instruccions as $instruccion)
			<option value="{{ $instruccion->nombre }}"> {{ $instruccion->nombre }} </option>
		@endforeach
	</select>
</div>

<div class="form group col-lg-3">
	<label for="ocupacionf">Ocupación</label><br>
	<select class="form-control" id="ocupacionf">
		<option value="" disabled selected>Seleccione</option>
		@foreach ($ocupacions as $ocupacion)
			<option value="{{ $ocupacion->nombre }}"> {{ $ocupacion->nombre}} </option>
		@endforeach
	</select>
</div>

<div class="form-group col-lg-3">
	<label for="enfermedad">Enfermedad</label>
	<input id="enfermedad" class="form-control" type="text">
</div>

<div class="btn btn-group col-lg-12">
	<button id="adicionar" class="btn btn-success" type="button">Agregar Familia</button>
</div>

<div class="table-responsive col-12">
	<h5>Elementos en la Tabla: <span id="adicionados"></span></h5>
	<div class="table-responsive col-12">
		<table id="mytable" class="table table-striped bg-white col-12 rounded">
			<thead>
				<tr class="text-nowrap">
					<th>Cédula</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Edad</th>
					<th>Sexo</th>
					<th>Estado cívil</th>
					<th>Filiación</th>
					<th>Grado de instrucción</th>
					<th>Ocupación</th>
					<th>Enfermedad</th>
					<th>Eliminar</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<div class="col-12"><hr></div>

@yield('cargaedit')

										{{-- Aqui Termina la Carga--}}

<div class="form-group col-lg-4">
	<label for="ingresos_familiar">Ingreso Familiar</label>
	<input 
		id="ingresos_familiar"
		type="number"
		name="ingresos_familiar"
		pattern="[0-9]{3}"
		required 
		class="form-control @error('ingresos_familiar') is-invalid @enderror" 
		type="text" 
		value="{{ old('ingresos_familiar', $censo->ingresos_familiar) }}">
	@error('ingresos_familiar')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group col-lg-4">
	<label for="ingresos_adicional">Ingresos Adicionales/Familia</label>
	<input 
		id="ingresos_adicional"
		type="number"
		name="ingresos_adicional" 
		pattern="[0-9]{3}"
		required
		class="form-control @error('ingresos_adicional') is-invalid @enderror" 
		type="text" 
		value="{{ old('ingresos_adicional', $censo->ingresos_adicional) }}"
	>
	@error('ingresos_adicional')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group col-lg-4">
	<label for="otros_ingresos">Otros Ingresos</label>
	<input 
		id="otros_ingresos"
		type="number"
		name="otros_ingresos" 
		pattern="[0-9]{3}"
		required
		class="form-control @error('otros_ingresos') is-invalid @enderror" 
		type="text" 
		value="{{ old('otros_ingresos', $censo->otros_ingresos) }}"
	>
	@error('otros_ingresos')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form group col-lg-12 py-2">
	<label for="observaciones1">Observaciones (Especificar Tratamientos – Requerimientos por enfermedad y/o condición): </label><br>
	<textarea 
		class="form-control bg-light shadow-sm @error('observaciones1') is-invalid @enderror"
		name="observaciones1"
		pattern="[A-Za-z ]"		
		required
	>
	{{ old('observaciones1', $censo->observaciones1) }}
	</textarea>
	@error('observaciones1')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="col-lg-12 mt-2">
	<h4>Información General</h4>
	<hr>
</div>

						{{-- Aqui Empieza los checkboxes --}}

<div class="checkbox col-lg-2">
	<label>1. Tipo de Vivienda</label><br>
	@foreach ($viviendas as $id => $nombre)
		<div class="form-check">
			<label class="text-black-50" for="viviendas">
				<input 
					class="form-check-input"
					type="radio"
					value="{{ $id }}"
					{{ $censo->viviendas->pluck('id')->contains($id) ? 'checked' : '' }}
					{{ in_array($id, old('viviendas', [])) ? 'checked' : '' }}
					name="viviendas[]">
				{{ $nombre }}
			</label>
		</div>
	@endforeach
</div>

<div class="form-group col-lg-4 px-5">
	<label>2. Condiciones Sanitarias</label>
	<div class="form-group input-group input-group-sm mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Piso</span>
		</div>
		<input
			type="text"
			name="piso"
			pattern="[A-Za-z ]{1,}"
			required
			class="form-control col-lg-12 @error('piso') is-invalid @enderror"
			aria-label="Small"
			aria-describedby="inputGroup-sizing-sm"
			value="{{ old('piso', $censo->piso) }}"
		>
		@error('piso')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group input-group input-group-sm mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Techo</span>
		</div>
		<input
			type="text"
			name="techo"
			pattern="[A-Za-z ]{1,}"
			required
			class="form-control col-lg-12 @error('techo') is-invalid @enderror"
			aria-label="Small"
			aria-describedby="inputGroup-sizing-sm"
			value="{{ old('techo', $censo->techo) }}"
		>
		@error('techo')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group input-group input-group-sm mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Nro Hab.</span>
		</div>
		<input
			type="number"
			name="habitacion"
			required
			class="form-control col-lg-12 @error('habitacion') is-invalid @enderror"
			aria-label="Small"
			aria-describedby="inputGroup-sizing-sm"
			value="{{ old('habitacion', $censo->habitacion) }}"
		>
		@error('habitacion')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group input-group input-group-sm mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Baños</span>
		</div>
		<input
			type="number"
			name="wc"
			required
			class="form-control col-lg-12 @error('wc') is-invalid @enderror"
			aria-label="Small"
			aria-describedby="inputGroup-sizing-sm"
			value="{{ old('wc', $censo->wc) }}"
		>
		@error('wc')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group input-group input-group-sm mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Agua</span>
		</div>
		<input
			type="text"
			name="agua"
			pattern="[A-Za-z ]{1,}"
			required
			class="form-control col-lg-12 @error('agua') is-invalid @enderror"
			aria-label="Small"
			aria-describedby="inputGroup-sizing-sm"
			value="{{ old('agua', $censo->agua) }}"
		>
		@error('agua')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
</div>

<div class="form-group col-lg-4 px-5">
	<label>3. Características</label>
	<div class="form-group input-group input-group-sm mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Río - Quebrada</span>
		</div>
		<input
			type="text"
			name="rio"
			pattern="[A-Za-z ]{1,}"
			required
			class="form-control col-lg-12 @error('rio') is-invalid @enderror"
			aria-label="Small"
			aria-describedby="inputGroup-sizing-sm"
			value="{{ old('rio', $censo->rio) }}"
		>
		@error('rio')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group input-group input-group-sm mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Vertedero de Basura</span>
		</div>
		<input
			type="text"
			name="vertedero"
			pattern="[A-Za-z ]{1,}"
			required
			class="form-control col-lg-12 @error('vertedero') is-invalid @enderror"
			aria-label="Small"
			aria-describedby="inputGroup-sizing-sm"
			value="{{ old('vertedero', $censo->vertedero) }}"
		>
		@error('vertedero')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group input-group input-group-sm mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Industrias - Fábricas</span>
		</div>
		<input
			type="text"
			name="industria"
			pattern="[A-Za-z ]{1,}"
			required
			class="form-control col-lg-12 @error('industria') is-invalid @enderror"
			aria-label="Small"
			aria-describedby="inputGroup-sizing-sm"
			value="{{ old('industria', $censo->industria) }}"
		>
		@error('industria')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group input-group input-group-sm mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Terreno Baldío</span>
		</div>
		<input
			type="text"
			name="terreno"
			pattern="[A-Za-z ]{1,}"
			required
			class="form-control col-lg-12 @error('terreno') is-invalid @enderror"
			aria-label="Small"
			aria-describedby="inputGroup-sizing-sm"
			value="{{ old('terreno', $censo->terreno) }}"
		>
		@error('terreno')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form-group input-group input-group-sm mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Cría de Animales</span>
		</div>
		<input
			type="text"
			name="cria"
			pattern="[A-Za-z ]{1,}"
			required
			class="form-control col-lg-12 @error('cria') is-invalid @enderror"
			aria-label="Small"
			aria-describedby="inputGroup-sizing-sm"
			value="{{ old('cria', $censo->cria) }}"
		>
		@error('cria')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
</div>

<div class="checkbox col-lg-2">
	<label>4. Centros de salud</label><br>
	@foreach ($saluds as $id => $nombre)
		<label class="text-black-50" for="saluds">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->saluds->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('saluds', [])) ? 'checked' : '' }}
				name="saluds[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="checkbox col-lg-2">
	<label>5. Agua Consumo</label><br>
	@foreach ($consumos as $id => $nombre)
		<label class="text-black-50" for="consumos">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->consumos->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('consumos', [])) ? 'checked' : '' }}
				name="consumos[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="checkbox col-lg-2">
	<label>6. Agua Blanca</label><br>
	@foreach ($blancas as $id => $nombre)
		<label class="text-black-50" for="blancas">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->blancas->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('blancas', [])) ? 'checked' : '' }}
				name="blancas[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="checkbox col-lg-2">
	<label>7. Basura</label><br>
	@foreach ($basuras as $id => $nombre)
		<label class="text-black-50" for="basuras">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->basuras->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('basuras', [])) ? 'checked' : '' }}
				name="basuras[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="checkbox col-lg-3">
	<label>8. Almacenamiento de agua</label><br>
	@foreach ($almacenamientos as $id => $nombre)
		<label class="text-black-50" for="almacenamientos">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->almacenamientos->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('almacenamientos', [])) ? 'checked' : '' }}
				name="almacenamientos[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="checkbox col-lg-3">
	<label>9. Preparación de alimentos</label><br>
	@foreach ($preparacions as $id => $nombre)
		<label class="text-black-50" for="preparacions">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->preparacions->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('preparacions', [])) ? 'checked' : '' }}
				name="preparacions[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="checkbox col-lg-2 py-3">
	<label>10. Aguas servidas</label><br>
	@foreach ($servidas as $id => $nombre)
		<label class="text-black-50" for="servidas">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->servidas->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('servidas', [])) ? 'checked' : '' }}
				name="servidas[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="checkbox col-lg-3 py-3">
	<label>11. Manipulación de alimentos</label><br>
	@foreach ($manipulacions as $id => $nombre)
		<label class="text-black-50" for="manipulacions">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->manipulacions->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('manipulacions', [])) ? 'checked' : '' }}
				name="manipulacions[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="checkbox col-lg-2 py-3">
	<label>12. Mascotas</label><br>
	@foreach ($mascotas as $id => $nombre)
		<label class="text-black-50" for="mascotas">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->mascotas->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('mascotas', [])) ? 'checked' : '' }}
				name="mascotas[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="checkbox col-lg-3 py-3">
	<label>13. Condiciones asociadas</label><br>
	@foreach ($asociadas as $id => $nombre)
		<label class="text-black-50" for="asociadas">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->asociadas->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('asociadas', [])) ? 'checked' : '' }}
				name="asociadas[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="checkbox col-lg-2 py-3">
	<label>14. Recreación</label><br>
	@foreach ($recreacions as $id => $nombre)
		<label class="text-black-50" for="recreacions">
			<input
				type="checkbox"
				value="{{ $id }}"
				{{ $censo->recreacions->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('recreacions', [])) ? 'checked' : '' }}
				name="recreacions[]">
			{{ $nombre }}
		</label><br>
	@endforeach
</div>

<div class="form group col-lg-12">
	<label for="observaciones2">Observaciones (Enfermedades Digestivas – Piel – Respiratorias en los últimos 3 meses): </label><br>
	<textarea 
		class="form-control bg-light shadow-sm @error('observaciones2') is-invalid @enderror"
		name="observaciones2"
		required 
	>
	{{ old('observaciones2', $censo->observaciones2) }}
	</textarea>
	@error('observaciones2')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="py-4 col-lg-12">
	<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>

	<a class="btn btn-link btn-block"
		href="{{ route('censos.index')}}">
		Cancelar
	</a>
</div>