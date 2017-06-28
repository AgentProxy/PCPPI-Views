<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row" id="btnpad">
		<div>
			<button type="button" class="btn btn-warning btn-lg">Back to Careers</button>
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
	<div class="row">
		<form>
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="fname">First Name</label>
	    		<input type="text" class="form-control" id="fname">
	  		</div>
	  		<div class="form-group col-md-4">
	    		<label for="lname">Last Name</label>
	    		<input type="text" class="form-control" id="lname">
	  		</div>
	  	</form>
	</div>	
	<div class="row">
		<form>
	  		<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="present"> Present Address</label>
	    		<input type="text" class="form-control" id="present">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="zip">Zip</label>
	    		<input type="text" class="form-control" id="zip">
	  		</div>
	  	</form>
	</div>	
	<div class="row">
		<form>
	  		<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="prov"> Provincial Address</label>
	    		<input type="text" class="form-control" id="prov">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="zip1">Zip</label>
	    		<input type="text" class="form-control" id="zip1">
	  		</div>
	  	</form>
	</div>
	<div class="row">
		<form>
			<div class="form-group col-md-2 col-md-offset-2">
	    		<label for="bday">Date of Birth</label>
	    		<input type="date" class="form-control" id="bday">
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="phone">Mobile Number</label>
	    		<input type="text" class="form-control" id="phone">
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="email">Email Address</label>
	    		<input type="email" class="form-control" id="email">
	  		</div>
	  	</form>
	</div>	
	<div class="row">
		<br><br><br><h4 class="col-md-4 col-md-offset-2">INTERNSHIP DETAILS</h4><br><br><br>
	</div>
	<div class="row">
		<form>
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school">School/College/University</label>
	    		<input type="text" class="form-control" id="school">
	  		</div>
	  	</form>
	</div>	
	<div class="row">
		<form>
	  		<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="course">Undergraduate Course</label>
	    		<input type="text" class="form-control" id="course">
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
			        <option>1</option>
			        <option>2</option>
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
	  	</form>  	
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
</div>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>