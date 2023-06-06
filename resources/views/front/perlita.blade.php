@extends('layouts.front')

@section('cssExtras')
@endsection

@section('styleExtras')
<style>
        
    .slider-proyectos {
        position: relative;
    }

    .slider-proyectos .slick-dots {
        position: relative;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .slider-proyectos .slick-dots li {
        margin: 30px 10px;
        color: white;
    }

    .slider-proyectos .slick-dots li button {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        border: none;
        background: #BCBBAF;
        cursor: pointer;
    }

    .slider-proyectos .slick-dots li.slick-active button {
        background: #3867AD;
    }

    /* ===============
    MEDIA QUERIES DE LA SECCIÓN INDEX - HOME 
    =============== */

    @media (min-width: 1801px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 900px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 100px;
        }

        .espacios-sm {
            display: none;
        }

        .imagen-proyectos {
            height: 460px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 670px;
        }

        .col-verde {
            margin-top: 280px; 
            margin-left: 240px;
            height: 600px;
        }

        .contenedor-imagen_externa {
            margin-top: 0;
        }

        .contenedor-imagen_interna {
            margin-top: -50px; 
            margin-left: 900px;
        }

        .contenedor-texto_scroll {
            max-height: 500px;
            overflow: auto;
        }
    }


    @media (min-width: 1501px) and (max-width: 1800px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 700px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 86px;
        }

        .contenedor-imagen_externa {
            margin-top: 0;
        }

        .contenedor-imagen_interna {
            margin-top: -50px; 
            margin-left: 800px;
        }

        .contenedor-texto_scroll {
            max-height: 500px;
            overflow: auto;
        }

        .espacios-sm {
            display: none;
        }

        .imagen-proyectos {
            height: 460px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 670px;
        }

        .col-verde {
            margin-top: 280px; 
            margin-left: 220px;
            height: 600px;
        }
    }

    @media (min-width: 1361px) and (max-width: 1500px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 700px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 86px;
        }

        .contenedor-imagen_externa {
            margin-top: 0;
        }

        .contenedor-imagen_interna {
            margin-top: -50px; 
            margin-left: 600px;
        }

        .contenedor-texto_scroll {
            max-height: 300px;
            overflow: auto;
        }

        .espacios-sm {
            display: none;
        }

        .imagen-proyectos {
            height: 460px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 670px;
        }

        .col-verde {
            margin-top: 280px; 
            margin-left: 170px;
            height: 600px;
        }

        /* =================================================================== */
    }

    @media (min-width: 1201px) and (max-width: 1360px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 700px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 76px;
        }

        .contenedor-imagen_externa {
            margin-top: 0;
        }

        .contenedor-imagen_interna {
            margin-top: -50px; 
            margin-left: 550px;
        }

        .contenedor-imagen_interna--imagen {
            width: 500px;
            height: 500px; 
        }

        .contenedor-texto_scroll {
            max-height: 400px;
            overflow: auto;
        }

        .espacios-sm {
            display: none;
        }

        .imagen-proyectos {
            height: 460px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 670px;
        }

        .col-verde {
            margin-top: 280px; 
            margin-left: 150px;
            height: 600px;
        }

        /* =================================================================== */
    }

    @media (min-width: 993px) and (max-width: 1200px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 800px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 62px;
        }

        .contenedor-imagen_externa {
            margin-top: 0;
        }

        .contenedor-imagen_interna {
            margin-top: -50px; 
            margin-left: 520px;
        }

        .contenedor-imagen_interna--imagen {
            width: 450px;
            height: 450px; 
        }

        .contenedor-texto_scroll {
            max-height: 300px;
            overflow: auto;
        }

        .espacios-sm {
            display: none;
        }

        .imagen-proyectos {
            height: 400px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 610px;
        }

        .col-verde {
            margin-top: 280px; 
            margin-left: 135px;
            height: 600px;
        }

        /* =================================================================== */
    }

    @media (min-width: 901px) and (max-width: 992px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 700px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 62px;
        }

        .contenedor-imagen_externa {
            margin-top: 0px;
        }

        .contenedor-imagen_interna {
            margin-top: -50px; 
            margin-left: 300px;
        }

        .contenedor-imagen_interna--imagen {
            width: 400px;
            height: 400px; 
        }

        .contenedor-texto_externo {
            margin-top: 100px !important;
        }

        .contenedor-texto_scroll {
            max-height: 300px;
            overflow: auto;
        }

        .espacios-sm {
            display: none;
        }

        .imagen-proyectos {
            height: 400px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 610px;
        }

        .col-verde {
            margin-top: 280px; 
            margin-left: 150px;
            height: 600px;
        }

        /* =================================================================== */
    }

    @media (min-width: 801px) and (max-width: 900px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 700px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 62px;
        }

        .contenedor-imagen_externa {
            margin-top: 0;
        }

        .contenedor-imagen_interna {
            margin-top: -50px; 
            margin-left: 300px;
        }

        .contenedor-texto_externo {
            margin-top: 100px !important;
        }

        .contenedor-imagen_interna--imagen {
            width: 400px;
            height: 400px; 
        }

        .contenedor-texto_scroll {
            max-height: 300px;
            overflow: auto;
        }

        .espacios-sm {
            display: block;
        }

        .imagen-proyectos {
            height: 400px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 610px;
        }

        .col-verde {
            margin-top: 280px; 
            margin-left: 130px;
            height: 600px;
        }

        /* =================================================================== */
    }
    
    @media (min-width: 701px) and (max-width: 800px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 700px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 62px;
        }

        .contenedor-imagen_externa {
            margin-top: 550px;
        }

        .contenedor-imagen_interna {
            margin-top: -570px; 
            margin-left: 340px;
        }

        .contenedor-imagen_interna--imagen {
            width: 300px;
            height: 300px; 
        }

        .contenedor-texto_externo {
            margin-top: 100px !important;
        }

        .contenedor-texto_scroll {
            max-height: 200px;
            overflow: auto;
        }

        .espacios-sm {
            display: block;
        }

        .imagen-proyectos {
            height: 400px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 610px;
        }

        .col-verde {
            margin-top: 280px; 
            margin-left: 115px;
            height: 600px;
        }

        /* =================================================================== */
    }

    @media (min-width: 601px) and (max-width: 700px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 600px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 62px;
        }

        .contenedor-imagen_externa {
            margin-top: 550px;
        }

        .contenedor-imagen_interna {
            margin-top: -950px; 
            margin-left: 50px;
        }

        .contenedor-imagen_interna--imagen {
            width: 450px;
            height: 450px; 
        }

        .contenedor-texto_externo {
            margin-top: 500px !important;
        }

        .contenedor-texto_scroll {
            max-height: 200px;
            overflow: auto;
        }

        .espacios-sm {
            display: block;
        }

        .imagen-proyectos {
            height: 350px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 560px;
        }

        .col-verde {
            margin-top: 260px; 
            margin-left: 100px;
            height: 555px;
        }

        /* =================================================================== */
    }

    @media (min-width: 481px) and (max-width: 600px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 700px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 62px;
        }

        .contenedor-imagen_externa {
            margin-top: 550px;
        }

        .contenedor-imagen_interna {
            margin-top: -950px; 
            margin-left: 0px;
        }

        .contenedor-imagen_interna--imagen {
            width: 450px;
            height: 450px; 
        }

        .contenedor-texto_externo {
            margin-top: 500px !important;
        }

        .contenedor-texto_scroll {
            max-height: 200px;
            overflow: auto;
        }

        .espacios-sm {
            display: block;
        }

        .imagen-proyectos {
            height: 350px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 560px;
        }

        .col-verde {
            margin-top: 260px; 
            margin-left: 170px;
            height: 555px;
        }

        /* =================================================================== */
    }

    @media (min-width: 361px) and (max-width: 480px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 600px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 38px;
        }

        .contenedor-imagen_externa {
            margin-top: 100px;
        }

        .contenedor-imagen_interna {
            margin-top: -520px; 
            margin-left: 290px;
        }

        .contenedor-imagen_interna--imagen {
            width: 400px;
            height: 400px; 
        }

        .contenedor-texto_externo {
            margin-top: 350px !important;
        }

        .contenedor-texto_scroll {
            max-height: 400px;
            overflow: auto;
        }

        .espacios-sm {
            display: block;
        }

        .imagen-proyectos {
            height: 350px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 560px;
        }

        .col-verde {
            margin-top: 260px; 
            margin-left: 140px;
            height: 555px;
        }
    }

    @media (min-width: 0px) and (max-width: 360px) {
        /* ==[ Slider principal ]============================================= */

        /* [[[ Alto de la imágen ]]] */
        .slider-principal {
            height: 500px;
        }

        /* [[[ Tamaño del texto ]]] */
        .titulo-slider_principal {
            font-size: 28px;
        }

        .contenedor-imagen_externa {
            margin-top: 100px;
        }

        .contenedor-imagen_interna {
            margin-top: -520px; 
            margin-left: 0px;
        }

        .contenedor-imagen_interna--imagen {
            width: 300px;
            height: 300px; 
        }

        .contenedor-texto_externo {
            margin-top: 350px !important;
        }

        .contenedor-texto_scroll {
            max-height: 400px;
            overflow: auto;
        }

        .espacios-sm {
            display: block;
        }

        .imagen-proyectos {
            height: 350px;
        }

        .col-amarilla {
            margin-top: 20px;
            height: 560px;
        }

        .col-verde {
            margin-top: 260px; 
            margin-left: 100px;
            height: 555px;
        }
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col position-relative slider-principal" style="
            background-color: black;
            background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[51]->imagen) }}');
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.6);
        ">
            <div class="col-12 position-absolute top-50 start-50 translate-middle">
                <div class="row py-5">
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 text-center text-white mx-auto">
                        <div class="titulo-slider_principal" style=""><strong>{{ $elements[52]->texto }}</strong></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-11 
                        mx-auto mt-2
                        text-xxl-center text-xl-center text-lg-center text-md-center text-sm-center text-xs-center text-center
                    ">
                        <a href="#/" class="btn btn-block btn-outline rounded-0 
                            py-xxl-4 py-xl-4 py-lg-4 py-md-3 py-sm-2 py-xs-2 py-2 
                            px-xxl-5 px-xl-5 px-lg-5 px-md-3 px-sm-2 px-xs-2 px-2  
                            btn-contacto" style="background-color: #3867AD; color: #FFEC23; text-decoration: none;">
                            <h3 href="{{ route('front.contacto') }}" class="m-0 px-5" style="color: #FFEC23;">
                                <strong>
                                    Contacto
                                </strong>
                            </h3>
                        </a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-top: 100px; margin-bottom: 150px;">
    <div class="row mt-5 mb-5">
        <div class="col-9 py-5 mx-auto">
            <div class="row mb-5">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-2 col-sm-12 col-xs-12 col-12"></div>
                <div class="col-xxl-4 col-xl-7 col-lg-7 col-md-6 col-sm-12 col-xs-12 col-12  display-2 fw-bold text-end px-5 py-0">
                    {{ $elements[53]->texto }}
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12" style="background-color: #F5F5F5; height: 200px; display: flex; align-items: center;" >
                    <div class="m-0 p-0" style="
                        background-color: #F5F5F5;
                        background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[54]->imagen) }}');
                        background-position: center center;
                        background-repeat: no-repeat;
                        width: 100%;
                        height: 100px;
                        margin: auto;
                    "></div>
                </div>
            </div>
            <div class="row contenedor-text_externo">
                <div class="col-2"></div>
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 col-12 mx-xxl-0 mx-md-0 mx-sm-auto position-relative py-0 contenedor-texto_externo" style="background-color: #3867AD;">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12 col-xs-12 col-12 py-3">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body border-0 bg-transparent contenedor-texto_scroll">
                                    <p class="text-white">
                                        {{ $elements[56]->texto }}
                                    </p>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-12 position-absolute top-50 start-0 translate-middle contenedor-imagen_externa">    
                        <div class="row">
                            <div class="col position-relative">
                                <div class="col-12 position-absolute top-50 start-0 translate-middle contenedor-imagen_interna">
                                    <img src="{{ asset('img2/photos/imagenes_estaticas/'.$elements[55]->imagen) }}" alt="" class="img-fluid contenedor-imagen_interna--imagen">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #3867AD;">
    <div class="row py-5 text-center">
        <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto">
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-11 col-sm-12 col-xs-12 col-12 text-xxl-end text-xl-end text-lg-end text-md-end text-sm-center text-xs-center text-center display-3 fw-bold position-absolute start-0" style="margin-top: -160px; color: #3867AD;">
                VENTAJAS DE USO
            </div>
            <div class="row py-5">
                <div class="col mx-auto">
                    <div class="row">

                        @foreach ($ventajas as $ve)
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-12 col-xs-12 col-12 mt-4 mx-1 mx-auto">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{ asset('img/design/soluciones/perlita_mineral/palomita.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-10 fs-2 fw-bolder text-white text-start">
                                        {{ $ve->texto }}
                                    </div>
                                </div>
                            </div>    
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 py-3 text-center display-2 fw-bold mx-auto" style="background-color: #FFEC23; color: #3867AD">
            <div class="titulo-colocacion display-4 fw-bold">
                MEZCLADO
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10 mt-5 mb-5 mx-auto">
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-12 col-xs-12 col-12 mt-5 py-5 mx-auto" style="border-top: 10px solid #FFEC23; background-color: #F5F5F5;">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12 mx-auto" style="background-color: #3867AD; width: 150px; height: 150px; display: flex; align-items: center;" >
                            <div class="m-0 p-0" style="
                                background-color: #3867AD;
                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[56]->imagen) }}');
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-size: contain;
                                width: 100%;
                                height: 100px;
                                margin: auto;
                            "></div>
                        </div>
                        <div class="col-7 mx-auto py-2 fs-3 fw-bolder" style="color: #3867AD;">
                            {{ $elements[57]->texto }}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-12 col-xs-12 col-12 mt-5 py-5 mx-auto" style="border-top: 10px solid #FFEC23; background-color: #F5F5F5;">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12 mx-auto" style="background-color: #3867AD; width: 150px; height: 150px; display: flex; align-items: center;" >
                            <div class="m-0 p-0" style="
                                background-color: #3867AD;
                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[58]->imagen) }}');
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-size: contain;
                                width: 100%;
                                height: 100px;
                                margin: auto;
                            "></div>
                        </div>
                        
                        <div class="col-xxl-4 col-md-6 col-12 text-xxl-start text-md-start text-center mx-auto py-2 fs-1 fw-bolder" style="color: #3867AD;">
                            {{ $elements[59]->texto }}
                        </div>
                        <div class="col-xxl-3 col-md-1 col-12"></div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-12 col-xs-12 col-12 mt-5 py-5 mx-auto" style="border-top: 10px solid #FFEC23; background-color: #F5F5F5;">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12 mx-auto" style="background-color: #3867AD; width: 150px; height: 150px; display: flex; align-items: center;" >
                            <div class="m-0 p-0" style="
                                background-color: #3867AD;
                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[60]->imagen) }}');
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-size: contain;
                                width: 100%;
                                height: 100px;
                                margin: auto;
                            "></div>
                        </div>
                        <div class="col-7 mx-auto py-0 fs-4 fw-bolder" style="color: #3867AD;">
                            {{ $elements[61]->texto }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-11 mx-auto">
            <div class="row py-5">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 display-1 fw-bolder text-start" style="color: #3867AD;">
                    PROCESOS DE PERLITA MINERAL
                </div>
            </div>
            <div class="row" style="margin-bottom: 50px;">
            
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto">               
                    <div class="row">
                        <div class="slider-proyectos">

                            @foreach ($perlita as $pe)
                            <div>
                                <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #3867AD;">
                                        <div class="row">
                                            <div class="col position-relative">
                                                <div class="row">
                                                    <div class="col mt-5 text-center">
                                                        <p class="fs-3" style="color: #FFEC23;">{{ $pe->nombre }}</p>
                                                    </div>
                                                </div>
                                                <div class="row py-5">
                                                    <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                </div>
                                                <div class="row py-0">
                                                    <div class="col">
                                                        <div class="imagen-proyectos" style="
                                                            background-color: black;
                                                            background-image: url('{{ asset('img2/photos/perlita_mineral/'.$pe->foto) }}');
                                                            background-size: cover;
                                                            background-repeat: no-repeat;
                                                            width: 100%;       
                                                        "></div>
                                                    </div>                
                                                </div>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                            </div>    
                            @endforeach
                            
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-7 col-sm-11 col-xs-11 col-11 border text-center mx-auto mb-5">
            <a href="#/" style="text-decoration: none;">
                <div class="row">
                    <div class="col-2 py-3" style="background-color: #3867AD;">
                        <img src="{{ asset('img/design/soluciones/losas/pdf.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-10 " style="background-color: #FFEC23;">
                        <div class="row">
                            <div class="col-12 py-0 text-center display-3 fw-bolder" style="color: #3867AD;">
                                DESCARGAR
                            </div>
                            <div class="col-12 py-0 text-center fs-2 fw-normal" style="color: #3867AD;">
                                Ficha Técnica
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection

@section('jsLibExtras2')
<script>
    $('.slider-proyectos').slick({
            dots: true,
            infinite: false,
            arrows: false,
            speed: 300,
            rows: 2,
            slidesPerRow: 3,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    rows: 2,
                    slidesPerRow: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 760,
                settings: {
                    rows: 1,
                    slidesPerRow: 2,
                }
            },
            {
                breakpoint: 580,
                settings: {
                    rows: 1,
                    slidesPerRow: 1,
                }
            }
            ]
        });
</script>
@endsection
