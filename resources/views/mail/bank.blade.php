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
		    	<label for="applicant_type">Applicant Type:</label>
		    	<h4 class="col-md-offset-3">{{$data['applicant_type']}}</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-4 col-md-offset-2">
		    	<label for="fname">First Name:</label>
		    	<h4 class="col-md-offset-3">{{$data['fname']}}</h4>
		  	</div>
		  	<div class="form-group col-md-6">
		    	<label for="lname">Last Name:</label>
		    	<h4 class="col-md-offset-2">{{$data['lname']}}</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
		    	<label for="present">Present Address:</label>
		    	<h4 class="col-md-offset-3">{{$data['present']}}</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-6 col-md-offset-2">
		    	<label for="prov">Provincial Address:</label>
		    	<h4 class="col-md-offset-3">{{$data['prov']}}</h4>
		</div>
		<div class="row">
		  	<div class="form-group col-md-3 col-md-offset-2">
		    	<label for="bday">Date of Birth (yyyy-mm-dd):</label>
		    	<h4 class="col-md-offset-3">{{$data['bday']}}</h4>
		  	</div>
		  	<div class="form-group col-md-3">
		    	<label for="phone">Mobile Number:</label>
		    	<h4 class="col-md-offset-2">{{$data['phone']}}</h4>
		  	</div>
		  	<div class="form-group col-md-4">
		    	<label for="email">Email Address:</label>
		    	<h4 class="col-md-offset-2">{{$data['email']}}</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-4 col-md-offset-2">
		    	<label for="course">Bachelor's Degree:</label>
		    	<h4 class="col-md-offset-3">{{$data['course']}}</h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="from1">From:</label>
		    	<h4 class="col-md-offset-2">{{$data['from1']}}</h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="to1">To:</label>
		    	<h4 class="col-md-offset-2">{{$data['to1']}}</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-10 col-md-offset-2">
		    	<label for="school1">School/College/University:</label>
		    	<h4 class="col-md-offset-3">{{$data['school1']}}</h4>
		  	</div>
		</div>
		@if($data['gradcourse']&&$data['school2']!=null)
		<div class="row">
		  	<div class="form-group col-md-4 col-md-offset-2">
		    	<label for="gradcourse">Graduate Degree:</label>
		    	<h4 class="col-md-offset-3">{{$data['gradcourse']}}</h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="from2">From:</label>
		    	<h4 class="col-md-offset-2">{{$data['from2']}}</h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="to2">To:</label>
		    	<h4 class="col-md-offset-2">{{$data['to2']}}</h4>
		  	</div>
		</div>
		<div class="row">
		  	<div class="form-group col-md-10 col-md-offset-2">
		    	<label for="school2">School/College/University:</label>
		    	<h4 class="col-md-offset-3">{{$data['school2']}}</h4>
		  	</div>
		</div>
		@endif
		<div class="row">
		  	<div class="form-group col-md-10 col-md-offset-2">
		    	<label for="skills">Skills:</label>
		    	@forelse($data['skills'] as $i => $skill)
		    	<h4 class="col-md-offset-1">{{$data['skills'][$i]}}</h4>
		    	 @empty
                <h4 class="col-md-offset-1">None</h4>
		    	@endforelse
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
		    	<h4 class="col-md-offset-1">{{$data['name1']}}</h4>
		    	<h4 class="col-md-offset-1">{{$data['name2']}}</h4>
		    	<h4 class="col-md-offset-1">{{$data['name3']}}</h4>
		  	</div>
		  	<div class="form-group col-md-2">
		    	<label for="num1">Contact Number:</label>
		    	<h4 class="col-md-offset-1">{{$data['num1']}}</h4>
		    	<h4 class="col-md-offset-1">{{$data['num2']}}</h4>
		    	<h4 class="col-md-offset-1">{{$data['num3']}}</h4>
		  	</div>
		  	<div class="form-group col-md-4">
		    	<label for="rel1">Relationship:</label>
		    	<h4 class="col-md-offset-1">{{$data['rel1']}}</h4>
		    	<h4 class="col-md-offset-1">{{$data['rel2']}}</h4>
		    	<h4 class="col-md-offset-1">{{$data['rel3']}}</h4>
		  	</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<h4><u>WORK HISTORY</u></h4>
			</div>
		</div>
		<div class="row">
			@foreach($data['company'] as $i => $skill)
			<div class="form-group col-md-2 col-md-offset-2">
				<label for="company">Company Name {{$i+1}}:</label>
				@if($data['company'][$i]!="")
				<h4 class="col-md-offset-1">{{$data['company'][$i]}}</h4>
				@else
				<h4 class="col-md-offset-1">None</h4>
				@endif
			</div>
			@endforeach
			@foreach($data['position'] as $i => $position)
			<div class="form-group col-md-2">
				<label for="position">Position {{$i+1}}:</label>
				@if($data['position'][$i]!="")
				<h4 class="col-md-offset-1">{{$data['position'][$i]}}</h4>
				@else
				<h4 class="col-md-offset-1">None</h4>
				@endif
			</div>
			@endforeach
			@foreach($data['frdate'] as $i => $frdate)
			<div class="form-group col-md-2">
				<label for="frdate">From {{$i+1}} (yyyy-mm-dd):</label>
				@if($data['frdate'][$i]!="")
				<h4 class="col-md-offset-1">{{$data['frdate'][$i]}}</h4>
				@else
				<h4 class="col-md-offset-1">None</h4>
				@endif
			</div>
			@endforeach
			@foreach($data['todate'] as $i => $todate)
			<div class="form-group col-md-2">
				<label for="todate">To {{$i+1}} (yyyy-mm-dd):</label>
				@if($data['todate'][$i]!="")
				<h4 class="col-md-offset-1">{{$data['todate'][$i]}}</h4>
				@else
				<h4 class="col-md-offset-1">None</h4>
				@endif
			</div>
			@endforeach		
		</div>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
				<label for="dept">Preferred Function:</label>
				<h4 class="col-md-offset-1">{{$data['funct']}}</h4>
			</div>
			<div class="form-group col-md-3">
				<label for="loc">Preferred Region:</label>
				<h4 class="col-md-offset-1">{{$data['loc']}}</h4>
			</div>
			<div class="form-group col-md-2">
				<label for="reloc">Willing to relocate?</label>
				<h4 class="col-md-offset-1">{{$data['reloc']}}</h4>
			</div>
		</div>
	</div>
</body>
</html>