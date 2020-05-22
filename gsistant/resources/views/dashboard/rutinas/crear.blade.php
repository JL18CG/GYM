@extends('dashboard.main')

@section('content-user')



<div class="container">
    @include('dashboard.partials.session-flash-status')
    @include('dashboard.partials.validation-error')
    <h3 class="mt-1" >Agregar una rutina</h3>
    <form action="{{ route("agregarrutina.store") }}" method="POST" enctype="multipart/form-data" >
        @include('dashboard.rutinas.formagregarrutina')
    </form>
</div>


@endsection