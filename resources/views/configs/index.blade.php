@extends('layouts.admin')
@section('styleExtras')
	<style>
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
.btn {
	box-shadow: none;
	border-radius: 15px;
}
/* mas estilisado */

	@media (min-width: 993px) {
		#front_general_mobile {
			display: none;
		}

		#front_general {
			display: block;
		}		
	}

	@media (max-width: 992px) {
		#front_general_mobile {
			display: block;
		}

		#front_general {
			display: none;
		}		
	}

</style>
@endsection
@section('content')

	<div id="front_general_mobile">
		No es posible acceder: Dispositivo pequeño detectado. Solo es posible acceder a este panel desde una computadora, esto con tal de mejorar la experiencia de usuario.
	</div>	
	<div id="front_general">
		<div class="row justify-content-center">
			@foreach ($cards as $card)
				<div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6  p-2">
					<a href="{{route($card['route'])}}" class="card h-100" style="box-shadow: none; border-radius: 16px;">
						<span class="card-body text-muted text-center">
							<i class="{{$card['icon']}} fa-3x mb-3"></i> <br>
							<span class=" text-dark"> {{$card['text']}} </span>
						</span>
					</a>
				</div>
			@endforeach
		</div>
	</div>
	

@endsection

@section('scriptExtras')
	<script type="text/javascript">
	var container = document.querySelector('.custom-scrollbar');

	$('.datepicker').pickadate();
	$(function() {
		$('[data-toggle="tooltip"]').tooltip()
	})
	</script>
@endsection
