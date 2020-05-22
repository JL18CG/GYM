@extends('dashboard.main')


@section('content-admin')



<div class="container">

    <div class="col-6 mb-4">
        <form action="{{ route('reportes.index')}}" method="GET" id="filter">
            <div class="form-row">
                <div class="col-10 mt-2">
                    <select name="created_at" id="" class="form-control">
                        <option value="DESC">Descendente</option>
                        <option  value="ASC" {{ request('created_at')=="ASC" ? "selected":'' }}>Ascendente</option>
                    </select>
                </div>
                <div class="col-2 mt-2">
                    <button type="submit" class="btn bt btn-info">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    @include('dashboard.partials.session-flash-status')
    <table class="table">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Nivel</th>
          </tr>
        </thead>
    
        <tbody>
            @foreach ($users as $user)
           
            <tr class="text-center">
                <td> {{ $user->id }}</td>
                <td> {{ $user->name }}</td>
                <td> {{ $user->email }}</td>
                <td> {{ $user->Apellido }}</td>
              </tr>  

        
          @endforeach
        </tbody>
      </table>
      
   
    








   
    
    <script>

    
    </script>
    


@endsection



@section('scripts')

@endsection
