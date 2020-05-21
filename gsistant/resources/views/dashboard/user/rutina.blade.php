@extends('dashboard.main')

@section('content-user')
<div class="row">
    @foreach($rutinas  as $r) 
          
            <div class="col-sm-12 col-md-6 col-xl-6 mb-5">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12 mr-2">
                                    <div class="row">
                                        <img src="" class="img-fluid mb-3" alt="imagen">
                                        <div class="col-12">
                                            <a class="h5 mt-2 text-gray-800" href=""></a>
                                        <h3 class="h6 mt-2 text-gray-800">Titulo:</h3>
                                        </div>
                                        <div class="col-12">
                                        
                                        <label for="#" class="float-right mr-2 mt-2">Nivel: </label>
                                    </div> 

                                </div>
                              
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
    @endforeach 


  </div>
  
  @endsection