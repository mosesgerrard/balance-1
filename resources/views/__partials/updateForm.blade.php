
		<!-- MEMBERSHIP FORM
		======================================================= -->

			<div class="form-header">
				<h2>The Balance Membership Form</h2>
				<p>Please read all the information carefully before completing the form. In order to be able to submit the form, you must fill in all the required fields denoted with <span class="red-star">&#9733;</span> symbol.</p>
			</div>

           &nbsp;&nbsp;
			<div class="form-group">
		    	<label for="inputInfo" class="col-sm-3 control-label legend">PERSONAL INFORMATION</label>
		  	</div>

		  	<div class="form-group">
		  		<label for="title" class="col-sm-2 control-label">Title</label>
		  		<div class="radio col-sm-2">
			  		<label class="radio-inline">
			  		    {!! Form::radio("person[title]","mr") !!}Mr.
			  		</label>
						&nbsp;&nbsp;&nbsp;&nbsp;
			  		<label class="radio-inline">
			  		        {!! Form::radio("person[title]","mrs") !!}Mrs.
			  		</label>

			  		<label class="radio-inline">

			  		{!! Form::radio("person[title]","miss") !!} Miss

			  		</label>

			  		<label class="radio-inline">
			  		{!! Form::radio("person[title]","dr") !!}Dr.
			  		</label>
			  	</div>

			  	<label for="gender" class="col-sm-2 control-label">Gender <span class="red-star">&#9733;</span></label>
			  	<div class="radio col-sm-2">
			  		<label class="radio-inline">
			  		{!! Form::radio("person[gender]","Male") !!}Male
			  		</label>

			  		<label class="radio-inline">
			  		{!! Form::radio("person[gender]","Female") !!}Female
			  		</label>
			  	</div>

			  	<label for="dob" class="col-sm-2 control-label">Date of Birth <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-2">
		    	{!! Form::date("person[dob]",$data->person['dob'], ["class"=>"form-control",  "placeholder"=>"Birthday"]) !!}
		    	</div>
		  	</div>
              &nbsp;&nbsp;&nbsp;
			<div class="form-group">
		    	<label for="inputSurname" class="col-sm-2 control-label">Surname <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-10">
		    	{!! Form::text("person[fullname]",$data->person['fullname'], ["class"=>"form-control",  "placeholder"=>"Family Name", "required"=> true]) !!}
		    	</div>
		  	</div>
		  	   &nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputNationality" class="col-sm-2 control-label">Nationality <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-10">
		    	    {!! Form::text("person[nationalities]",$data->person['nationalities'], ["class"=>"form-control",  "placeholder"=>"Country of birth"]) !!}

		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputOccupation" class="col-sm-2 control-label">Occupation <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-10">
		    	{!! Form::text("person[occupation]",$data->person['occupation'], ["class"=>"form-control",  "placeholder"=>"Occupation"]) !!}
		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputInfo" class="col-sm-3 control-label legend">CONTACT INFORMATION</label>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputAddress" class="col-sm-2 control-label">Address <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-10">
		    	{!! Form::text("person[contact][address]",$data->person['contacts']['address'], ["class"=>"form-control",  "placeholder"=>"House Address"]) !!}
		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputPhone" class="col-sm-2 control-label">Phone Number <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-10">
		    	{!! Form::text("person[contact][phones]",$data->person['contacts']['phone'], ["class"=>"form-control",  "placeholder"=>"Telephone Number", "required"=> true]) !!}
		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputEmail" class="col-sm-2 control-label">Email Address</label>
		    	<div class="col-sm-10">
		    		{!! Form::email("person[contact][email]",$data->person['contacts']['email'], ["class"=>"form-control",  "placeholder"=>"Email", "required"=> true]) !!}
		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputEdu" class="col-sm-3 control-label legend">EDUCATIONAL BACKGROUND</label>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;






		  	<div class="form-group">
		    	<label for="inputSkills" class="col-sm-3 control-label legend">SKILLS OR COMPETENCES <span class="red-star">&#9733;</span></label>
		    </div>
		    <div class="form-group">
			    <div class="col-sm-6">
			    {!! Form::textarea('skills', null,["placeholder"=>"Please specify your skills or competences here"]) !!}
			    </div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

			<div class="form-group">
		    	<label for="inputSkills" class="col-sm-5 control-label legend">WHY DO YOU WANT TO BE A MEMBER OF THE BALANCE?
		    	<span class="red-star">&#9733;</span></label>
		    </div>
		    <div class="form-group">
			    <div class="col-sm-6">
			     {!! Form::textarea('remarks',null, ["placeholder"=>"Explain - give at least three(3) reasons", "rows"=>"7"]) !!}
			    	
			    </div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;



		    	<div class="col-sm-6">
					<button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
				</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;
