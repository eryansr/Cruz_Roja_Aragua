@csrf
<div class="form group col-lg-3 py-2">
	<label for="nombre">Nombre</label><br>
	<input class="form-control bg-light shadow-sm
		@error('nombre') is-invalid @enderror"
		id="nombre"
		type="text"
		pattern="[A-Za-z ]{2,}"
		title=" Campo Obligatorio"
		required
		name="nombre"
		value="{{ old('nombre', $voluntario->nombre) }}">
	@error('nombre')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="apellido">Apellido</label><br>
	<input class="form-control bg-light shadow-sm
		@error('apellido') is-invalid @enderror"
		id="apellido"
		type="text"
		pattern="[A-Za-z ]{2,}"
		title=" Campo Obligatorio"
		required
		name="apellido"
		value="{{ old('apellido', $voluntario->apellido) }}">
	@error('apellido')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="cedula">Cédula</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('cedula') is-invalid @enderror"
		id="cedula"
		type="text"
		name="cedula"
		pattern="[0-9]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('cedula', $voluntario->cedula) }}">
		@error('cedula')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="pasaporte">Pasaporte <span class="text-black-50">(opcional)</span></label><br>
	<input class="form-control  bg-light shadow-sm
	@error('pasaporte') is-invalid @enderror"
		id="pasaporte"
		type="text"
		name="pasaporte"
		value="{{ old('pasaporte', $voluntario->pasaporte) }}">
		@error('pasaporte')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-1 py-2">
	<label for="edad">Edad</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('edad') is-invalid @enderror"
		id="edad"
		type="number"
		name="edad"
		pattern="[0-9]{1,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('edad', $voluntario->edad) }}">
		@error('edad')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-2 py-2">
	<label for="nacimiento">Fecha de nacimiento</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('nacimiento') is-invalid @enderror"
		id="nacimiento"
		type="date"
		name="nacimiento"
		required
		value="{{ old('nacimiento', $voluntario->nacimiento) }}">
		@error('nacimiento')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="col-lg-2 py-2 px-4">
	<label>Nacionalidad</label><br>
	@foreach ($nacionalidads as $id => $nombre)
		<div class="form-check form-check-inline">
			<input class="form-check-input"
				type="radio"
				value="{{ $id }}"
				{{ $voluntario->nacionalidads->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('nacionalidads', [])) ? 'checked' : '' }}
				name="nacionalidads[]">
			<label class="text-black-50 form-check-label" for="nacionalidads">
				{{ $nombre }}
			</label>
		</div>
	@endforeach
</div>

<div class="col-lg-1 py-2 pr-3">
	<label>Sexo</label><br>
	@foreach ($sexos as $id => $nombre)
		<label class="text-black-50" for="sexos">
			<input
				type="radio"
				value="{{ $id }}"
				{{ $voluntario->sexos->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('sexos', [])) ? 'checked' : '' }}
				name="sexos[]">
			{{ $nombre }}
		</label>
	@endforeach
</div>

<div class="col-lg-3 py-2">
	<label class="px-2">Estado Cívil</label><br>
	@foreach ($civils as $id => $nombre)
		<div class="form-check form-check-inline">
			<input class="form-check-input"
				type="radio"
				value="{{ $id }}"
				{{ $voluntario->civils->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('civils', [])) ? 'checked' : '' }}
				name="civils[]">
			<label class="text-black-50 form-check-label" for="civils">
				{{ $nombre }}
			</label>
		</div>
	@endforeach
</div>

<div class="form group col-lg-3 py-2">
	<label for="habitacion">Dirección de habitación</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('habitacion') is-invalid @enderror"
		id="habitacion"
		type="text"
		name="habitacion"
		value="{{ old('habitacion', $voluntario->habitacion) }}">
	@error('habitacion')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

@yield('select')

