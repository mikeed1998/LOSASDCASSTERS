<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Admin') }}</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link rel="stylesheet" href="{{asset('css/bootstrap-4.min.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}"> --}}
	<link rel="stylesheet" href="{{asset('css/mdb-ad.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	{{-- @notifyCss --}}

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@700&family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">

	<style>
		
		* {
        font-family: 'Arimo', sans-serif; font-family: 'Quicksand', sans-serif;
    }
		/* mas estilisado */	
	body{
		background-color: #e5e8eb  !important;
	}
	.card-header {
		background-color: #b0c1d1  !important;
		border-radius: 25px;
	}
	.black-skin .btn-primary {
		background-color: #b0c1d1  !important;
	}
	.btn, .card {
		box-shadow: none;
		border-radius: 15px;
	}
	/* mas estilisado */

	</style>

@yield('cssExtras')
	@yield('jsLibExtras')
	@yield('styleExtras')

</head>

<body class="fixed-sn black-skin">
	@include('layouts.partials_ad.header')

	{{-- @include('notify::messages') --}}

	<main>
		<div class="container-fluid mb-3">
			@yield('content')
		</div>
	</main>

	<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap-4.js')}}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script type="text/javascript" src="{{asset('js/vendor/tinymce/tinymce.min.js')}}"></script>
	{{-- <script src="https://cdn.tiny.cloud/1/jkghs698bzdurxbsfn1o8fh4mzzikbzxid9haupezccqmmge/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
	<script type="text/javascript" src="{{asset('js/mdb-ad.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/modules/admin.js')}}"></script>
	{!! Toastr::message() !!}
	{{-- @notifyJs --}}
	{{-- <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script> --}}
	@yield('jsLibExtras2')

	<script>
		$(".button-collapse").sideNav();

		var container = document.querySelector('.custom-scrollbar');
		var ps = new PerfectScrollbar(container, {
			wheelSpeed: 2,
			wheelPropagation: true,
			minScrollbarLength: 20
		});

		$(function() {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>

	@yield('jqueryExtra')

</body>

</html>
