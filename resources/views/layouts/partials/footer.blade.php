<style>

    * {
        font-family: 'Arimo', sans-serif; font-family: 'Quicksand', sans-serif;
    }

    .linea {
        position: relative;
    }

    .linea::after {
        content: "";
        position: absolute;
        bottom: -5px; 
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

    #raya {
        background: linear-gradient(to right, #FFEC23 0%, #FFEC23 75%, black 75%, black 100%);
        background-size: 100% 5px;
        margin-top: 5px;
        background-repeat: no-repeat;
        background-position: bottom;
    }


</style>

<footer>
    <div class="container-fluid" >
        <div class="row py-5" style="background-color: #388050;">
            <div class="col">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto py-1">
                        <div class="row">
                            <div class="col text-center">
                                <a href="{{ route('front.index') }}">
                                    <img src="{{ asset('img/design/footer/logo_02.png') }}" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-4 text-center">
                                <a href="https://wa.me/{{ $config->whatsapp }}" uk-icon="icon: whatsapp; ratio: 2;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                                <a href="{{ $config->facebook }}" uk-icon="icon: facebook; ratio: 2;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                                <a href="{{ $config->instagram }}" uk-icon="icon: instagram; ratio: 2;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto py-1">
                        <div class="row px-5">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12 py-1">
                                <div class="row">
                                <!-- style="border-bottom: solid 5px #FFEC23; border-bottom-width: 4px;" -->
                                    <div class="col-12" id="raya">
                                        <h2 style="color: #FFEC23;">
                                            <strong>
                                                Navegación
                                            </strong>
                                        </h2>
                                    </div>
                                    <div class="col-12 mt-1 linea">
                                        <h3 class="text-white m-0">
                                            <a href="{{ route('front.index') }}" style="text-decoration: none;" class="text-white">Inicio</a>                         
                                        </h3>
                                    </div>
                                    <div class="col-12 mt-1 linea">
                                        <h3 class="text-white m-0">
                                            <a href="#/" style="text-decoration: none;" class="text-white">Soluciones</a>                                   
                                        </h3>
                                    </div>
                                    <div class="col-12 mt-1 linea">
                                        <h3 class="text-white m-0">
                                            <a href="{{ route('front.proyectos') }}" style="text-decoration: none;" class="text-white">Proyectos</a>                                    
                                        </h3>
                                    </div>
                                    <div class="col-12 mt-1 linea">
                                        <h3 class="text-white m-0">
                                            <a href="{{ route('front.aboutus') }}" style="text-decoration: none;" class="text-white">Nosotros</a>                                 
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12 py-1">
                                <div class="row">
                                    <div class="col-12" style="border-bottom: solid 5px black;">
                                        <h2 style="color: #FFEC23;">
                                            <strong>
                                                Ayuda
                                            </strong>
                                        </h2>
                                    </div>
                                    <div class="col-12 mt-1 linea">
                                        <h3 class="text-white m-0">
                                            <a href="{{ route('front.preguntas') }}" style="text-decoration: none;" class="text-white">Preguntas frecuentes</a>                                 
                                        </h3>
                                    </div>
                                    <div class="col-12 mt-1 linea">
                                        <h3 class="text-white m-0">
                                            <a href="{{ route('front.avisoPrivacidad') }}" style="text-decoration: none;" class="text-white">Aviso de privacidad</a>                                 
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12 py-1">
                                <div class="row">
                                    <div class="col-8" style="border-bottom: solid 5px black;">
                                        <h2 style="color: #FFEC23;">
                                            <strong>
                                                Contacto
                                            </strong>
                                        </h2>
                                    </div>
                                    <div class="col-12 mt-1 linea">
                                        <h3 class="text-white m-0">
                                            <a href="{{ route('front.contacto') }}" style="text-decoration: none;" class="text-white">Contacto</a>                                 
                                        </h3>
                                    </div>
                                    <div class="col-12 mt-1">
                                        <h3 class="text-white m-0">
                                            Tel. {{ $config->telefono }}                          
                                        </h3>
                                    </div>
                                    <div class="col-12 mt-1">
                                        <h3 class="text-white m-0">
                                            {{ $config->destinatario }}                             
                                        </h3>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <h3 class="text-white m-0">
                                            {{ $config->direccion }}                             
                                        </h3>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: #3C3C3C;">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto text-center py-3">
                <h3 class="m-0" style="color: #388050;">
                    LOSAS D´CASSTER´S 2023 TODOS LOS DERECHOS RESERVADOS DISEÑO POR WOZIAL
                </h3>
            </div>
        </div>
    </div>
</footer>