<div class="form group col-lg-3 py-2">
	<label for="tel_movil">Teléfono móvil</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('tel_movil') is-invalid @enderror"
		id="tel_movil"
		type="text"
		name="tel_movil"
		pattern="[0-9]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('tel_movil', $voluntario->tel_movil) }}">
	@error('tel_movil')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="tel_fijo">Teléfono fijo</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('tel_fijo') is-invalid @enderror"
		id="tel_fijo"
		type="text"
		name="tel_fijo"
		pattern="[0-9]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('tel_fijo', $voluntario->tel_fijo) }}">
		@error('tel_fijo')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="tel_emergencia">Teléfono en caso de emergencia</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('tel_emergencia') is-invalid @enderror"
		id="tel_emergencia"
		type="text"
		name="tel_emergencia"
		pattern="[0-9]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('tel_emergencia', $voluntario->tel_emergencia) }}">
		@error('tel_emergencia')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="email">Correo electrónico</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('email') is-invalid @enderror"
		id="email"
		type="email"
		name="email"
		required
		value="{{ old('email', $voluntario->email) }}">
		@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="alergia">Alergias a:</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('alergia') is-invalid @enderror"
		id="alergia"
		type="text"
		name="alergia"
		required
		value="{{ old('alergia', $voluntario->alergia) }}">
		@error('alergia')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="col-lg-3 py-2">
	<label>¿Es donante de sangre?</label><br>
	@foreach ($donantes as $id => $nombre)
		<div class="form-check form-check-inline">
			<input class="form-check-input"
				type="radio"
				value="{{ $id }}"
				{{ $voluntario->donantes->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('donantes', [])) ? 'checked' : '' }}
				name="donantes[]">
			<label class="text-black-50 form-check-label" for="donantes">
				{{ $nombre }}
			</label>
		</div>
	@endforeach
</div>

<div class="form group col-lg-3 py-2">
	<label for="trabajo">Dirección de trabajo</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('trabajo') is-invalid @enderror"
		id="trabajo"
		type="text"
		name="trabajo"
		value="{{ old('trabajo', $voluntario->trabajo) }}">
		@error('trabajo')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="tel_trabajo">Teléfono de trabajo</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('tel_trabajo') is-invalid @enderror"
		id="tel_trabajo"
		type="text"
		name="tel_trabajo"
		pattern="[0-9]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('tel_trabajo', $voluntario->tel_trabajo) }}">
		@error('tel_trabajo')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

	
<div class="col-lg-2 py-2">
	<label>¿Tiene Hijos?</label><br>
	
		<div class="form-check form-check-inline">
			<input class="form-check-input"
				type="radio"
				required
				onclick="x()"
				value="1"
				{{ $voluntario->hijos->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('hijos', [])) ? 'checked' : '' }}
				name="hijos[]">
			<label class="text-black-50 form-check-label" for="hijos">
				Si
			</label>

		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input"
				type="radio"
				required
				onclick="y()"
				value="2"
				{{ $voluntario->hijos->pluck('id')->contains($id) ? 'checked' : '' }}
				{{ in_array($id, old('hijos', [])) ? 'checked' : '' }}
				name="hijos[]">
			<label class="text-black-50 form-check-label" for="hijos">
				No
			</label>
		</div>
</div>

<div class="form group col-lg-2 py-2">
	<label for="boys">Niños <span class="text-black-50">(opcional)</span></label><br>
	<input class="form-control bg-light shadow-sm"
		id="1"
		type="text"
		name="boys"
		value="{{ old('boys', $voluntario->boys) }}">
</div>

<div class="form group col-lg-2 py-2">
	<label for="girls">Niñas <span class="text-black-50">(opcional)</span></label><br>
	<input class="form-control bg-light shadow-sm"
		id="2"
		type="text"
		name="girls"
		value="{{ old('girls', $voluntario->girls) }}">
</div>

<script>
function y() {
  document.getElementById("1").disabled = true;
  document.getElementById("2").disabled = true;
}
function x() {
  document.getElementById("1").disabled = false;
  document.getElementById("2").disabled = false;
}
</script>




<div class="form group col-lg-3 py-2">
	<label for="discapacidad">Discapacidad <span class="text-black-50">(opcional)</span></label><br>
	<input class="form-control bg-light shadow-sm"
		id="discapacidad"
		type="text"
		name="discapacidad"
		pattern="[A-Za-z ]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('discapacidad', $voluntario->discapacidad) }}">
</div>

