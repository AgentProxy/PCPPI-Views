 @extends('layouts.master')

<!-- if
	naka set ang complete nga session
	redirect to link
 -->

@section('content')
@if(count($errors)>0)
<ul>
	@foreach($errors->all() as $error)
	<li class = "alert alert-danger">{{$error}}</li>
	@endforeach
</ul>
@endif

<div class="container" id="form">
	<div class="row" id="btnpad">
		<a href="{{ URL::previous() }}" class="btn btn-back btn-lg" role="button"><span class="glyphicon glyphicon-arrow-left"></span>Back to Careers List</a>
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
	<div id="forms-section" class="row">
		<div class="col-md-4 col-md-offset-2">
		<small class="text-danger"><strong>Fields with * are required</strong></small>
		<h4 >PERSONAL INFORMATION</h4>
		</div>
	</div>
	<form name="proform" id='i-recaptcha' method="POST" action="/form_validation/2" data-toggle="validator" enctype="multipart/form-data">	
		{{ csrf_field() }}

		<input type="text" value="2" name="form_type" style="display: none;"/>
		<input type="text" value="Talent Bank" name="applicant_type" style="display: none;"/>

		<div class="row">
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="fname">First Name *</label>
	    		<input type="text" class="form-control" name="fname" id="fname" data-error="Please input your first name" required maxlength="75" value="{!! old('fname') !!}" placeholder="e.g. John">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-4">
	    		<label for="lname">Last Name *</label>
	    		<input type="text" class="form-control" name="lname" id="lname" data-error="Please input your last name" required maxlength="75" value="{!! old('lname') !!}" placeholder="e.g. Doe">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<div class="row"> 
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="present"> Present Address *</label>
	    		<input type="text" class="form-control" name="present" id="present" data-error="Please input your present address" required maxlength="150" value="{!! old('present') !!}" placeholder="Apartment, Floor, (if applicable) Street Address, City/Town, Province">
	    		<div class="help-block with-errors"></div>
	  		</div>		
 		</div>
 		<div class="row">
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="prov"> Provincial Address *</label>
	    		<input type="text" class="form-control" name="prov" id="prov" data-error="Please input your provincial address" required maxlength="150" value="{!! old('prov') !!}" placeholder="Apartment, Floor, (if applicable) Street Address, City/Town, Province">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="bday">Date of Birth *</label>
	    		<input type="date" class="form-control datepicker" id="bday" name="bday" data-error="Please input your birthdate" required value="{!! old('bday') !!}" placeholder="e.g. July 29, 1998">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="phone">Mobile Number *</label>
	    		<input type="text" class="form-control" id="phone" name="phone" pattern="0\d{10}" placeholder="0xxxxxxxxxx" data-match-error="Please input a valid phone number" data-error="Please input your mobile number" required value="{!! old('phone') !!}">
	    		<div class="help-block with-errors"></div>
	    		<div class="help-block">Should have 11 digits</div>
	  		</div> 
	  		<div class="form-group col-md-3">
	    		<label for="email">Email Address *</label>
	    		<input type="email" class="form-control" name="email" id="email" data-error="Please input a valid email address" required maxlength="75" enctype="multipart/form-data" value="{!! old('email') !!}" placeholder="e.g. johndoe@gmail.com">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<div class="row"> 
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="course">Bachelor's Degree *</label>
	    		<input type="text" class="form-control" name="course" id="course" data-error="Please input your bachelor's degree" required maxlength="75" value="{!! old('course') !!}" placeholder="e.g. BS Communication and Media Studies">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="from1"><small> From (School Year) * </small></label>
	    		<select class="form-control year" name="from1" id="from1" required>
	    			<option value="" selected disabled>--</option>
	    		</select>
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="to1"><small> To (School Year) * </small></label>  
	    		<select class="form-control year" name="to1" id="to1" required>
	    			<option value="" selected disabled>--</option>
	    		</select>
	    		<div class="help-block with-errors"></div>
	  		</div> 
		</div>
		<div class="row">
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school1">School/College/University *</label>
	    		<input type="text" class="form-control" name="school1" id="school1" data-error="Please input this field" required maxlength="75" value="{!! old('school1') !!}" placeholder="e.g. De La Salle University">
	    		<div class="help-block with-errors"></div>
	  		</div> 
		</div>
		<div class="row"> 
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="gradcourse">Graduate Course</label>
	    		<input type="text" class="form-control" name="gradcourse" id="gradcourse" maxlength="75" value="{!! old('gradcourse') !!}" placeholder="e.g. Graduate Diploma in Teaching">
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="from2"><small> From (School Year) </small></label> 
	    		<select class="form-control year" name="from2" id="from2" >
	    			<option selected disabled>--</option>
	    		</select>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="to2"><small> To (School Year) </small></label> 
	    		<select class="form-control year" name="to2" id="from2" >
	    			<option selected disabled>--</option>
	    		</select>
	  		</div>
	  	</div>
  		<div class="row">
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school2">School/College/University</label>
	    		<input type="text" class="form-control" name="school2" id="school2" maxlength="75" value="{!! old('school2') !!}" placeholder="e.g. De La Salle University">
	  		</div> 
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-2">
				<label for="skills">&nbsp;&nbsp;&nbsp; Skills</label> 
				<div class="row">
			    <div class="col-md-8 col-md-offset-1">
					<div id="skill-1" class="checkbox skills">
		  				<label><input type="checkbox" name="skills[]" value="Communication Skills">Communication Skills</label>
				    </div>
				    <div id="skill-2" class="checkbox skills">
				      <label><input type="checkbox" name="skills[]" value="Advanced Computer Skills">Advanced Computer Skills</label>
				    </div>
				    <div id="skill-3" class="checkbox skills">
				      <label><input type="checkbox" name="skills[]" value="Driving">Driving</label>
				    </div>
				    <div class="" id="addskill">
					    <input type="text" id="skill" placeholder="Other Skills" maxlength="75">
					    <button type="button" id="add-skill" class="btn btn-cherry add-skill">
			      			<span class="glyphicon glyphicon-plus add-skill"></span> Add Skill
			    		</button>
		    		</div>
		    	</div>
		    	</div>
		    </div>
		</div>
		<div id="forms-section" class="row">
			<h3 class="col-md-6 col-md-offset-2">CHARACTER REFERENCES</h3>
			<p class="col-md-6 col-md-offset-2">(Please input <b>three</b> character references)</p>
		</div>
		
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="name1">Name *</label>
	    		<input type="text" class="form-control" name="name1" id="name1" placeholder="" data-error="Please input this field" required maxlength="75" value="{!! old('name1') !!}">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="num1">Contact Number *</label>
	    		<input type="text" class="form-control" name="num1" id="num1" placeholder="" pattern="0\d{10}" data-error="Please input a valid mobile number" required maxlength="75" value="{!! old('num1') !!}">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="rel1">Relationship *</label>
	    		<input type="text" class="form-control" name="rel1" id="rel1" placeholder="" data-error="Please input this field" required maxlength="75" value="{!! old('rel1') !!}">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<hr class="visible-sm visible-xs" />
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="name2" class="hidden-lg">Name *</label>
	    		<input type="text" class="form-control" name="name2" id="name2" placeholder="" data-error="Please input this field" required maxlength="75" value="{!! old('name2') !!}">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="num2" class="hidden-lg">Contact Number *</label>
	    		<input type="text" class="form-control" id="num2" name="num2" placeholder="" pattern="0\d{10}" data-error="Please input a valid mobile number" required maxlength="75" value="{!! old('num2') !!}">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="rel2" class="hidden-lg">Relationship *</label>
	    		<input type="text" class="form-control" name="rel2" id="rel2" placeholder="" data-error="Please input this field" required maxlength="75" value="{!! old('rel2') !!}">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<hr class="visible-sm visible-xs" />
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="name3" class="hidden-lg">Name *</label>
	    		<input type="text" class="form-control" name="name3" id="name3" placeholder="" data-error="Please input this field" required maxlength="75" value="{!! old('name3') !!}">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="num3" class="hidden-lg">Contact Number *</label>
	    		<input type="text" class="form-control" name="num3" id="num3" placeholder="" pattern="0\d{10}" data-error="Please input a valid mobile number" required maxlength="75" value="{!! old('num3') !!}">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="rel3" class="hidden-lg">Relationship *</label>
	    		<input type="text" class="form-control" name="rel3" id="rel3" placeholder="" data-error="Please input this field" required maxlength="75" value="{!! old('rel3') !!}">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<div id="forms-section" class="row">
			<h4 class="col-md-4 col-md-offset-2">WORK HISTORY</h4>
		</div>
		<div class="row">
	  		<div class="work-history" id="work-history-1" style="display:block;">
	  			<div class="form-group col-md-8 col-md-offset-2">
		    		<label for="company">Company 1</label>
		    		<input type="text" class="form-control" name="company[]" id="company" maxlength="75" placeholder="Company Name">
	  			</div>
		  		<div class="form-group col-md-4 col-md-offset-2">
		    		<label for="position">Position/Title</label>
		    		<input type="text" class="form-control" name="position[]" id="position" maxlength="75" placeholder="e.g. Ad Operations Specialist">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="frdate">From</label>
		    		<input type="date" class="form-control" name="frdate[]" id="frdate">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="todate">To</label>
		    		<input type="date" class="form-control" name="todate[]" id="todate">
		  		</div>
	  		</div>
	  		<div class="work-history" id="work-history-2" style="display:block;">
	  			<div class="form-group col-md-8 col-md-offset-2">
		    		<label for="company">Company 2</label>
		    		<input type="text" class="form-control" name="company[]" id="company" maxlength="75" placeholder="Company Name">
	  			</div>
		  		<div class="form-group col-md-4 col-md-offset-2">
		    		<label for="position">Position/Title</label>
		    		<input type="text" class="form-control" name="position[]" id="position" maxlength="75" placeholder="e.g. Ad Operations Specialist">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="frdate">From</label>
		    		<input type="date" class="form-control" name="frdate[]" id="frdate">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="todate">To</label>
		    		<input type="date" class="form-control" name="todate[]" id="todate">
		  		</div>
	  		</div>
	  		<div class="work-history" id="work-history-3" style="display:block;">
	  			<div class="form-group col-md-8 col-md-offset-2">
		    		<label for="company">Company 3</label>
		    		<input type="text" class="form-control" name="company[]" id="company" maxlength="75" placeholder="Company Name">
	  			</div>
		  		<div class="form-group col-md-4 col-md-offset-2">
		    		<label for="position">Position/Title</label>
		    		<input type="text" class="form-control" name="position[]" id="position" maxlength="75" placeholder="e.g. Ad Operations Specialist">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="frdate">From</label>
		    		<input type="date" class="form-control" name="frdate[]" id="frdate">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="todate">To</label>
		    		<input type="date" class="form-control" name="todate[]" id="todate">
		  		</div>
	  		</div>  	
		</div>   		
		<div class="row">
			<div class="form-group col-md-4 col-md-offset-2">
				<label for="funct"><br>Preferred Function *</label>
				<select class="form-control" id="funct" name="funct" required>
					<option selected disabled value="">--</option>
					@foreach($functions as $function)
			        <option value="{{$function->name}}">{{$function->name}}</option>
			        @endforeach
			    </select>
			    <div class="help-block with-errors"></div>
			</div>
			<div class="form-group col-md-4">
				<label for="loc"><br>Preferred Region *</label>
				<select class="form-control" id="loc" name="loc" required>
				<option selected disabled value="">--</option>
					@foreach($regions as $region)
			        <option value="{{$region->name}}">{{$region->name}}</option>
			        @endforeach
			    </select>
			    <div class="help-block with-errors"></div>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-2 col-md-offset-2">
				<br/>
				<label for="reloc">Willing to relocate? *</label><br />
			    	<label for="yes"> 
				    	<input id="yes" type="radio" name="reloc" value="Yes" required/> 
				    	Yes
			    	</label>
			    	<label for="no">
			    		<input id="no" type="radio" name="reloc" value="No" required/> No <br />
			    	</label>
			    <div class="help-block with-errors"></div>
			</div>
		</div>
		<div class="row">
			<div>
				<h5 class="col-md-4 col-md-offset-2">Attach Resume * <small>(.doc, .docx, .pdf)</small></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<label class="btn btn-primary btn-lg" id="upload"><span id="upload-text">Upload</span>
						<input type="file" id="resume" name="resume" style="display: none" required value="{!! old('resume') !!}"/>	
				</label>
				<p> Uploaded File: <span id="uploaded-file"> </span></p>
				<div class="help-block with-errors" id="upload-error" style="color:red;"> Please upload your resume </div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2 style="text-align: center"> Data Privacy Policy </h2>
				<textarea class="center-block col-md-6 col-md-offset-4" readonly="true" rows="10" >
				By clicking “Submit” I agree that:
				I have read and accepted the User Agreement and Privacy Policy.
				I may receive communications from eBay and can change my notification preferences in My eBay.
				I am at least 18 years old.
				</textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2" style="margin-left: 210px;">
					<label for="agree">
					<input id="agree" name="agree" data-error="Please read the the policy first" type="checkbox" value="yes" required />
					I have read and agreed 
					</label>
					<div class="help-block with-errors"></div>
			</div>
		</div>
		<br/>
		<br/> 
		<div class="g-recaptcha col-md-offset-2" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
		<button type="submit" id="Submit" class="btn btn-primary btn-lg center-block" style="margin-top: 5%; margin-bottom: 5%;">Submit Application</button>
	</form>
