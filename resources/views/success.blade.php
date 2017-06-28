@extends('layouts.master')

@section('content')
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
			<button type="button" class="btn btn-primary btn-lg center-block">Back to Map</button>
		</div>
		<div class="col-sm-3 col-sm-3-offset">
			<button type="button" class="btn btn-primary btn-lg center-block">Back to Home</button>
		</div>
	</div>
</div>
@endsection