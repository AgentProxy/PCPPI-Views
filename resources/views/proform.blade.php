@extends('layouts.master')

<!-- if
	naka set ang complete nga session
	redirect to link
 -->

@section('content')
<script>
	var submitted = false;
	$('#i-recaptcha').submit(function() {
   		$(window).off('beforeunload');
   		submitted = true;
	});

	$(window).on('beforeunload', function() {
		if(!submitted){
    		return 'Your own message goes here...';
    	}
	});	
</script>
<div class="container" id="form">
	<div class="row" id="btnpad">
		<div>
			<a href="careers-search" class="btn btn-success btn-lg col-xs-offset-1" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to Careers</a>
		</div>
	</div>
	<div class="row">
		<h1 id="title">POSITION</h1>
		<h4 id="title">Location</h4>
	</div>
	<div class="row col-md-offset-1">
		<h3>Main Responsibility</h3>
		<ul>
  			<li>Responsibility 1</li>
  			<li>Responsibility 2</li>
  			<li>Responsibility 3</li>
		</ul>
	</div>
	<div class="row col-md-offset-1">
		<h3>Qualifications</h3>
		<ul>
  			<li>Qualification 1</li>
  			<li>Qualification 2</li>
  			<li>Qualification 3</li>
		</ul>
	</div>
	<div class="row">
		<div>
			<h2 id="title">Hiring Process</h2>
		</div>
		<div class="col-md-4">
	    	<h2 id="title">Step 1</h2><br>
	    	<p id="title">Once your application is received, a recruiter will reach out pending your qualifications are a match for the role.</p>
		</div>
		<div class="col-md-4">
	    	<h2 id="title">Step 2</h2><br>
	    	<p id="title">Once your application is received, a recruiter will reach out pending your qualifications are a match for the role.</p>
		</div>
		<div class="col-md-4">
	    	<h2 id="title">Step 3</h2><br>
	    	<p id="title">Once your application is received, a recruiter will reach out pending your qualifications are a match for the role.</p>
		</div>
	</div>
	<div class="row">
		<br>
		<h2 id="titlepad">APPLICATION</h2>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
		<h4 >PERSONAL INFORMATION</h4>
		<small class="text-danger"><strong>Fields with * are required</strong></small>
		<br><br><br>
		</div>
	</div>

	<form name="proform" id='i-recaptcha' method="POST" action="/form_validation/1" data-toggle="validator" enctype="multipart/form-data">	
		{{ csrf_field() }}
		<div class="row">
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="fname">First Name *</label>
	    		<input type="text" class="form-control" name="fname" id="fname" data-error="Please input your first name" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-4">
	    		<label for="lname">Last Name *</label>
	    		<input type="text" class="form-control" name="lname" id="lname" data-error="Please input your last name" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<div class="row"> 
	  		<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="present"> Present Address *</label>
	    		<input type="text" class="form-control" name="present" id="present" data-error="Please input your present address" required maxlength="150">
	    		<div class="help-block with-errors"></div>
	  		</div>		
	  		<div class="form-group col-md-2">
	    		<label for="zip">Zip</label>
	    		<input type="text" class="form-control" name="zip" id="zip" maxlength="6">
	  		</div>
 		</div>
 		<div class="row">
	  		<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="prov"> Provincial Address *</label>
	    		<input type="text" class="form-control" name="prov" id="prov" data-error="Please input your provincial address" required maxlength="150">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="zip1">Zip</label>
	    		<input type="text" class="form-control" name="zip1" id="zip1" maxlength="6">
	  		</div> 
		</div>
		<div class="row">
			<div class="form-group col-md-2 col-md-offset-2">
	    		<label for="bday">Date of Birth *</label>
	    		<input type="date" class="form-control" id="bday" name="bday" data-error="Please input your birthdate" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="phone">Mobile Number *</label>
	    		<input type="text" class="form-control" id="phone" name="phone" pattern="0\d{10}" placeholder="0xxxxxxxxxx" data-match-error="Please input a valid phone number" data-error="Please input your mobile number" required>
	    		<div class="help-block with-errors"></div>
	    		<div class="help-block">Should have 11 digits</div>
	  		</div> 
	  		<div class="form-group col-md-3">
	    		<label for="email">Email Address *</label>
	    		<input type="email" class="form-control" name="email" id="email" data-error="Please input a valid email address" required maxlength="75" enctype="multipart/form-data">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<div class="row"> 
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="course">Bachelor's Degree *</label>
	    		<input type="text" class="form-control" name="course" id="course" data-error="Please input your bachelor's degree" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="from1"><small> From (School Year) * </small></label>
	    		<select class="form-control year" name="from1" id="from1" required>
	    			<option value="" selected disabled>--</option>
	    		</select>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="to1"><small> To (School Year) * </small></label>  
	    		<select class="form-control year" name="to1" id="to1" required>
	    			<option value="" selected disabled>--</option>
	    		</select>
	    		<div class="help-block with-errors"></div>
	  		</div> 
		</div>
		<div class="row">
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school1">School/College/University *</label>
	    		<input type="text" class="form-control" name="school1" id="school1" data-error="Please input this field" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div> 
		</div>
		<div class="row"> 
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="gradcourse">Graduate Course</label>
	    		<input type="text" class="form-control" name="gradcourse" id="gradcourse" maxlength="75">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="from2"><small> From (School Year) </small></label> 
	    		<select class="form-control year" name="from2" id="from1" >
	    			<option selected disabled>--</option>
	    		</select>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="to2"><small> To (School Year) </small></label> 
	    		<select class="form-control year" name="to2" id="from1" >
	    			<option selected disabled>--</option>
	    		</select>
	  		</div>
	  	</div>
  		<div class="row">
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school2">School/College/University</label>
	    		<input type="text" class="form-control" name="school2" id="school2" maxlength="75">
	  		</div> 
		</div>
		<div class="row">
			<div class="col-md-offset-2">
				<label for="skills">&nbsp&nbsp&nbsp Skills</label>
				<div id="skill-0" name="skills" class="checkbox skills" style="display: none">
			    	<button class="btn btn-danger btn-circle-xs delete-skill" ><span class="glyphicon glyphicon-minus"></span></button> 
			    	<label id="skill-label" style="padding-left: 0%;">Programming</label>
			    </div> 
			    <div class="col-md-offset-1">
					<div id="skill-1" class="checkbox skills">
		  				<label><input type="checkbox" name="skills[]" value="Advanced Excel">Advanced Excel</label>
				    </div>
				    <div id="skill-2" class="checkbox skills">
				      <label><input type="checkbox" name="skills[]" value="Photoshop">Photoshop</label>
				    </div>
				    <div id="skill-3" class="checkbox skills">
				      <label><input type="checkbox" name="skills[]" value="Programming">Programming</label>
				    </div>
				    <div class="row" id="addskill">
					    <input type="text" id="skill" placeholder="Other Skills" maxlength="75">
					    <button type="button" id="add-skill" class="btn btn-success add-skill">
			      			<span class="glyphicon glyphicon-plus add-skill"></span> Add Skill
			    		</button>
		    		</div>
		    	</div>
		    </div>
		</div>
		<div class="row">
			<br><br><h4 class="col-md-4 col-md-offset-2">CHARACTER REFERENCES</h4><br><br><br>
		</div>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="name1">Name *</label>
	    		<input type="text" class="form-control" name="name[]" id="name1" placeholder="e.g. Julia Baretto" data-error="Please input this field" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="num1">Contact Number *</label>
	    		<input type="text" class="form-control" name="num[]" id="num1" placeholder="e.g. 09123456789" pattern="0\d{10}" data-error="Please input a valid mobile number" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="rel1">Relationship *</label>
	    		<input type="text" class="form-control" name="rel[]" id="rel1" placeholder="e.g. College Teacher" data-error="Please input this field" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="name2" id="relation">Name *</label>
	    		<input type="text" class="form-control" name="name[]" id="name2" placeholder="e.g. Julia Baretto" data-error="Please input this field" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="num2" id="relation">Contact Number *</label>
	    		<input type="text" class="form-control" id="num2" name="num[]" placeholder="e.g. 09123456789" pattern="0\d{10}" data-error="Please input a valid mobile number" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="rel2" id="relation">Relationship *</label>
	    		<input type="text" class="form-control" name="rel2" id="rel[]" placeholder="e.g. College Teacher" data-error="Please input this field" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="name3" id="relation">Name *</label>
	    		<input type="text" class="form-control" name="name3" id="name[]" placeholder="e.g. Julia Baretto" data-error="Please input this field" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="num3" id="relation">Contact Number *</label>
	    		<input type="text" class="form-control" name="num3" id="num[]" placeholder="e.g. 09123456789" pattern="0\d{10}" data-error="Please input a valid mobile number" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="rel3" id="relation">Relationship *</label>
	    		<input type="text" class="form-control" name="rel3" id="rel[]" placeholder="e.g. College Teacher" data-error="Please input your last name" required maxlength="75">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<div class="row">
			<br><br><h4 class="col-md-4 col-md-offset-2">WORK HISTORY</h4><br><br><br>
		</div>
		<div class="row">
		<!-- Start of Work History Template-->
			<div class="work-history" id="work-history-0" style="display: none;">
		  		<div class="form-group col-md-2 col-md-offset-2">
		    		<label for="company">Company Name</label>
		    		<input type="text" class="form-control" name="company[]" id="company" maxlength="75">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="position">Position/Title</label>
		    		<input type="text" class="form-control" name="position[]" id="position" maxlength="75">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="frdate">From</label>
		    		<input type="date" class="form-control" name="frdate[]" id="frdate">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="todate">To</label>
		    		<input type="date" class="form-control" name="todate[]" id="todate">
		    		<button id="addwork" class="btn btn-danger delete-work" style="position: relative; left: 180px; bottom: 35px;"><span class="glyphicon glyphicon-minus-sign"></span></button>
		  		</div>
	  		</div>  
	  	<!-- End of Work History Template-->
	  		 <div class="work-history" id="work-history-1" style="display:block;">
	  			<div class="form-group col-md-2 col-md-offset-2">
		    		<label for="company">Company Name</label>
		    		<input type="text" class="form-control" name="company[]" id="company" maxlength="75">
	  			</div>
		  		<div class="form-group col-md-2">
		    		<label for="position">Position/Title</label>
		    		<input type="text" class="form-control" name="position[]" id="position" maxlength="75">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="frdate">From</label>
		    		<input type="date" class="form-control" name="frdate[]" id="frdate">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="todate">To</label>
		    		<input type="date" class="form-control" name="todate[]" id="todate">
		  			<button id="addwork" class="btn btn-danger" style="visibility: hidden;"><span class="glyphicon glyphicon-minus-sign"></span></button>
		  		</div>
	  		</div>  	
		</div> 		
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<button type="button" class="btn btn-success add-work">
	      			<span class="glyphicon glyphicon-plus"></span> Add
	    		</button>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-2 col-md-offset-2">
				<br/>
				<label for="reloc">Willing to relocate? *</label>
				<select class="form-control" name="reloc" id="reloc" required>
					<option selected value="" disabled>--</option>
			        <option>Yes</option>
			        <option>No</option>
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
						<input type="file" id="resume" name="resume" style="display: none" required/>	
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