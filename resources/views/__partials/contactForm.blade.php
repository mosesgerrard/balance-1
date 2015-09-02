

						<div class="form-header">
							<h2>Contact Form</h2>
						</div>
						&nbsp;&nbsp;
						<div class="control-group">
							<label for="contactName" class="control-label"><i class="glyphicon glyphicon-user"></i> Full Name</label>
							<div class="controls">
									{!!
		Form::text('fullname', null, ["class"=>"form-control", "placeholder"=>"First &amp; last name"])
	!!}
							</div>
						</div>
						&nbsp;&nbsp;
						<div class="control-group">
							<label class="control-label" for="contactEmail"><i class="glyphicon glyphicon-envelope"></i> Email</label>
							<div class="controls">
									{!!
		Form::email('email', null, ["class"=>"form-control", "placeholder"=>"Example@domain.com"])
	!!}

							</div>
						</div>
						&nbsp;&nbsp;
						<div class="control-group">
							<label class="control-label" for="contactSubject"><i class="glyphicon glyphicon-question-sign"></i> Subject</label>
							<div class="controls">
									{!!
		Form::text('subject', null, ["class"=>"form-control", "placeholder"=>"subject"])
	!!}
							</div>
						</div>
						&nbsp;&nbsp;
						<div class="control-group">
							<label class="control-label" for="contactMessage"><i class="glyphicon glyphicon-pencil"></i> Message</label>
							<div class="controls">
	{!!
		Form::textarea('message', null, ["class"=>"form-control", "placeholder"=>"Write your message", "row"=>"20"])
	!!}
							</div>
						</div>
						&nbsp;&nbsp;
						<div class="control-group">
							<div class="controls">
									<button type="submit" class="btn btn-primary">Send Message</button>
							</div>
						</div>
						<p class="tagline"></p>