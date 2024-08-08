@extends('layouts.container')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 shadow row justify-content-center p-5 rounded">
            <h2 class="text-center mt-1">Registrarse</h2>
            <form method="POST" action="{{ route('register') }}" class="col-md-8">
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
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary col-12">
                        Registrarme
                    </button>
                </div>
        </div>
        </form>
    </div>
</div>
@endsection

