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
			<div class="form-group col-md-4 col-md-offset-2">
		    	<label for="fname">Position Applied:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['position_applied']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-6">
		    	<label for="lname">Desired Region:</label>
		    	<h4 class="col-md-offset-2"><?php echo e($data['desired_region']); ?></h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
		    	<label for="present">Present Address:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['present']); ?></h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
		    	<label for="prov">Provincial Address:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['prov']); ?></h4>
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
		    	<h4 class="col-md-offset-2"><?php echo e($data['from1']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="to1">To:</label>
		    	<h4 class="col-md-offset-2"><?php echo e($data['to1']); ?></h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-10 col-md-offset-2">
		    	<label for="school1">School/College/University:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['school1']); ?></h4>
		  	</div>
		</div>
		<?php if($data['gradcourse']&&$data['school2']!=null): ?>
		<div class="row">
		  	<div class="form-group col-md-4 col-md-offset-2">
		    	<label for="gradcourse">Graduate Degree:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['gradcourse']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="from2">From:</label>
		    	<h4 class="col-md-offset-2"><?php echo e($data['from2']); ?></h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="to2">To:</label>
		    	<h4 class="col-md-offset-2"><?php echo e($data['to2']); ?></h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-10 col-md-offset-2">
		    	<label for="school2">School/College/University:</label>
		    	<h4 class="col-md-offset-3"><?php echo e($data['school2']); ?></h4>
		  	</div>
		</div>
		<?php endif; ?>
		<div class="row">
		  	<div class="form-group col-md-10 col-md-offset-2">
		    	<label for="skills">Skills:</label>
		    	<?php $__empty_1 = true; $__currentLoopData = $data['skills']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		    	<h4 class="col-md-offset-1"><?php echo e($data['skills'][$i]); ?></h4>
		    	 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h4 class="col-md-offset-1">None</h4>
		    	<?php endif; ?>
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
			<?php $__currentLoopData = $data['company']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="form-group col-md-2 col-md-offset-2">
				<label for="company">Company Name:</label>
				<?php if($data['company'][$i]!=""): ?>
				<h4 class="col-md-offset-1"><?php echo e($data['company'][$i]); ?></h4>
				<?php else: ?>
				<h4 class="col-md-offset-1">None</h4>
				<?php endif; ?>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php $__currentLoopData = $data['position']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="form-group col-md-2">
				<label for="position">Position:</label>
				<?php if($data['position'][$i]!=""): ?>
				<h4 class="col-md-offset-1"><?php echo e($data['position'][$i]); ?></h4>
				<?php else: ?>
				<h4 class="col-md-offset-1">None</h4>
				<?php endif; ?>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php $__currentLoopData = $data['frdate']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $frdate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="form-group col-md-2">
				<label for="frdate">From:</label>
				<?php if($data['frdate'][$i]!=""): ?>
				<h4 class="col-md-offset-1"><?php echo e($data['frdate'][$i]); ?></h4>
				<?php else: ?>
				<h4 class="col-md-offset-1">None</h4>
				<?php endif; ?>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php $__currentLoopData = $data['todate']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $todate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="form-group col-md-2">
				<label for="todate">To:</label>
				<?php if($data['todate'][$i]!=""): ?>
				<h4 class="col-md-offset-1"><?php echo e($data['todate'][$i]); ?></h4>
				<?php else: ?>
				<h4 class="col-md-offset-1">None</h4>
				<?php endif; ?>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
		</div>
		<div class="row">
			<div class="form-group col-md-2">
				<label for="reloc">Willing to relocate?</label>
				<h4 class="col-md-offset-1">No</h4>
			</div>
		</div>
	</div>
</body>
</html>