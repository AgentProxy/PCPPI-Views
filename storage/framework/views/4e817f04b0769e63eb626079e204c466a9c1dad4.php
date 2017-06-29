<?php $__env->startSection('content'); ?>
<div class="container" id="form">
	<div class="row" id="btnpad">
		<div>
			<a href="careers-home" class="btn btn-warning btn-lg" role="button">Back to Careers</a>
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
		<h4 class="col-md-4 col-md-offset-2">PERSONAL INFORMATION</h4><br><br><br>
	</div>
	<form id="proform" method="GET" action="" data-toggle="validator">

	<div class="row">
		<!--<form>-->
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="fname">First Name</label>
	    		<input type="text" class="form-control" id="fname" data-error="Please input your first name" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-4">
	    		<label for="lname">Last Name</label>
	    		<input type="text" class="form-control" id="lname" data-error="Please input your last name" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  	<!--</form>-->
	</div>	
	<div class="row">
		<!-- <form > -->
	  		<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="present"> Present Address</label>
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
	    		<label for="prov"> Provincial Address</label>
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
	    		<label for="bday">Date of Birth</label>
	    		<input type="date" class="form-control" id="bday" data-error="Please input your birthdate" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="phone">Mobile Number</label>
	    		<input type="text" class="form-control" id="phone" pattern="0\d{10}" placeholder="0xxxxxxxxxx" data-error="Please input your mobile number" required>
	    		<div class="help-block with-errors"></div>
	    		<div class="help-block">Should have 11 digits</div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="email">Email Address</label>
	    		<input type="email" class="form-control" id="email" data-error="Please input a valid email address" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  	<!--</form>-->
	</div>
	<div class="row">
		<!--<form>-->
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="course">Bachelor's Degree</label>
	    		<input type="text" class="form-control" id="course" data-error="Please input your bachelor's degree" required>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="from1">From (School Year)</label>
	    		<!-- <input type="date" class="form-control" id="from1" data-error="Please input this field" required> -->
	    		<select class="form-control year" id="from1" required="">
	    			<option selected disabled>--</option>
	    		</select>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="to1">To (School Year)</label>
	    		<!-- <input type="date" class="form-control" id="to1" data-error="Please input this field" required> -->
	    		<select class="form-control year" id="from1" required="">
	    			<option selected disabled>--</option>
	    		</select>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  	<!--</form>-->		
	</div>
	<div class="row">
		<!--<form>-->
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school1">School/College/University</label>
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
	    		<label for="from2">From (School Year)</label>
	    		<!-- <input type="date" class="form-control" id="from2"> -->
	    		<select class="form-control year" id="from1" required="">
	    			<option selected disabled>--</option>
	    		</select>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="to2">To (School Year)</label>
	    		<!-- <input type="date" class="form-control" id="to2"> -->
	    		<select class="form-control year" id="from1" required="">
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
			<div class="checkbox">
  				<label><input type="checkbox" value="">Advanced Excel</label>
		    </div>
		    <div class="checkbox">
		      <label><input type="checkbox" value="">Photoshop</label>
		    </div>
		    <div class="checkbox">
		      <label><input type="checkbox" value="">Programming</label>
		    </div>
		<!--</form>-->
	</div>
	<div class="row">
		<!--<form>-->
			<div class="form-group col-md-3 col-md-offset-2">
				<label for="dept"><br>Preferred Department</label>
				<select class="form-control" id="dept" required>
					<option selected disabled>Select a Department</option>
			        <option>Department 1</option>
			        <option>Department 2</option>
			        <option>Department 3</option>
			        <option>Department 4</option>
			        <option>Department 5</option>
			    </select>
			</div>
			<div class="form-group col-md-3">
				<label for="loc"><br>Preferred Location</label>
				<select class="form-control" id="loc">
				<option selected disabled>Select Preferred Location</option>
			        <option>Region 1</option>
			        <option>Region 2</option>
			        <option>Region 3</option>
			        <option>Region 4</option>
			        <option>Region 5</option>
			    </select>
			</div>
			<div class="form-group col-md-2">
				<label for="reloc"><br>Willing to relocate?</label>
				<select class="form-control" id="reloc">
				<option selected disabled>--</option>
			        <option>Yes</option>
			        <option>No</option>
			    </select>
			</div>
		<!--</form>-->
	</div>
	<div class="container">
	<div class="row">
		<br><br><h4 class="col-md-4 col-md-offset-2">CHARACTER REFERENCES</h4><br><br><br>
	</div>
	<div id="references" class="row table-editable">
	    <table class="table table-bordered">
	      <tr>
	        <th id="title" width="23%">Name</th>
	        <th id="title" width="13%">Contact Number</th>
	        <th id="title" width="23%">Relationship</th>
	      </tr>
	      <tr>
	        <td contenteditable="true"></td>
	        <td contenteditable="true"></td>
	        <td contenteditable="true"></td>
	      </tr>
	      <tr>
	        <td contenteditable="true"></td>
	        <td contenteditable="true"></td>
	        <td contenteditable="true"></td>
	      </tr>
	      <tr>
	        <td contenteditable="true"></td>
	        <td contenteditable="true"></td>
	        <td contenteditable="true"></td>
	      </tr>
	    </table>
	  </div>
	  </div>
	<div class="row">
		<br><br><h4 class="col-md-4 col-md-offset-2">WORK HISTORY</h4><br><br><br>
	</div>
	<div class="row">
		<!--<form>-->
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
	  	<!--</form>-->  	
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			 <button type="button" class="btn btn-warning">
      			<span class="glyphicon glyphicon-plus"></span> Add
    		</button>
		</div>
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
			<input type="submit" class="btn btn-success btn-lg center-block" value="Submit Application">
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