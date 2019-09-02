@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Regístrate') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf

						<p class="small text-center mb-4">Todos los campos son requeridos</p>

						<div class="form-group row">
							<label for="nip" class="col-md-4 col-form-label text-md-right">{{ __('Cédula') }}</label>

							<div class="col-md-6">
								<input id="nip" type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>

								@if($errors->any())
									@foreach( $errors->all() as $error )
										<span class="invalid-feedback" role="alert">
											<strong>{{ $error }}</strong>
										</span>
									@endforeach
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

							<div class="col-md-6">
								<input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

								@error('lastname')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="typeAccount" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Cuenta') }}</label>

							<div class="col-md-6">
								<select name="typeAccount" value="{{ old('typeAccount') }}" id="typeAccount" class="custom-select @error('typeAccount') is-invalid @enderror" required>
									<option disabled selected>Selecciona el tipo de cuenta</option>
									<option value="Estudiante">Estudiante</option>
									<option value="Profesor">Profesor</option>
								</select>

								@error('typeAccount')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma Contraseña') }}</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Register') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
