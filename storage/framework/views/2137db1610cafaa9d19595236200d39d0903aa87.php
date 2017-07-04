<script type="text/javascript">
	$(window).on('beforeunload', function() {
    return 'Your own message goes here...';
});
</script>

<?php $__env->startSection('content'); ?>
<div class="container" id="form">
	<div class="row" id="btnpad">
		<div>
			<a href="careers-search" class="btn btn-success btn-lg"  role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to Careers</a>
		</div>
	</div>
	<div class="row">
		<h1 id="title">POSITION</h1>
		<h4 id="title">Location</h4>
	</div>
	<div class="row">
		<h3>Main Responsibility</h3>
		<ul>
  			<li>Responsibility 1</li>
  			<li>Responsibility 2</li>
  			<li>Responsibility 3</li>
		</ul>
	</div>
	<div class="row">
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
	<form id='i-recaptcha' method="POST" action="/form_validation/2" data-toggle="validator">
	<?php echo e(csrf_field()); ?>

	<div class="row">
  		<div class="form-group col-md-4 col-md-offset-2">
    		<label for="fname">First Name *</label>
    		<input type="text" class="form-control" id="fname" name="fname" data-error="Please input your first name" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-4">
    		<label for="lname">Last Name *</label>
    		<input type="text" class="form-control" id="lname" name="lname" data-error="Please input your last name" required>
    		<div class="help-block with-errors"></div>
  		</div>
	</div>	
	<div class="row">
  		<div class="form-group col-md-6 col-md-offset-2">
    		<label for="present"> Present Address *</label>
    		<input type="text" class="form-control" id="present" name="present" data-error="Please input your present address" required>
    		<div class="help-block with-errors"></div>
  		</div>		
  		<div class="form-group col-md-2">
    		<label for="zip">Zip</label>
    		<input type="text" class="form-control" id="zip" name="zip">
  		</div>
	</div>	
	<div class="row">
  		<div class="form-group col-md-6 col-md-offset-2">
    		<label for="prov"> Provincial Address *</label>
    		<input type="text" class="form-control" id="prov" name="prov" data-error="Please input your provincial address" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-2">
    		<label for="zip1">Zip</label>
    		<input type="text" class="form-control" id="zip1" name="zip1">
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
    		<input type="text" class="form-control" id="phone" name="phone" pattern="0\d{10}" placeholder="0xxxxxxxxxx" data-error="Please input your mobile number" required>
    		<div class="help-block with-errors"></div>
    		<div class="help-block">Should have 11 digits</div>
  		</div>
  		<div class="form-group col-md-3">
    		<label for="email">Email Address *</label>
    		<input type="email" class="form-control" id="email" name="email" data-error="Please input a valid email address" required>
    		<div class="help-block with-errors"></div>
  		</div>
	</div>
	<div class="row">
  		<div class="form-group col-md-4 col-md-offset-2">
    		<label for="course">Bachelor's Degree *</label>
    		<input type="text" class="form-control" id="course" name="course" data-error="Please input your bachelor's degree" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-2">
    		<label for="from1"><small> From (School Year) * </small></label>
    		<select class="form-control year" id="from1" name="from1" required">
    			<option selected disabled value="">--</option>
    		</select>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-2">
    		<label for="to1"><small> To (School Year) * </small></label>
    		<select class="form-control year" id="to1" name="to1" required>
    			<option selected disabled value="">--</option>
    		</select>
    		<div class="help-block with-errors"></div>
  		</div>		
	</div>
	<div class="row">
  		<div class="form-group col-md-8 col-md-offset-2">
    		<label for="school1">School/College/University *</label>
    		<input type="text" class="form-control" id="school1" name="school1" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
	</div>
	<div class="row">
  		<div class="form-group col-md-4 col-md-offset-2">
    		<label for="gradcourse">Graduate Course</label>
    		<input type="text" class="form-control" id="gradcourse" name="gradcourse">
  		</div>
  		<div class="form-group col-md-2">
    		<label for="from2"><small> From (School Year) </small></label>
    		<select class="form-control year" id="from2" name="from2">
    			<option selected disabled>--</option>
    		</select>
  		</div>
  		<div class="form-group col-md-2">
    		<label for="to2"><small> To (School Year) </small></label>
    		<select class="form-control year" id="to2" name="to2">
    			<option selected disabled>--</option>
    		</select>
  		</div>	
	</div>	
	<div class="row">
  		<div class="form-group col-md-8 col-md-offset-2">
    		<label for="school2">School/College/University</label>
    		<input type="text" class="form-control" id="school2" name="school2">
  		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<label for="skills">&nbsp&nbsp&nbsp Skills</label>
			<div id="skill-0" class="checkbox skills" style="display: none">
		    	<button class="btn btn-danger btn-circle-xs delete-skill" ><span class="glyphicon glyphicon-minus"></span></button> 
		    	<label id="skill-label" style="padding-left: 0%;">Programming</label>
		    </div>
		    <div class="col-md-offset-1">
				<div id="skill-1" class="checkbox skills">
	  				<label><input type="checkbox" value="Advanced Excel">Advanced Excel</label>
			    </div>
			    <div id="skill-2" class="checkbox skills">
			      <label><input type="checkbox" value="Photoshop">Photoshop</label>
			    </div>
			    <div id="skill-3" class="checkbox skills">
			      <label><input type="checkbox" value="Programming">Programming</label>
			    </div>
			    <div class="row" id="addskill">
				    <input type="text" id="skill" name="skill" placeholder="Other Skills">
				    <button type="button" id="add-skill" class="btn btn-success add-skill">
		      			<span class="glyphicon glyphicon-plus add-skill"></span> Add Skill
		    		</button>
	    		</div>
	    	</div>
	    </div>
	</div>
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-2">
			<label for="dept"><br>Preferred Department *</label>
			<select class="form-control" id="dept" name="dept" required>
				<option selected disabled value="">--</option>
		        <option>Department 1</option>
		        <option>Department 2</option>
		        <option>Department 3</option>
		        <option>Department 4</option>
		        <option>Department 5</option>
		    </select>
		</div>
		<div class="form-group col-md-3">
			<label for="loc"><br>Preferred Location *</label>
			<select class="form-control" id="loc" name="loc">
			<option selected disabled value="">--</option>
		        <option>Region 1</option>
		        <option>Region 2</option>
		        <option>Region 3</option>
		        <option>Region 4</option>
		        <option>Region 5</option>
		    </select>
		</div>
		<div class="form-group col-md-2">
			<br/>
			<label for="reloc">Willing to relocate? *</label>
			<select class="form-control" id="reloc" name="reloc">
			<option selected disabled value="">--</option>
		        <option>Yes</option>
		        <option>No</option>
		    </select>
		</div>
	</div>
	<div class="row">
		<br><br><h4 class="col-md-4 col-md-offset-2">CHARACTER REFERENCES</h4><br><br><br>
	</div>
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-2">
    		<label for="name1">Name *</label>
    		<input type="text" class="form-control" id="name1" name="name1" placeholder="e.g. Julia Baretto" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-2">
    		<label for="num1">Contact Number *</label>
    		<input type="text" class="form-control" id="num1" name="num1" placeholder="e.g. 09123456789" pattern="0\d{10}" data-error="Please input a valid mobile number" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-3">
    		<label for="rel1">Relationship *</label>
    		<input type="text" class="form-control" id="rel1" name="rel1" placeholder="e.g. College Teacher" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-2">
    		<label for="name2" id="relation">Name *</label>
    		<input type="text" class="form-control" id="name2" name="name2" placeholder="e.g. Julia Baretto" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-2">
    		<label for="num2" id="relation">Contact Number *</label>
    		<input type="text" class="form-control" id="num2" name="num2" placeholder="e.g. 09123456789" pattern="0\d{10}" data-error="Please input a valid mobile number" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-3">
    		<label for="rel2" id="relation">Relationship *</label>
    		<input type="text" class="form-control" id="rel2" name="rel2" placeholder="e.g. College Teacher" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-2">
    		<label for="name3" id="relation">Name *</label>
    		<input type="text" class="form-control" id="name3" name="name3" placeholder="e.g. Julia Baretto" data-error="Please input this field" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-2">
    		<label for="num3" id="relation">Contact Number *</label>
    		<input type="text" class="form-control" id="num3" name="num3" placeholder="e.g. 09123456789" pattern="0\d{10}" data-error="Please input a valid mobile number" required>
    		<div class="help-block with-errors"></div>
  		</div>
  		<div class="form-group col-md-3">
    		<label for="rel3" id="relation">Relationship *</label>
    		<input type="text" class="form-control" id="rel3" name="rel3" placeholder="e.g. College Teacher" data-error="Please input your last name" required>
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
	    		<label for="company1">Company Name</label>
	    		<input type="text" class="form-control" id="company1" name="company1">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="position1">Position/Title</label>
	    		<input type="text" class="form-control" id="position1" name="position1">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="frdate1">From</label>
	    		<input type="date" class="form-control" id="frdate1" name="frdate1">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="todate1">To</label>
	    		<input type="date" class="form-control" id="todate1" name="todate1">
	    		<button id="addwork" class="btn btn-danger delete-work" style="position: relative; left: 180px; bottom: 35px;"><span class="glyphicon glyphicon-minus-sign"></span></button>
	  		</div>
	  	</div>
	  	<!-- End of Work History Template-->
	  	<div class="work-history" id="work-history-1" style="display:block;">
	  		<div class="form-group col-md-2 col-md-offset-2">
	    		<label for="company2">Company Name</label>
	    		<input type="text" class="form-control" id="company2" name="company2">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="position2">Position/Title</label>
	    		<input type="text" class="form-control" id="position2" name="position2">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="frdate2">From</label>
	    		<input type="date" class="form-control" id="frdate2" name="frdate2">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="todate2">To</label>
	    		<input type="date" class="form-control" id="todate2" name="todate2">
	  		</div>
	  		<div class="row">
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
		<div>
			<br><br><br><h4 class="col-md-4 col-md-offset-2">Attach Resume *</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">

			<label class="btn btn-primary btn-lg" id="upload"><span id="upload-text">Upload</span>
					<input type="file" id="resume" style="display: none" />	
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>