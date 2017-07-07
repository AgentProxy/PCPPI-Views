<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		  	<div class="form-group col-md-4 col-md-offset-2">
		    	<label for="course">Bachelor's Degree:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['course']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="from1">From:</label>
		    	<h4 class="col-md-offset-2">2010</h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="to1">To:</label>
		    	<h4 class="col-md-offset-2">2014</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-10 col-md-offset-2">
		    	<label for="school1">School/College/University:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['school1']); ?></h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-4 col-md-offset-2">
		    	<label for="gradcourse">Graduate Degree:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['gradcourse']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="from2">From:</label>
		    	<h4 class="col-md-offset-2">2014</h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="to2">To:</label>
		    	<h4 class="col-md-offset-2">2018</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-10 col-md-offset-2">
		    	<label for="school2">School/College/University:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['school2']); ?></h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-10 col-md-offset-2">
		    	<label for="skills">Skills:</label>
		    	<h4 class="col-md-offset-1">Photoshop</h4>
		    	<h4 class="col-md-offset-1">Programming</h4>
		  	</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<h4><u>CHARACTER REFERENCES</u></h4>
			</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-4 col-md-offset-2">
		    	<label for="name1">Name:</label>
		    	<h4 class="col-md-offset-1"><?php echo e($data['name1']); ?></h4>
		    	<h4 class="col-md-offset-1"><?php echo e($data['name2']); ?></h4>
		    	<h4 class="col-md-offset-1"><?php echo e($data['name3']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="num1">Contact Number:</label>
		    	<h4 class="col-md-offset-1"><?php echo e($data['num1']); ?></h4>
		    	<h4 class="col-md-offset-1"><?php echo e($data['num2']); ?></h4>
		    	<h4 class="col-md-offset-1"><?php echo e($data['num3']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-4">
		    	<label for="rel1">Relationship:</label>
		    	<h4 class="col-md-offset-1"><?php echo e($data['rel1']); ?></h4>
		    	<h4 class="col-md-offset-1"><?php echo e($data['rel2']); ?></h4>
		    	<h4 class="col-md-offset-1"><?php echo e($data['rel3']); ?></h4>
		  	</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<h4><u>WORK HISTORY</u></h4>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-2 col-md-offset-2">
				<label for="company">Company Name:</label>
				<h4 class="col-md-offset-1">Alaska</h4>
			</div>
			<div class="form-group col-md-2">
				<label for="position">Position:</label>
				<h4 class="col-md-offset-1">Project Manager</h4>
			</div>
			<div class="form-group col-md-2">
				<label for="frdate">From:</label>
				<h4 class="col-md-offset-1">07/15/2015</h4>
			</div>
			<div class="form-group col-md-2">
				<label for="todate">To:</label>
				<h4 class="col-md-offset-1">07/15/2017</h4>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
				<label for="dept">Preferred Department:</label>
				<h4 class="col-md-offset-1">Department 4</h4>
			</div>
			<div class="form-group col-md-3">
				<label for="loc">Preferred Location:</label>
				<h4 class="col-md-offset-1">Region 1</h4>
			</div>
			<div class="form-group col-md-2">
				<label for="reloc">Willing to relocate?</label>
				<h4 class="col-md-offset-1">No</h4>
			</div>
		</div>
	</div>
</body>
</html>