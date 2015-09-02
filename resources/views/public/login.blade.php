@extends('layouts/master')

@section('title', 'Page Title')

@section('container')

		<div class="row">
		<div class="col-md-6 pull-right">
			{!! Form::open(['route'=>'sessions.store', 'class'=>'form-horizontal'])!!}
				@include('__partials.loginForm')
			{!!Form::close()!!}
		</div>		
			

		</div>

@endsection