</div>

<!-- HTML Templates -->
	<!-- Start of Work History Template-->
	  		<div id="work-history-0" style="display: none;">
		  		<div class="form-group col-md-8 col-md-offset-2">
		    		<label for="company">Company Name</label>
		    		<input type="text" class="form-control" name="company[]" id="company" maxlength="75">
		  		</div>
		  		<div class="form-group col-md-4 col-md-offset-2">
		    		<label for="position">Position/Title</label>
		    		<input type="text" class="form-control" name="position[]" id="position" maxlength="75">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="frdate">From</label>
		    		<input type="date" class="form-control" name="frdate[]" id="frdate">
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="todate">To</label>
		    		<input type="date" class="form-control" name="todate[]" id="todate">
		    		<button id="addwork" class="btn btn-danger delete-work" style="position: relative; left: 180px; bottom: 35px;"><span class="glyphicon glyphicon-minus-sign"></span></button>
		  		</div>
	  		</div>  	
	  	<!-- Start of Skills Template -->
	  		<div id="skill-0" name="skills" style="display: none">
				<input type="text" name="skills[]" value="" style="display: none">
			    <span id="delete" style="font-size: 15px; color: red;" class="delete-skill glyphicon glyphicon-minus-sign"></span> 
			    <span id="skill-label" style="padding-left: 0%;">Programming</span>
			</div>
		<!-- End of Skills Template -->
<!--  -->

<div class="fa-circle">
	
</div>

<script type="text/javascript">
	for (i = new Date().getFullYear(); i > 1900; i--){
		$('.year').append($('<option />').val(i).html(i));
	}  
</script>

<script>
	var submitted = false;
	//RETURN LATER IF AFTER DEBUGGING
	$(window).on('load',function(){
		document.getElementById('i-recaptcha').reset();
	});
	$('#i-recaptcha').submit(function() {
   		$(window).off('beforeunload');
   		submitted = true;
	});
	$(window).on('beforeunload', function() {
		if(!submitted){
    		return 'Changes you made may not be saved.';
    	}
	});	
</script>

@endsection