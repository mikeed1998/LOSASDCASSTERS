<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="{{$config->description}}" />

		{{-- <title>{{ config('app.name') }}</title> --}}
		<title>@yield('title') | {{$config->title }}</title>

    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick-theme.css')}}"/>
		<link rel="stylesheet" href="{{asset('css/main.css')}}">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

	<!-- Estilos generales -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- SlickJS -->
    <link rel="stylesheet" type="text/css" href="vendor/slick-1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="vendor/slick-1.8.1/slick/slick-theme.css"/>
	<!-- Toastr -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap 5 Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- UiKit -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@700&family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
		<style>
			
			* {
        font-family: 'Arimo', sans-serif; font-family: 'Quicksand', sans-serif;
    }
	
			.nav-item:hover {
 	   			background: none;
			}
		</style>
		@yield('jsLibExtras')

		@yield('cssExtras')
			@yield('styleExtras')
	</head>
	<body>

		@include('layouts.partials.header')

		@yield('content')

		@include('layouts.partials.footer')
		 <!-- JQuery -->
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		 <!-- Scripts generales -->
		 <script type="text/javascript" src="js/main.js"></script>
		 <!-- Toastr -->
		 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		 <!-- SlickJS -->
		 <script type="text/javascript" src="vendor/slick-1.8.1/slick/slick.js"></script>
		 <!-- Bootstrap 5 -->
		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
		 <!-- Font Awesome 6 -->
		 <script src="https://use.fontawesome.com/005ad652c9.js"></script>
		 <!-- UiKit -->
		 <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit.min.js"></script>
		 <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit-icons.min.js"></script>
		 <!-- SweetAlert -->
		 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
		 <!-- OpenPay -->
		 <script type="text/javascript" src="https://js.openpay.mx/openpay.v1.min.js"></script>
		 <script type='text/javascript' src="https://js.openpay.mx/openpay-data.v1.min.js"></script>
		{{-- <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script> --}}
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/general.js')}}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		@yield('jsLibExtras2')

		{{-- {{$carrito}} --}}
		@yield('jqueryExtra')
	</body>
</html>
