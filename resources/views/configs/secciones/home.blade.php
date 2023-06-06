@extends('layouts.admin')
@section('cssExtras')

@endsection
@section('jsLibExtras')

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
                margin: 100px 10px;
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
                    margin-left: 160px;
                    height: 800px;
                }
    
    
                .circulo-caracteristicas {
                    height: 600px; 
                    width: 600px;
                    margin-left: 80px;
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
                    margin-left: 240px;
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

                .img-contaa {
                    height: 900px;
                    margin-top: -284px;
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
                    font-size: 40px;
                }
    
                /* [[[ Manipula el alto de las iménes y por consiguiente, su tamaño ]]] */
                .imagen-soluciones {
                    height: 80px;
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
                    height: 400px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 660px;
                }
    
                .col-verde {
                    margin-top: 290px; 
                    margin-left: 140px;
                    height: 700px;
                }
    
                .circulo-caracteristicas {
                    height: 480px; 
                    width: 480px;
                    margin-left: 50px;
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

                .img-contaa {
                    height: 900px;
                    margin-top: -210px;
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
                    font-size: 30px;
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
                    height: 250px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 560px;
                }
    
                .col-verde {
                    margin-top: 250px; 
                    margin-left: 110px;
                    height: 580px;
                }
    
                .circulo-caracteristicas {
                    height: 430px; 
                    width: 430px;
                    margin-left: 50px;
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

                .img-contaa {
                    height: 900px;
                    margin-top: -289px;
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
                    font-size: 26px;
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
                    height: 226px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 560px;
                }
    
                .col-verde {
                    margin-top: 270px; 
                    margin-left: 90px;
                    height: 560px;
                }
    
                .circulo-caracteristicas {
                    height: 380px; 
                    width: 380px;
                    margin-left: 35px;
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

                .img-contaa {
                    height: 900px;
                    margin-top: -340px;
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
                    font-size: 26px;
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
                    height: 410px;
                }
    
                .col-amarilla {
                    margin-top: 20px;
                    height: 740px;
                }
    
                .col-verde {
                    margin-top: 360px; 
                    margin-left: 100px;
                    height: 740px;
                }
    
                .circulo-caracteristicas {
                    height: 350px; 
                    width: 350px;
                    margin-left: 70px;
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

                .img-contaa {
                    height: 900px;
                    margin-top: -339px;
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

                .img-contaa {
                    height: 700px;
                    margin-top: -550px;
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
                    height: 520px; 
                    width: 520px;
                    margin-right: 50px;
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

                .img-contaa {
                    height: 700px;
                    margin-top: -550px;
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
                    margin-left: 280px;
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

                .img-contaa {
                    height: 700px;
                    margin-top: -550px;
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
                    height: 450px; 
                    width: 450px;
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

                .img-contaa {
                    height: 700px;
                    margin-top: -550px;
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
                    height: 400px; 
                    width: 400px;
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
                    margin-left: 225px;
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

                .img-contaa {
                    height: 700px;
                    margin-top: -550px;
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
                    height: 260px; 
                    width: 260px;
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
                    margin-left: 180px;
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

                .img-contaa {
                    height: 700px;
                    margin-top: -550px;
                }

                .img-contaa {
                    height: 540px;
                    margin-top: -390px;
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
                    margin-left: 145px;
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

                .img-contaa {
                    height: 540px;
                    margin-top: -390px;
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

<style>
    .video_s {
        height: 600px; 
    }
</style>

<style>
    .cuadr:hover {
        background-color: black; opacity: 80%;
    }

    .cuadr:hover > .btn {
        display: block;
        color: black;
        background-color: white;
        opacity: 100%;
    }

    .cuadr:hover > .btn:hover {
        display: block;
        color:white;
        background-color: red;
        opacity: 100%;
    }

    .cuadr > .btn {
        display: none;
    }
</style>

@endsection

@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('config.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="front_home">
        {{-- <div class="row">
            <div class="col text-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button>
  
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo slider</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3 style="color:black;">Agregar slider</h3>
                                <form id="form_image_slider" action="imgSider" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 mt-3 mb-3"><input type="text" class="form-control" name="titulo"></div>
                                    <input id="input_slider_img" class="m-0 p-0" type="file" name="archivo">
                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_slider_img" style="opacity: 100%; background: #d89d8f !important; border-radius: 26px;">Seleccionar archivo</label>
                                </form>
                            </div>
                            <div class="modal-footer">
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         --}}


        <div class="col-12 d-flex justify-content-center align-items-center flex-column mt-2 text-center">
            <h3 style="color:black;">Agregar slider</h3>
            <form id="form_image_slider" action="imgSider" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                @csrf
                <input id="input_slider_img" class="m-0 p-0" type="file" name="archivo">
                <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_slider_img" style="opacity: 100%; background: #d89d8f !important; border-radius: 26px;">Seleccionar archivo</label>
            </form>
        </div>
        
        <div class="container-fluid px-0 mx-0 mt-5">
            <div class="row">
                <div class="slider">
                    @foreach ($slidersp as $sl)
                        <div class="col position-relative slider-principal" style="
                            background-color: black;
                            background-image: url('{{ asset('img2/photos/slider_principal/'.$sl->imagen) }}');
                            background-position: center center;
                            background-size: cover;
                            background-repeat: no-repeat;
                            width: 100%;
                            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.7);
                        ">
                        <div class="col-12 position-absolute top-50 start-50 translate-middle">
                            <div class="row py-5">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-9 col-sm-12 col-xs-12 col-12 text-center text-white mx-auto">
                                    {{-- <div class="titulo-slider_principal" style=""><strong>{{ $sl->titulo }}</strong></div> --}}
                                    <textarea class="form-control bg-transparent titulo-slider_principal text-white fw-bold editarajax" rows="3" id="titulo" name="titulo" data-id="{{$sl->id}}" data-table="SliderPrincipal" data-campo="titulo">{{ $sl->titulo }}</textarea>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-11 
                                            mx-auto mt-2
                                            text-xxl-end text-xl-end text-lg-end text-md-end text-sm-center text-xs-center text-center">
                                    <a href="#/" class="btn btn-block btn-outline rounded-0 
                                                        py-xxl-4 py-xl-4 py-lg-4 py-md-3 py-sm-2 py-xs-2 py-2 
                                                        px-xxl-5 px-xl-5 px-lg-5 px-md-3 px-sm-2 px-xs-2 px-2  
                                                        btn-saber" style="background-color: #FFEC23; text-decoration: none;"><h3 class="m-0 px-5" style="color: #388050;"><strong>Saber Más</strong></h3></a>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-11 
                                            mx-auto mt-2
                                            text-xxl-start text-xl-start text-lg-start text-md-start text-sm-center text-xs-center text-center
                                ">
                                    <a href="#/" class="btn btn-block btn-outline rounded-0 
                                                        py-xxl-4 py-xl-4 py-lg-4 py-md-3 py-sm-2 py-xs-2 py-2 
                                                        px-xxl-5 px-xl-5 px-lg-5 px-md-3 px-sm-2 px-xs-2 px-2  
                                                        btn-contacto" style="background-color: #388050; color: #FFEC23; text-decoration: none;"><h3 class="m-0 px-5" style="color: #FFEC23;"><strong>Contacto</strong></h3></a>
                                </div>  
                            </div> --}}
                        </div>

                        <div class="col-1 py-3 bg-danger position-absolute top-0 end-0">
                            <form action="{{ route('config.seccion.delSide', [$sl->id]) }}" method="POST" style="display: inline;">						
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="btn btn-danger btn-block bg-danger rounded-pill"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>

                            <!-- <img src="https://picsum.photos/200" alt="" style="width: 100%; height: 1000px;"> -->
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    
        <div class="container-fluid px-0 mx-0 mt-5">
            {{-- <div class="row">
                <div class="slider">
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
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 text-center text-white mx-auto">
                                    <div class="titulo-slider_principal" style=""><strong>Losas Ideales para Techo y Entrepiso</strong></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-11 
                                            mx-auto mt-2
                                            text-xxl-end text-xl-end text-lg-end text-md-end text-sm-center text-xs-center text-center">
                                    <a href="#/" class="btn btn-block btn-outline rounded-0 
                                                        py-xxl-4 py-xl-4 py-lg-4 py-md-3 py-sm-2 py-xs-2 py-2 
                                                        px-xxl-5 px-xl-5 px-lg-5 px-md-3 px-sm-2 px-xs-2 px-2  
                                                        btn-saber" style="background-color: #FFEC23; text-decoration: none;"><h3 class="m-0 px-5" style="color: #388050;"><strong>Saber Más</strong></h3></a>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-11 
                                            mx-auto mt-2
                                            text-xxl-start text-xl-start text-lg-start text-md-start text-sm-center text-xs-center text-center
                                ">
                                    <a href="#/" class="btn btn-block btn-outline rounded-0 
                                                        py-xxl-4 py-xl-4 py-lg-4 py-md-3 py-sm-2 py-xs-2 py-2 
                                                        px-xxl-5 px-xl-5 px-lg-5 px-md-3 px-sm-2 px-xs-2 px-2  
                                                        btn-contacto" style="background-color: #388050; color: #FFEC23; text-decoration: none;"><h3 class="m-0 px-5" style="color: #FFEC23;"><strong>Contacto</strong></h3></a>
                                </div>  
                            </div>
                        </div>
                        <!-- <img src="https://picsum.photos/200" alt="" style="width: 100%; height: 1000px;"> -->
                    </div>
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
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 text-center text-white mx-auto">
                                    <div class="titulo-slider_principal" style=""><strong>Losas Ideales para Techo y Entrepiso</strong></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-11 
                                            mx-auto mt-2
                                            text-xxl-end text-xl-end text-lg-end text-md-end text-sm-center text-xs-center text-center">
                                    <a href="#/" class="btn btn-block btn-outline rounded-0 
                                                        py-xxl-4 py-xl-4 py-lg-4 py-md-3 py-sm-2 py-xs-2 py-2 
                                                        px-xxl-5 px-xl-5 px-lg-5 px-md-3 px-sm-2 px-xs-2 px-2  
                                                        btn-saber" style="background-color: #FFEC23; text-decoration: none;"><h3 class="m-0 px-5" style="color: #388050;"><strong>Saber Más</strong></h3></a>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-11 
                                            mx-auto mt-2
                                            text-xxl-start text-xl-start text-lg-start text-md-start text-sm-center text-xs-center text-center
                                ">
                                    <a href="#/" class="btn btn-block btn-outline rounded-0 
                                                        py-xxl-4 py-xl-4 py-lg-4 py-md-3 py-sm-2 py-xs-2 py-2 
                                                        px-xxl-5 px-xl-5 px-lg-5 px-md-3 px-sm-2 px-xs-2 px-2  
                                                        btn-contacto" style="background-color: #388050; color: #FFEC23; text-decoration: none;"><h3 class="m-0 px-5" style="color: #FFEC23;"><strong>Contacto</strong></h3></a>
                                </div>  
                            </div>
                        </div>
                        <!-- <img src="https://picsum.photos/200" alt="" style="width: 100%; height: 1000px;"> -->
                    </div>
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
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 text-center text-white mx-auto">
                                    <div class="titulo-slider_principal" style=""><strong>Losas Ideales para Techo y Entrepiso</strong></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-11 
                                            mx-auto mt-2
                                            text-xxl-end text-xl-end text-lg-end text-md-end text-sm-center text-xs-center text-center">
                                    <a href="#/" class="btn btn-block btn-outline rounded-0 
                                                        py-xxl-4 py-xl-4 py-lg-4 py-md-3 py-sm-2 py-xs-2 py-2 
                                                        px-xxl-5 px-xl-5 px-lg-5 px-md-3 px-sm-2 px-xs-2 px-2  
                                                        btn-saber" style="background-color: #FFEC23; text-decoration: none;"><h3 class="m-0 px-5" style="color: #388050;"><strong>Saber Más</strong></h3></a>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-11 
                                            mx-auto mt-2
                                            text-xxl-start text-xl-start text-lg-start text-md-start text-sm-center text-xs-center text-center
                                ">
                                    <a href="#/" class="btn btn-block btn-outline rounded-0 
                                                        py-xxl-4 py-xl-4 py-lg-4 py-md-3 py-sm-2 py-xs-2 py-2 
                                                        px-xxl-5 px-xl-5 px-lg-5 px-md-3 px-sm-2 px-xs-2 px-2  
                                                        btn-contacto" style="background-color: #388050; color: #FFEC23; text-decoration: none;"><h3 class="m-0 px-5" style="color: #FFEC23;"><strong>Contacto</strong></h3></a>
                                </div>  
                            </div>
                        </div>
                        <!-- <img src="https://picsum.photos/200" alt="" style="width: 100%; height: 1000px;"> -->
                    </div>
                </div>
            </div> --}}
        
            <div class="row">
                <div class="col-10 mx-auto py-5 
                            text-xxl-start text-xl-start text-lg-start text-md-start text-sm-center text-xs-center text-center">
                    <div class="display-3 fw-bolder" style="color: #388050;">
                        SOLUCIONES
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12">
                    <div class="row">
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto">
                            <div class="row">
                                <div class="col-4 text-center columna-soluciones" style="border-top: 4px solid #388050; background-color: #F5F5F5;">
                                    <!-- <img src="img/home/icono_01.png" alt="" class="img-fluid"> -->
                                    <div class="imagen-soluciones" style="
                                        background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[0]->imagen) }}');
                                        background-position: center center;
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                        width: 100%;
                                    ">
                                        <form id="form_imagen-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_static" value="{{ $elements[0]->id }}">
                                            <input id="input_imagen-static" class="m-0 p-0" type="file" name="archivo_s">
                                            <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_imagen-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-8" style="border-top: 4px solid #FFEC23;">
                                    <div class="row">
                                        <div class="col-11 mx-auto text-start" style="font-size:20px;">
                                            <div class="texto-soluciones m-0 fw-bolder"> 
                                                <textarea class="form-control texto-soluciones bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[1]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[1]->texto }}</textarea>                    
                                            </div>                                    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11 mx-auto text-start">
                                            <a href=""><h3 class="fw-semibold" style="color: #388050;">Ver producto</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12">
                    <div class="row">
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto">
                            <div class="row">
                                <div class="col-4 text-center columna-soluciones" style="border-top: 4px solid #388050; background-color: #F5F5F5;">
                                    <div class="imagen-soluciones" style="
                                        background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[2]->imagen) }}');
                                        background-position: center center;
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                        width: 100%;
                                    ">
                                        <form id="form_imagen-static2" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_static" value="{{ $elements[2]->id }}">
                                            <input id="input_imagen-static2" class="m-0 p-0" type="file" name="archivo_s">
                                            <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_imagen-static2" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-8" style="border-top: 4px solid #FFEC23;">
                                    <div class="row">
                                        <div class="col-11 mx-auto text-start">
                                            <div class="texto-soluciones m-0 fw-bolder">
                                                <textarea class="form-control texto-soluciones bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[3]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[3]->texto }}</textarea>                                         
                                            </div>                                    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11 mx-auto text-start">
                                            <a href=""><h3 class="fw-semibold" style="color: #388050;">Ver producto</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col mt-5 text-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar video a la lista
                    </button>
  
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo slider</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h3 style="color:black;">Agregar video</h3>
                                    <button id="btnYoutube" class="btn btn-block btn-primary bg-white mb-3">Agregar video de youtube</button>
                                    <button id="btnVideo" class="btn btn-block btn-primary bg-white">Agregar video desde mis archivos</button>

                                    <div id="colYoutube">
                                        <form id="form_video_slider" action="videoSider" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12 mt-3 mb-3">
                                                <input type="text" class="form-control" name="link" placeholder="Agrega el link de youtube">
                                                <input type="hidden" name="tipo" value="0">
                                            </div>
                                            <input class="m-0 p-0" type="hidden" name="archivo" value="NO">
                                            <button id="input_slider_video" class="btn btn-outline border border-dark text-dark">Agregar link</button>
                                            {{-- <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_slider_video" style="opacity: 100%; background: #d89d8f !important; border-radius: 26px;">Seleccionar archivo</label> --}}
                                        </form>
                                    </div>
                                    <div id="colVideo">
                                        <form id="form_video_slider2" action="videoSider" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12 mt-3 mb-3">
                                                <input type="hidden" class="form-control" name="titulo" value="NO">
                                                <input type="hidden" name="tipo" value="1">
                                            </div>
                                            <input id="input_slider_video2" class="m-0 p-0" type="file" name="archivo">
                                            <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_slider_video2" style="opacity: 100%; background: #d89d8f !important; border-radius: 26px;">Seleccionar archivo</label>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-10 py-5 mx-auto">
                    <div class="slider-videos">
                        @foreach ($slidervd as $sv)
                            <div>
                                @if ($sv->tipo == 1)
                                    <div class="col position-relative z-1">
                                        <div class="row mb-4">
                                            <div class="col mb-3">
                                                <video width="100%" class="video_s" id="vid" controls="controls" preload="metadata" autoplay>
                                                    <source src="{{ asset('img2/photos/slider_videos/'.$sv->archivo) }}" type="video/mp4">
                                                </video> 
                                            </div>
                                        </div>
                                        <div class="col-1 py-3 bg-danger position-absolute top-0 end-0">
                                            <form action="{{ route('config.seccion.delVideoSide', [$sv->id]) }}" method="POST" style="display: inline;">						
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-danger btn-block bg-danger rounded-pill"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>                         
                                @elseif ($sv->tipo == 0)
                                    <div class="col position-relative z-1">
                                        <div class="row mb-4">
                                            <div class="col mb-3">
                                                <iframe width="100%" class="video_s" src="https://www.youtube.com/embed/{{ $sv->link }}?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            </div>
                                        </div>

                                        <div class="col-1 py-3 bg-danger position-absolute top-0 end-0">
                                            <form action="{{ route('config.seccion.delVideoSide', [$sv->id]) }}" method="POST" style="display: inline;">						
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-danger btn-block bg-danger rounded-pill"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                @else
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        
       
        
        
        <div>
            <div class="container-fluid mt-5" style="margin-top: 200px;">
                <div class="col position-relative">
                    <div class="row mt-5" style="background-color: #F5F5F5;">
                        <div class="col-12 mx-auto position-relative py-5" style="background-color: #F5F5F5; margin-bottom: 100px;">
                            <div class="row">
                                <div class="col-11 mx-auto">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 py-5 position-relative mx-auto">
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 py-5 mx-auto px-5">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="m-0" style="color: #388050;">Te contamos sobre</h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <h1 class="display-2 fw-semibold">Nosotros</h1>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col m-0 nos-scroll">
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit illum dolorum, aut odit sunt ipsam molestiae incidunt maiores temporibus doloribus ab officia placeat ratione veniam quidem molestias accusamus quo nam mollitia in dolor ipsum asperiores saepe beatae. Eveniet rerum incidunt corporis veritatis in, reiciendis, quod mollitia accusamus magnam architecto minima magni quidem. Eum explicabo aperiam corrupti doloribus quibusdam perspiciatis optio omnis sunt quam totam necessitatibus commodi quia, qui laboriosam alias mollitia est illum expedita consectetur dignissimos incidunt assumenda ducimus. Totam dolorem nemo officia eos quis omnis maiores voluptatibus, facere consequatur temporibus! Dolore debitis exercitationem illo quos qui ut distinctio suscipit.
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
                                            background-image: url('{{ asset('img/design/home/imagen_01.png') }}');
                                            background-position: center center;
                                            background-size: cover;
                                            background-repeat: no-repeat;
                                        "></div>
                                        <div class="col-6 mt-5 position-absolute top-50 start-50 ">
                                            <div class="row">
                                                <div class="col-12 px-0 mt-5" style="background-color: #FFEC23; height: 340px;">
                                                    <div class="imagen-nosotros_small" style="
                                                        background-color: black;
                                                        background-image: url('{{ asset('img/design/home/imagen_02.png') }}');
                                                        background-position: center center;
                                                        background-size: cover;
                                                        background-repeat: no-repeat;
                                                    "></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column position-absolute top-0 bottom-0 start-0 translate-middle-y cuadr" style="margin-top: 220px; height: 740px;">
                        <a href="{{ route('config.seccion.show', ['slug' => 'about-us']) }}" class="btn btn-outline" style="font-size: 40px;">Editar desde la sección Nosotros</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="row" style="background-color: #3C3C3C;">
                        <div class="col-10 py-5 mx-auto text-start text-white display-1 fw-bold">
                            Proyectos
                        </div>
                    </div>

                    <div class="row" style="background-color: #3C3C3C;">
                        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-11 col-sm-12 col-xs-12 col-12 mx-auto" style="background-color: #3C3C3C;">               
                            <div class="row">
                                <div class="slider-proyectos">
                                    @foreach ($proyectos as $py)
                                        
                                    
                                    <div>
                                        <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                                <div class="row">
                                                    <div class="col position-relative">
                                                        <div class="row">
                                                            <div class="col mt-5 text-center">
                                                                <p class="fs-4" style="color: #FFEC23;">{{ $py->nombre }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                                {{ $py->descripcion }}
                                                            </div>
                                                        </div>
                                                        <div class="row py-5">
                                                            <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                        </div>
                                                        <div class="row py-0">
                                                            <div class="col">
                                                                <div class="imagen-proyectos" style="
                                                                    background-color: black;
                                                                    background-image: url('{{ asset('img2/photos/proyectos/'.$py->foto) }}');
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
                                <div class="row mb-5 py-5">
                                    <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-2 col-sm-3 col-xs-3 col-3">
                                        <a href="#/" id="anterior" class="btn btn-outline" style="background-color: #FFEC23;" uk-icon="icon: triangle-left; ratio: 3;"></a>
                                    </div>
                                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-6 col-xs-3 col-6 mx-auto mt-4">
                                        <div class="col-12">
                                            <div style="border-bottom: 3px solid #FFEC23;"></div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-2 col-sm-3 col-xs-3 col-3">
                                        <a href="#/" id="siguiente" class="btn btn-outline" style="background-color: #FFEC23;" uk-icon="icon: triangle-right; ratio: 3;"></a>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column  position-absolute top-0 bottom-0 start-0 cuadr">
                        <a href="{{ route('config.seccion.show', ['slug' => 'projects']) }}" class="btn btn-outline" style="font-size: 40px;">Editar desde la sección Proyectos</a>
                    </div>
                </div>

                <div class="col mt-5 position-relative">
                    <div class="row">
                        <div class="col-10 mb-5 mx-auto position-relative py-5" style="background-color: #388050;">
                            
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col mt-5 text-center text-white">      
                                            <div class="display-3">
                                                <strong class="fw-bold"> 
                                                    Características
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center fs-4" style="color: #FFEC23;">
                                            de Losas D´CASSTER´S
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-relative py-0">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute py-0 top-100 start-50 translate-middle mx-auto col-ciruclo">
                                                <div class="row">
                                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-5 col-sm-6 col-xs-6 col-6 mx-auto py-0 position-relative">
                                                        <div class="col-12 py-0 position-absolute top-100 start-0 translate-middle-x">
                                                            <div class="row">
                                                                <div class="col position-relative text-center">
                                                                    <div class="circulo-caracteristicas" style="
                                                                        background-color: black;
                                                                        background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[4]->imagen) }}');
                                                                        background-position: center center;
                                                                        background-size: cover;
                                                                        background-repeat: no-repeat;
                                                                        border-radius: 100%;
                                                                    ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <form id="form_caracteristicas-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id_static" value="{{ $elements[4]->id }}">
                                                            <input id="input_caracteristicas-static" class="m-0 p-0" type="file" name="archivo_s">
                                                            <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_caracteristicas-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 py-0 cont-circulo">
                                            <div class="row mt-3">
                                                <div class="col-9 mx-auto">
                                                    <div class="row">
                                                        <div class="col-8 mx-auto">
                                                            <div style="
                                                                background-color: none;
                                                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[5]->imagen) }}');
                                                                background-repeat: no-repeat;
                                                                background-position: center center;
                                                                background-size: contain;
                                                                width: 100%;
                                                                height: 80px;
                                                            ">
                                                                <form id="form_icono1-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id_static" value="{{ $elements[5]->id }}">
                                                                    <input id="input_icono1-static" class="m-0 p-0" type="file" name="archivo_s">
                                                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_icono1-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 py-2 mx-auto">
                                                            <div style="border: 2px solid white;"></div>
                                                        </div>
                                                        <div class="col-12 text-center fs-5 fw-bolder" style="color: #FFEC23;">
                                                            <input type="text" class="form-control text-center fs-5 fw-bolder bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[6]->id }}" data-table="Elemento" data-campo="texto" style="color: #FFEC23;" value="{{ $elements[6]->texto }}  ">                  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-9 mx-auto">
                                                    <div class="row">
                                                        <div class="col-8 mx-auto">
                                                            <div style="
                                                                background-color: none;
                                                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[7]->imagen) }}');
                                                                background-repeat: no-repeat;
                                                                background-position: center center;
                                                                background-size: contain;
                                                                width: 100%;
                                                                height: 80px;
                                                            ">
                                                                <form id="form_icono2-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id_static" value="{{ $elements[7]->id }}">
                                                                    <input id="input_icono2-static" class="m-0 p-0" type="file" name="archivo_s">
                                                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_icono2-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 py-2 mx-auto">
                                                            <div style="border: 2px solid white;"></div>
                                                        </div>
                                                        <div class="col-12 text-center fs-5 fw-bolder" style="color: #FFEC23;">
                                                            <input type="text" class="form-control text-center fs-5 fw-bolder bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[8]->id }}" data-table="Elemento" data-campo="texto" style="color: #FFEC23;" value="{{ $elements[8]->texto }}  ">  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-9 mx-auto">
                                                    <div class="row">
                                                        <div class="col-8 mx-auto">
                                                            <div style="
                                                                background-color: none;
                                                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[9]->imagen) }}');
                                                                background-repeat: no-repeat;
                                                                background-position: center center;
                                                                background-size: contain;
                                                                width: 100%;
                                                                height: 80px;
                                                            ">
                                                                <form id="form_icono3-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id_static" value="{{ $elements[9]->id }}">
                                                                    <input id="input_icono3-static" class="m-0 p-0" type="file" name="archivo_s">
                                                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_icono3-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 py-2 mx-auto">
                                                            <div style="border: 2px solid white;"></div>
                                                        </div>
                                                        <div class="col-12 text-center fs-5 fw-bolder" style="color: #FFEC23;">
                                                            <input type="text" class="form-control text-center fs-5 fw-bolder bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[10]->id }}" data-table="Elemento" data-campo="texto" style="color: #FFEC23;" value="{{ $elements[10]->texto }}  ">  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none d-xs-none d-none py-5">
        
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 py-0 cont-circulo">
                                            <div class="row mt-0">
                                                <div class="col-9 mx-auto">
                                                    <div class="row">
                                                        <div class="col-8 mx-auto">
                                                            <div style="
                                                                background-color: none;
                                                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[23]->imagen) }}');
                                                                background-repeat: no-repeat;
                                                                background-position: center center;
                                                                background-size: contain;
                                                                width: 100%;
                                                                height: 80px;
                                                            ">
                                                                <form id="form_icono10-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id_static" value="{{ $elements[23]->id }}">
                                                                    <input id="input_icono10-static" class="m-0 p-0" type="file" name="archivo_s">
                                                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_icono10-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 py-3 mx-auto">
                                                            <div style="border: 2px solid white;"></div>
                                                        </div>
                                                        <div class="col-12 text-center fs-5 fw-bolder" style="color: #FFEC23;">
                                                            <input type="text" class="form-control text-center fs-5 fw-bolder bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[24]->id }}" data-table="Elemento" data-campo="texto" style="color: #FFEC23;" value="{{ $elements[24]->texto }}  ">  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-9 mx-auto">
                                                    <div class="row">
                                                        <div class="col-8 mx-auto">
                                                            <div style="
                                                                background-color: none;
                                                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[21]->imagen) }}');
                                                                background-repeat: no-repeat;
                                                                background-position: center center;
                                                                background-size: contain;
                                                                width: 100%;
                                                                height: 80px;
                                                            ">
                                                                <form id="form_icono9-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id_static" value="{{ $elements[21]->id }}">
                                                                    <input id="input_icono9-static" class="m-0 p-0" type="file" name="archivo_s">
                                                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_icono9-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 py-2 mx-auto">
                                                            <div style="border: 2px solid white;"></div>
                                                        </div>
                                                        <div class="col-12 text-center fs-5 fw-bolder" style="color: #FFEC23;">
                                                            <input type="text" class="form-control text-center fs-5 fw-bolder bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[22]->id }}" data-table="Elemento" data-campo="texto" style="color: #FFEC23;" value="{{ $elements[22]->texto }}  ">  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-9 mx-auto">
                                                    <div class="row">
                                                        <div class="col-8 mx-auto">
                                                            <div style="
                                                                background-color: none;
                                                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[19]->imagen) }}');
                                                                background-repeat: no-repeat;
                                                                background-position: center center;
                                                                background-size: contain;
                                                                width: 100%;
                                                                height: 80px;
                                                            ">
                                                                <form id="form_icono8-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id_static" value="{{ $elements[19]->id }}">
                                                                    <input id="input_icono8-static" class="m-0 p-0" type="file" name="archivo_s">
                                                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_icono8-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 py-2 mx-auto">
                                                            <div style="border: 2px solid white;"></div>
                                                        </div>
                                                        <div class="col-12 text-center fs-5 fw-bolder" style="color: #FFEC23;">
                                                            <input type="text" class="form-control text-center fs-5 fw-bolder bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[20]->id }}" data-table="Elemento" data-campo="texto" style="color: #FFEC23;" value="{{ $elements[20]->texto }}  ">  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 py-0">
                                            <div class="col-9 mx-auto">
                                                <div class="row">
                                                    <div class="col-8 mx-auto">
                                                        <div style="
                                                            background-color: none;
                                                            background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[11]->imagen) }}');
                                                            background-repeat: no-repeat;
                                                            background-position: center center;
                                                            background-size: contain;
                                                            width: 100%;
                                                            height: 80px;
                                                        ">
                                                            <form id="form_icono4-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="id_static" value="{{ $elements[11]->id }}">
                                                                <input id="input_icono4-static" class="m-0 p-0" type="file" name="archivo_s">
                                                                <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_icono4-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-9 py-3 mx-auto">
                                                        <div style="border: 2px solid white;"></div>
                                                    </div>
                                                    <div class="col-12 text-center fs-5 fw-bolder" style="color: #FFEC23;">
                                                        <input type="text" class="form-control text-center fs-5 fw-bolder bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[12]->id }}" data-table="Elemento" data-campo="texto" style="color: #FFEC23;" value="{{ $elements[12]->texto }}  ">  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 py-0">
                                            <div class="col-9 mx-auto">
                                                <div class="row">
                                                    <div class="col-8 mx-auto">
                                                        <div style="
                                                            background-color: none;
                                                            background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[13]->imagen) }}');
                                                            background-repeat: no-repeat;
                                                            background-position: center center;
                                                            background-size: contain;
                                                            width: 100%;
                                                            height: 80px;
                                                        ">
                                                            <form id="form_icono5-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="id_static" value="{{ $elements[13]->id }}">
                                                                <input id="input_icono5-static" class="m-0 p-0" type="file" name="archivo_s">
                                                                <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_icono5-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-9 py-3 mx-auto">
                                                        <div style="border: 2px solid white;"></div>
                                                    </div>
                                                    <div class="col-12 text-center fs-5 fw-bolder" style="color: #FFEC23;">
                                                        <input type="text" class="form-control text-center fs-5 fw-bolder bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[14]->id }}" data-table="Elemento" data-campo="texto" style="color: #FFEC23;" value="{{ $elements[14]->texto }}  ">  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 py-0">
                                            <div class="col-9 mx-auto">
                                                <div class="row">
                                                    <div class="col-8 mx-auto">
                                                        <div style="
                                                            background-color: none;
                                                            background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[15]->imagen) }}');
                                                            background-repeat: no-repeat;
                                                            background-position: center center;
                                                            background-size: contain;
                                                            width: 100%;
                                                            height: 80px;
                                                        ">
                                                            <form id="form_icono6-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="id_static" value="{{ $elements[15]->id }}">
                                                                <input id="input_icono6-static" class="m-0 p-0" type="file" name="archivo_s">
                                                                <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_icono6-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-9 py-3 mx-auto">
                                                        <div style="border: 2px solid white;"></div>
                                                    </div>
                                                    <div class="col-12 text-center fs-5 fw-bolder" style="color: #FFEC23;">
                                                        <input type="text" class="form-control text-center fs-5 fw-bolder bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[16]->id }}" data-table="Elemento" data-campo="texto" style="color: #FFEC23;" value="{{ $elements[16]->texto }}  ">  
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 py-0">
                                            <div class="col-9 mx-auto">
                                                <div class="row">
                                                    <div class="col-8 mx-auto">
                                                        <div style="
                                                            background-color: none;
                                                            background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[17]->imagen) }}');
                                                            background-repeat: no-repeat;
                                                            background-position: center center;
                                                            background-size: contain;
                                                            width: 100%;
                                                            height: 80px;
                                                        ">
                                                            <form id="form_icono7-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="id_static" value="{{ $elements[17]->id }}">
                                                                <input id="input_icono7-static" class="m-0 p-0" type="file" name="archivo_s">
                                                                <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_icono7-static" style="opacity: 100%; border-radius: 26px;">Seleccionar archivo</label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-9 py-3 mx-auto">
                                                        <div style="border: 2px solid white;"></div>
                                                    </div>
                                                    <div class="col-12 text-center fs-5 fw-bolder" style="color: #FFEC23;">
                                                        <input type="text" class="form-control text-center fs-5 fw-bolder bg-transparent editarajax" id="" name="texto" data-id="{{ $elements[18]->id }}" data-table="Elemento" data-campo="texto" style="color: #FFEC23;" value="{{ $elements[18]->texto }}  ">  
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
        <div class="container-fluid mt-5">
            {{-- <div class="row" style="background-color: #F5F5F5; padding-bottom: 200px;"> --}}
            <div class="row" style="background-color: white; padding-bottom: 200px;">
                <div class="col py-5">
                    <div class="row">
                        <div class="col text-center fs-2" style="color: #388050;">
                            Nuestros
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <div class="display-2 fw-bold">Respaldos</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mx-auto">
                            <form id="form_respaldos_slider" action="respaldosSlider" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                @csrf
                                <input id="input_slider_respaldos" class="m-0 p-0" type="file" name="foto">
                                <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_slider_respaldos" style="opacity: 100%; background: #d89d8f !important; border-radius: 26px;">Agregar nuevo</label>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-5 py-5">
                        <div class="col-1">
                            <a href="" id="anteriorr" uk-icon="icon: chevron-double-left; ratio: 5;" style="color: #388050;"></a>
                        </div>
                        <div class="col-9 mx-auto">
                            <div class="row">
                                <div class="respaldos">
                                    @foreach ($respaldos as $res)
                                        <div style="
                                            background-color: white;
                                            background-image: url('{{ asset('img2/photos/respaldos/'.$res->foto) }}');
                                            background-size: contain;
                                            background-position: center center;
                                            background-repeat: no-repeat;
                                            margin-left: 10px;
                                            height: 160px;
                                            width: 100%;
                                        ">
                                            <div class="col position-relative">
                                                <div class="col-4 py-3 bg-danger position-absolute top-0 end-0">
                                                    <form action="{{ route('config.seccion.delRespaldos', [$res->id]) }}" method="POST" style="display: inline;">						
                                                        @csrf
                                                        @method('DELETE') 
                                                        <button type="submit" class="btn btn-danger btn-block bg-danger rounded-pill"><i class="fas fa-trash"></i></button>
                                                    </form>
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
        
        <div>
            <div class="container-fluid contenedor-contacto">
                <div class="col position-relative">
                    <div class="row" style="background-color: #3C3C3C; padding-bottom: 150px;">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto ">
                            <div class="row">
                                <div class="col-9 mt-2 py-0 mx-auto display-3 fw-bolder text-white col-contacto">
                                    Contacto
                                </div>
                            </div>
                            <div class="row">
                                <div class="col position-relative py-5">
                                    <div class="col-12 position-absolute top-0 start-50 translate-middle col-formulario_contacto">
                                    <div class="row">
                                <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-12 col-xs-12 col-12"></div>
                                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto fw-bolder text-white mx-5">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mx-auto position-relative shadow-sm col-amarilla2" style="background-color: #FFEC23;">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle shadow-sm col-verde2" style="background-color: white;">
                                                <div class="row py-5">
                                                    <div class="col-9 mx-auto position-relative">
                                                        <form>
                                                            <div class="row form-group">
                                                                <label for="nombre" class="form-label text-dark fs-3">Nombre</label>
                                                                <input type="text" class="form-control py-4 rounded-0 border border-2 border-dark">
                                                            </div>
                                                            <div class="row form-group">
                                                                <label for="email" class="form-label text-dark fs-3">Email</label>
                                                                <input type="mail" class="form-control py-4 rounded-0 border border-2 border-dark">
                                                            </div>
                                                            <div class="row form-group">
                                                                <label for="mensaje" class="form-label text-dark fs-3">Mensaje</label>
                                                                <textarea class="form-control rounded-0 border border-2 border-dark" name="" id="" cols="20" rows="6" style="resize: none;"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>        
                                            </div>
                                            <a href="#/">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6 fs-4 fw-semibolder text-dark py-4 position-absolute top-100 start-50 translate-middle text-center" style="background-color: #FFEC23;">
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
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 position-relative col-contacto_imagen">
                            <div class="col-xxl-11 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute">
                
                                    <!-- <img src="img/home/imagen_05.png" alt="" class="img-fluid">     -->
                                    <div class="img-contaa" style="
                                            background-color: none;
                                            background-image: url('{{ asset('img/design/home/imagen_05.png') }}');
                                            background-size: contain;
                                            background-repeat: no-repeat;
                                            background-position: bottom;
                                            width: 100%;
                                        "></div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column  position-absolute top-0 bottom-0 start-0 cuadr" style="height: 900px;">
                        <a href="" class="btn btn-outline" style="font-size: 40px;">No es editable</a>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
        

