    <nav class="navbar navbar-expand-lg bg-primary">
   <div class="container">
    <img src="{{ asset('pagina/assets/img/logo-blanco.png')}}" class="logo-nav logo-size" alt="">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
     <i class="fas fa-sliders-h icon-toggler"></i>
   </button>
   <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
     <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link nav-link-color" href="#"><i class="now-ui-icons media-2_sound-wave item-m"></i>Entrenamientos</a>
         </li>
         @if (Auth::user()->suscricion==3)
         <li class="nav-item">
             <a class="nav-link nav-link-color" data-toggle="tab" href="#profile" role="tab">
              <i class="now-ui-icons design_bullet-list-67 item-m"></i>
                   Planes alimenticios
             </a>
         </li>
         @endif
         <li class="nav-item">
          <a class="nav-link nav-link-color" data-toggle="tab" href="#assistant" role="tab">
           <i class="now-ui-icons sport_user-run item-m"></i>
                Asistente Virtual
          </a>
      </li>
         <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle profile-lik" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src=" {{ asset('pagina/assets/images/users-profiles/default.png') }}" class="img-profile">
                  {{Auth::user()->email}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item txt-color" href="#"><i class="fas fa-user icono-m"></i>Perfil</a>
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


   
