@extends('layouts.admin')

@section('cssExtras')
@endsection

@section('jsLibExtras')
@endsection

@section('styleExtras')
@endsection

@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('admin.home') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <h1>SECCION HOME</h1>
@endsection

@section('jsLibExtras2')
@endsection

@section('jqueryExtra')
@endsection
