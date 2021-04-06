@csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $usuario->name) }}">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $usuario->email) }}">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{ old('password', $usuario->password) }}">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="checkbox d-flex justify-content-center">
    @foreach ($roles as $id => $name)
    	<div class="px-3">
			<label for="roles">
				<input
					type="checkbox"
					value="{{ $id }}"
					{{ $usuario->roles->pluck('id')->contains($id) ? 'checked' : '' }}
                    {{ in_array($id, old('roles', [])) ? 'checked' : '' }}
					name="roles[]">
				{{ $name }}
			</label>
		</div>
	@endforeach
</div>

<div class="form-group row mb-0">
    <div class="btn-group col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ $btnText }}
        </button>
        <a class="btn btn-link btn-block"
			href="{{ route('usuarios.index')}}">
			Cancelar
		</a>
    </div>
</div>