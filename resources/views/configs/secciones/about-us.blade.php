@extends('layouts.admin')

@section('cssExtras')

@endsection

@section('jsLibExtras')

@endsection

@section('styleExtras')
<style>

    .scroll-tan {
        height: 220px; /* Ajusta la altura del contenedor */
        overflow: auto; /* Activa el scroll */
        scrollbar-width: thin; /* Define el grosor del scrollbar */
        scrollbar-color: #3C3C3C; /* Define el color del scrollbar */
      }
    
      .scroll-tan::-webkit-scrollbar {
        width: 8px; /* Ajusta el ancho del scrollbar */
        background-color: #f1f1f1; /* Define el color de fondo del scrollbar */
      }
    
      .scroll-tan::-webkit-scrollbar-thumb {
        background-color: #3C3C3C; /* Define el color del thumb del scrollbar */
        border-radius: 4px; /* Define el radio de borde del thumb */
      }
    
            .certificaciones {
                position: relative;
            }
    
            .certificaciones .slick-dots {
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
    
            .certificaciones .slick-dots li {
                margin: 100px 10px;
                color: white;
            }
    
            .certificaciones .slick-dots li button {
                width: 15px;
                height: 15px;
                border-radius: 50%;
                border: none;
                background: #BCBBAF;
                cursor: pointer;
            }
    
            .certificaciones .slick-dots li.slick-active button {
                background: #388050;
            }
    
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
        height: 400px; /* Ajusta la altura del contenedor */
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
    
            /*_______________ MODIFICANDO LOS PUNTOS DE SLICK*/
            /*----------------------------------------------------------------------------------------------------------*/
            .slider {
                position: relative;
            }
    
            .slider .slick-dots {
                position: absolute;
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
    
            .slider .slick-dots li {
                margin: 30px 10px;
                color: white;
            }
    
            .slider .slick-dots li button {
                width: 15px;
                height: 15px;
                border-radius: 50%;
                border: none;
                background: #fff;
                cursor: pointer;
            }
    
            .slider .slick-dots li.slick-active button {
                background: #FFEC23;
            }
    
            /*----------------------------------------------------------------------------------------------------------*/
    
            /*_______________ MODIFICANDO LOS PUNTOS DE SLICK*/
            /*----------------------------------------------------------------------------------------------------------*/
            .slider-videos {
                position: relative;
            }
    
            .slider-videos .slick-dots {
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
    
            .slider-videos .slick-dots li {
                margin: 30px 10px;
                color: white;
            }
    
            .slider-videos .slick-dots li button {
                width: 15px;
                height: 15px;
                border-radius: 50%;
                border: none;
                background: #FFEC23;
                cursor: pointer;
            }
    
            .slider-videos .slick-dots li.slick-active button {
                background: #388050;
            }
    
    
    
            .respaldos {
                position: relative;
            }
    
            .respaldos .slick-dots {
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
    
            .respaldos .slick-dots li {
                margin: 30px 10px;
                color: white;
            }
    
            .respaldos .slick-dots li button {
                width: 15px;
                height: 15px;
                border-radius: 50%;
                border: none;
                background: #BCBBAF;
                cursor: pointer;
            }
    
            .respaldos .slick-dots li.slick-active button {
                background: #388050;
            }
    
    
            /*----------------------------------------------------------------------------------------------------------*/
    
            .raya-soluciones {
                background: linear-gradient(to right, #FFEC23 0%, #FFEC23 75%, black 75%, black 100%);
                background-size: 100% 5px;
                margin-top: 5px;
                background-repeat: no-repeat;
                background-position: bottom;
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
                    font-size: 96px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 50px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 64px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 120px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 350px;
                    width: 97%;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 400px;
                    margin-right: 500px;
                }
     
                /* =================================================================== */
    
                .espacios-sm {
                    display: none;
                }
    
                .imagen-proyectos {
                    height: 500px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 800px;
                }
    
                .col-verde {
                    margin-top: 380px; 
                    margin-left: 220px;
                    height: 800px;
                }
    
    
                .circulo-caracteristicas {
                    height: 600px; 
                    width: 600px;
                }
    
                .col-ciruclo {
                    margin-top: 0px;
                }
    
                .cont-circulo {
                    margin-top: 120px !important;
                }
    
                .contenedor-contacto {
                    margin-bottom: 450px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 340px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 80px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .contenedor-t1 {
                    display: block;
                }
    
                .contenedor-t2 {
                    display: none;
                }
    
                .contenedor-t1 .col-traingle_verde--externo {
                    margin-top: 600px !important;
                    background-color: white;
                }
    
                .contenedor-t1 .triangle {
                    width: 0;
                    height: 0;
                    border-left: 60px solid transparent;
                    border-right: 60px solid transparent;
                    border-bottom: 60px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t1 .triangle-2 {
                    width: 0;
                    height: 0;
                    border-left: 60px solid transparent;
                    border-right: 60px solid transparent;
                    border-bottom: 60px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t1 .col-triangle_interno--verde {
                    margin-left: -66px; 
                    margin-top: -360px;
                }
    
                .contenedor-t1 .col-triangle_interno--blanco {
                    margin-left: -62px; 
                    margin-top: 240px;
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
                    font-size: 80px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 50px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 58px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 120px;
                }
    
                /* =================================================================== */
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 97%;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 97%;
                }
     
                /* =================================================================== */  
    
                .espacios-sm {
                    display: none;
                }
    
                .imagen-proyectos {
                    height: 500px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 800px;
                }
    
                .col-verde {
                    margin-top: 380px; 
                    margin-left: 200px;
                    height: 800px;
                }
    
                .circulo-caracteristicas {
                    height: 480px; 
                    width: 480px;
                }
    
                .col-ciruclo {
                    margin-top: 60px;
                }
    
                .cont-circulo {
                    margin-top: 0px;
                }
    
                .contenedor-contacto {
                    margin-bottom: 450px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 300px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 360px;
                }
    
                .col-formulario_contacto {
                    margin-top: 0px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .contenedor-t1 {
                    display: block;
                }
    
                .contenedor-t2 {
                    display: none;
                }
    
                .contenedor-t1 .col-traingle_verde--externo {
                    margin-top: 600px !important;
                    background-color: white;
                }
    
                .contenedor-t1 .triangle {
                    z-index: 500;
                    width: 0;
                    height: 0;
                    border-left: 62px solid transparent;
                    border-right: 62px solid transparent;
                    border-bottom: 62px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t1 .triangle-2 { 
                    z-index: 1;
                    width: 0;
                    height: 0;
                    border-left: 62px solid transparent;
                    border-right: 62px solid transparent;
                    border-bottom: 62px solid white; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t1 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: -360px;
                }
    
                .contenedor-t1 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 240px;
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
                    font-size: 80px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 40px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 48px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 110px;
                }
    
                /* =================================================================== */
    
                 /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 50px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 50px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 120px;
                }
    
                /* =================================================================== */
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 95%;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 95%;
                }
     
                /* =================================================================== */  
    
                .espacios-sm {
                    display: none;
                }
    
                .imagen-proyectos {
                    height: 480px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 770px;
                }
    
                .col-verde {
                    margin-top: 360px; 
                    margin-left: 160px;
                    height: 780px;
                }
    
                .circulo-caracteristicas {
                    height: 430px; 
                    width: 430px;
                }
    
                .col-ciruclo {
                    margin-top: 30px;
                }
    
                .cont-circulo {
                    margin-top: 0px;
                }
    
                .contenedor-contacto {
                    margin-bottom: 450px;
                }
                
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 250px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 280px;
                }
    
                .col-formulario_contacto {
                    margin-top: 90px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .contenedor-t1 {
                    display: block;
                }
    
                .contenedor-t2 {
                    display: none;
                }
    
                .contenedor-t1 .col-traingle_verde--externo {
                    margin-top: 600px !important;
                    background-color: white;
                }
    
                .contenedor-t1 .triangle {
                    z-index: 500;
                    width: 0;
                    height: 0;
                    border-left: 58px solid transparent;
                    border-right: 58px solid transparent;
                    border-bottom: 58px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t1 .triangle-2 { 
                    z-index: 1;
                    width: 0;
                    height: 0;
                    border-left: 58px solid transparent;
                    border-right: 58px solid transparent;
                    border-bottom: 58px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t1 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: -360px;
                }
    
                .contenedor-t1 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 240px;
                }
            }
    
            @media (min-width: 1201px) and (max-width: 1360px) {
                /* ==[ Slider principal ]============================================= */
    
                /* [[[ Alto de la imágen ]]] */
                .slider-principal {
                    height: 700px;
                }
    
                /* [[[ Tamaño del texto ]]] */
                .titulo-slider_principal {
                    font-size: 64px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 30px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 42px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 110px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 95%;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 95%;
                }
     
                /* =================================================================== */  
    
                .espacios-sm {
                    display: none;
                }
    
                .imagen-proyectos {
                    height: 460px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 760px;
                }
    
                .col-verde {
                    margin-top: 360px; 
                    margin-left: 140px;
                    height: 760px;
                }
    
                .circulo-caracteristicas {
                    height: 380px; 
                    width: 380px;
                }
    
                .col-ciruclo {
                    margin-top: 120px;
                }
    
                .cont-circulo {
                    margin-top: 0px;
                }
    
                .contenedor-contacto {
                    margin-bottom: 450px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 210px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 230px;
                }
    
                .col-formulario_contacto {
                    margin-top: 130px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .contenedor-t1 {
                    display: block;
                }
    
                .contenedor-t2 {
                    display: none;
                }
    
                .contenedor-t1 .col-traingle_verde--externo {
                    margin-top: 600px !important;
                    background-color: white;
                }
    
                .contenedor-t1 .triangle {
                    z-index: 500;
                    width: 0;
                    height: 0;
                    border-left: 52px solid transparent;
                    border-right: 52px solid transparent;
                    border-bottom: 52px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t1 .triangle-2 { 
                    z-index: 1;
                    width: 0;
                    height: 0;
                    border-left: 52px solid transparent;
                    border-right: 52px solid transparent;
                    border-bottom: 52px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t1 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: -360px;
                }
    
                .contenedor-t1 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 240px;
                }
            }
    
            @media (min-width: 993px) and (max-width: 1200px) {
                /* ==[ Slider principal ]============================================= */
    
                /* [[[ Alto de la imágen ]]] */
                .slider-principal {
                    height: 800px;
                }
    
                /* [[[ Tamaño del texto ]]] */
                .titulo-slider_principal {
                    font-size: 64px;
                }
    
                /* =================================================================== */
    
                
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 30px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 38px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 110px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 380px;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 300px;
                }
     
                /* =================================================================== */  
    
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
                    margin-top: 350px; 
                    margin-left: 120px;
                    height: 740px;
                }
    
                .circulo-caracteristicas {
                    height: 350px; 
                    width: 350px;
                }
    
                .col-ciruclo {
                    margin-top: 140px;
                }
    
                .cont-circulo {
                    margin-top: 0px;
                }
    
                .contenedor-contacto {
                    margin-bottom: 450px;
                }
                
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 185px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 230px;
                }
    
                .col-formulario_contacto {
                    margin-top: 110px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .contenedor-t1 {
                    display: block;
                }
    
                .contenedor-t2 {
                    display: none;
                }
    
    
                .contenedor-t1 .col-traingle_verde--externo {
                    margin-top: 600px !important;
                    background-color: white;
                }
    
                .contenedor-t1 .triangle {
                    z-index: 500;
                    width: 0;
                    height: 0;
                    border-left: 44px solid transparent;
                    border-right: 44px solid transparent;
                    border-bottom: 44px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t1 .triangle-2 { 
                    z-index: 1;
                    width: 0;
                    height: 0;
                    border-left: 44px solid transparent;
                    border-right: 44px solid transparent;
                    border-bottom: 44px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t1 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: -360px;
                }
    
                .contenedor-t1 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 240px;
                }
            }
    
            @media (min-width: 901px) and (max-width: 992px) {
                /* ==[ Slider principal ]============================================= */
    
                /* [[[ Alto de la imágen ]]] */
                .slider-principal {
                    height: 700px;
                }
    
                /* [[[ Tamaño del texto ]]] */
                .titulo-slider_principal {
                    font-size: 64px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 30px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 42px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 110px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 600px;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 600px;
                }
     
                /* =================================================================== */  
    
                .espacios-sm {
                    display: none;
                }
    
                .imagen-proyectos {
                    height: 430px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 730px;
                }
    
                .col-verde {
                    margin-top: 350px; 
                    margin-left: 170px;
                    height: 730px;
                }
    
                .circulo-caracteristicas {
                    height: 600px; 
                    width: 600px;
                }
    
                .col-ciruclo {
                    margin-top: 0px;
                }
    
                .cont-circulo {
                    margin-top: 600px !important;
                }
    
                .contenedor-contacto {
                    margin-bottom: 0px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 270px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 300px;
                }
    
                .col-formulario_contacto {
                    margin-top: 50px;
                }
                
                .col-contacto_imagen {
                    margin-top: 1000px !important;
                }
                
                .contenedor-t1 {
                    display: none;
                }
    
                .contenedor-t2 {
                    display: block;
                }
    
                .contenedor-t2 .triangle {
                    width: 0;
                    height: 0;
                    border-left: 70px solid transparent;
                    border-right: 70px solid transparent;
                    border-bottom: 70px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t2 .triangle-2 {
                    width: 0;
                    height: 0;
                    border-left: 70px solid transparent;
                    border-right: 70px solid transparent;
                    border-bottom: 70px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t2 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: 220px;
                }
    
                .contenedor-t2 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 200px;
                }
            }
    
            @media (min-width: 801px) and (max-width: 900px) {
                /* ==[ Slider principal ]============================================= */
    
                /* [[[ Alto de la imágen ]]] */
                .slider-principal {
                    height: 700px;
                }
    
                /* [[[ Tamaño del texto ]]] */
                .titulo-slider_principal {
                    font-size: 64px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 30px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 38px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 110px;
                }
    
                /* =================================================================== */
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 600px;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 600px;
                }
     
                /* =================================================================== */  
    
                .espacios-sm {
                    display: block;
                }
    
                .imagen-proyectos {
                    height: 440px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 730px;
                }
    
                .col-verde {
                    margin-top: 340px; 
                    margin-left: 160px;
                    height: 730px;
                }
    
                .circulo-caracteristicas {
                    height: 550px; 
                    width: 550px;
                }
    
                .col-ciruclo {
                    margin-top: 0px;
                }
    
                .cont-circulo {
                    margin-top: 600px !important;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 160px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 300px;
                }
    
                .col-formulario_contacto {
                    margin-top: 50px;
                }
    
                .contenedor-contacto {
                    margin-bottom: 0px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 240px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 300px;
                }
    
                .col-formulario_contacto {
                    margin-top: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 1000px !important;
                }
    
                .contenedor-t1 {
                    display: none;
                }
    
                .contenedor-t2 {
                    display: block;
                }
    
                .contenedor-t2 .triangle {
                    width: 0;
                    height: 0;
                    border-left: 70px solid transparent;
                    border-right: 70px solid transparent;
                    border-bottom: 70px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t2 .triangle-2 {
                    width: 0;
                    height: 0;
                    border-left: 70px solid transparent;
                    border-right: 70px solid transparent;
                    border-bottom: 70px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t2 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: 220px;
                }
    
                .contenedor-t2 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 200px;
                }
            }
            
            @media (min-width: 701px) and (max-width: 800px) {
                /* ==[ Slider principal ]============================================= */
    
                /* [[[ Alto de la imágen ]]] */
                .slider-principal {
                    height: 700px;
                }
    
                /* [[[ Tamaño del texto ]]] */
                .titulo-slider_principal {
                    font-size: 64px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 30px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 38px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 90px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 550px;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 550px;
                }
     
                /* =================================================================== */  
    
                .espacios-sm {
                    display: block;
                }
    
                .imagen-proyectos {
                    height: 440px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 730px;
                }
    
                .col-verde {
                    margin-top: 340px; 
                    margin-left: 120px;
                    height: 730px;
                }
    
                .circulo-caracteristicas {
                    height: 480px; 
                    width: 480px;
                }
    
                .col-ciruclo {
                    margin-top: 0px;
                }
    
                .cont-circulo {
                    margin-top: 600px !important;
                }
    
                .contenedor-contacto {
                    margin-bottom: 0px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 140px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 300px;
                }
    
                .col-formulario_contacto {
                    margin-top: 50px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 220px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 300px;
                }
    
                .col-formulario_contacto {
                    margin-top: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 1000px !important;
                }
    
                .contenedor-t1 {
                    display: none;
                }
    
                .contenedor-t2 {
                    display: block;
                }
    
                .contenedor-t2 .triangle {
                    width: 0;
                    height: 0;
                    border-left: 70px solid transparent;
                    border-right: 70px solid transparent;
                    border-bottom: 70px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t2 .triangle-2 {
                    width: 0;
                    height: 0;
                    border-left: 70px solid transparent;
                    border-right: 70px solid transparent;
                    border-bottom: 70px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t2 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: 220px;
                }
    
                .contenedor-t2 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 200px;
                }
            }
    
            @media (min-width: 601px) and (max-width: 700px) {
                /* ==[ Slider principal ]============================================= */
    
                /* [[[ Alto de la imágen ]]] */
                .slider-principal {
                    height: 600px;
                }
    
                /* [[[ Tamaño del texto ]]] */
                .titulo-slider_principal {
                    font-size: 64px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 30px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 42px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 110px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 820px;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 600px;
                }
     
                /* =================================================================== */  
    
                .espacios-sm {
                    display: block;
                }
    
                .imagen-proyectos {
                    height: 402px;
                }
    
                .col-amarilla {
                    margin-top: 25px;
                    height: 700px;
                }
    
                .col-verde {
                    margin-top: 330px; 
                    margin-left: 110px;
                    height: 700px;
                }
    
                .circulo-caracteristicas {
                    height: 500px; 
                    width: 500px;
                }
    
                .col-ciruclo {
                    margin-top: 0px;
                }
    
                .cont-circulo {
                    margin-top: 600px !important;
                }
                
                .contenedor-contacto {
                    margin-bottom: 0px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 255px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 300px;
                }
    
                .col-formulario_contacto {
                    margin-top: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 1000px !important;
                }
    
                .contenedor-t1 {
                    display: none;
                }
    
                .contenedor-t2 {
                    display: block;
                }
    
                .contenedor-t2 .triangle {
                    width: 0;
                    height: 0;
                    border-left: 70px solid transparent;
                    border-right: 70px solid transparent;
                    border-bottom: 70px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t2 .triangle-2 {
                    width: 0;
                    height: 0;
                    border-left: 70px solid transparent;
                    border-right: 70px solid transparent;
                    border-bottom: 70px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t2 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: 220px;
                }
    
                .contenedor-t2 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 200px;
                }
            }
    
            @media (min-width: 481px) and (max-width: 600px) {
                /* ==[ Slider principal ]============================================= */
    
                /* [[[ Alto de la imágen ]]] */
                .slider-principal {
                    height: 700px;
                }
    
                /* [[[ Tamaño del texto ]]] */
                .titulo-slider_principal {
                    font-size: 64px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 30px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 42px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 110px;
                }
    
                /* =================================================================== */
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 800px;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 600px;
                }
     
                /* =================================================================== */  
    
                .espacios-sm {
                    display: block;
                }
    
                .imagen-proyectos {
                    height: 402px;
                }
    
                .col-amarilla {
                    margin-top: 25px;
                    height: 700px;
                }
    
                .col-verde {
                    margin-top: 330px; 
                    margin-left: 160px;
                    height: 700px;
                }
    
                .circulo-caracteristicas {
                    height: 430px; 
                    width: 430px;
                }
    
                .col-ciruclo {
                    margin-top: 0px;
                }
    
                .cont-circulo {
                    margin-top: 500px !important;
                }
    
                .contenedor-contacto {
                    margin-bottom: 0px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 215px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 300px;
                }
    
                .col-formulario_contacto {
                    margin-top: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 1000px !important;
                }
    
                .contenedor-t1 {
                    display: none;
                }
    
                .contenedor-t2 {
                    display: block;
                }
    
                .contenedor-t2 .triangle {
                    width: 0;
                    height: 0;
                    border-left: 70px solid transparent;
                    border-right: 70px solid transparent;
                    border-bottom: 70px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t2 .triangle-2 {
                    width: 0;
                    height: 0;
                    border-left: 70px solid transparent;
                    border-right: 70px solid transparent;
                    border-bottom: 70px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t2 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: 220px;
                }
    
                .contenedor-t2 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 200px;
                }
            }
    
            @media (min-width: 361px) and (max-width: 480px) {
                /* ==[ Slider principal ]============================================= */
    
                /* [[[ Alto de la imágen ]]] */
                .slider-principal {
                    height: 600px;
                }
    
                /* [[[ Tamaño del texto ]]] */
                .titulo-slider_principal {
                    font-size: 32px;
                }
    
    
                /* =================================================================== */
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 10px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 28px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 110px;
                }
    
                /* =================================================================== */
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 600px;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 450px;
                }
     
                /* =================================================================== */  
    
                .espacios-sm {
                    display: block;
                }
    
                .imagen-proyectos {
                    height: 402px;
                }
    
                .col-amarilla {
                    margin-top: 25px;
                    height: 700px;
                }
    
                .col-verde {
                    margin-top: 330px; 
                    margin-left: 110px;
                    height: 700px;
                }
    
                .circulo-caracteristicas {
                    height: 310px; 
                    width: 310px;
                }
    
                .col-ciruclo {
                    margin-top: 0px;
                }
    
                .cont-circulo {
                    margin-top: 340px !important;
                }
    
                .contenedor-contacto {
                    margin-bottom: 0px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 140px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 300px;
                }
    
                .col-formulario_contacto {
                    margin-top: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 800px !important;
                }
    
                .contenedor-t1 {
                    display: none;
                }
    
                .contenedor-t2 {
                    display: block;
                }
    
                .contenedor-t2 .triangle {
                    width: 0;
                    height: 0;
                    border-left: 55px solid transparent;
                    border-right: 55px solid transparent;
                    border-bottom: 55px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t2 .triangle-2 {
                    width: 0;
                    height: 0;
                    border-left: 55px solid transparent;
                    border-right: 55px solid transparent;
                    border-bottom: 55px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t2 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: 220px;
                }
    
                .contenedor-t2 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 200px;
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
                    font-size: 24px;
                }
    
                /* =================================================================== */
    
    
                 /* =================================================================== */
    
                /* ==[ TEXTO APARTADO SOLUCIONES ]============================================= */
    
                /* [[[ Padding-top del contenedor que manipula el alto del contenedor de las imágenes ]]] */
                .columna-soluciones {
                    padding-top: 10px;
                }
    
                /* [[[ Tamaño de la letra ]]] */
                .texto-soluciones {
                    font-size: 16px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 50px;
                }
    
                /* =================================================================== */
    
    
                /* ==[ APARTADO NOSOTROS ]============================================= */
    
                /* [[[ Imágen del apartado nosotros, la imagen de arriba ]]] */
                .imagen-nosotros_big {
                    height: 400px;
                    width: 500px;
                }
    
                /* [[[ Imágen del apartado nosotros, la imagen de abajo ]]] */
                .imagen-nosotros_small {
                    height: 320px;
                    width: 500px;
                }
     
                /* =================================================================== */ 
    
                .espacios-sm {
                    display: block;
                }
    
                .imagen-proyectos {
                    height: 402px;
                }
    
                .col-amarilla {
                    margin-top: 25px;
                    height: 700px;
                }
    
                .col-verde {
                    margin-top: 330px; 
                    margin-left: 110px;
                    height: 700px;
                }
    
                .circulo-caracteristicas {
                    height: 250px; 
                    width: 250px;
                }
    
                .col-ciruclo {
                    margin-top: 0px;
                }
    
                .cont-circulo {
                    margin-top: 280px !important;
                }
    
                .contenedor-contacto {
                    margin-bottom: 0px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 600px;
                }
    
                .col-verde2 {
                    margin-top: 280px; 
                    margin-left: 125px;
                    height: 600px;
                }
    
                .col-contacto {
                    margin-bottom: 300px;
                }
    
                .col-formulario_contacto {
                    margin-top: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 700px !important;
                }
    
                .contenedor-t1 {
                    display: none;
                }
    
                .contenedor-t2 {
                    display: block;
                }
    
                .contenedor-t2 .triangle {
                    width: 0;
                    height: 0;
                    border-left: 55px solid transparent;
                    border-right: 55px solid transparent;
                    border-bottom: 55px solid #388050; 
                    transform: rotate(90deg);
                }
    
                .contenedor-t2 .triangle-2 {
                    width: 0;
                    height: 0;
                    border-left: 55px solid transparent;
                    border-right: 55px solid transparent;
                    border-bottom: 55px solid white; 
                    transform: rotate(90deg);
                }
    
            
                .contenedor-t2 .col-triangle_interno--verde {
                    margin-left: -50px; 
                    margin-top: 220px;
                }
    
                .contenedor-t2 .col-triangle_interno--blanco {
                    margin-left: -50px; 
                    margin-top: 200px;
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

@section('content')
{{-- 64 -> --}}
	<div class="row mb-4 px-2">
		<a href="{{ route('config.seccion.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col position-relative slider-principal" style="
                background-color: black;
                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[65]->imagen) }}');
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.6);
            ">
                <form id="form_abouts-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_static" value="{{ $elements[65]->id }}">
                    <input id="input_abouts-static" class="m-0 p-0" type="file" name="archivo_s">
                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_abouts-static" style="opacity: 100%; border-radius: 26px; height: 300px;">Cambiar imagen</label>
                </form>
                <div class="col-12 position-absolute top-50 start-50 translate-middle">
                    <div class="row py-5">
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 text-center text-white mx-auto">
                            <textarea class="form-control text-center bg-transparent titulo-slider_principal text-white fw-bold editarajax" rows="2" name="texto" data-id="{{ $elements[66]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[66]->texto }}</textarea>
                        </div>
                    </div>-
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" style="background-color: #F5F5F5; padding-top: 100px;">
        <div class="row" style="background-color: #F5F5F5;">
            <div class="col-12 mx-auto position-relative py-5" style="background-color: #F5F5F5; margin-bottom: 100px;">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 py-5 position-relative mx-auto">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 py-5 mx-auto px-5">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="m-0" style="color: #388050;">
                                            <input style="color: #388050;" class="form-control text-start bg-transparent fs-4 editarajax" name="texto" data-id="{{ $elements[69]->id }}" data-table="Elemento" data-campo="texto" value="{{ $elements[69]->texto }}">
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h1 class="display-2 fw-semibold">
                                            <input class="form-control text-start bg-transparent editarajax" style="font-size: 60px;" name="texto" data-id="{{ $elements[70]->id }}" data-table="Elemento" data-campo="texto" value="{{ $elements[70]->texto }}">
                                        </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m-0 nos-scroll">
                                        <textarea class="form-control text-start bg-transparent editarajax" rows="16" name="texto" data-id="{{ $elements[71]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[71]->texto }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="espacios-sm">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 col-12 py-5 position-absolute bottom-0 end-50 transalate-middle-x" style="margin-bottom: 180px;">
                    <div class="row px-5" style="">
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto mt-2 px-0" style="background-color: #388050;">
                            <!-- <img src="img/home/imagen_02.png" alt="" class="img-fluid"> -->
                            <br>
                            <div class="imagen-nosotros_big" style="
                                background-color: black;
                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[67]->imagen) }}');
                                background-position: center center;
                                background-size: cover;
                                background-repeat: no-repeat;
                            ">
                                <form id="form_imgverde-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id_static" value="{{ $elements[67]->id }}">
                                    <input id="input_imgverde-static" class="m-0 p-0" type="file" name="archivo_s">
                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_imgverde-static" style="opacity: 100%; border-radius: 26px; height: 200px;">Cambiar imagen</label>
                                </form>
                            </div>
                            <div class="col-6 mt-5 position-absolute top-50 start-50 ">
                                <div class="row">
                                    <div class="col-12 px-0 mt-5" style="background-color: #FFEC23; height: 340px;">
                                        <div class="imagen-nosotros_small" style="
                                            background-color: black;
                                            background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[68]->imagen) }}');
                                            background-position: center center;
                                            background-size: cover;
                                            background-repeat: no-repeat;
                                        ">
                                            <form id="form_imgamarillo-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id_static" value="{{ $elements[68]->id }}">
                                                <input id="input_imgamarillo-static" class="m-0 p-0" type="file" name="archivo_s">
                                                <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_imgamarillo-static" style="opacity: 100%; border-radius: 26px; height: 200px;">Cambiar imagen</label>
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
    
    <!-- <style>
        .triangle {
    width: 0;
    height: 0;
    border-left: var(--width) solid transparent;
    border-right: var(--width) solid transparent;
    border-bottom: var(--height) solid #f00; 
    }
    </style> -->
    
    
    <style>
        
    </style>
    
    <div class="container-fluid contenedor-t1 bg-white">
        <div class="row">
            <div class="col-11 mt-5 mb-5 mx-auto text-center">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-m-6 col-sm-11 col-xs-11 col-11 py-5" style="background-color: #388050;">
                        <div class="row">
                            <div class="col-4 mx-auto d-flex align-items-center justify-content-center" style="
                                border-radius: 100%; 
                                height: 150px; 
                                width: 150px; 
                                background-color: #FFEC23;
                                ">

                                <img src="{{ asset('img2/photos/imagenes_estaticas/'.$elements[72]->imagen) }}" alt="" class="img-fluid" style="">

                                <div class="col position-absolute">
                                    <form id="form_vision-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_static" value="{{ $elements[72]->id }}">
                                        <input id="input_vision-static" class="m-0 p-0" type="file" name="archivo_s">
                                        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_vision-static" style="opacity: 100%; border-radius: 26px;">Cambiar imagen</label>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-9 mx-auto text-white display-4 fw-bolder py-0">
                                <input style="font-size: 50px; font-weight: bold;" class="form-control text-white text-center bg-transparent display-4 editarajax" name="texto" data-id="{{ $elements[73]->id }}" data-table="Elemento" data-campo="texto" value="{{ $elements[73]->texto }}">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-9 text-white fs-5 mx-auto py-1 scroll-tan">
                                <textarea class="form-control fs-5 text-white text-start bg-transparent editarajax" rows="10" name="texto" data-id="{{ $elements[74]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[74]->texto }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="row">
                            <div class="col-6 position-relative col-traingle_verde--externo">
                               <div class="col position-absolute col-triangle_interno--verde">
                                   <div class="triangle con-ta-1 m-0"></div>
                               </div>
                            </div>
                            <div class="col-6 col-traingle_blanco--externo" style="background-color: #388050;">
                                <div class="col position-absolute col-triangle_interno--blanco">
                                   <div class="triangle-2 con-ta-2 m-0"></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-m-6 col-sm-11 col-xs-11 col-11 py-5" style="background-color: #388050;">
                        <div class="row">
                            <div class="col-4 mx-auto d-flex align-items-center justify-content-center"" style="border-radius: 100%; height: 150px; width: 150px; background-color: #FFEC23;">
                                <img src="{{ asset('img2/photos/imagenes_estaticas/'.$elements[75]->imagen) }}" alt="" class="img-fluid" style="">

                                <div class="col position-absolute">
                                    <form id="form_mision-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_static" value="{{ $elements[75]->id }}">
                                        <input id="input_mision-static" class="m-0 p-0" type="file" name="archivo_s">
                                        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_mision-static" style="opacity: 100%; border-radius: 26px;">Cambiar imagen</label>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-9 mx-auto text-white display-4 fw-bolder">
                                
                                <input style="font-size: 50px; font-weight: bold;" class="form-control text-white text-center bg-transparent display-4 editarajax" name="texto" data-id="{{ $elements[76]->id }}" data-table="Elemento" data-campo="texto" value="{{ $elements[76]->texto }}">

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-9 mx-auto text-white fs-5 scroll-tan">
                                <textarea class="form-control fs-5 text-white text-start bg-transparent editarajax" rows="10" name="texto" data-id="{{ $elements[77]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[77]->texto }}</textarea>

                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="row">
                            <div class="col-6 position-relative col-traingle_verde--externo">
                               <div class="col position-absolute col-triangle_interno--verde">
                                   <div class="triangle con-ta-3 m-0"></div>
                               </div>
                            </div>
                            <div class="col-6 col-traingle_blanco--externo" style="background-color: #388050;">
                                <div class="col position-absolute col-triangle_interno--blanco">
                                   <div class="triangle-2 con-ta-4 m-0"></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-m-6 col-sm-11 col-xs-11 col-11 py-5" style="background-color: #388050;">
                        <div class="row">
                            <div class="col-4 mx-auto d-flex align-items-center justify-content-center"" style="border-radius: 100%; height: 150px; width: 150px; background-color: #FFEC23;">
                                <img src="{{ asset('img2/photos/imagenes_estaticas/'.$elements[78]->imagen) }}" alt="" class="img-fluid" style="">

                                <div class="col position-absolute">
                                    <form id="form_valores-static" action="imgStatic" method="POST"  class="file-upload mt-2 " style="" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_static" value="{{ $elements[78]->id }}">
                                        <input id="input_valores-static" class="m-0 p-0" type="file" name="archivo_s">
                                        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center grande" for="input_valores-static" style="opacity: 100%; border-radius: 26px;">Cambiar imagen</label>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-9 mx-auto text-white display-4 fw-bolder">
                                
                                <input style="font-size: 50px; font-weight: bold;" class="form-control text-white text-center bg-transparent display-4 editarajax" name="texto" data-id="{{ $elements[79]->id }}" data-table="Elemento" data-campo="texto" value="{{ $elements[79]->texto }}">

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-9 mx-auto text-white fs-5 scroll-tan">
                                <textarea class="form-control fs-5 text-white text-start bg-transparent editarajax" rows="10" name="texto" data-id="{{ $elements[80]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[80]->texto }}</textarea>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid mt-5 mb-5 contenedor-t2">
        <div class="row">
            <div class="col-11 mt-5 mb-5 mx-auto text-center">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-11 col-sm-11 col-xs-11 col-11 py-5" style="background-color: #388050;">
                        <div class="row">
                            <div class="col-4 mx-auto d-flex align-items-center justify-content-center" style="
                                border-radius: 100%; 
                                height: 150px; 
                                width: 150px; 
                                background-color: #FFEC23;
                                ">
                                <img src="{{ asset('img/design/nosotros/vision.png') }}" alt="" class="img-fluid" style="">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-9 mx-auto text-white display-4 fw-bolder py-0">
                                Visión
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-9 text-white fs-5 mx-auto py-1 scroll-tan">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel quibusdam mollitia deserunt iure voluptate libero nobis doloremque culpa placeat odio iusto, cumque repellendus eaque quaerat, nihil maxime quasi dolorem.
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="row">
                            <div class="col-12 position-relative col-traingle_verde--externo">
                               <div class="col position-absolute col-triangle_interno--verde">
                                   <div class="triangle con-ta-1 m-0"></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1" style="background-color: #388050;">
                        <div class="row">
                            <div class="col-12 col-traingle_blanco--externo" style="background-color: #388050;">
                                <div class="col position-absolute col-triangle_interno--blanco">
                                   <div class="triangle-2 con-ta-2 m-0"></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-10 col-sm-10 col-xs-10 col-10 py-5" style="background-color: #388050;">
                        <div class="row">
                            <div class="col-4 mx-auto d-flex align-items-center justify-content-center"" style="border-radius: 100%; height: 150px; width: 150px; background-color: #FFEC23;">
                                <img src="{{ asset('img/design/nosotros/mision.png') }}" alt="" class="img-fluid" style="">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 mx-auto text-white display-4 fw-bolder">
                                Misión
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 mx-auto text-white fs-5 scroll-tan">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel quibusdam mollitia deserunt iure voluptate libero nobis doloremque culpa placeat odio iusto, cumque repellendus eaque quaerat, nihil maxime quasi dolorem.
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="row">
                            <div class="col-12 position-relative col-traingle_verde--externo">
                               <div class="col position-absolute col-triangle_interno--verde">
                                   <div class="triangle con-ta-1 m-0"></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1" style="background-color: #388050;">
                        <div class="row">
                            <div class="col-12 col-traingle_blanco--externo" style="background-color: #388050;">
                                <div class="col position-absolute col-triangle_interno--blanco">
                                   <div class="triangle-2 con-ta-2 m-0"></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-m-6 col-sm-11 col-xs-11 col-11 py-5" style="background-color: #388050;">
                        <div class="row">
                            <div class="col-4 mx-auto d-flex align-items-center justify-content-center"" style="border-radius: 100%; height: 150px; width: 150px; background-color: #FFEC23;">
                                <img src="{{ asset('img/design/nosotros/valores.png') }}" alt="" class="img-fluid" style="">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-9 mx-auto text-white display-4 fw-bolder">
                                Valores
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-9 mx-auto text-white fs-5 scroll-tan">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel quibusdam mollitia deserunt iure voluptate libero nobis doloremque culpa placeat odio iusto, cumque repellendus eaque quaerat, nihil maxime quasi dolorem.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid">
    <div class="row py-5" style="background-color: #F5F5F5;">
            <div class="col mt-5 py-5">
                <div class="row">
                    <div class="col fs-3 text-center" style="color: #388050;">
                        Nuestros
                    </div>
                </div>
                <div class="row">
                    <div class="col display-3 fw-bolder text-center">
                        Certificaciones
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mx-auto">
                        <form id="form_certificaciones_slider" action="certificacionesSlider" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                            @csrf
                            <input id="input_slider_certificaciones" class="m-0 p-0" type="file" name="logo">
                            <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_slider_certificaciones" style="opacity: 100%; background: #d89d8f !important; border-radius: 26px;">Agregar nuevo</label>
                        </form>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-1">
                        <a href="" id="anteriorr" uk-icon="icon: chevron-double-left; ratio: 5;" style="color: #388050;"></a>
                    </div>
                    <div class="col-9 text-center mx-auto">
                        <div class="row">
                            <div class="certificaciones">
                                @foreach ($certificaciones as $ce)
                                    <div class="col text-center d-flex align-items-center justify-content-center">
                                        <div class="" style="
                                            background-color: ;
                                            background-image: url('{{ asset('img2/photos/certificaciones/'.$ce->logo) }}');
                                            background-size: contain;
                                            background-repeat: no-repeat;
                                            background-position: center center;
                                            width: 100%;  
                                            height: 200px;     
                                        ">
                                            <div class="col position-relative">
                                                <div class="col-4 py-3 bg-danger position-absolute top-0 end-0">
                                                    <form action="{{ route('config.seccion.delCertificaciones', [$ce->id]) }}" method="POST" style="display: inline;">						
                                                        @csrf
                                                        @method('DELETE') 
                                                        <button type="submit" class="btn btn-danger btn-block bg-danger rounded-pill"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
    $('#input_slider_certificaciones').change(function(e) {
		$('#form_certificaciones_slider').trigger('submit');
	});

    $('#input_abouts-static').change(function(e) {
		$('#form_abouts-static').trigger('submit');
	});

    $('#input_imgverde-static').change(function(e) {
		$('#form_imgverde-static').trigger('submit');
	});

    $('#input_imgamarillo-static').change(function(e) {
		$('#form_imgamarillo-static').trigger('submit');
	});

    $('#input_vision-static').change(function(e) {
		$('#form_vision-static').trigger('submit');
	});

    $('#input_mision-static').change(function(e) {
		$('#form_mision-static').trigger('submit');
	});

    $('#input_valores-static').change(function(e) {
		$('#form_valores-static').trigger('submit');
	});
</script>
<script>
    $('.certificaciones').slick({
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
            $('.certificaciones').slick('slickNext');
        });

        $('#anteriorr').click(function(e){
            e.preventDefault();
            $('.certificaciones').slick('slickPrev');
        });
</script>
@endsection

@section('jqueryExtra')

@endsection
