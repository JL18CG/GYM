@extends('dashboard.main')


@section('content-admin')



<div class="container">
    @include('dashboard.partials.session-flash-status')
    <table class="table">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Título</th>
            <th scope="col">Aprobado</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
    
        <tbody>
            @foreach ($solis as $soli)
           
            <tr class="text-center">
                <td> {{ $soli->id }}</td>
                <td> {{ $soli->email }}</td>
                <td> {{ $soli->titulo }}</td>
        
                <td>
                
                <button class="btn btn-success boton aprovado " data-id="{{ $soli->id_rutina }}"><i class="fa fa-check"></i></button> 
                <a href="" class="btn btn-danger boton"><i class="fa fa-times"></i></a>     
                   
                </td>

                <td>
       
                    <a href="" class="btn btn-info boton"><i class="fa fa-eye"></i></a>   
                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $soli->id }}" data-nombre="{{ $soli->email}}"
                        class="btn btn-danger boton"><i class="fa fa-trash"></i></button>
        
                   
            
                    </td>
              </tr>  

        
          @endforeach
        </tbody>
      </table>
      
      
    
    
   
  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title text-center" id="exampleModalLabel">Eliminar Solicitud</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p class="confirm-d d-block text-center"></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Mejor no</button>

            <form id="formDelete" method="POST" action="{{ route('solicitudes.destroy',0) }}"
                data-action="{{ route('solicitudes.destroy',0) }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar Solicitud</button>
            </form>
        </div>
      </div>
    </div>
  </div>








   
    
    <script>
document.querySelectorAll(".aprovado").forEach(button => button.addEventListener("click",function(){
        console.log("Hola Mund :"+button.getAttribute("data-id"));
        var id = button.getAttribute("data-id");

        $.ajax({
        method: "POST",
        url: "{{ URL::to("/") }}/dashboard/post-coment/proccess/"+id,
        data:{'_token':'{{ csrf_token() }}'}
        })
        .done(function( approved ) {
            if(approved == 1){
                $(button).removeClass("btn-danger");
                $(button).addClass("btn-success");
                $(button).text("Aprovado");
            }else{
                $(button).removeClass("btn-success");
                $(button).addClass("btn-danger");
                $(button).text("Rechazado");
            }
        });



    }));




    $(document).ready(function(){
    
      $('#deleteModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var id = button.data('id');
          var nombre= button.data('nombre');
          action = $('#formDelete').attr('data-action').slice(0,-1)
          action += id
          console.log(action)
    
          $('#formDelete').attr('action',action)
    
          var modal = $(this)
          modal.find('.confirm-d').text('Se eliminará la solicitud de ' + nombre + ' , de manera permanente')
      })
    
    });
    
    </script>
    


@endsection



@section('scripts')

@endsection
