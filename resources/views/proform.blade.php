@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row" id="btnpad">
		<div>
			<button type="button" class="btn btn-warning btn-lg">Back to Careers</button>
		</div>
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
	<div class="row">
		<form>
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="fname">First Name</label>
	    		<input type="text" class="form-control" id="fname">
	  		</div>
	  		<div class="form-group col-md-4">
	    		<label for="lname">Last Name</label>
	    		<input type="text" class="form-control" id="lname">
	  		</div>
	  	</form>
	</div>	
	<div class="row">
		<form>
	  		<div class="form-group col-md-6 col-md-offset-2">
	    		<label for="addr">Address</label>
	    		<input type="text" class="form-control" id="addr">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="zip">Zip</label>
	    		<input type="text" class="form-control" id="zip">
	  		</div>
	  	</form>
	</div>	
	<div class="row">
		<form>
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="phone">Primary Phone</label>
	    		<input type="text" class="form-control" id="phone">
	  		</div>
	  		<div class="form-group col-md-4">
	    		<label for="email">Email Address</label>
	    		<input type="email" class="form-control" id="email">
	  		</div>
	  	</form>
	</div>
	<div class="row col-md-offset-2">
		<form>
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
		</form>
	</div>
	<div class="row">
		<br><br><br><h4 class="col-md-4 col-md-offset-2">WORK HISTORY</h4><br><br><br>
	</div>
	<div class="row">
		<form>
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
	  	</form>  	
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
			<button type="button" class="btn btn-success btn-lg center-block">Submit Application</button>
		</div>
	</div>
</div>
@endsection