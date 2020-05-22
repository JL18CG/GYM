@extends('dashboard.main')

@section('content-user')






<div class="container d-block">

    <div class="row no-gutters">

    @foreach($rutinas  as $r)

    <div class="col-lg-5 col-md-12 col-sm-12 fondo con ml-4 mb-4 mr-4 mt-4">
    <img src="{{ asset($r->imagen)}}" alt="{{$r->imagen}}" class="img-fluid">

        <div class="texto1 mb-3">{{$r->nombre}}</div>

    <div class="texto2 mt-5">Creado por: {{$r->id_user}}</div>
    </div>
   
    @endforeach


  </div>
  </div>

  @endsection
