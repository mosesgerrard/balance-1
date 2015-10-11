@extends('layouts/master')

@section('title', 'Page Title')

@section('featured')
    @parent
    @include('inc/featured')
@endsection

@section('container')

		<!-- MARKETING MESSAGES
		======================================================= -->
		<div class="container marketing">
	      	<div class="row">
		        <div class="col-lg-4">
			        <i class="fa fa-rocket fa-5x" alt="Generic placeholder image" width="140" height="140"></i>
			        <h2>Takes Effect Instantly</h2>
			        <p>You don't want to wait while others take the lead in self and national development.
			        	You want to be right in the mix! And that's exactly what you'll get.</p>
			        <p><a class="btn btn-default" href="#" role="button">How it works &raquo;&raquo;&raquo;</a></p>
			    </div>

		        <div class="col-lg-4">
		        	<i class="fa fa-users fa-5x" alt="Generic placeholder image" width="140" height="140"></i>
		          	<h2>Works for Everyone</h2>
		          	<p>It doesn't matter how awesome you are already. The increase you get will take you up to maximum potential.</p>
		          	<p><a class="btn btn-default" href="#" role="button">How you're covered &raquo;&raquo;&raquo;</a></p>
		        </div>

		        <div class="col-lg-4">
		        	<i class="fa fa-line-chart fa-5x" alt="Generic placeholder image" width="140" height="140"></i>
		          	<h2>Permanent Membership</h2>
		          	<p>There is no expiry date on your The Balance membership. You'll stay active from the moment you join us, forever.</p>
		          	<p><a class="btn btn-default" href="#" role="button">Lifetime membership &raquo;&raquo;&raquo;</a></p>
		        </div>
      		</div>
      	</div>



		<!-- THE PARTNERS
		======================================================= -->
	    <hr role="separator" class="divider">
	      	<div class="partners">
	      		<div class="container">
		      		<h2 class="partners-heading">Partners</h2>
			        <p class="lead">Our main sponsors and partners include global institutions like the EU, The World Bank and GRTS</p>
		      		<div class="row">
			        	<div class="">
			          		<img class=" col-lg-2 img-circle img-responsive" src="img/grts.jpg" width="100" height="100" alt="GRTS image">
			        		&nbsp;&nbsp;&nbsp;
			          		<img class="col-lg-2 img-circle img-responsive" src="img/eu_logo.jpg" width="100" height="100" alt="GRTS image">
			          		&nbsp;&nbsp;&nbsp;
			          		<img class="col-lg-2 img-circle img-responsive" src="img/nea.jpg" width="100" height="100" alt="GRTS image">
			          		&nbsp;&nbsp;&nbsp;
			        	</div>
			        </div>&nbsp;&nbsp;&nbsp;
			    </div>
	      	</div>



@endsection