@extends('dashboard.main')


@section('content-user')

<div class="container">









































    
    {{-- <a class="btn btn-success mb-3" href="{{ route('agregarrutina.create') }}">
        <i class="fa fa-plus"></i> Crear
    </a> 
    'id_user','nombre','imagen','aprobado','nivelsuscripcion'
    <table class="table">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">Nombre</th>
            <th scope="col">Aprobado</th>
            <th scope="col">Nivel de suscripcion</th>
          </tr>
        </thead>
    
        <tbody>
            @foreach ($rutinas2 as $r2)
            @if (auth()->user()->id != $r2->id && $r2->rol_id=="1")
            <tr class="text-center">
                <td> Administrador</td>
                <td> {{ $r2->email }}</td>
                <td> {{ $r2->created_at }}</td>
        
                <td>
                    <a href="{{ route('admin.edit',$user->id) }}" class="btn btn-info boton"><i class="fa fa-edit"></i></a>
        
            
                <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $user->id }}" data-nombre="{{ $user->name}}"
                    class="btn btn-danger boton"><i class="fa fa-trash"></i></button>
    
               
        
                </td>
              </tr>  
            @endif
        
          @endforeach
        </tbody>
      </table> --}}


      </div>