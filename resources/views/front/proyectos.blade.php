@extends('layouts.front')

@section('cssExtras')
@endsection

@section('styleExtras')
<style>

    .con-scroll {
        height: 90px; /* Ajusta la altura del contenedor */
        overflow: auto; /* Activa el scroll */
        scrollbar-width: thin; /* Define el grosor del scrollbar */
        scrollbar-color: #3C3C3C; /* Define el color del scrollbar */
      }
    
      .con-scroll::-webkit-scrollbar {
        width: 8px; /* Ajusta el ancho del scrollbar */
        background-color: #f1f1f1; /* Define el color de fondo del scrollbar */
      }
    
      .con-scroll::-webkit-scrollbar-thumb {
        background-color: #3C3C3C; /* Define el color del thumb del scrollbar */
        border-radius: 4px; /* Define el radio de borde del thumb */
      }
    
    
      .nos-scroll {
        height: 165px; /* Ajusta la altura del contenedor */
        overflow: auto; /* Activa el scroll */
        scrollbar-width: thin; /* Define el grosor del scrollbar */
        scrollbar-color: #3C3C3C; /* Define el color del scrollbar */
      }
    
      .nos-scroll::-webkit-scrollbar {
        width: 8px; /* Ajusta el ancho del scrollbar */
        background-color: #f1f1f1; /* Define el color de fondo del scrollbar */
      }
    
      .nos-scroll::-webkit-scrollbar-thumb {
        background-color: #3C3C3C; /* Define el color del thumb del scrollbar */
        border-radius: 4px; /* Define el radio de borde del thumb */
      }
            
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
                background: #388050;
            }
    
            .clientes {
                position: relative;
            }
    
            .clientes .slick-dots {
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
    
            .clientes .slick-dots li {
                margin: 100px 10px;
                color: white;
            }
    
            .clientes .slick-dots li button {
                width: 15px;
                height: 15px;
                border-radius: 50%;
                border: none;
                background: #BCBBAF;
                cursor: pointer;
            }
    
            .clientes .slick-dots li.slick-active button {
                background: #388050;
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
                    height: 440px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 740px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 270px;
                    height: 500px;
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
                    height: 440px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 740px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 200px;
                    height: 500px;
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
                    max-height: 500px;
                    overflow: auto;
                }
    
                .espacios-sm {
                    display: none;
                }
    
                .imagen-proyectos {
                    height: 440px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 740px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 175px;
                    height: 500px;
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
                    height: 440px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 740px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 150px;
                    height: 500px;
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
                    height: 440px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 740px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 120px;
                    height: 500px;
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
                    height: 440px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 740px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 140px;
                    height: 500px;
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
                    height: 440px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 740px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 130px;
                    height: 500px;
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
                    height: 420px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 720px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 110px;
                    height: 500px;
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
                    height: 400px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 695px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 100px;
                    height: 500px;
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
                    height: 400px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 695px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 180px;
                    height: 500px;
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
                    height: 360px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 655px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 120px;
                    height: 500px;
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
                    height: 340px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 635px;
                }
    
                .col-verde {
                    margin-top: 230px; 
                    margin-left: 90px;
                    height: 500px;
                }
            }
    
        </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col position-relative slider-principal" style="
            background-color: black;
            background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[62]->imagen) }}');
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.6);
        ">
            <div class="col-12 position-absolute top-50 start-50 translate-middle">
                <div class="row py-5">
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 text-center text-white mx-auto">
                        <div class="titulo-slider_principal" style=""><strong>{{ $elements[63]->texto }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-top: 100px;">
    <div class="row">
        <div class="col-11 mx-auto">
            
            <div class="row" style="margin-bottom: 50px;">
            
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto">               
                    <div class="row">
                        <div class="slider-proyectos">
                        
                            @foreach ($proyectos as $pro)
                            <div>
                                <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                        <div class="row">
                                            <div class="col position-relative">
                                                <div class="row">
                                                    <div class="col mt-5 text-center">
                                                        <p class="fs-3" style="color: #FFEC23;">{{ $pro->nombre }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-11 mx-auto text-center text-white fs-5 px-5 con-scroll">
                                                        {{ $pro->descripcion }}
                                                    </div>
                                                </div>
                                                <div class="row py-5">
                                                    <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                </div>
                                                <div class="row py-0">
                                                    <div class="col">
                                                        <div class="imagen-proyectos" style="
                                                            background-color: black;
                                                            background-image: url('{{ asset('img2/photos/proyectos/'.$pro->foto) }}');
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
    <div class="row py-5" style="background-color: #F5F5F5;">
        <div class="col mt-5 py-5">
            <div class="row">
                <div class="col fs-3 text-center" style="color: #388050;">
                    Nuestros
                </div>
            </div>
            <div class="row">
                <div class="col display-3 fw-bolder text-center">
                    Clientes
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-1">
                    <a href="" id="anteriorr" uk-icon="icon: chevron-double-left; ratio: 5;" style="color: #388050;"></a>
                </div>
                <div class="col-9 text-center mx-auto">
                    <div class="row">
                        <div class="clientes">

                            @foreach ($clientes as $cl)
                                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                    <div class="" style="
                                        background-color: ;
                                        background-image: url('{{ asset('img2/photos/clientes/'.$cl->logo) }}');
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        width: 100%;  
                                        height: 200px;     
                                    "></div>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <a href="" id="siguienter" class="fs-5 fw-bold" uk-icon="icon: chevron-double-right; ratio: 5;" style="color: #388050;"></a>
                </div>
            </div>
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
            rows: 3,
            slidesPerRow: 3,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    rows: 3,
                    slidesPerRow: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 760,
                settings: {
                    rows: 2,
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
<script>
    $('.clientes').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,

            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
        });

        $('#siguienter').click(function(e){
            e.preventDefault();
            $('.clientes').slick('slickNext');
        });

        $('#anteriorr').click(function(e){
            e.preventDefault();
            $('.clientes').slick('slickPrev');
        });
</script>
@endsection
