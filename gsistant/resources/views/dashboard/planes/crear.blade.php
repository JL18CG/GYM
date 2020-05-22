
@extends('dashboard.main')

@section('content-user')



<div class="container">
    @include('dashboard.partials.session-flash-status')
    @include('dashboard.partials.validation-error')
    <h3 class="mt-1" >Agregar un plan alimenticio</h3>
    <form action="{{ route("agregarplan.store") }}" method="POST" enctype="multipart/form-data" >
        @include('dashboard.planes.formagregarplan')
    </form>
</div>


@endsection