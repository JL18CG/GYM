@extends('dashboard.main')


@section('content-user')
    

    <div class="container d-block mb-5" style="background: url(http://drive.google.com/uc?export=view&id=1UYWxYiXUZ1w4s_XEf7eSo0afK6rN1lrM); background-size:100%; height: 500px;">
        <p class="p_white">Prueba de aptitud física</p>
        <h3 class="h3_white">Todo el cuerpo</h3>
        <p class="p_white ">Realiza la prueba de aptitud física para comenzar</p>
    </div>


 {{-- rutinas de presentacion  --}}
    <div class="container d-block">

        <div class="row no-gutters">

            
        <div class="col-lg-5 col-md-12 col-sm-12 fondo con mb-5 mr-5">
                <img src= "http://drive.google.com/uc?export=view&id=1CKXXcGVS6EEwK62sfI8M47vKEdIrbEEc" alt="" class="img-fluid fondo con"  >
                <div class="texto1 mb-5">Entrenamiento base</div>
                <div class="texto2 mt-5">7 minutos, 86 calorias</div>
        </div>

        <div class="col-lg-5 col-md-12 col-sm-12 fondo con">
                <img src="http://drive.google.com/uc?export=view&id=1SO5-snpg0SXWw2_UGHW5VbwJwXskUXDq" alt="" class="img-fluid">
                <div class="texto1 mb-3">Fuerte variedad</div>
                <div class="texto2 mt-5">18 minutos, 131 calorias</div>
        </div>

        <div class="col-lg-5 col-md-12 col-sm-12 fondo con mb-5 mr-5">
            <img src="http://drive.google.com/uc?export=view&id=1V6IaZEToPU1dmy6oXGYxJYI3h5cBRdLp" alt="" class="img-fluid">
            <div class="texto1 mb-3">Fuerza y cardeo</div>
            <div class="texto2 mt-5">20 minutos, 138 calorias</div>
         </div>

        <div class="col-lg-5 col-md-12 col-sm-12 fondo con">
            <img src="http://drive.google.com/uc?export=view&id=16b4wGiYKyGNEghNotM03ikoHE_VB2r1G" alt="" class="img-fluid">
            <div class="texto1 mb-3">Hombros fuertes</div>
            <div class="texto2 mt-5">19 minutos, 131 calorias</div>
        </div>



        </div>
        </div>

        {{-- FIN rutinas de presentacion  --}}
@endsection



@section('scripts')

@endsection
