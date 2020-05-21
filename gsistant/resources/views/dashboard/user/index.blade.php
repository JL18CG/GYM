@extends('dashboard.main')


@section('content-user')

<link href="{{ asset('web/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
<link href="{{ asset('web/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
{{-- <link href="{{ asset('web/assets/vendor/animate.css/animate.min.css" rel="stylesheet')}}">
<link href="{{ asset('web/assets/vendor/venobox/venobox.css" rel="stylesheet')}}"> --}}

<!-- Template Main CSS File -->
<link href="{{ asset('web/assets/css/style.css')}}" rel="stylesheet">

    <div class="container d-block mb-5" style="background: url(http://drive.google.com/uc?export=view&id=1UYWxYiXUZ1w4s_XEf7eSo0afK6rN1lrM); background-size:100%; height: 500px;">
        <p class="p_white">Prueba de aptitud física</p>
        <h3 class="h3_white">Todo el cuerpo</h3>
        <p class="p_white ">Realiza la prueba de aptitud física para comenzar</p>
    </div>

    @if (auth()->user()->suscripcion=0)
    <!-- ======= Whu Us Section ======= -->
<section id="subscribe" class="why-us">
  <div class="container">

    <div class="section-title">
      <h2>Suscríbete <span>para obtén beneficios</span></h2>
      <p>Tenemos distintos planes que pueden adaptarse a tus necesidades y sin gastar de más</p>
    </div>

    <div class="row">

      <div class="col-lg-3 mt-4 mt-lg-0">
        <div class="box">
          <span>Gratis</span>
          <h4>$0.00</h4>
          <p>Acceso a rutinas básicas y de calentamiento, así como algunas rutinas de ejercicios de cardio.</p>
          
          <br>
          <a href="{{route('login')}}" class="btn-menu animated fadeInUp scrollto">Comprar</a>
        </div>
      </div>

      <div class="col-lg-3 mt-4 mt-lg-0">
        <div class="box">
          <span>Principiante</span>
          <h4>$150.00/mes</h4>
          <p>Ideal para todos aquellos que quieran iniciarse en el mundo del ejercicio físico, con rutinas especiales para cada zona del cuerpo.</p>
          <a href="{{route('login')}}" class="btn-menu animated fadeInUp scrollto">Comprar</a>
        </div>
      </div>

      <div class="col-lg-3 mt-4 mt-lg-0">
        <div class="box">
          <span>Intermedio</span>
          <h4>$250.00/mes</h4>
          <p>Acceso a una gran cantidad de rutinas, así como planes de rutinas especiales y asesoría personal por parte de nuestros entrenadores.</p>
          <a href="{{route('login')}}" class="btn-menu animated fadeInUp scrollto">Comprar</a>
        </div>
      </div>

      <div class="col-lg-3 mt-4 mt-lg-0">
        <div class="box">
          <span>Experto</span>
          <h4>$400.00/mes</h4>
          <p>Acceso a todo el contenido, rutinas especiales, planes alimenticios y asesoría personal a cualquier hora.</p>
          <br>
        <a href="{{route('login')}}" class="btn-menu animated fadeInUp scrollto">Comprar</a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Whu Us Section -->   
  @endif

 {{-- rutinas de presentacion  --}}
    <div class="container d-block">

        <div class="row no-gutters">

            
        <div class="col-lg-5 col-md-12 col-sm-12 fondo con ml-4 mb-4 mr-4 mt-4">
                <img src= "http://drive.google.com/uc?export=view&id=1CKXXcGVS6EEwK62sfI8M47vKEdIrbEEc" alt="" class="img-fluid fondo con"  >
                <div class="texto1 mb-5">Entrenamiento base</div>
                <div class="texto2 mt-5">7 minutos, 86 calorias</div>
        </div>

        <div class="col-lg-5 col-md-12 col-sm-12 fondo con ml-4 mb-4 mr-4 mt-4">
                <img src="http://drive.google.com/uc?export=view&id=1SO5-snpg0SXWw2_UGHW5VbwJwXskUXDq" alt="" class="img-fluid">
                <div class="texto1 mb-3">Fuerte variedad</div>
                <div class="texto2 mt-5">18 minutos, 131 calorias</div>
        </div>

        <div class="col-lg-5 col-md-12 col-sm-12 fondo con ml-4 mb-4 mr-4 mt-4">
            <img src="http://drive.google.com/uc?export=view&id=1V6IaZEToPU1dmy6oXGYxJYI3h5cBRdLp" alt="" class="img-fluid">
            <div class="texto1 mb-3">Fuerza y cardeo</div>
            <div class="texto2 mt-5">20 minutos, 138 calorias</div>
         </div>

        <div class="col-lg-5 col-md-12 col-sm-12 fondo con ml-4 mb-4 mr-4 mt-4">
            <img src="http://drive.google.com/uc?export=view&id=16b4wGiYKyGNEghNotM03ikoHE_VB2r1G" alt="" class="img-fluid">
            <div class="texto1 mb-3">Hombros fuertes</div>
            <div class="texto2 mt-5">19 minutos, 131 calorias</div>
        </div>


        
        </div>

        {{-- FIN rutinas de presentacion  --}}





@endsection



@section('scripts')
<script src="{{ asset('web/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('web/assets/js/main.js')}}"></script>
@endsection
