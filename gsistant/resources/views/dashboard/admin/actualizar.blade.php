@extends('dashboard.main')

@section('content-admin')

<div class="container">
    @include('dashboard.partials.session-flash-status')
    <a class="btn btn-danger mt-3 mb-3" href="{{ route('admin.index') }}">
        <i class="fas fa-arrow-left"></i> Regresar
    </a>
    @include('dashboard.partials.validation-error')
    <h3 class="mt-1" >Agregar un Administrador</h3>
    <form action="{{ route("admin.update",$admin->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.admin._form',['mods' => "si"])
    </form>
</div>


@endsection