<div class="form group col-lg-3 py-2">
	<label for="altura">Altura</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('altura') is-invalid @enderror"
		id="altura"
		type="text"
		name="altura"
		required
		placeholder="En cm Ej: 170 "
		value="{{ old('altura', $voluntario->altura) }}">
		@error('altura')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="peso">Peso</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('peso') is-invalid @enderror"
		id="peso"
		type="text"
		name="peso"
		required
		placeholder="En Kg Ej: 70 "
		value="{{ old('peso', $voluntario->peso) }}">
		@error('peso')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="talla_franela">Talla de franela</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('talla_franela') is-invalid @enderror"
		id="talla_franela"
		type="text"
		name="talla_franela"
		required
		value="{{ old('talla_franela', $voluntario->talla_franela) }}">
		@error('talla_franela')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="talla_pantalon">Talla de pantalón</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('talla_pantalon') is-invalid @enderror"
		id="talla_pantalon"
		type="text"
		name="talla_pantalon"
		required
		value="{{ old('talla_pantalon', $voluntario->talla_pantalon) }}">
		@error('talla_pantalon')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="talla_calzado">Talla de calzado</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('talla_calzado') is-invalid @enderror"
		id="talla_calzado"
		type="text"
		name="talla_calzado"
		required
		value="{{ old('talla_calzado', $voluntario->talla_calzado) }}">
		@error('talla_calzado')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-6 py-2">
	<label for="experiencia">¿Ha tenido alguna experiencia como voluntario? <span class="text-black-50">(opcional)</span></label><br>
	<input class="form-control bg-light shadow-sm"
		id="experiencia"
		type="text"
		name="experiencia"
		pattern="[A-Za-z ]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('experiencia', $voluntario->experiencia) }}">
</div>

<div class="form group col-lg-6 py-2">
	<label for="labores">¿Qué labores ha realizado como voluntario?</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('labores') is-invalid @enderror"
		id="labores"
		type="text"
		name="labores"
		pattern="[A-Za-z ]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('labores', $voluntario->labores) }}">
		@error('labores')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-6 py-2">
	<label for="hobbies">¿Cuáles son sus hobbies e intereses?</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('hobbies') is-invalid @enderror"
		id="hobbies"
		type="text"
		name="hobbies"
		pattern="[A-Za-z ]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('hobbies', $voluntario->hobbies) }}">
		@error('hobbies')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-6 py-2">
	<label for="cruz_roja">¿Qué es para ud. La Cruz Roja Venezolana?</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('cruz_roja') is-invalid @enderror"
		id="cruz_roja"
		type="text"
		name="cruz_roja"
		pattern="[A-Za-z ]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('cruz_roja', $voluntario->cruz_roja) }}">
		@error('cruz_roja')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-6 py-2">
	<label for="conocimiento">¿Cómo tuvo conocimiento del servicio de Voluntario?</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('conocimiento') is-invalid @enderror"
		id="conocimiento"
		type="text"
		name="conocimiento"
		pattern="[A-Za-z ]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('conocimiento', $voluntario->conocimiento) }}">
		@error('conocimiento')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-6 py-2">
	<label for="tiempo">Especifique el tiempo libre que dispone para ejercer el voluntariado</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('tiempo') is-invalid @enderror"
		id="tiempo"
		type="text"
		name="tiempo"
		value="{{ old('tiempo', $voluntario->tiempo) }}">
		@error('tiempo')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-6 py-2">
	<label for="cronica">¿Padece alguna enfermedad crónica? <span class="text-black-50">(opcional)</span></label><br>
	<input class="form-control  bg-light shadow-sm"
		id="cronica"
		type="text"
		name="cronica"
		pattern="[A-Za-z ]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('cronica', $voluntario->cronica) }}">
</div>

<div class="form group col-lg-6 py-2">
	<label for="seguridad">¿Pertenece a algún Cuerpo de seguridad? <span class="text-black-50">(opcional)</span></label><br>
	<input class="form-control  bg-light shadow-sm"
		id="seguridad"
		type="text"
		name="seguridad"
		pattern="[A-Za-z ]{2,}"
		title=" Campo Obligatorio"
		required
		value="{{ old('seguridad', $voluntario->seguridad) }}">
</div>

<button class="btn btn-primary btn-lg btn-block pt-2">{{ $btnText }}</button>

<a class="btn btn-link btn-block"
	href="{{ route('voluntarios.index')}}">
	Cancelar
</a>