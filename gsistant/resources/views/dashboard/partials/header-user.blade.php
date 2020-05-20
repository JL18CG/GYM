    <nav class="navbar navbar-expand-lg bg-primary">
   <div class="container">
    <img src="{{ asset('pagina/assets/img/logo-blanco.png')}}" class="logo-nav logo-size" alt="">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
     <i class="fas fa-sliders-h icon-toggler"></i>
   </button>
   <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
     <ul class="navbar-nav">

         <li class="nav-item">
             <a class="nav-link nav-link-color" data-toggle="tab" href="#profile" role="tab">
                   <i class="now-ui-icons tech_laptop"></i>
                   Entrenamientos

             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link nav-link-color" data-toggle="tab" href="#profile" role="tab">
                   <i class="  now-ui-icons business_badge  "></i>
                   Planes Alimenticios

             </a>
         </li>



         <li class="nav-item">
             <a class="nav-link nav-link-color" data-toggle="tab" href="#profile" role="tab">
                   <i class="  now-ui-icons files_single-copy-04  "></i>
                   Asistente Virtual

             </a>
         </li>
         <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle profile-lik" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user mr-2"></i>Admin
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item txt-color" href="#"><i class="fas fa-cogs  icono-m"></i>Configuración</a>
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
