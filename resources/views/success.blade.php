@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row" id="padtop">
		 <img class="center-block" src="/img/check.png" width="10%">
	</div>
	<div class="row" style="width: 100%; min-height: 35vh;">
		<h1 class="text-center">APPLICATION SENT</h1>
		<h4 class="text-center">Thank you for applying! We will respond to you as soon as possible.</h4>
		<h4 class="text-center">Goodluck!</h4><br><br>
	</div>
	<div id="sxspad" class="row">
		<div class="col-md-3 col-md-offset-3 col-sm-6">
			<a id="pad" href="careers-map" class="btn btn-primary btn-lg center-block" role="button">Back to Vacancies Map</a>
		</div>
		<div id="sk"></div>
		<div id="sxspad" class="col-md-3 col-md-3-offset col-sm-6">
			<a id="pad" href="careers-home" class="btn btn-primary btn-lg center-block" role="button">Back to Careers Home</a>
		</div>
		<div id="sk"></div>
	</div>
</div>
@endsection