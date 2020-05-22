@extends('dashboard.main')


@section('content-admin')

<div class="container">
    @include('dashboard.partials.session-flash-status')
    <a class="btn btn-success mb-3" href="{{ route('admin.create') }}">
        <i class="fa fa-plus"></i>  Crear
    </a>
    <a class="btn btn-info mb-3" href="{{ route('admin.export') }}">
      <i class="fa fa-file-excel"></i>  Exportar
    </a>
    <a class="btn btn-warning mb-3" href="{{ route('admin.export') }}">
      <i class="fa fa-file-excel"></i>  Importar
    </a>
    <table class="table">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">Rol</th>
            <th scope="col">Email</th>
            <th scope="col">Creación</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
    
        <tbody>
            @foreach ($users as $user)
            @if (auth()->user()->id != $user->id && $user->rol_id=="1")
            <tr class="text-center">
                <td> Administrador</td>
                <td> {{ $user->email }}</td>
                <td> {{ $user->created_at }}</td>
        
                <td>
                    <a href="{{ route('admin.edit',$user->id) }}" class="btn btn-info boton"><i class="fa fa-edit"></i></a>
        
            
                <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $user->id }}" data-nombre="{{ $user->name}}"
                    class="btn btn-danger boton"><i class="fa fa-trash"></i></button>
    
               
        
                </td>
              </tr>  
            @endif
        
          @endforeach
        </tbody>
      </table>
      
      
    
    {{ $users->links() }}
    
   
  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title text-center" id="exampleModalLabel">Eliminar Administrador</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p class="confirm-d d-block text-center"></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Mejor no</button>

            <form id="formDelete" method="POST" action="{{ route('admin.destroy',0) }}"
                data-action="{{ route('admin.destroy',0) }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar Administrador</button>
            </form>
        </div>
      </div>
    </div>
  </div>








   
    
    <script>
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
          modal.find('.confirm-d').text('Se eliminará el usuario '+id+ ': ' + nombre + ' , de manera permanente')
      })
    
    });
    
    </script>
    
    
    
    

</div>


@endsection



@section('scripts')

@endsection
