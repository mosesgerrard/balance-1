
	    				<h2 class="form-signin-heading">Please Admin Login</h2>
	    				<label for="inputEmail" class="sr-only">Email address</label>
	    				{!! csrf_field() !!}
	    				{!! Form::email('email', null, ["class"=>"form-control","placeholder"=>"Email address", "required"=>true, "autofocus"]) !!}

	    				<label for="inputPassword" class="sr-only">Password</label>

	    				{!! Form::password('password', ["class"=>"form-control", "placeholder"=>"Password", "required"=>true]) !!}
	    				<div class="checkbox">
	    					<label><input type="checkbox" value="remember-me">Remember me</label>
	    				</div>
	    				<button type="submit" class="btn btn-lg btn-primary btn-block" >Sign in</button>
