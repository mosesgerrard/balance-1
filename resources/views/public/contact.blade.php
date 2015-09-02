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
							<form class="form-horizontal pull-right">
								<div class="form-header">
									<h2>Please Send us a Message</h2>
								</div>
								<div class="form-group">
									<label for="contactName" class="col-sm-3 control-label">Name</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="contactName" placeholder="First &amp; last name" required>
									</div>
								</div>

								<div class="form-group">
									<label for="contactEmail" class="col-sm-3 control-label">Email</label>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="contactEmail" placeholder="Example@domain.com" required>
									</div>
								</div>

								<div class="form-group">
									<label for="contactMessage" class="col-sm-3 control-label">Message</label>
									<div class="col-sm-9">
										<textarea type="text" class="form-control" row="20" id="contactMessage" placeholder="Write your message"></textarea>
									</div>
								</div>
								<div class="col-sm-9 pull-right">
									<button type="submit" class="btn btn-lg btn-primary btn-block">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection