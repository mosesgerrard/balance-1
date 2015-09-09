	<!-- MODAL LOGIN FORM
    ================================================== -->
    <div class="modal fade" id="admin-dashboard" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			    			{!! Form::open(['route'=>'sessions.store', "class"=>"form-signin"]) !!}
    			    		                @include('__partials/loginForm')
            	    			{!! Form::close() !!}
    		</div>
    	</div>
    </div>