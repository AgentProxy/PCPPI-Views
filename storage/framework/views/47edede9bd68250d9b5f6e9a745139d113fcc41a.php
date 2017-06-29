<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row" id="padtop">
		 <img class="center-block" src="/img/check.png" width="10%">
	</div>
	<div class="row">
		<h1 id="title">APPLICATION SENT</h1>
		<h4 id="title">Your application will be processed within three days.</h4>
		<h4 id="title">Goodluck!</h4>
	</div>
	<div id="pad" class="row">
		<div class="col-sm-3 col-sm-offset-3">
			<a href="careers-map" class="btn btn-primary btn-lg center-block" role="button">Back to Map</a>
		</div>
		<div id="sk" class="col-sm-3 col-sm-3-offset">
			<a href="careers-home" class="btn btn-primary btn-lg center-block" role="button">Back to Home</a>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>