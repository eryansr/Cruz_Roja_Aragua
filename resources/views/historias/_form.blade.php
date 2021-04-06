@csrf
<div class="form group col-lg-3 py-2">
	<label for="nombre">Nombre</label><br>
	<input class="form-control bg-light shadow-sm
		@error('nombre') is-invalid @enderror"
		id="nombre"
		type="text"
		required
		pattern="[A-Za-z ]{2,}"
		name="nombre"
		value="{{ old('nombre', $historia->nombre) }}">
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
		required
		pattern="[A-Za-z ]{2,}"
		name="apellido"
		value="{{ old('apellido', $historia->apellido) }}">
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
		required
		pattern="[A-Za-z ]{2,}"
		name="cedula"
		value="{{ old('cedula', $historia->cedula) }}">
		@error('cedula')
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
		pattern="[0-9]{1,}"
		required
		name="edad"
		value="{{ old('edad', $historia->edad) }}">
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
		value="{{ old('nacimiento', $historia->nacimiento) }}">
		@error('nacimiento')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="habitacion">Dirección de habitación</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('habitacion') is-invalid @enderror"
		id="habitacion"
		type="text"
		required
		pattern="[A-Za-z ]{2,}"
		name="habitacion"
		value="{{ old('habitacion', $historia->habitacion) }}">
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
		type="number"
		pattern="[0-9]{1,}"
		required
		name="tel_movil"
		value="{{ old('tel_movil', $historia->tel_movil) }}">
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
		type="number"
		pattern="[0-9]{1,}"
		required
		name="tel_fijo"
		value="{{ old('tel_fijo', $historia->tel_fijo) }}">
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
		type="number"
		pattern="[0-9]{1,}"
		required
		name="tel_emergencia"
		value="{{ old('tel_emergencia', $historia->tel_emergencia) }}">
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
		value="{{ old('email', $historia->email) }}">
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
		required
		pattern="[A-Za-z ]{2,}"
		name="alergia"
		value="{{ old('alergia', $historia->alergia) }}">
		@error('alergia')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="trabajo">Dirección de trabajo</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('trabajo') is-invalid @enderror"
		id="trabajo"
		type="text"
		required
		pattern="[A-Za-z ]{2,}"
		name="trabajo"
		value="{{ old('trabajo', $historia->trabajo) }}">
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
		type="number"
		pattern="[0-9]{1,}"
		required
		name="tel_trabajo"
		value="{{ old('tel_trabajo', $historia->tel_trabajo) }}">
		@error('tel_trabajo')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="discapacidad">Discapacidad <span class="text-black-50">(opcional)</span></label><br>
	<input class="form-control bg-light shadow-sm"
		id="discapacidad"
		type="text"
		required
		pattern="[A-Za-z ]{2,}"
		name="discapacidad"
		value="{{ old('discapacidad', $historia->discapacidad) }}">
</div>

<div class="form group col-lg-3 py-2">
	<label for="altura">Altura</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('altura') is-invalid @enderror"
		id="altura"
		type="number"
		pattern="[0-9]{1,}"
		required
		name="altura"
		value="{{ old('altura', $historia->altura) }}">
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
		type="number"
		pattern="[0-9]{1,}"
		required
		name="peso"
		value="{{ old('peso', $historia->peso) }}">
		@error('peso')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-12 py-3">
	<label for="observaciones1">Observaciones</label><br>
	<textarea 
		class="form-control bg-light shadow-sm"
		pattern="[A-Za-z]{3,}"
		required 
		name="observaciones1"
	>{{ old('observaciones1', $historia->observaciones1) }}</textarea>
</div>

<div class="col-12">
	<h3>Datos del Especialista</h3>
	<hr>
</div>

<div class="form group col-lg-3 py-2">
	<label for="nombree">Nombre del especialista</label><br>
	<input class="form-control bg-light shadow-sm
		@error('nombree') is-invalid @enderror"
		id="nombree"
		type="text"
		required
		pattern="[A-Za-z ]{2,}"
		name="nombree"
		value="{{ old('nombree', $historia->nombree) }}">
	@error('nombree')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="apellidoe">Apellido del especialista</label><br>
	<input class="form-control bg-light shadow-sm
		@error('apellidoe') is-invalid @enderror"
		id="apellidoe"
		type="text"
		required
		pattern="[A-Za-z ]{2,}"
		name="apellidoe"
		value="{{ old('apellidoe', $historia->apellidoe) }}">
	@error('apellidoe')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="especializacion">Especialización</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('especializacion') is-invalid @enderror"
		id="especializacion"
		type="text"
		required
		pattern="[A-Za-z ]{2,}"
		name="especializacion"
		value="{{ old('especializacion', $historia->especializacion) }}">
		@error('especializacion')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-3 py-2">
	<label for="consulta">Tipo de Consulta</label><br>
	<input class="form-control  bg-light shadow-sm
	@error('consulta') is-invalid @enderror"
		id="consulta"
		type="text"
		required
		pattern="[A-Za-z ]{2,}"
		name="consulta"
		value="{{ old('consulta', $historia->consulta) }}">
		@error('consulta')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="form group col-lg-12 py-3">
	<label for="observaciones2">Observaciones</label><br>
	<textarea 
		class="form-control bg-light shadow-sm"
		pattern="[A-Za-z]{3,}"
		required 
		name="observaciones2"
	>{{ old('observaciones2', $historia->observaciones2) }}</textarea>
</div>

<button class="btn btn-primary btn-lg btn-block pt-2">{{ $btnText }}</button>

<a class="btn btn-link btn-block"
	href="{{ route('historias.index')}}">
	Cancelar
</a>