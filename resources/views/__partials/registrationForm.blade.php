
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
			  		    {!! Form::radio("title","mr") !!}Mr.
			  		</label>
						&nbsp;&nbsp;&nbsp;&nbsp;
			  		<label class="radio-inline">
			  		        {!! Form::radio("title","mrs") !!}Mrs.
			  		</label>

			  		<label class="radio-inline">

			  		{!! Form::radio("title","miss") !!} Miss

			  		</label>

			  		<label class="radio-inline">
			  		{!! Form::radio("title","dr") !!}Dr.
			  		</label>
			  	</div>

			  	<label for="gender" class="col-sm-2 control-label">Gender <span class="red-star">&#9733;</span></label>
			  	<div class="radio col-sm-2">
			  		<label class="radio-inline">
			  		{!! Form::radio("gender","Male") !!}Male
			  		</label>

			  		<label class="radio-inline">
			  		{!! Form::radio("gender","Female") !!}Female
			  		</label>
			  	</div>

			  	<label for="dob" class="col-sm-2 control-label">Date of Birth <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-2">
		    	{!! Form::date("dob",null, ["class"=>"form-control",  "placeholder"=>"Birthday", "required"=> true]) !!}
		    	</div>
		  	</div>
              &nbsp;&nbsp;&nbsp;
			<div class="form-group">
		    	<label for="inputSurname" class="col-sm-2 control-label">Surname <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-10">
		    	{!! Form::text("surname",null, ["class"=>"form-control",  "placeholder"=>"Family Name", "required"=> true]) !!}
		    	</div>
		  	</div>
		  	   &nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="middleName" class="col-sm-2 control-label">Middle Name</label>
		    	<div class="col-sm-10">
		    	{!! Form::text("middleName",null, ["class"=>"form-control",  "placeholder"=>"Middle Name"]) !!}

		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputName" class="col-sm-2 control-label">First Name <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-10">
		    		{!! Form::text("firstName",null, ["class"=>"form-control",  "placeholder"=>"First Name", "required"=> true]) !!}
		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputNationality" class="col-sm-2 control-label">Nationality <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-10">
		    	    {!! Form::text("country",null, ["class"=>"form-control",  "placeholder"=>"Country of birth"]) !!}

		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputOccupation" class="col-sm-2 control-label">Occupation <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-10">
		    	{!! Form::text("occupation",null, ["class"=>"form-control",  "placeholder"=>"Occupation"]) !!}
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
		    	{!! Form::text("address",null, ["class"=>"form-control",  "placeholder"=>"House Address"]) !!}
		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputPhone" class="col-sm-2 control-label">Phone Number <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-10">
		    	{!! Form::text("phones",null, ["class"=>"form-control",  "placeholder"=>"Telephone Number", "required"=> true]) !!}
		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputEmail" class="col-sm-2 control-label">Email Address</label>
		    	<div class="col-sm-10">
		    		{!! Form::email("email",null, ["class"=>"form-control",  "placeholder"=>"Email", "required"=> true]) !!}
		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputEdu" class="col-sm-3 control-label legend">EDUCATIONAL BACKGROUND</label>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;


		  	<div class="form-group">
		    	<label for="inputUni" class="col-sm-2 control-label">University/College</label>
		    	<div class="col-sm-4">
		    	{!! Form::text("university[name]",null, ["class"=>"form-control",  "placeholder"=>"Name of Last University or College Attended"]) !!}
		    	</div>
		    	<label for="inputUniYear" class="col-sm-2 control-label">Year Completed</label>
		    	<div class="col-sm-4">
		    	{!! Form::text("university[year]",null, ["class"=>"form-control",  "placeholder"=>"Year Completed"]) !!}

		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputSenior" class="col-sm-2 control-label">High/Senior School <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-4">

		    	    {!! Form::text("hschool[name]",null, ["class"=>"form-control",  "placeholder"=>"Name of Senior or High School Attended"]) !!}

		    	</div>
		    	<label for="inputSeniorYear" class="col-sm-2 control-label">Year Completed <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-4">
		    	{!! Form::text("hschool[year]",null, ["class"=>"form-control",  "placeholder"=>"Year Completed"]) !!}

		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;

		  	<div class="form-group">
		    	<label for="inputJunior" class="col-sm-2 control-label">Upper/Junior School <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-4">

		    	{!! Form::text("jschool[name]",null, ["class"=>"form-control",  "placeholder"=>"Name Junior or Upper Basic School Attended"]) !!}

		    	</div>
		    	<label for="inputJuniorYear" class="col-sm-2 control-label">Year Completed <span class="red-star">&#9733;</span></label>
		    	<div class="col-sm-4">
		    	{!! Form::text("jschool[year]",null, ["class"=>"form-control",  "placeholder"=>"Year Completed"]) !!}

		    	</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;&nbsp;

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


		  	<div class="form-group" enctype="multipart/form-data" action="fileupload.php" method="post">
		    	<label for="inputFile" class="col-sm-2 control-label">Upload Documents<span class="red-star">&#9733;</span></label>
		    	
		    	{!!Form::file('file')!!}
		    	<p class="help-block">Please upload a copy of your ID card or birth certificate, school certificates, and/or extra curricular certificate(s) and two passport size photographs.</p>
		    	<div class="checkbox">
		    		<label>

		    		{!!Form::checkbox('agreed',null,['required'=>true])!!}

		    			&#9733;</span> By checking here, you have agreed to our <a href="#">Terms and Conditions</a> policies.
		    		</label>
		    	</div>
		    	&nbsp;&nbsp;&nbsp;

		    	<div class="col-sm-6">
					<button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
				</div>
		  	</div>
		  	&nbsp;&nbsp;&nbsp;
