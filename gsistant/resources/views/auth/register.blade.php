@extends('layouts.app')

@section('content')
    <form class="form" method="POST" action="{{ route('register') }}">
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
        <input type="mail" class="form-control @error('email') is-invalid btn-round-right  @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Tu Correo">
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
        <input type="password" class="form-control @error('password') is-invalid btn-round-right  @enderror" name="password" required autocomplete="new-password" placeholder="Tu Contraseña" />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>

      <div class="input-group no-border input-lg mb-0">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fas fa-unlock-alt"></i>
          </span>
        </div>
        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña"/>
      </div>


    </div>
    <div class="card-footer text-center margin-t-p">
      <input type="submit" class="btn btn-primary btn-round btn-lg btn-block" value="Registrarme">

      <div class="pull-left">
        <h6>
          <a href="{{ route('login') }}" class="link">Ya Tengo Cuenta</a>
        </h6>
      </div>
      <div class="pull-right">
      </div>

  </form>
@endsection
