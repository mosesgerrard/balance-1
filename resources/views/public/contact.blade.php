@extends('layouts/master')

@section('title', 'Page Title')

@section('featured')
    @parent
		<!-- JOMBOTRON
		======================================================= -->		
		<div class="jombotron">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15520.85756469736!2d-16.688045583837898!3d13.460877826232839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spt!4v1441078385967" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>	
		</div>
@endsection

@section('container')
	      	<!-- CONTACT FORM
		======================================================= -->
		<div class="container">
			<div class="row">
				<div class="hero-unit pull-center">
					<h1>Let's Keep In Touch</h1>
					<p class="tagline">Thank you for visiting us. If you would like to get into contact with our team simply fill out the form below. Cheers!</p>
				</div>

				<section class="col-md-6">
							{!!Form::open(['url'=>'sendmessage',"class"=>"form"])!!}
								@include('__partials/contactForm')	
							{!!Form::close()!!}
						&nbsp;&nbsp;
						
				</section>

				<section class="col-md-6">
					<div class="heading">						
						<h1>Contact Details</h1>
					</div>
					&nbsp;&nbsp;
					<div>
						<h4>The Balance CEO/Manager</h4>
						<p><b>Mr. Baba Ceesay</b></p>
					</div>
					&nbsp;&nbsp;
					<div>
						<h4>Address</h4>
						<p>GRTS Building, MDI Road <br />
							Kanifing, Serrekunda <br />
							The Gambia <br />
							West Africa
						</p>
					</div>
					&nbsp;&nbsp;
					<div>
						<h4>Telephone</h4>
						<p>(+220) 726 2807</p>
					</div>
					&nbsp;&nbsp;
					<div>
						<h4>Email</h4>
						<p>queensyj2@hotmail.co.uk</p>
					</div>
					<p class="tagline"></p>
				</section>
			</div>
		</div>
@endsection