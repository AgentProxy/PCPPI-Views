<?php $__env->startSection('content'); ?>
<?php if(count($errors)>0): ?>
<ul>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li class = "alert alert-danger"><?php echo e($error); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>

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
	<div id="forms-section" class="row">
		<div class="col-md-4 col-md-offset-2">
		<small class="text-danger"><strong>Fields with * are required</strong></small>		
		<h4 >PERSONAL INFORMATION</h4>
		</div>
	</div>
	<form id='i-recaptcha' method="POST" action="/form_validation/3" data-toggle="validator" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<input type="text" value="3" name="form_type" style="display: none;">
		<div class="row">
		  	<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="fname">First Name *</label>
	    		<input type="text" class="form-control" id="fname" name="fname" data-error="Please input your first name" required maxlength="75" value="<?php echo old('fname'); ?>">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-4">
	    		<label for="lname">Last Name *</label>
	    		<input type="text" class="form-control" id="lname" name="lname" data-error="Please input your last name" required maxlength="75">
	    		<div class="help-block with-errors" value="<?php echo old('lname'); ?>"></div>
	  		</div>
		</div>	
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="present"> Present Address *</label>
	    		<input type="text" class="form-control" id="present" name="present" data-error="Please input your present address" required maxlength="150" value="<?php echo old('present'); ?>">
	    		<div class="help-block with-errors"></div>
	  		</div>		
	  		<div class="form-group col-md-2">
	    		<label for="zip1">Zip Code</label>
	    		<input type="text" class="form-control" id="zip1" name="zip1" maxlength="6" value="<?php echo old('zip1'); ?>">
	  		</div>
		</div>	
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="prov"> Provincial Address *</label>
	    		<input type="text" class="form-control" id="prov" name="prov" data-error="Please input your provincial address" required maxlength="150" value="<?php echo old('prov'); ?>">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="zip2">Zip Code</label>
	    		<input type="text" class="form-control" id="zip2" name="zip2" maxlength="6" value="<?php echo old('zip2'); ?>">
	  		</div>
		</div>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="bday">Date of Birth *</label>
	    		<input type="date" class="form-control datepicker" id="bday" name="bday" data-error="Please input your birthdate" required value="<?php echo old('bday'); ?>">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="phone">Mobile Number *</label>
	    		<input type="text" class="form-control" id="phone" name="phone" pattern="0\d{10}" placeholder="0xxxxxxxxxx" data-match-error="Please input a valid phone number" data-error="Please input your mobile number" required value="<?php echo old('phone'); ?>">
	    		<div class="help-block with-errors"></div>
	    		<div class="help-block">Should have 11 digits</div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="email">Email Address *</label>
	    		<input type="email" class="form-control" id="email" name="email" data-error="Please input a valid email address" required maxlength="75" value="<?php echo old('email'); ?>">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>	
		<div id="forms-section" class="row">
			<h4 class="col-md-4 col-md-offset-2">INTERNSHIP DETAILS</h4>
		</div>
		<div class="row">
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school">School/College/University *</label>
	    		<input type="text" class="form-control" id="school" name="school" data-error="Please input this field" required maxlength="75" value="<?php echo old('school'); ?>">
    			<div class="help-block with-errors"></div>
	  		</div>
		</div>	
		<div class="row">
	  		<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="course">Undergraduate Course *</label>
	    		<input type="text" class="form-control" id="course" name="course" data-error="Please input this field" required maxlength="75" value="<?php echo old('course'); ?>">
    			<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
  				<label for="level">Year Level *</label>
  				<select class="form-control" id="level" name="level" required>
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
  				<select class="form-control" id="sem" name="sem" required>
  					<option value="" selected disabled>--</option>
			        <option>1st</option>
			        <option>2nd</option>
			     </select>
			     <div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
  				<label for="hrs">Hours Required *</label>
  				<select class="form-control" id="hrs" name="hrs" required>
  					<option value="" selected disabled>--</option>
  					<option>100-200</option> 
			        <option>200-300</option>
			        <option>300-400</option>
			        <option>500-above</option>
			     </select>
			     <div class="help-block with-errors"></div>
	  		</div>	
		</div>
		<div id="forms-section" class="row">
			<h4 class="col-md-4 col-md-offset-2">Attach Resume *</h4>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<label class="btn btn-primary btn-lg" id="upload"><span id="upload-text">Upload</span>
						<input type="file" id="resume" name="resume" style="display: none" required value="<?php echo old('resume'); ?>"/>	
				</label>
				<p> Uploaded File: <span id="uploaded-file"> </span></p>
				<div class="help-block with-errors" id="upload-error" style="color:red;"> Please upload your resume </div>
			</div>
		</div> 
		<div class="g-recaptcha col-md-offset-2" data-sitekey="<?php echo e(env('GOOGLE_RECAPTCHA_KEY')); ?>"></div>
		<button type="submit" id="Submit" class="btn btn-primary btn-lg center-block" style="margin-top: 5%; margin-bottom: 5%;">Submit Application</button>
	</form>
</div>
<script type="text/javascript">
	for (i = new Date().getFullYear(); i > 1900; i--){
		$('.year').append($('<option />').val(i).html(i));
	}  
</script>
<script>
	var submitted = false;
	//RETURN LATER IF AFTER DEBUGGING
	$(window).on('load',function(){
		document.getElementById('i-recaptcha').reset();
	});
	$('#i-recaptcha').submit(function() {
   		$(window).off('beforeunload');
   		submitted = true;
	});
	$(window).on('beforeunload', function() {
		if(!submitted){
    		return 'Changes you made may not be saved.';
    	}
	});	
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>