<h3> NEW APPLICANT </h3>

<div class="container" id="form">
	<div class="row">
		<br>
		<h2 id="titlepad">APPLICATION</h2>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
		<h4 >PERSONAL INFORMATION</h4>
		<br><br><br>
		</div>
	</div>
	<div class="col-6">
		<label for="fname">First Name: <?php echo e($data['fname']); ?></label>
	</div>
	<div class="fcol-6">
		<label for="lname">Last Name: <?php echo e($data['lname']); ?></label>
		
	</div>
	<div class="row">
	  	<div class="form-group col-6">
	    	<label for="email">Email Address: <?php echo e($data['email']); ?></label>
	    	
	  	</div>
	</div>
</div>