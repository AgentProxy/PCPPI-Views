<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row" id="padtop">
		 <img class="center-block" src="/img/pepsi.png" width="10%">
	</div>
	<div class="row">
		<h1 id="title">ERROR!</h1>
		<h4 id="title">An error has occured!</h4>
		<h4 id="title">The page or vacancy you were looking for could not be found. It might not exist or was deleted recently.</h4><br><br>
	</div>
	<div id="sxspad" class="row">
		<div class="col-md-3 col-md-offset-3">
			<a id="pad" href="careers-map" class="btn btn-primary btn-lg center-block" role="button">Back to Vacancies Map</a>
		</div>
		<div id="sk"></div>
		<div id="sxspad" class="col-md-3 col-md-3-offset">
			<a id="pad" href="careers-home" class="btn btn-primary btn-lg center-block" role="button">Back to Careers Home</a>
		</div>
		<div id="sk"></div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>