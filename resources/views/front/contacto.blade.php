@extends('layouts.front')

@section('title', 'Contacto')

@section('styleExtras')
<style>

    .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
    
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
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
                    height: 500px;
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
                    margin-top: 150px !important;
                }
    
                .contenedor-contacto {
                    margin-bottom: 420px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 50px;
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
                    margin-bottom: 420px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 50px;
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
                    margin-bottom: 420px;
                }
    
                .col-amarilla2 {
                    margin-top: -50px;
                    height: 730px;
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 730px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 50px;
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
                    margin-bottom: 420px;
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 50px;
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
                    margin-bottom: 420px;
                    
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                    
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                    margin-left: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 50px;
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
                    margin-bottom: 420px;
                    
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                    
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                    margin-left: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 700px;
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
                    margin-bottom: 420px;
                    
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                    
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                    margin-left: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 700px;
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
                    margin-bottom: 420px;
                    
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                    
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                    margin-left: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 700px;
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
                    margin-bottom: 420px;
                    
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                    
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                    margin-left: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 750px;
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
                    margin-bottom: 420px;
                    
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                    
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                    margin-left: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 750px;
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
                    margin-bottom: 420px;
                    
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                    
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                    margin-left: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 800px;
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
                    margin-bottom: 420px;
                    
                }
    
                .col-amarilla2 {
                    margin-top: 20px;
                    height: 750px;
                    
                }
    
                .col-verde2 {
                    margin-top: 350px; 
                    margin-left: -20px;
                    height: 750px;
                }
    
                .col-contacto {
                    margin-bottom: 285px;
                }
    
                .col-formulario_contacto {
                    margin-top: 380px;
                    margin-left: 50px;
                }
    
                .col-contacto_imagen {
                    margin-top: 0px;
                }
    
                .btn-contact {
                    margin-top: -15px;
                }
    
                .columna-cont {
                    padding-top: 50px;
                    padding-bottom: 800px;
                }
            }
    
        </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col position-relative slider-principal" style="
            background-color: black;
            background-image: url('{{ asset('img/design/home/slider.jpg') }}');
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.6);
        ">
            <div class="col-12 position-absolute top-50 start-50 translate-middle">
                <div class="row py-5">
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 text-center text-white mx-auto">
                        <div class="titulo-slider_principal" style=""><strong>Ponte en contacto</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row columna-cont" style="background-color: #388050;">
        <div class="col-9 mx-auto mt-5">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 py-5">
                    <div class="row text-white">
                        <div class="col-2 text-center py-4">
                            <img src="{{ asset('img/design/contacto/telefono.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-10 fs-3 py-4">
                            Tel. 33 33 33 33 33
                        </div>
                    </div>
                    <div class="row text-white">
                        <div class="col-2 text-center py-4">
                            <img src="{{ asset('img/design/contacto/mail.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-10 fs-3 py-4">
                            contacto@losasdcassers.com
                        </div>
                    </div>
                    <div class="row text-white">
                        <div class="col-2 text-center py-4">
                            <img src="{{ asset('img/design/contacto/gps.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-10 fs-3 py-4">
                            C. Volcán Vesubio 6579, Colli Urbano 45070 Zapopan, Jal.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-11 mx-auto py-5 text-start">
                            <a href="" uk-icon="icon: whatsapp; ratio: 2;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                            <a href="" uk-icon="icon: facebook; ratio: 2;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                            <a href="" uk-icon="icon: instagram; ratio: 2;" class="px-xxl-3 px-xl-1 px-lg-1 px-md-1 px-sm-3 px-xs-3 px-3" style="color: #FFEC23;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 position-relative py-5">
                    <div class="col-12 py-5 position-absolute top-0 start-50 translate-middle-x">
                        <div class="row">
                            <div class="col position-relative py-5">
                                <div class="col-11 position-absolute top-0 start-50 translate-middle col-formulario_contacto">
                                    <div class="row">
                                        <!-- <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-12 col-xs-12 col-12"></div> -->
                                        <div class="col-xxl-12 col-xl-11 col-lg-11 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto fw-bolder text-white mx-5">
                                            <div class="row">
                                                <div class="col-xxl-12 col-xl-11 col-lg-11 col-md-12 col-sm-10 col-xs-11 col-10 mx-auto position-relative shadow-sm col-amarilla2" style="background-color: #FFEC23;">
                                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-50 translate-middle shadow-sm col-verde2" style="background-color: white;">
                                                        <div class="row py-3">
                                                            <div class="col-9 mx-auto position-relative">
                                                                <form>
                                                                    <div class="row form-group">
                                                                        <label for="nombre" class="form-label text-dark fs-3">Nombre</label>
                                                                        <input type="text" class="form-control py-4 rounded-0 border border-2 border-dark">
                                                                    </div>
                                                                    <div class="row mt-3 form-group">
                                                                        <label for="email" class="form-label text-dark fs-3">Email</label>
                                                                        <input type="mail" class="form-control py-4 rounded-0 border border-2 border-dark">
                                                                    </div>
                                                                    <div class="row mt-3 form-group">
                                                                        <label for="telefono" class="form-label text-dark fs-3">Email</label>
                                                                        <input type="number" class="form-control py-4 rounded-0 border border-2 border-dark">
                                                                    </div>
                                                                    <div class="row mt-3 form-group">
                                                                        <label for="mensaje" class="form-label text-dark fs-3">Mensaje</label>
                                                                        <textarea class="form-control rounded-0 border border-2 border-dark" name="" id="" cols="20" rows="6" style="resize: none;"></textarea>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>        
                                                    </div>
                                                    <a href="#/">
                                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-6 col-7 fs-4 fw-semibolder text-dark py-4 position-absolute top-100 start-50 translate-middle text-center btn-contact" style="background-color: #FFEC23;">
                                                            Ver Más
                                                        </div>
                                                    </a>
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
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!--Google map  map-container-->
            <div id="map-container-google-1" class="z-depth-1-half" style="">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14934.698168984944!2d-103.3966255!3d20.6421186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0ed241a9bb%3A0xbb4c3906c38265fd!2sWozial%20Marketing%20Lovers!5e0!3m2!1ses-419!2smx!4v1685136732153!5m2!1ses-419!2smx" width="100%" height="1000" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--Google Maps-->
        </div>
    </div>
</div>

@endsection

