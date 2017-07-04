@extends('layouts.master')

<script type="text/javascript">
	$(window).on('beforeunload', function() {
    return 'Your own message goes here...';
});
</script>

@section('content')
<div class="container">
	<div class="row" id="btnpad">
		<div>
			<a href="careers-home" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-arrow-left"></span>Back to Careers Home</a>
		</div>
	</div>
	<div class="row">
		<div>
			<h2 id="title">Hiring Process</h2>
		</div>
		<div class="col-md-4">
	    	<h2  id="title">Step 1</h2><br>
	    	<p  id="title">Once your application is received, a recruiter will reach out pending your qualifications are a match for the role.</p>
		</div>
		<div class="col-md-4">
	    	<h2  id="title">Step 2</h2><br>
	    	<p  id="title">Once your application is received, a recruiter will reach out pending your qualifications are a match for the role.</p>
		</div>
		<div class="col-md-4">
	    	<h2  id="title">Step 3</h2><br>
	    	<p  id="title">Once your application is received, a recruiter will reach out pending your qualifications are a match for the role.</p>
		</div>
	</div>
	<div class="row">
		<br>
		<h2  id="titlepad">APPLICATION</h2>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
		<h4 >PERSONAL INFORMATION</h4>
		<small class="text-danger"><strong>Fields with * are required</strong></small>
		<br><br><br>
		</div>
	</div>
	<div class="row">
		<h4 class="col-md-4 col-md-offset-2">PERSONAL INFORMATION</h4><br><br><br>
	</div>
	<form id='i-recaptcha' method="POST" action="/form_validation/3" data-toggle="validator">
		{{ csrf_field() }}
		<div class="row">
		  	<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="fname">First Name *</label>
	    		<input type="text" class="form-control" id="fname" data-error="Please input your first name" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-4">
	    		<label for="lname">Last Name *</label>
	    		<input type="text" class="form-control" id="lname" data-error="Please input your last name" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>	
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="present"> Present Address *</label>
	    		<input type="text" class="form-control" id="present" data-error="Please input your present address" required>
	    		<div class="help-block with-errors"></div>
	  		</div>		
	  		<div class="form-group col-md-2">
	    		<label for="zip">Zip</label>
	    		<input type="text" class="form-control" id="zip">
	  		</div>
		</div>	
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="prov"> Provincial Address *</label>
	    		<input type="text" class="form-control" id="prov" data-error="Please input your provincial address" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="zip1">Zip</label>
	    		<input type="text" class="form-control" id="zip1">
	  		</div>
		</div>
		<div class="row">
			<div class="form-group col-md-2 col-md-offset-2">
	    		<label for="bday">Date of Birth *</label>
	    		<input type="date" class="form-control" id="bday" data-error="Please input your birthdate" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="phone">Mobile Number *</label>
	    		<input type="text" class="form-control" id="phone" pattern="0\d{10}" placeholder="0xxxxxxxxxx" data-error="Please input your mobile number" required>
	    		<div class="help-block with-errors"></div>
	    		<div class="help-block">Should have 11 digits</div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="email">Email Address *</label>
	    		<input type="email" class="form-control" id="email" data-error="Please input a valid email address" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>	
		<div class="row">
			<br><br><br><h4 class="col-md-4 col-md-offset-2">INTERNSHIP DETAILS</h4><br><br><br>
		</div>
		<div class="row">
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school">School/College/University *</label>
	    		<input type="text" class="form-control" id="school" data-error="Please input this field" required>
    			<div class="help-block with-errors"></div>
	  		</div>
		</div>	
		<div class="row">
	  		<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="course">Undergraduate Course *</label>
	    		<input type="text" class="form-control" id="course" data-error="Please input this field" required>
    			<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
  				<label for="level">Year Level *</label>
  				<select class="form-control" id="level" required>
  					<option value="" selected disabled>--</option>
			        <option>First Year</option>
			        <option>Second Year</option>
			        <option>Third Year</option>
			        <option>Fourth Year</option>
			        <option>Fifth Year</option>
			    </select>
			    <div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-1">
  				<label for="sem">Sem *</label>
  				<select class="form-control" id="sem" required>
  					<option value="" selected disabled>--</option>
			        <option>1st</option>
			        <option>2nd</option>
			     </select>
			     <div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
  				<label for="hrs">Hours Required *</label>
  				<select class="form-control" id="hrs" required>
  					<option value="" selected disabled>--</option>
  					<option>100-200</option> 
			        <option>200-300</option>
			        <option>300-400</option>
			        <option>500-above</option>
			     </select>
			     <div class="help-block with-errors"></div>
	  		</div>	
		</div>
		<div class="row">
			<div>
				<br><br><br><h4 class="col-md-4 col-md-offset-2">Attach Resume *</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<label class="btn btn-primary btn-lg" id="upload"><span id="upload-text">Upload</span>
						<input type="file" id="resume" style="display: none" required/>	
				</label>
				<p> Uploaded File: <span id="uploaded-file"> </span></p>
				<div class="help-block with-errors" id="upload-error" style="color:red;"> Please upload your resume </div>
			</div>
		</div>
		<div class="g-recaptcha col-md-offset-2" data-sitekey="6LdzbCcUAAAAACh-aC1TOyC1t1M_fL-qDYU5ZJCk"></div>
		<button type="submit" id="Submit" class="btn btn-primary btn-lg center-block" style="margin-top: 5%; margin-bottom: 5%;">Submit Application</button>
	</form>
</div>
<script type="text/javascript">
	for (i = new Date().getFullYear(); i > 1900; i--){
		$('.year').append($('<option />').val(i).html(i));
	}  
</script>

@endsection