<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    GSISTANT
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{ asset('pagina/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('pagina/assets/css/now-ui-kit.css?v=1.3.0')}}"  rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('pagina/assets/demo/demo.css')}}"  rel="stylesheet"/>
  <link href="{{ asset('css/all.css')}}"  rel="stylesheet"/>
  <link href="{{ asset('css/styles.css')}}"  rel="stylesheet"/>

</head>

<body class="login-page sidebar-collapse">

  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent nav-border-none " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">

        </a>

      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="#!" rel="tooltip" data-placement="bottom" >

        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{asset('pagina/assets/img/blurred-image-1.jpg')}}">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link nav-link-color" href="#">Nuestras Redes </a>
        </li>
          <li class="nav-item">
            <a class="nav-link nav-link-color" rel="tooltip" title="Síguenos en Twitter" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-color" rel="tooltip" title="Visita nuestro Facebook" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link nav-link-color" rel="tooltip" title="Síguenos en Instagram" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{ asset('pagina/assets/img/login.jpg')}}"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">


             @yield('content')




            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer mb-0 mt-0 pt-0 pb-1">
      <div class=" container mb-0 mt-0 pt-0">
        <nav>
         
        </nav>
        <div class="copyright" id="copyright mb-0 mt-0" >
          &copy; 2020 Todos los Derechos Reservados.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('pagina/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('pagina/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('pagina/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('pagina/assets/js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('pagina/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{ asset('pagina/assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('pagina/assets/js/now-ui-kit.js?v=1.3.0')}}" type="text/javascript"></script>




</body>

</html>
