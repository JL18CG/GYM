<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GSISTANT</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="http://drive.google.com/uc?export=view&id=15Rx4Wp8C2LKyaMmiua5R0CnDC0OtaPOp" rel="icon">
  <link href="http://drive.google.com/uc?export=view&id=15Rx4Wp8C2LKyaMmiua5R0CnDC0OtaPOp" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('web/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('web/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('web/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('web/assets/vendor/animate.css/animate.min.css" rel="stylesheet')}}">
  <link href="{{ asset('web/assets/vendor/venobox/venobox.css" rel="stylesheet')}}">
  <link href="{{ asset('web/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('web/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.0.2
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container text-right">
      <i class="icofont-phone"></i> +1 5589 55488 55
      {{-- <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM --}}
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
      {{--  <h1 class="text-light"><a href="index.html"><span>MAMALAND</span></a></h1>--}}
      <a href="/">
      <img src="http://drive.google.com/uc?export=view&id=1C588Zfgug0dH43Y02g_2bxyfOY5yesYq" alt="">
      </a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Acerca de</a></li>
          <li><a href="#chefs">Entrenadores</a></li>
          <li><a href="#gallery">Galería</a></li>
          <li><a href="#contact">Contacto</a></li>

          <li class="book-a-table text-center"><a href="{{ route('login') }}">Iniciar Sesión</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox" >

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(http://drive.google.com/uc?export=view&id=1UYWxYiXUZ1w4s_XEf7eSo0afK6rN1lrM);">
            <div class="carousel-container">
              <div class="carousel-content">
                {{-- <h2 class="animated fadeInDown"><span>Delicious</span> Restaurant</h2> --}}
                <img src="http://drive.google.com/uc?export=view&id=1C588Zfgug0dH43Y02g_2bxyfOY5yesYq" alt="">

                <p class="animated fadeInUp">Tu asistente personal de rutinas y planes alimentación al que puedes tener acceso cuando quieras y en cualquier lugar.</p>
                <div>
                  <a href="#subscribe" class="btn-menu animated fadeInUp scrollto">Planes</a>
                  <a href="#aplicacion" class="btn-book animated fadeInUp scrollto">Nuestra App</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(http://drive.google.com/uc?export=view&id=1CxiM1hpSnN_axHCy0XXtMErcIuQrDivU);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">A tu alcance</h2>
                <p class="animated fadeInUp">GSISTANT está disponible a cualquier hora y el cualquier lugar. Puedes ver nuestro contenido desde cualquier dispositivo conectado a Internet.</p>
                {{-- <div>
                  <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
                </div> --}}
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(http://drive.google.com/uc?export=view&id=1wZF680ldYclX6X2JI_sUPzadlRf4fWxj);">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Seguro</h2>
                <p class="animated fadeInUp">Nuestros entrenadores e instructores están altamente capacitados y disponibles las 24 horas todo el año. 
                  Además nuestro sistema de monitoreo implementado con Inteligencia Artificial asegurara que estés realizando correctamente tus rutinas.</p>
                {{-- <div>
                  <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
                </div> --}}
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("http://drive.google.com/uc?export=view&id=1MsGC9socfKMVsTrKZESg2kLbgNwIS25Z");'>
            <!--<a href="https://www.youtube.com/watch?v=v1WZJKLfiHo" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Acerca de</h3>
              <p>
                Somos especialistas en contratar mamados para formar ms mamados
              </p>
              <p class="font-italic">
                En GSISTANT te ofrecemos grandes beneficios que en otro lugar no podrás encontrar:
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Rutinas diseñadas por entrenadores certificados.</li>
                <li><i class="bx bx-check-double"></i> Planes alimenticios diseñados cuidadosamente por expertos.</li>
                <li><i class="bx bx-check-double"></i> Sistema inteligente de monitoreo de ejercicio.</li>
              </ul>
              <p>
                En GSISTANT nos preocupamos por tu bienestar, por lo que diseñamos un asistente virtual con
                Inteligencia Artificial el cual te ayudara a realizar tus rutinas de una forma correcta.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

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
            <a href="{{route('login')}}" class="btn-menu animated fadeInUp scrollto">Comprar</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->


          <section id="aplicacion" class="about">
            <div class="container-fluid">

              <div class="row">

                <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("http://drive.google.com/uc?export=view&id=1Hp_zxHynGyqQdww30VOKwL-_4_CkS-c- ");'>

                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                  <div class="content">
                    <h3>GSISTANT en tus manos</h3>
                    <p>
                      Ahora puedes acceder a nuestro contenido desde tu dispositivo inteligente cuando quieras y donde quieras.
                    </p>

                    <p>
                      Podrás realizar todo lo que hacías desde tu computadora, pero ahora en tu teléfono o tablet. 
                    </p>
                    <a href="https://play.google.com/store?hl=es_MX"><img class="w-50 h-50 float-left"  src="http://drive.google.com/uc?export=view&id=1PlpyLBETKz10ZEYNxAJZxgnAz4NllqgV" alt=""></a>

                    <a href="https://www.apple.com/mx/ios/app-store/"><img class="w-50 h-50 float-right"  src="http://drive.google.com/uc?export=view&id=1SFY54WQ0u2hnDggGkEGZlUFl7Md2LTr6" alt=""></a>






                </div>

              </div>

            </div>
          </section>



    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2><span>Nuestros entrenadores</span></h2>
          <p>Nuestros entrenadores están disponibles todo el tiempo y cuentan con certificados que los avalan.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="http://drive.google.com/uc?export=view&id=16RhSTAiPWZ2zELeo5rCKou7kHpOSLmWr" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Carlos Perez</h4>
                <span>Entrenador y nutriologo</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/karlosp0/"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="http://drive.google.com/uc?export=view&id=1Oi_k7f1gtf1P3ib3HaguaVHBNuNvd9CM" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sergio Vizcarra</h4>
                <span>Entrenador</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/MantenteHidratado/"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="http://drive.google.com/uc?export=view&id=1u0_5fEstHA7MdaoPJ2y36Fw8BrsZteQB" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Cesar Gaytan</h4>
                <span>Entrenador</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/cesar.gaytansaenz/"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2><span>Galería</span></h2>

        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="http://drive.google.com/uc?export=view&id=1SO5-snpg0SXWw2_UGHW5VbwJwXskUXDq" alt="" class="img-fluid">

            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="http://drive.google.com/uc?export=view&id=10Pef3Jzyn9VuTplxvV7tPSSkOuBJjAT_" alt="" class="img-fluid">

            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="http://drive.google.com/uc?export=view&id=1V6IaZEToPU1dmy6oXGYxJYI3h5cBRdLp" alt="" class="img-fluid">

            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="http://drive.google.com/uc?export=view&id=1xnd6gnVOphMUzNXE188RlQ2ud-F5x0o6" alt="" class="img-fluid">

            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="http://drive.google.com/uc?export=view&id=1445--YibNnPGH1BXjeRjz7wC7doY8Nnx" alt="" class="img-fluid">

            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="http://drive.google.com/uc?export=view&id=1CKXXcGVS6EEwK62sfI8M47vKEdIrbEEc" alt="" class="img-fluid">

            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="http://drive.google.com/uc?export=view&id=1g46ygmAjhqyzbwj1cEvDfNjXM2ZjIl7v" alt="" class="img-fluid">

            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="http://drive.google.com/uc?export=view&id=16b4wGiYKyGNEghNotM03ikoHE_VB2r1G" alt="" class="img-fluid">

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="http://drive.google.com/uc?export=view&id=1jq52yYMXqn1aL_a1F7zb7p5GFMUmrpX8" class="testimonial-img" alt="">
            <h3>Saul Bueno</h3>
            <h4>Usuario</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Contenido de gran calidad, asesoramiento de primera y el sistema de ayuda con Inteligencia Artificial es muy preciso y confiable.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://drive.google.com/uc?export=view&id=1QEOKWRDeQUd8o6who5-6kr_d3gJhiR6D" class="testimonial-img" alt="">
            <h3>Sara Moncada</h3>
            <h4>Entrenadora</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              La plataforma es excelente, además todos los instructores están altamente capacitados y
              cuentan con certificados otorgados por las más prestigiadas escuelas.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://drive.google.com/uc?export=view&id=13WkZgvGU1z1IiMM5CcNoEIHjpEj_xWcP" class="testimonial-img" alt="">
            <h3>Amanda de Santa</h3>
            <h4>Usuario</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Me encanta, gracias a GSISTANT logre mi objetivo de bajar de peso y tonificar si gastar de más y lo mejor de todo desde
              la comodidad de mi hogar si tener que ir a un gimnasio y pagar a un asesor.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://drive.google.com/uc?export=view&id=12qq7H1dl8jQyt7SalMBz7bMJjum_mZ22" class="testimonial-img" alt="">
            <h3>Alberto Griji</h3>
            <h4>Usuario</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              En menos de tres meses logré mis objetivos con GSISTANT, logré tonificar todo mi cuerpo y
              aumentar mi musculatura y gracias a eso tengo más pegue.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="http://drive.google.com/uc?export=view&id=1PsneMEsxhGZdPK0P4Qc1NWPqvWLzkthL" class="testimonial-img" alt="">
            <h3>John Sena</h3>
            <h4>Entrenador</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              GSISTANT ofrece una gran cantidad de contenido que no había visto antes, cuenta con planes que se adaptan a todo tipo de gente,
              además, en una plataforma en la cual puedes aprender y mejorar como entrenador.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contáctanos</span></h2>
          <p>Si quieres conocer más acerca de nosotros o si tienes alguna duda puede contactarnos vía correo electrónico o vía telefónica.</p>
        </div>
      </div>


      <div class="container mt-5 mx-auto">

        <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
          <i class="icofont-envelope"></i>
          <h4>Email:</h4>
          <p>gsistant.info@gmail.com<br>gsistant.support@gmail.com</p>
        </div>

        <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0 ">
          <i class="icofont-phone"></i>
          <h4>Teléfono:</h4>
          <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <img src="http://drive.google.com/uc?export=view&id=1C588Zfgug0dH43Y02g_2bxyfOY5yesYq" alt="">
      <p>La mejor plataforma de ejercicio online.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>GSISTANT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
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

</body>

</html>
