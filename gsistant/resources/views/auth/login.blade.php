@extends('layouts.app')

@section('content')
    <form method="POST" class="form" action="{{ route('login') }}">
        @csrf

      <div class="card-header text-center">
        <div class="logo-container w-100 mb-4">
          <img src="{{ asset('pagina/assets/img/now-logo.png')}}" alt="">
        </div>
    </div>


    <div class="card-body">
      <div class="input-group no-border input-lg">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fas fa-envelope"></i>
          </span>
        </div>
        <input placeholder="Tu Correo" type="email" class="form-control @error('email') is-invalid btn-round-right @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="input-group no-border input-lg">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fas fa-unlock-alt"></i>
          </span>
        </div>
        <input placeholder="Tu Contraseña" type="password" class="form-control @error('password') is-invalid btn-round-right @enderror " name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong class="btn-round">{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>
    <div class="card-footer text-center">
     <input type="submit" class="btn btn-primary btn-round btn-lg btn-block" value="Iniciar Sesión">
      <div class="pull-left">
        <h6>
          <a href="{{ route('register') }}" class="link">Crear una Cuenta</a>
        </h6>
      </div>
      <div class="pull-right">
      </div>
   </form>
@endsection
