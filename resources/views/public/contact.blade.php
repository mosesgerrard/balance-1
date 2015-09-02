@extends('layouts/master')

@section('title', 'Page Title')

@section('featured')
    @parent
		<div class="jombotron">
			<img src="img/NightSky.jpg" width="100%" height="500" alt="jombotron-img">
		</div>
@endsection

@section('container')

      	<!-- CONTACT FORM
		======================================================= -->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">

				</div>

				<div class="col-sm-8">
					<div class="panel panel-default">
						<div class="panel=body">
							{!!Form::open(['url'=>'sendmessage',"class"=>"form-horizontal pull-right"])!!}
								@include('__partials/contactForm')	
							{!!Form::close()!!}
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection