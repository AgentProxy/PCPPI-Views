<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row" id="btnpad">
		<div>
			<a href="careers-home" class="btn btn-warning btn-lg" role="button">Back to Careers</a>
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
		<h4 class="col-md-4 col-md-offset-2">PERSONAL INFORMATION</h4><br><br><br>
	</div>

	<form id="proform" method="GET" action="" data-toggle="validator">
		<div class="row">
			<!-- <form> -->
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
		  	<!-- </form> -->
		</div>	
		<div class="row">
			<!-- <form> -->
		  	<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="present"> Present Address *</label>
	    		<input type="text" class="form-control" id="present" data-error="Please input your present address" required>
	    		<div class="help-block with-errors"></div>
	  		</div>		
	  		<div class="form-group col-md-2">
	    		<label for="zip">Zip</label>
	    		<input type="text" class="form-control" id="zip">
	  		</div>
		  	<!-- </form> -->
		</div>	
		<div class="row">
			<!-- <form> -->
		  	<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="prov"> Provincial Address *</label>
	    		<input type="text" class="form-control" id="prov" data-error="Please input your provincial address" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="zip1">Zip</label>
	    		<input type="text" class="form-control" id="zip1">
	  		</div>
		  	<!-- </form> -->
		</div>
		<div class="row">
			<!-- <form> -->
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
		  	<!-- </form> -->
		</div>	
		<div class="row">
			<br><br><br><h4 class="col-md-4 col-md-offset-2">INTERNSHIP DETAILS</h4><br><br><br>
		</div>
		<div class="row">
			<!-- <form> -->
		  		<div class="form-group col-md-8 col-md-offset-2">
		    		<label for="school">School/College/University</label>
		    		<input type="text" class="form-control" id="school" data-error="Please input this field" required>
	    			<div class="help-block with-errors"></div>
		  		</div>
		  	<!-- </form> -->
		</div>	
		<div class="row">
			<!-- <form> -->
		  		<div class="form-group col-md-3 col-md-offset-2">
		    		<label for="course">Undergraduate Course</label>
		    		<input type="text" class="form-control" id="course" data-error="Please input this field" required>
	    			<div class="help-block with-errors"></div>
		  		</div>
		  		<div class="form-group col-md-2">
	  				<label for="level">Year Level</label>
	  				<select class="form-control" id="level">
				        <option>First Year</option>
				        <option>Second Year</option>
				        <option>Third Year</option>
				        <option>Fourth Year</option>
				        <option>Fifth Year</option>
				    </select>
		  		</div>
		  		<div class="form-group col-md-1">
	  				<label for="sem">Semester</label>
	  				<select class="form-control" id="sem">
				        <option>1st</option>
				        <option>2nd</option>
				     </select>
		  		</div>
		  		<div class="form-group col-md-2">
	  				<label for="hrs">Hours Required</label>
	  				<select class="form-control" id="hrs">
	  					<option>100-200</option>
				        <option>200-300</option>
				        <option>300-400</option>
				        <option>500-above</option>
				     </select>
		  		</div>
		  	<!-- </form> -->  	
		</div>
		<div class="row">
			<div>
				<br><br><br><h4 class="col-md-4 col-md-offset-2">Upload Resume</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<button type="button" class="btn btn-primary btn-lg">Upload</button>
			</div>
		</div>
		<div class="row">
			<div id="pad">
				<button type="button" class="btn btn-success btn-lg center-block">Submit Application</button>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	for (i = new Date().getFullYear(); i > 1900; i--){
		$('.year').append($('<option />').val(i).html(i));
	}  
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>