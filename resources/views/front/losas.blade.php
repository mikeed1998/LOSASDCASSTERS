@extends('layouts.front')

@section('cssExtras')
@endsection

@section('styleExtras')

<style>
        
        

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
            margin-left: 600px;
        }

        .contenedor-imagen_interna--imagen {
            width: 500px;
            height: 500px; 
        }

        .contenedor-texto_scroll {
            max-height: 400px;
            overflow: auto;
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
            margin-left: 300px;
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
            margin-left: 0px;
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
    }

</style>

@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col position-relative slider-principal" style="
            background-color: black;
            background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[25]->imagen) }}');
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.6);
        ">
            <div class="col-12 position-absolute top-50 start-50 translate-middle">
                <div class="row py-5">
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 text-center text-white mx-auto">
                        <div class="titulo-slider_principal" style=""><strong>{{ $elements[26]->texto }} </strong></div>
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
                            btn-contacto" style="background-color: #388050; color: #FFEC23; text-decoration: none;">
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
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12" style="background-color: #F5F5F5; height: 200px; display: flex; align-items: center;" >
                    <div class="m-0 p-0" style="
                        background-color: #F5F5F5;
                        background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[27]->imagen) }}');
                        background-position: center center;
                        background-repeat: no-repeat;
                        width: 100%;
                        height: 100px;
                        margin: auto;
                    "></div>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8 col-sm-12 col-xs-12 col-12 display-2 fw-bold py-0">
                    {{ $elements[28]->texto }}
                </div>
            </div>
            <div class="row contenedor-text_externo">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-9 col-sm-12 col-xs-12 col-12 mx-xxl-0 mx-md-0 mx-sm-auto position-relative py-0 contenedor-texto_externo" style="background-color: #388050;">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12 col-xs-12 col-12 py-3">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body border-0 bg-transparent contenedor-texto_scroll">
                                    <p class="text-white">
                                        {{ $elements[29]->texto }}
                                    </p>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-12 position-absolute top-50 start-50 translate-middle contenedor-imagen_externa">    
                        <div class="row">
                            <div class="col position-relative">
                                <div class="col-12 position-absolute top-50 start-50 translate-middle contenedor-imagen_interna">
                                    <img src="{{ asset('img2/photos/imagenes_estaticas/'.$elements[30]->imagen) }}" alt="" class="img-fluid contenedor-imagen_interna--imagen">                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #388050;">
    <div class="row py-5 text-center">
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto">
            <div class="col-6 text-start display-3 fw-bold position-absolute" style="margin-top: -160px; color: #388050;">
                CARACTERÍSTICAS
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-12 text-white mx-auto py-5">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/design/soluciones/losas/1.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3 fs-2 fw-bolder">
                            {{ $elements[31]->texto }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col fs-5 px-5 fw-normal">
                            {{ $elements[32]->texto }}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-12 bg-white mx-auto py-5" style="color: #388050;">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/design/soluciones/losas/2.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3 fs-2 fw-bolder">
                            {{ $elements[33]->texto }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col fs-5 px-5 fw-normal">
                            {{ $elements[34]->texto }}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-12 text-white mx-auto py-5">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/design/soluciones/losas/3.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3 fs-2 fw-bolder">
                            {{ $elements[35]->texto }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col fs-5 px-5 fw-normal">
                            {{ $elements[36]->texto }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 col-12 mt-5 mx-auto">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-12 bg-white mx-auto py-5" style="color: #388050;">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/design/soluciones/losas/4.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3 fs-2 fw-bolder">
                            {{ $elements[37]->texto }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col fs-5 px-5 fw-normal">
                            {{ $elements[38]->texto }}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-12 text-white mx-auto py-5">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/design/soluciones/losas/5.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3 fs-2 fw-bolder">
                            {{ $elements[39]->texto }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col fs-5 px-5 fw-normal">
                            {{ $elements[40]->texto }}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 col-12 bg-white mx-auto py-5" style="color: #388050;">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/design/soluciones/losas/6.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3 fs-2 fw-bolder">
                            {{ $elements[41]->texto }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col fs-5 px-5 fw-normal">
                            {{ $elements[42]->texto }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 py-3 text-center display-2 fw-bold mx-auto" style="background-color: #FFEC23; color: #388050">
            <div class="titulo-colocacion display-4 fw-bold">
                COLOCACIÓN
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10 mt-5 mb-5 mx-auto">
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-12 col-xs-12 col-12 mt-5 py-5 mx-auto" style="border-top: 10px solid #FFEC23; background-color: #F5F5F5;">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12 mx-auto" style="background-color: #388050; width: 150px; height: 150px; display: flex; align-items: center;" >
                            <div class="m-0 p-0" style="
                                background-color: #388050;
                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[43]->imagen) }}');
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-size: contain;
                                width: 100%;
                                height: 100px;
                                margin: auto;
                            "></div>
                        </div>
                        <div class="col-7 mx-auto py-4 fs-3 fw-bolder" style="color: #388050;">
                            {{ $elements[44]->texto }}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-12 col-xs-12 col-12 mt-5 py-5 mx-auto" style="border-top: 10px solid #FFEC23; background-color: #F5F5F5;">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12 mx-auto" style="background-color: #388050; width: 150px; height: 150px; display: flex; align-items: center;" >
                            <div class="m-0 p-0" style="
                                background-color: #388050;
                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[45]->imagen) }}');
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-size: contain;
                                width: 100%;
                                height: 100px;
                                margin: auto;
                            "></div>
                        </div>
                        <div class="col-7 mx-auto py-4 fs-3 fw-bolder" style="color: #388050;">
                            {{ $elements[46]->texto }}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-12 col-xs-12 col-12 mt-5 py-5 mx-auto" style="border-top: 10px solid #FFEC23; background-color: #F5F5F5;">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12 mx-auto" style="background-color: #388050; width: 150px; height: 150px; display: flex; align-items: center;" >
                            <div class="m-0 p-0" style="
                                background-color: #388050;
                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[47]->imagen) }}');
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-size: contain;
                                width: 100%;
                                height: 100px;
                                margin: auto;
                            "></div>
                        </div>
                        <div class="col-7 mx-auto py-4 fs-3 fw-bolder" style="color: #388050;">
                            {{ $elements[48]->texto }}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-12 col-xs-12 col-12 mt-5 py-5 mx-auto" style="border-top: 10px solid #FFEC23; background-color: #F5F5F5;">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12 col-12 mx-auto" style="background-color: #388050; width: 150px; height: 150px; display: flex; align-items: center;" >
                            <div class="m-0 p-0" style="
                                background-color: #388050;
                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[49]->imagen) }}');
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-size: contain;
                                width: 100%;
                                height: 100px;
                                margin: auto;
                            "></div>
                        </div>
                        <div class="col-7 mx-auto py-4 fs-3 fw-bolder" style="color: #388050;">
                            {{ $elements[50]->texto }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-7 col-sm-11 col-xs-11 col-11 border text-center mx-auto">
            <a href="#/" style="text-decoration: none;">
                <div class="row">
                    <div class="col-2 py-3" style="background-color: #388050;">
                        <img src="{{ asset('img/design/soluciones/losas/pdf.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-10 " style="background-color: #FFEC23;">
                        <div class="row">
                            <div class="col-12 py-0 text-center display-3 fw-bolder" style="color: #388050;">
                                DESCARGAR
                            </div>
                            <div class="col-12 py-0 text-center fs-2 fw-normal" style="color: #388050;">
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
@endsection
