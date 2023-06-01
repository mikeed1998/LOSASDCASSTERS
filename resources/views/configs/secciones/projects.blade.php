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
                    margin-left: 180px;
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
@endsection

@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('config.seccion.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

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
                            <div class="titulo-slider_principal" style=""><strong>Empresas que llevan nuestro producto</strong></div>
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mt-5 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mt-5 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mt-5 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mt-5 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mt-5 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mt-5 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mt-5 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div>
                                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-10 col-xs-11 col-10 mt-5 mx-auto position-relative col-amarilla" style="background-color: #FFEC23;">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-absolute top-0 start-0 translate-middle col-verde" style="background-color: #388050;">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <div class="row">
                                                        <div class="col mt-5 text-center">
                                                            <p class="fs-3" style="color: #FFEC23;">Nombre del Proyecto</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-11 mx-auto text-center text-white fs-5 con-scroll">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione, ad ipsa labore quia maiores blanditiis itaque totam dicta nesciunt vitae dolorum sequi delectus quo commodi aut et? Sapiente, itaque.
                                                        </div>
                                                    </div>
                                                    <div class="row py-5">
                                                        <div class="col-3 mx-auto" style="border-bottom: 5px solid #FFEC23;"></div>
                                                    </div>
                                                    <div class="row py-0">
                                                        <div class="col">
                                                            <div class="imagen-proyectos" style="
                                                                background-color: black;
                                                                background-image: url('{{ asset('img/design/home/imagen_03.png') }}');
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
                                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                    <div class="" style="
                                        background-color: ;
                                        background-image: url('{{ asset('img/design/home/cliente_01.png') }}');
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        width: 100%;  
                                        height: 200px;     
                                    "></div>
                                </div>
                                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                    <div class="" style="
                                        background-color: ;
                                        background-image: url('{{ asset('img/design/home/cliente_02.png') }}');
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        width: 100%;  
                                        height: 200px;     
                                    "></div>
                                </div>
                                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                    <div class="" style="
                                        background-color: ;
                                        background-image: url('{{ asset('img/design/home/cliente_03.png') }}');
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        width: 100%;  
                                        height: 200px;     
                                    "></div>
                                </div>
                                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                    <div class="" style="
                                        background-color: ;
                                        background-image: url('{{ asset('img/design/home/cliente_04.png') }}');
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        width: 100%;  
                                        height: 200px;     
                                    "></div>
                                </div>
                                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                    <div class="" style="
                                        background-color: ;
                                        background-image: url('{{ asset('img/design/home/cliente_04.png') }}');
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        width: 100%;  
                                        height: 200px;     
                                    "></div>
                                </div>
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

@section('jqueryExtra')

@endsection
