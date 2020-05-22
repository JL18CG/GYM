@extends('dashboard.main')


@section('content-admin')



<div class="container">
    @include('dashboard.partials.session-flash-status')
    <table class="table">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">Silicitud</th>
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
                <td> {{ $soli->nombre }}</td>
        
                <td>

                <button class="btn {{$soli->aprobado == 'si' ? 'btn-success' : 'btn-danger' }} boton aprovado " data-id="{{ $soli->id }}"><i class="fa {{$soli->aprobado == 'si' ? 'fa-check' : 'fa-times' }}"></i></button> 

    

   
                   
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
        console.log("Botón :"+button.getAttribute("data-id"));
        var id = button.getAttribute("data-id");

        $.ajax({
        method: "POST",
        url: "{{ URL::to("/") }}/solicitudes/val/"+id,
        data:{'_token':'{{ csrf_token() }}'}
        })
        .done(function( aprobado ) {
            if(aprobado == 'si'){
                $(button).removeClass("btn-danger");
                $(button).addClass("btn-success");
                $(button).children().removeClass("fa-times ");
                $(button).children().addClass("fa-check");
            }else{
                $(button).removeClass("btn-success");
                $(button).addClass("btn-danger");
                $(button).children().removeClass("fa-check");
                $(button).children().addClass("fa-times ");

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
