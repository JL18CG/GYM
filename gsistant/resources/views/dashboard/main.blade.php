<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href=" {{ asset('pagina/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('pagina/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Principal</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('pagina/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('pagina/assets/css/now-ui-kit.css?v=1.2.0')}}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('pagina/assets/demo/demo.css')}}" rel="stylesheet" />

    <!-- CSS personalizados -->
    <link href="{{ asset('css/all.css')}}"  rel="stylesheet"/>
    <link href="{{ asset('css/styles.css')}}"  rel="stylesheet"/>

  </head>
  <body>


      <nav class="navbar navbar-expand-lg bg-primary">
             <div class="container">
                    <img src="{{ asset('pagina/assets/img/now-logo.png')}}" class="logo-nav" alt="">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                 <ul class="navbar-nav">
                   <li class="nav-item active mr-2">
                     <a class="nav-link" href="#"><i class="now-ui-icons shopping_shop item-m"></i>Principal</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#"><i class="now-ui-icons media-2_sound-wave item-m"></i>Entrenamientos</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                             <i class="now-ui-icons design_bullet-list-67 item-m"></i>
                             Mi Panel de Entrenamientos
                       </a>
                   </li>
                 </ul>
               </div>



               <div class="collapse navbar-collapse" id="example-navbar-primary">
               <ul class="navbar-nav ml-auto">
                   <li class="nav-item dropdown active">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img src=" {{ asset('pagina/assets/images/users-profiles/default.png') }}" class="img-profile">
                       {{Auth::user()->email}}
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                       <a class="dropdown-item text-right txt-color" href="#"><i class="fas fa-user icono-m"></i>Perfil</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item txt-color" href="#"><i class="fas fa-hand-holding-usd  icono-m"></i>Suscripción</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item txt-color" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                     <i class="fas fa-sign-out-alt icono-m"></i>Cerrar Sesión</a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>

                     </div>
                   </li>
               </ul>
             </div>



             </div>
           </nav>





    <!--   Core JS Files   -->
    <script src="{{ asset('pagina/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('pagina/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('pagina/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('pagina/assets/js/plugins/bootstrap-switch.js')}}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('pagina/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>

    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src=" {{asset('pagina/assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>

    <!--  Google Maps Plugin    -->
    <!--<script  src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>  -->


    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('pagina/assets/js/now-ui-kit.js?v=1.3.0')" type="text/javascript"></script>
  </body>
</html>
