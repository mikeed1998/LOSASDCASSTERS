<style>
  .linea {
      position: relative;
  }

  .linea::after {
      content: "";
      position: absolute;
      bottom: -10px; 
      left: 0;
      width: 100%;
      height: 6px;
      /* background-image: linear-gradient(to bottom, #388050 25%, #FFEC23 75%); */
      background-image: linear-gradient(to right, green 0%, green 25%, #FFEC23 26%, #FFEC23 100%);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0s;
  }

  .linea:hover::after {
      transform: scaleX(1);
  }

  @media (min-width: 769px) {
      .navon {
          display: none;
      }
  }

  
  @media (max-width: 768px) {
      #bar-a {
          display: none;
      }
  }
</style>

<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light row" style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0;">      
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto text-center" style="background-color: #388050; padding-top: 15px; padding-bottom: 30px;">
          <img src="{{ asset('img/design/header/logo.png') }}" alt="" class="img-fluid">
      </div>
      <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto">                   
          <!-- Filas y columnas personalizadas -->
          <div class="row" id="bar-a" style="background-color: #3C3C3C;">
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-12 text-center py-xxl-4 py-xl-4 py-lg-4 py-md-3 py-sm-3 py-xs-4 py-4">
                  <a href="https://wa.me/{{ $config->whatsapp }}" uk-icon="icon: whatsapp; ratio: 1.8;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                  <a href="{{ $config->facebook }}" uk-icon="icon: facebook; ratio: 1.8;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                  <a href="{{ $config->instagram }}" uk-icon="icon: instagram; ratio: 1.8;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-8 col-sm-12 col-xs-12 col-12 py-3">
                  <h3 class="m-0 text-white">{{ $config->destinatario }}</h3>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 col-12 py-xxl-3 py-xl-3 py-lg-3 py-md-0 py-sm-3 py-xs-3 py-3">
                 <h3 class="m-0 text-white">Tel. {{ $config->telefono }}</h3>
              </div>
          </div>

          <div class="row py-2 bg-white">
              <!-- Botón para colapsar el navbar en pantallas pequeñas -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Contenido del navbar -->
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <div class="col-5 mx-auto">
                          <li class="nav-item col-12 py-2 mx-auto text-center">
                              <!-- <a class="nav-link" href="#">Inicio</a> -->
                              <h4 class="m-0 linea">
                                  <strong>
                                      <a href="{{ route('front.index') }}" style="text-decoration: none;" class="text-dark">Inicio</a>
                                  </strong>
                              </h4>
                          </li>
                      </div>
                     
                      <div class="col-5 mx-auto">
                          <li class="nav-item col-12 mx-auto text-center dropdown">
                          
                              <a href="#" style="text-decoration: none;" class="nav-link dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <h4 class="m-0 p-0 linea">
                                      <strong>
                                          Soluciones
                                      </strong>
                                  </h4>
                              </a>
                                  
                              <ul class="dropdown-menu bg-white text-center border-0">
                                  <li class="m-0">
                                      <a class="dropdown-item bg-white" href="{{ route('front.losas') }}" style="text-decoration: none;">
                                          <h5 class="m-0 linea py-1">
                                              <strong>
                                                    Losas D´CASSTER´S
                                              </strong>
                                          </h5>
                                      </a>
                                  </li>
                                  <li class="border-top border-dark mt-3">
                                      <a class="dropdown-item bg-white" href="{{ route('front.perlita') }}" style="text-decoration: none;">
                                          <h5 class="m-0 linea py-2">
                                              <strong>
                                                  Perlita Mineral
                                              </strong>
                                          </h5>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </div>
                      <div class="col-5 mx-auto">
                          <li class="nav-item col-12 py-2 mx-auto text-center">
                              <h4 class="m-0 linea">
                                  <strong>
                                      <a href="{{ route('front.proyectos') }}" style="text-decoration: none;" class="text-dark">Proyectos</a>
                                  </strong>
                              </h4>
                          </li>
                      </div>            
                      <div class="col-5 mx-auto">
                          <li class="nav-item col-12 py-2 mx-auto text-center">
                              <h4 class="m-0 linea">
                                  <strong>
                                      <a href="{{ route('front.aboutus') }}" style="text-decoration: none;" class="text-dark">Nosotros</a>
                                  </strong>
                              </h4>
                          </li>
                      </div>
                      <div class="col-5 mx-auto">
                          <li class="nav-item col-12 py-2 mx-auto text-center">
                              <h4 class="m-0 linea">
                                  <strong>
                                      <a href="{{ route('front.contacto') }}" style="text-decoration: none;" class="text-dark">Contacto</a>
                                  </strong>
                              </h4>
                          </li>
                      </div>
                      <li class="nav-item col-12 py-2 mx-auto text-center navon rounded-0" style="background-color: #3C3C3C;">
                          <h4 class="m-0 text-white">
                             Tel. 33 33 33 33 33
                          </h4>
                      </li>
                      <li class="nav-item col-12 py-2 mx-auto text-center navon rounded-0" style="background-color: #3C3C3C;">
                          <h4 class="m-0 text-white">
                              contacto@losasdcassters.mx
                          </h4>
                      </li>
                      <li class="nav-item col-12 py-2 mx-auto text-center navon rounded-0" style="background-color: #3C3C3C;">
                          <h4 class="m-0">
                              <strong>
                                  <a href="https://wa.me/{{ $config->whatsapp }}" uk-icon="icon: whatsapp; ratio: 1.8;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                                  <a href="{{ $config->facebook }}" uk-icon="icon: facebook; ratio: 1.8;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                                  <a href="{{ $config->instagram }}" uk-icon="icon: instagram; ratio: 1.8;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                              </strong>
                          </h4>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>
</div>



