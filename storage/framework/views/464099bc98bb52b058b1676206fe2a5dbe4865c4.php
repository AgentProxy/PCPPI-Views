<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		label{
			color: blue; 
		}

		h2{
			text-align: center;
		}

		.row{
			margin-bottom: 20px;
		}
	</style>
</head>
<body>	
	<div class="container" id="form">
		<div class="row">
			<br>
			<h2 id="titlepad">APPLICATION</h2>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<h4><u>PERSONAL INFORMATION</u></h4>
			</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-4 col-md-offset-2">
		    	<label for="fname">First Name:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['fname']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-6">
		    	<label for="lname">Last Name:</label>
		    	<h4 class="col-md-offset-2"><?php echo e($data['lname']); ?></h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
		    	<label for="present">Present Address:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['present']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-4">
		    	<label for="zip1">Zip:</label>
		    	<h4 class="col-md-offset-2"><?php echo e($data['zip1']); ?></h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
		    	<label for="prov">Provincial Address:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['prov']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-4">
		    	<label for="zip2">Zip:</label>
		    	<h4 class="col-md-offset-2"><?php echo e($data['zip2']); ?></h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-3 col-md-offset-2">
		    	<label for="bday">Date of Birth:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['bday']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-3">
		    	<label for="phone">Mobile Number:</label>
		    	<h4 class="col-md-offset-2"><?php echo e($data['phone']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-4">
		    	<label for="email">Email Address:</label>
		    	<h4 class="col-md-offset-2"><?php echo e($data['email']); ?></h4>
		  	</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<h4><u>INTERNSHIP DETAILS</u></h4>
			</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-10 col-md-offset-2">
		    	<label for="school">School/College/University:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['school']); ?></h4>
		  	</div>
		</div>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
				<label for="course">Undergraduate Course:</label>
				<h4 class="col-md-offset-1"><?php echo e($data['course']); ?></h4>
			</div>
			<div class="form-group col-md-2">
				<label for="level">Year Level:</label>
				<h4 class="col-md-offset-1"><?php echo e($data['level']); ?></h4>
			</div>
			<div class="form-group col-md-1">
				<label for="sem">Sem:</label>
				<h4 class="col-md-offset-1"><?php echo e($data['sem']); ?></h4>
			</div>
			<div class="form-group col-md-2">
				<label for="hrs">Hours Required:</label>
				<h4 class="col-md-offset-1"><?php echo e($data['hrs']); ?></h4>
			</div>
		</div>
	</div>
</body>
</html>