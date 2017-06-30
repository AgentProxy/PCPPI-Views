@extends('layouts.master')

@section('content')

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

	<form name="proform" id='i-recaptcha' method="GET" action="/careers-success" data-toggle="validator">

	<div class="row">
		<!--<form>-->
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
	  	<!--</form>-->
	</div>	
	<div class="row">
		<!-- <form > -->
	  		<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="present"> Present Address *</label>
	    		<input type="text" class="form-control" id="present" data-error="Please input your present address" required>
	    		<div class="help-block with-errors"></div>
	  		</div>		
	  		<div class="form-group col-md-2">
	    		<label for="zip">Zip</label>
	    		<input type="text" class="form-control" id="zip">
	  		</div>
	  	<!--</form>-->
	</div>	
	<div class="row">
		<!--<form>-->
	  		<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="prov"> Provincial Address *</label>
	    		<input type="text" class="form-control" id="prov" data-error="Please input your provincial address" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="zip1">Zip</label>
	    		<input type="text" class="form-control" id="zip1">
	  		</div>
	  	<!--</form>-->
	</div>	
	<div class="row">
		<!--<form>-->
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
	  	<!--</form>-->
	</div>
	<div class="row">
		<!--<form>-->
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="course">Bachelor's Degree *</label>
	    		<input type="text" class="form-control" id="course" data-error="Please input your bachelor's degree" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="from1"><small> From (School Year) * </small></label>
	    		<!-- <input type="date" class="form-control" id="from1" data-error="Please input this field" > -->
	    		<select class="form-control year" id="from1" ">
	    			<option selected disabled>--</option>
	    		</select>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="to1"><small> To (School Year) * </small></label>
	    		<!-- <input type="date" class="form-control" id="to1" data-error="Please input this field" > -->
	    		<select class="form-control year" id="from1" >
	    			<option selected disabled>--</option>
	    		</select>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  	<!--</form>-->		
	</div>
	<div class="row">
		<!--<form>-->
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school1">School/College/University *</label>
	    		<input type="text" class="form-control" id="school1" data-error="Please input this field" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  	<!--</form>-->
	</div>
	<div class="row">
		<!--<form>-->
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="gradcourse">Graduate Course</label>
	    		<input type="text" class="form-control" id="gradcourse">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="from2"><small> From (School Year) </small></label>
	    		<!-- <input type="date" class="form-control" id="from2"> -->
	    		<select class="form-control year" id="from1" ="">
	    			<option selected disabled>--</option>
	    		</select>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="to2"><small> To (School Year) </small></label>
	    		<!-- <input type="date" class="form-control" id="to2"> -->
	    		<select class="form-control year" id="from1" ="">
	    			<option selected disabled>--</option>
	    		</select>
	  		</div>
	  	<!--</form>-->  	
	</div>	
	<div class="row">
		<!--<form>-->
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school2">School/College/University</label>
	    		<input type="text" class="form-control" id="school2">
	  		</div>
	  	<!--</form>-->
	</div>
	<div class="row col-md-offset-2">
		<!--<form>-->
			<label for="phone">Skills</label>
			<div id="skill-0" class="checkbox skills" style="display: none">
		    	<button class="btn btn-danger btn-circle-xs delete-skill" ><span class="glyphicon glyphicon-minus"></span></button> 
		    	<label id="skill-label" style="padding-left: 0%;">Programming</label>
		    </div>
			<div id="skill-1" class="checkbox skills">
  				<label><input type="checkbox" value="">Advanced Excel</label>
		    </div>
		    <div id="skill-2" class="checkbox skills">
		      <label><input type="checkbox" value="">Photoshop</label>
		    </div>
		    <div id="skill-3" class="checkbox skills">
		      <label><input type="checkbox" value="">Programming</label>
		    </div>
		    <div class="row">
			    <input type="text" id="skill" placeholder="Other Skills">
			    <button type="button" id="add-skill" class="btn btn-success add-skill">
	      			<span class="glyphicon glyphicon-plus add-skill"></span> Add Skill
	    		</button>
    		</div>
		<!--</form>-->
	</div>
	<div class="row">
		<!--<form>-->
			<!-- <div class="form-group col-md-3 col-md-offset-2">
				<label for="dept"><br>Preferred Department *</label>
				<select class="form-control" id="dept" >
					<option selected disabled>Select a Department</option>
			        <option>Department 1</option>
			        <option>Department 2</option>
			        <option>Department 3</option>
			        <option>Department 4</option>
			        <option>Department 5</option>
			    </select>
			</div>
			<div class="form-group col-md-3">
				<label for="loc"><br>Preferred Location *</label>
				<select class="form-control" id="loc">
				<option selected disabled>Select Preferred Location</option>
			        <option>Region 1</option>
			        <option>Region 2</option>
			        <option>Region 3</option>
			        <option>Region 4</option>
			        <option>Region 5</option>
			    </select>
			</div> -->
			<div class="form-group col-md-2 col-md-offset-2">
				<br/>
				<label for="reloc">Willing to relocate? *</label>
				<select class="form-control" id="reloc">
				<option selected disabled>--</option>
			        <option>Yes</option>
			        <option>No</option>
			    </select>
			</div>
		<!--</form>-->
	</div>
	<div class="row">
		<br><br><h4 class="col-md-4 col-md-offset-2">CHARACTER REFERENCES</h4><br><br><br>
	</div>
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-2">
    		<label for="name1">Name *</label>
    		<input type="text" class="form-control" id="name1" placeholder="e.g. Julia Baretto" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-2">
    		<label for="num1">Contact Number *</label>
    		<input type="text" class="form-control" id="num1" placeholder="e.g. 09123456789" pattern="0\d{10}" data-error="Please input a valid mobile number" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-3">
    		<label for="rel1">Relationship *</label>
    		<input type="text" class="form-control" id="rel1" placeholder="e.g. College Teacher" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-2">
    		<input type="text" class="form-control" id="name2" placeholder="e.g. Julia Baretto" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-2">
    		<input type="text" class="form-control" id="num2" placeholder="e.g. 09123456789" pattern="0\d{10}" data-error="Please input a valid mobile number" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-3">
    		<input type="text" class="form-control" id="rel2" placeholder="e.g. College Teacher" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-2">
    		<input type="text" class="form-control" id="name3" placeholder="e.g. Julia Baretto" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-2">
    		<input type="text" class="form-control" id="num3" placeholder="e.g. 09123456789" pattern="0\d{10}" data-error="Please input a valid mobile number" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-3">
    		<input type="text" class="form-control" id="rel3" placeholder="e.g. College Teacher" data-error="Please input your last name" required>
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
	    		<input type="text" class="form-control" id="company">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="position">Position/Title</label>
	    		<input type="text" class="form-control" id="position">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="frdate">From</label>
	    		<input type="date" class="form-control" id="frdate">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="todate">To</label>
	    		<input type="date" class="form-control" id="todate">
	    		<button class="btn btn-danger delete-work" style="position: relative; left: 180px; bottom: 35px;"><span class="glyphicon glyphicon-minus-sign"></span></button>
	  		</div>
	  	</div>
	  	<!-- End of Work History Template-->
	  	<div class="work-history" id="work-history-1" style="display:block;">
	  		<div class="form-group col-md-2 col-md-offset-2">
	    		<label for="company">Company Name</label>
	    		<input type="text" class="form-control" id="company">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="position">Position/Title</label>
	    		<input type="text" class="form-control" id="position">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="frdate">From</label>
	    		<input type="date" class="form-control" id="frdate">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="todate">To</label>
	    		<input type="date" class="form-control" id="todate">
	  		</div>
	  		<div class="row">
	  			<button id="addwork" class="btn btn-danger" style="visibility: hidden;"><span class="glyphicon glyphicon-minus-sign"></span></button>
	  		</div>
	  	</div>
	  	<!--</form>-->  	
	</div>

	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<button type="button" class="btn btn-success add-work">
      			<span class="glyphicon glyphicon-plus"></span> Add
    		</button>
		</div>
	</div>
	<div class="row">
		<div>
			<br><br><br><h4 class="col-md-4 col-md-offset-2">Upload Resume *</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">

			<label class="btn btn-primary btn-lg" id="upload"><span id="upload-text">Upload</span>
					<input type="file" id="resume" style="display: none" />	
			</label>
			<p> Uploaded File: <span id="uploaded-file"> </span></p>
			<div class="help-block with-errors" id="upload-error" style="color:red;"></div>
		</div>
	</div>
	<div class="row">

		<div id="pad">
			<!-- <button
			class="g-recaptcha btn-success btn btn-lg center-block"
			data-sitekey="6LfrTCcUAAAAABrv6s-uJ15k5p7q_zPVv_wPT_HA"
			data-callback="validate">
			Submit Application
			</button> -->
			<!-- <input type="submit" class="g-recaptcha btn-success btn btn-lg center-block"
			data-sitekey="6LfrTCcUAAAAABrv6s-uJ15k5p7q_zPVv_wPT_HA"
			data-callback="validate" value="Submit Application">
			-->
			<input id="submit_handle" type="submit" style="display: none"> 
		</div>
	</div>

	</form>
	<button class="g-recaptcha btn-success btn btn-lg center-block"
	data-sitekey="6LfrTCcUAAAAABrv6s-uJ15k5p7q_zPVv_wPT_HA"
	data-callback="validate"> Submit Application </button>
</div>

<script type="text/javascript">
	for (i = new Date().getFullYear(); i > 1900; i--){
		$('.year').append($('<option />').val(i).html(i));
	}  
</script>

@endsection