@endsection

@section('jsLibExtras2')

<script>
    $(document).ready(function() {
        $('.slider').slick({
            dots: true,
            appendDots: $('.slider'),
            customPaging: function(slider, i) {
                return '<button></button>';
            }
        });

        $('.slider-videos').slick({
            dots: true,
            appendDots: $('.slider-videos'),
            customPaging: function(slider, i) {
                return '<button></button>';
            }
        });

        // $('.slider-proyectos').slick({
        //     dots: true,
        //     appendDots: $('.slider-proyectos'),
        //     customPaging: function(slider, i) {
        //         return '<button></button>';
        //     }
        // });        
        
        
        $('.slider-proyectos').slick({
            dots: false,
            infinite: false,
            arrows: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 760,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
        });

        $('#siguiente').click(function(e){
            e.preventDefault();
            $('.slider-proyectos').slick('slickNext');
        });

        $('#anterior').click(function(e){
            e.preventDefault();
            $('.slider-proyectos').slick('slickPrev');
        });

        
    });
</script>
<script>
    $('.respaldos').slick({
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
            $('.respaldos').slick('slickNext');
        });

        $('#anteriorr').click(function(e){
            e.preventDefault();
            $('.respaldos').slick('slickPrev');
        });
</script>

<script>
    
    $('#input_slider_respaldos').change(function(e) {
		$('#form_respaldos_slider').trigger('submit');
	});

    $('#input_imagen-static').change(function(e) {
		$('#form_imagen-static').trigger('submit');
	});

    $('#input_imagen-static2').change(function(e) {
		$('#form_imagen-static2').trigger('submit');
	});

    $('#input_caracteristicas-static').change(function(e) {
		$('#form_caracteristicas-static').trigger('submit');
	});

    $('#input_icono1-static').change(function(e) {
		$('#form_icono1-static').trigger('submit');
	});

    $('#input_icono2-static').change(function(e) {
		$('#form_icono2-static').trigger('submit');
	});

    $('#input_icono3-static').change(function(e) {
		$('#form_icono3-static').trigger('submit');
	});

    $('#input_icono4-static').change(function(e) {
		$('#form_icono4-static').trigger('submit');
	});

    $('#input_icono5-static').change(function(e) {
		$('#form_icono5-static').trigger('submit');
	});

    $('#input_icono6-static').change(function(e) {
		$('#form_icono6-static').trigger('submit');
	});

    $('#input_icono7-static').change(function(e) {
		$('#form_icono7-static').trigger('submit');
	});

    $('#input_icono8-static').change(function(e) {
		$('#form_icono8-static').trigger('submit');
	});

    $('#input_icono9-static').change(function(e) {
		$('#form_icono9-static').trigger('submit');
	});

    $('#input_icono10-static').change(function(e) {
		$('#form_icono10-static').trigger('submit');
	});

    $('#input_slider_img').change(function(e) {
		$('#form_image_slider').trigger('submit');
	});

    $('#input_slider_video').click(function(e) {
		$('#form_video_slider').trigger('submit');
	});

    $('#input_slider_video2').change(function(e) {
		$('#form_video_slider2').trigger('submit');
	});

    $('#btnYoutube').show();
    $('#btnVideo').show();

    $('#colYoutube').hide();
    $('#colVideo').hide();

    $('#btnYoutube').click(function(){
        $('#colYoutube').show();
        $('#btnYoutube').hide();
        $('#colVideo').hide();
        $('#btnVideo').show();
    });

    $('#btnVideo').click(function(){
        $('#colYoutube').hide();
        $('#btnVideo').hide();
        $('#colVideo').show();
        $('#btnYoutube').show();
    });

</script>

@endsection

@section('jqueryExtra')

@endsection
