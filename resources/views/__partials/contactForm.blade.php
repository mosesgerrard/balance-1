<div class="form-header">
	<h2>Please Send us a Message</h2>
</div>
<div class="form-group">
	<label for="contactName" class="col-sm-3 control-label">Name</label>
	<div class="col-sm-9">
	{!!
		Form::text('fullname', null, ["class"=>"form-control", "placeholder"=>"First &amp; last name"])
	!!}
	</div>
</div>

<div class="form-group">
<label for="contactEmail" class="col-sm-3 control-label">Email</label>
<div class="col-sm-9">

	{!!
		Form::email('email', null, ["class"=>"form-control", "placeholder"=>"Example@domain.com"])
	!!}


</div>
</div>

<div class="form-group">
<label for="contactMessage" class="col-sm-3 control-label">Message</label>
<div class="col-sm-9">
	{!!
		Form::textarea('email', null, ["class"=>"form-control", "placeholder"=>"Write your message", "row"=>"20"])
	!!}
</div>
</div>
<div class="col-sm-9 pull-right">
<button type="submit" class="btn btn-lg btn-primary btn-block">Send</button>
</div>