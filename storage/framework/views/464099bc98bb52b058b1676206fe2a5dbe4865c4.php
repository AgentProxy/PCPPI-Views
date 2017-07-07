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
		    	<h4 class="col-md-offset-2">Baretto</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
		    	<label for="present">Present Address:</label>
		    	<h4 class="col-md-offset-3">Tunasan, Muntinlupa</h4>
		  	</div>
		  	<div class="form-group col-md-4">
		    	<label for="zip">Zip:</label>
		    	<h4 class="col-md-offset-2">4405</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
		    	<label for="prov">Provincial Address:</label>
		    	<h4 class="col-md-offset-3">Los Baños, Laguna</h4>
		  	</div>
		  	<div class="form-group col-md-4">
		    	<label for="zip1">Zip:</label>
		    	<h4 class="col-md-offset-2">4444</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-3 col-md-offset-2">
		    	<label for="bday">Date of Birth:</label>
		    	<h4 class="col-md-offset-3">07/29/1998</h4>
		  	</div>
		  	<div class="form-group col-md-3">
		    	<label for="phone">Mobile Number:</label>
		    	<h4 class="col-md-offset-2">09121231234</h4>
		  	</div>
		  	<div class="form-group col-md-4">
		    	<label for="email">Email Address:</label>
		    	<h4 class="col-md-offset-2">juliab@pepsi.com</h4>
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
		    	<h4 class="col-md-offset-3">University of the Philippines Visayas</h4>
		  	</div>
		</div>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
				<label for="course">Undergraduate Course:</label>
				<h4 class="col-md-offset-1">BS Computer Science</h4>
			</div>
			<div class="form-group col-md-2">
				<label for="level">Year Level:</label>
				<h4 class="col-md-offset-1">Fourth Year</h4>
			</div>
			<div class="form-group col-md-1">
				<label for="sem">Sem:</label>
				<h4 class="col-md-offset-1">1st</h4>
			</div>
			<div class="form-group col-md-2">
				<label for="hrs">Hours Required:</label>
				<h4 class="col-md-offset-1">200-300</h4>
			</div>
		</div>
	</div>
</body>
</html>