@extends('dashboard.main')

@section('content-user')
    





<div class="container d-block">

    <div class="row no-gutters">

    @foreach($planes  as $p) 
          
    <div class="col-lg-5 col-md-12 col-sm-12 fondo con ml-4 mb-4 mr-4 mt-4">
    <img src="{{ asset($p->imagen)}}" alt="{{$p->imagen}}" class="img-fluid">

        <div class="texto1 mb-3">{{$p->nombre}}</div>

    <div class="texto2 mt-5">Creado por: {{$p->id_user}}</div>
    </div>
   
    @endforeach 


  </div>
  </div>
  
  @endsection