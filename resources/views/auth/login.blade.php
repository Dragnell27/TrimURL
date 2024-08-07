@extends('layouts.container')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 shadow row justify-content-center p-5 rounded">
                <h2 class="text-center mt-1">Inicio de sesion</h2>
                <form method="POST" action="{{ route('login') }}" class="col-md-8">
                    @csrf
                    <div class="col-12">
                        <label for="email" class="">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    <div class="col-12 mt-2">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mt-2">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            Recordar contraseña
                        </label>
                    </div>

                    <div class="col-">
                        <button type="submit" class="btn btn-primary col-12">
                            Iniciar sesion
                        </button>
                    </div>

                    {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
