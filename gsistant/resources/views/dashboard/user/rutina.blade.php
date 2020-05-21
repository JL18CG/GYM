@extends('dashboard.main')

@section('content-user')






<div class="container d-block">

    <div class="row no-gutters">

    @foreach($rutinas  as $r)

    <div class="col-lg-5 col-md-12 col-sm-12 fondo con ml-4 mb-4 mr-4 mt-4">
        <img src="http://drive.google.com/uc?export=view&id=1SO5-snpg0SXWw2_UGHW5VbwJwXskUXDq" alt="" class="img-fluid">
        <div class="texto1 mb-3">{{$r->nombre}}</div>
    <div class="texto2 mt-5">{{$r->id}}</div>
    </div>
   
    @endforeach


  </div>
  </div>

  @endsection
