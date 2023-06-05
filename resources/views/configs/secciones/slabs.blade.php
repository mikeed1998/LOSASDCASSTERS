@extends('layouts.admin')

@section('cssExtras')

@endsection

@section('jsLibExtras')

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
            margin-left: 500px;
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
            margin-left: 400px;
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
            margin-left: 340px;
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
            margin-left: 300px;
        }

        .contenedor-imagen_interna--imagen {
            width: 500px;
            height: 500px; 
        }

        .contenedor-texto_scroll {
            max-height: 320px;
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
            margin-left: 320px;
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
            margin-left: 200px;
        }

        .contenedor-imagen_interna--imagen {
            width: 400px;
            height: 400px; 
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
            margin-left: 240px;
        }

        .contenedor-texto_externo {
            margin-top: 100px !important;
        }

        .contenedor-imagen_interna--imagen {
            width: 400px;
            height: 400px; 
        }

        .contenedor-texto_scroll {
            max-height: 200px;
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
            margin-left: 230px;
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
            width: 300px;
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
            margin-left: 30px;
        }

        .contenedor-imagen_interna--imagen {
            width: 400px;
            height: 400px; 
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
            width: 400px;
            height: 400px;  
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
            width: 340px;
            height: 340px; 
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
            width: 260px;
            height: 260px; 
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

<style>
    /* input con opacidad y sin boton de selecciond e archivo */
		.file-upload input[type="file"] {
                    position: absolute;
                    left: -9999px;
                    }

                    .file-upload label {
                    display: inline-block;
                    background-color: #00000031;
                    color: #fff;
                    padding: 6px 12px;
                    cursor: pointer;
                    border-radius: 4px;
                    font-weight: normal;
                    opacity: 0%;
                    }

                    .file-upload input[type="file"] + label:before {
                    content: "\f07b";
                    font-family: "Font Awesome 5 Free";
                    font-size: 16px;
                    margin-right: 5px;
                    transition: all 0.5s;
                    }

                    .file-upload input[type="file"] + label {
                        transition: all 0.5s;
                    }

                    .file-upload input[type="file"]:focus + label,
                    .file-upload input[type="file"] + label:hover {
                    backdrop-filter: blur(5px);
                    background-color: #41464a37;
                    opacity: 100%;
                    transition: all 0.5s;
                    }
    /* input con opacidad y sin boton de selecciond e archivo */
</style>
@endsection

{{-- ELEMENTOS 26 -> --}}

@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('config.seccion.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

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
                <form id="form_logon-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_static" value="{{ $elements[25]->id }}">
                    <input id="input_logon-static" class="m-0 p-0" type="file" name="archivo_s">
                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_logon-static" style="opacity: 100%; border-radius: 26px; height: 300px;">Cambiar imagen</label>
                </form>
                <div class="col-12 position-absolute top-50 start-50 translate-middle">
                    <div class="row py-5">
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 text-center text-white mx-auto">
                            <textarea class="form-control bg-transparent titulo-slider_principal text-white fw-bold editarajax" rows="1" name="texto" data-id="{{ $elements[26]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[26]->texto }}</textarea>
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
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-5 col-sm-12 col-xs-12 col-12" style="background-color: #F5F5F5; height: 200px; display: flex; align-items: center;" >
                        <div class="m-0 p-0" style="
                            background-color: #F5F5F5;
                            background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[27]->imagen) }}');
                            background-position: center center;
                            background-repeat: no-repeat;
                            width: 100%;
                            height: 100px;
                            margin: auto;
                        ">
                            <form id="form_logon2-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_static" value="{{ $elements[27]->id }}">
                                <input id="input_logon2-static" class="m-0 p-0" type="file" name="archivo_s">
                                <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_logon2-static" style="opacity: 100%; border-radius: 26px;">Cambiar imagen</label>
                            </form>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8 col-sm-12 col-xs-12 col-12 display-4 fw-bold py-0">
                        <textarea class="form-control bg-transparent editarajax" style="font-size: 50px; font-weight: bold;" id="" name="texto" data-id="{{ $elements[28]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[28]->texto }}</textarea>                                         
                    </div>
                </div>
                <div class="row contenedor-text_externo">
                    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-9 col-sm-12 col-xs-12 col-12 mx-xxl-0 mx-md-0 mx-sm-auto position-relative py-0 contenedor-texto_externo" style="background-color: #388050;">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12 col-xs-12 col-12 py-3">
                                <div class="card border-0 bg-transparent">
                                    <div class="card-body border-0 bg-transparent contenedor-texto_scroll">
                                        <p class="text-white">
                                            <textarea class="form-control bg-transparent text-white editarajax" rows="16" name="texto" data-id="{{ $elements[29]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[29]->texto }}</textarea>
                                        </p>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="col-12 position-absolute top-50 start-50 translate-middle contenedor-imagen_externa">    
                            <div class="row">
                                <div class="col position-relative">
                                    <div class="col-10 position-absolute top-50 start-50 translate-middle contenedor-imagen_interna">
                                        <div class="col position-relative">
                                            <img src="{{ asset('img2/photos/imagenes_estaticas/'.$elements[30]->imagen) }}" alt="" class="img-fluid contenedor-imagen_interna--imagen">

                                            <div class="col position-absolute py-5 top-50">
                                                <form id="form_imgn-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_static" value="{{ $elements[30]->id }}">
                                                    <input id="input_imgn-static" class="m-0 p-0" type="file" name="archivo_s">
                                                    <label class="col-6 mx-auto m-0 p-2 d-flex justify-content-center align-items-center" for="input_imgn-static" style="opacity: 100%; color: white; border-radius: 26px; height: 100px;">Cambiar imagen</label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
                                <textarea class="form-control bg-transparent fs-2 fw-bolder text-center text-white editarajax" rows="1" name="texto" data-id="{{ $elements[31]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[31]->texto }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col fs-5 px-5 fw-normal">
                                <textarea class="form-control fs-5 fw-normal bg-transparent text-center text-white editarajax" rows="16" name="texto" data-id="{{ $elements[32]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[32]->texto }}</textarea>
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
                                
                                <textarea style="color: #388050;" class="form-control bg-transparent fs-2 fw-bolder text-center editarajax" rows="1" name="texto" data-id="{{ $elements[33]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[33]->texto }}</textarea>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col fs-5 px-5 fw-normal">
                                <textarea style="color: #388050;" class="form-control fs-5 fw-normal bg-transparent text-center editarajax" rows="16" name="texto" data-id="{{ $elements[34]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[34]->texto }}</textarea>

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
                                
                                <textarea class="form-control bg-transparent fs-2 fw-bolder text-center text-white editarajax" rows="1" name="texto" data-id="{{ $elements[35]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[35]->texto }}</textarea>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col fs-5 px-5 fw-normal">
                                <textarea class="form-control fs-5 fw-normal bg-transparent text-center text-white editarajax" rows="16" name="texto" data-id="{{ $elements[36]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[36]->texto }}</textarea>

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
                                
                                <textarea style="color: #388050;" class="form-control bg-transparent fs-2 fw-bolder text-center editarajax" rows="1" name="texto" data-id="{{ $elements[37]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[37]->texto }}</textarea>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col fs-5 px-5 fw-normal">
                                <textarea style="color: #388050;" class="form-control fs-5 fw-normal bg-transparent text-center editarajax" rows="16" name="texto" data-id="{{ $elements[38]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[38]->texto }}</textarea>

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
                                <textarea class="form-control bg-transparent fs-2 fw-bolder text-center text-white editarajax" rows="1" name="texto" data-id="{{ $elements[39]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[39]->texto }}</textarea>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col fs-5 px-5 fw-normal">
                                <textarea class="form-control fs-5 fw-normal bg-transparent text-center text-white editarajax" rows="16" name="texto" data-id="{{ $elements[40]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[40]->texto }}</textarea>

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
                                <textarea style="color: #388050;" class="form-control bg-transparent fs-2 fw-bolder text-center editarajax" rows="1" name="texto" data-id="{{ $elements[41]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[41]->texto }}</textarea>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col fs-5 px-5 fw-normal">
                                <textarea style="color: #388050;" class="form-control fs-5 fw-normal bg-transparent text-center editarajax" rows="16" name="texto" data-id="{{ $elements[42]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[42]->texto }}</textarea>

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
                                ">
                                    <form id="form_colocacion1-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_static" value="{{ $elements[43]->id }}">
                                        <input id="input_colocacion1-static" class="m-0 p-0" type="file" name="archivo_s">
                                        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_colocacion1-static" style="opacity: 100%; border-radius: 26px;">Cambiar imagen</label>
                                    </form>
                                </div>
                            </div>
                            <div class="col-7 mx-auto py-4 fs-3 fw-bolder" style="color: #388050;">
                                Subir y nivelar las vigas
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
                                ">
                                    <form id="form_colocacion2-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_static" value="{{ $elements[45]->id }}">
                                        <input id="input_colocacion2-static" class="m-0 p-0" type="file" name="archivo_s">
                                        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_colocacion2-static" style="opacity: 100%; border-radius: 26px;">Cambiar imagen</label>
                                    </form>
                                </div>
                            </div>
                            <div class="col-7 mx-auto py-4 fs-3 fw-bolder" style="color: #388050;">
                                Colocación de las Losas D´Casster´s
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
                                ">
                                    <form id="form_colocacion3-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_static" value="{{ $elements[47]->id }}">
                                        <input id="input_colocacion3-static" class="m-0 p-0" type="file" name="archivo_s">
                                        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_colocacion3-static" style="opacity: 100%; border-radius: 26px;">Cambiar imagen</label>
                                    </form>
                                </div>
                            </div>
                            <div class="col-7 mx-auto py-4 fs-3 fw-bolder" style="color: #388050;">
                                Aplicación de lechada
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
                                ">
                                    <form id="form_colocacion4-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_static" value="{{ $elements[49]->id }}">
                                        <input id="input_colocacion4-static" class="m-0 p-0" type="file" name="archivo_s">
                                        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_colocacion4-static" style="opacity: 100%; border-radius: 26px;">Cambiar imagen</label>
                                    </form>
                                </div>
                            </div>
                            <div class="col-7 mx-auto py-4 fs-3 fw-bolder" style="color: #388050;">
                                Aplicación de hormigón de terminados y nivelaciones
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
<script>
    $('#input_logon-static').change(function(e) {
		$('#form_logon-static').trigger('submit');
	});

    $('#input_logon2-static').change(function(e) {
		$('#form_logon2-static').trigger('submit');
	});

    $('#input_imgn-static').change(function(e) {
		$('#form_imgn-static').trigger('submit');
	});

    $('#input_colocacion1-static').change(function(e) {
		$('#form_colocacion1-static').trigger('submit');
	});

    $('#input_colocacion2-static').change(function(e) {
		$('#form_colocacion2-static').trigger('submit');
	});

    $('#input_colocacion3-static').change(function(e) {
		$('#form_colocacion3-static').trigger('submit');
	});

    $('#input_colocacion4-static').change(function(e) {
		$('#form_colocacion4-static').trigger('submit');
	});
</script>
@endsection

@section('jqueryExtra')

@endsection
