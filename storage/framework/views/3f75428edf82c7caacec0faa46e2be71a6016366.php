<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<!--
    This website was created by interns as part of their Internship in PCPPI. The authors
    are Eric Joseph P. Flores, Alonzo Francisco Locsin and, RJ Panaguiton. All are 3rd Year
    Computer Science Students in University of The Philippines Visayas. 

    This project was created using the Laravel Framework(https://laravel.com/).
    This project contains only basic functionalities for a Careers website. The authors allow 
    other developers to update,edit, and add other functions to this project.

    All CSS files and JS are stored in the public folder. 

-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Pepsi Philippines, PCPPI Careers, Careers, Pepsi-Cola Philippines Inc.">
    <meta name="author" content="Eric Joseph P. Flores, Alonzo Francisco Locsin, RJ Panaguiton">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>PCPPI Careers</title>
    <link rel="icon" type="image/ico" href="/img/pcppi3.ico" />

  <meta property="og:url"           content="http://pcppijobs.tk/careers-internform" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Pepsi-Cola Products Philippines Inc. Internship" />
  <meta property="og:description"   content="Pepsi-Cola Products Philippines Inc. accepts and trains interns! Apply now and start your Pepsified journey with us!" />
  <!--<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />-->

    <!-- Styles -->
    <?php echo $__env->yieldContent('head'); ?>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/social.css">
    <link rel="stylesheet" type="text/css" href="/css/scroll.css">
    <link rel="stylesheet" type="text/css" href="/css/w3schools.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/css/scrolling-nav.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scrolling-nav.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/validation/validator.js"></script>
    <script src="/js/validation/proform.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body id="page-top">
    <div id="app" >
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target =".navbar-collapse" style="text-align: center;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>     
                    </button>
                    <a class="navbar-brand" href="/careers-home">
                    <div class="logo-bar">                        
                        <img class="logo responsive" id="logo" src="/img/small-logo.png" />
                        <span id="pcppi"> Pepsi-Cola Products Philippines, Inc. - Careers </span>
                    </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul id="items" class="nav navbar-nav">
                        <li class="active"><a href="/careers-home">Home</a></li>
                        <li class="dropdown clearfix">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Main Website <span class="caret"></span></a>
                            <ul id="dropdown-menu" class="dropdown-menu">
                                 <li><a href="https://www.pepsiphilippines.com/index.php" target="_blank">Main Website Home</a></li>
                                <li><a href="https://www.pepsiphilippines.com/company.php" target="_blank">Our Company</a></li>
                                <li><a href="https://www.pepsiphilippines.com/products.php" target="_blank">Products</a></li>
                            </ul>
                        </li>
                        <li class="dropdown clearfix">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Careers <span class="caret"></span></a>
                            <ul id="dropdown-menu" class="dropdown-menu">
                                <li><a href="/careers-internform">Internships</a></li>
                                <li><a href="/careers-map">Professionals</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>       
        </nav>
        <div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<?php if(count($errors)>0): ?>
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li class = "alert alert-danger"><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
		<?php endif; ?>

	<div class="container" id="form">
		<div class="row" id="btnpad">
			<a href="<?php echo e(URL::previous()); ?>" class="btn btn-back btn-lg" role="button"><span class="glyphicon glyphicon-arrow-left"></span>Back to Careers List</a>
		</div>
		<div class="row">
			<div>
				<h2 id="title">Hiring Process</h2>
			</div>
			<div class="col-md-4">
		    	<h2 id="title">Step 1</h2><br>
		    	<p id="title">Once your application is received, a recruiter will reach out, pending your qualifications.</p>
			</div>
			<div class="col-md-4">
		    	<h2 id="title">Step 2</h2><br>
		    	<p id="title">Series of interviews and qualifying exams will be given as we proceed with your application.</p>
			</div>
			<div class="col-md-4">
		    	<h2 id="title">Step 3</h2><br>
		    	<p id="title">Recruiter will send a notification on your application status via email.</p>
			</div>
		</div>
		<div class="row">
			<br>
			<h2 id="titlepad">APPLICATION</h2>
		</div>
		<div id="forms-section" class="row">
			<div class="col-md-4 col-md-offset-2">
			<small class="text-danger"><strong>Fields with * are required</strong></small>
			<h4>PERSONAL INFORMATION</h4>
			</div>
		</div>
		<form name="proform" id='i-recaptcha' method="POST" action="/form_validation/2" data-toggle="validator" enctype="multipart/form-data">	
			<?php echo e(csrf_field()); ?>


			<input type="text" value="2" name="form_type" style="display: none;"/>
			<input type="text" value="Talent Bank" name="applicant_type" style="display: none;"/>

			<div class="row">
		  		<div class="form-group col-md-4 col-md-offset-2">
		    		<label for="fname">First Name *</label>
		    		<input type="text" class="form-control" name="fname" id="fname" data-error="Please input your first name" required maxlength="75" value="<?php echo old('fname'); ?>" placeholder="e.g. John">
		    		<div class="help-block with-errors"></div>
		  		</div>
		  		<div class="form-group col-md-4">
		    		<label for="lname">Last Name *</label>
		    		<input type="text" class="form-control" name="lname" id="lname" data-error="Please input your last name" required maxlength="75" value="<?php echo old('lname'); ?>" placeholder="e.g. Doe">
		    		<div class="help-block with-errors"></div>
		  		</div>
			</div>
			<div class="row"> 
		  		<div class="form-group col-md-8 col-md-offset-2">
		    		<label for="present"> Present Address *</label>
		    		<input type="text" class="form-control" name="present" id="present" data-error="Please input your present address" required maxlength="150" value="<?php echo old('present'); ?>" placeholder="Apartment, Floor, (if applicable) Street Address, City/Town, Province">
		    		<div class="help-block with-errors"></div>
		  		</div>		
	 		</div>
	 		<div class="row">
		  		<div class="form-group col-md-8 col-md-offset-2">
		    		<label for="prov"> Provincial Address *</label>
		    		<input type="text" class="form-control" name="prov" id="prov" data-error="Please input your provincial address" required maxlength="150" value="<?php echo old('prov'); ?>" placeholder="Apartment, Floor, (if applicable) Street Address, City/Town, Province">
		    		<div class="help-block with-errors"></div>
		  		</div>
			</div>
			<div class="row">
				<div class="form-group col-md-3 col-md-offset-2">
		    		<label for="bday">Date of Birth *</label>
		    		<input type="date" class="form-control datepicker" id="bday" name="bday" data-error="Please input your birthdate" required value="<?php echo old('bday'); ?>" placeholder="e.g. July 29, 1998">
		    		<div class="help-block with-errors"></div>
		  		</div>
		  		<div class="form-group col-md-2">
		    		<label for="phone">Mobile Number *</label>
		    		<input type="text" class="form-control" id="phone" name="phone" pattern="0\d{10}" placeholder="0xxxxxxxxxx" data-match-error="Please input a valid phone number" data-error="Please input your mobile number" required value="<?php echo old('phone'); ?>">
		    		<div class="help-block with-errors"></div>
		    		<div class="help-block">Should have 11 digits</div>
		  		</div> 
		  		<div class="form-group col-md-3">
		    		<label for="email">Email Address *</label>
		    		<input type="email" class="form-control" name="email" id="email" data-error="Please input a valid email address" required maxlength="75" enctype="multipart/form-data" value="<?php echo old('email'); ?>" placeholder="e.g. johndoe@gmail.com">
		    		<div class="help-block with-errors"></div>
		  		</div>
			</div>
			<div class="row"> 
		  		<div class="form-group col-md-4 col-md-offset-2">
		    		<label for="course">Bachelor's Degree *</label>
		    		<input type="text" class="form-control" name="course" id="course" data-error="Please input your bachelor's degree" required maxlength="75" value="<?php echo old('course'); ?>" placeholder="e.g. BS Communication and Media Studies">
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
		    		<input type="text" class="form-control" name="school1" id="school1" data-error="Please input this field" required maxlength="75" value="<?php echo old('school1'); ?>" placeholder="e.g. De La Salle University">
		    		<div class="help-block with-errors"></div>
		  		</div> 
			</div>
			<div class="row"> 
		  		<div class="form-group col-md-4 col-md-offset-2">
		    		<label for="gradcourse">Graduate Course</label>
		    		<input type="text" class="form-control" name="gradcourse" id="gradcourse" maxlength="75" value="<?php echo old('gradcourse'); ?>" placeholder="e.g. Graduate Diploma in Teaching">
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
		    		<input type="text" class="form-control" name="school2" id="school2" maxlength="75" value="<?php echo old('school2'); ?>" placeholder="e.g. De La Salle University">
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
					    		<label> Add other skills related to position applying for </label>
				    		</div>
				    	</div>
			    	</div>
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
						<?php $__currentLoopData = $functions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $function): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				        <option value="<?php echo e($function->name); ?>"><?php echo e($function->name); ?></option>
				        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				    </select>
				    <div class="help-block with-errors"></div>
				</div>
				<div class="form-group col-md-4">
					<label for="loc"><br>Preferred Region *</label>
					<select class="form-control" id="loc" name="loc" required>
					<option selected disabled value="">--</option>
						<?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				        <option value="<?php echo e($region->name); ?>"><?php echo e($region->name); ?></option>
				        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
							<input type="file" id="resume" name="resume" style="display: none" required value="<?php echo old('resume'); ?>"/>	
					</label>
					<p> Uploaded File: <span id="uploaded-file"> </span></p>
					<div class="help-block with-errors" id="upload-error" style="color:red;"> Please upload your resume </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2 style="text-align: center; text-decoration:underline; "> Data Privacy Policy </h2>
				</div>
				<div style="overflow: auto; width:50%; height:200px; background-color: white; font-size: 18px;" class="center-block">
				By clicking “Submit” I agree that:
				I have read and accepted the User Agreement and Privacy Policy.
				I may receive communications from PCPPI.
				I agree to send my data to PCPPI and 
				all the inputted data is true.
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<label for="agree">
					<input id="agree" name="agree" data-error="Please read the the policy first" type="checkbox" value="yes" required />
					I have read and agreed 
					</label>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<br/>
			<br/> 
			<div class="g-recaptcha col-md-offset-2" data-sitekey="<?php echo e(env('GOOGLE_RECAPTCHA_KEY')); ?>"></div>
			<button type="submit" id="Submit" class="btn btn-primary btn-lg center-block" style="margin-top: 5%; margin-bottom: 5%;">Submit Application</button>
		</form>
	</div>

	<!-- HTML Templates --> 	
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

 </div>
    <noscript>
        <div class="noscriptmsg">
                <style>
                    #app {
                        display:none;
                    }

                    h1, h3{
                        font-size: 30px;
                        text-align: center;
                    }

                    #jsimg{
                        width: 85%;
                        padding-bottom: 75px;
                        padding-top: 75px;
                    }
                </style>
                <div id="nojs">
                    <div class="row">
                        <div class="col-sm-4 sidep slide">
                            <img id="jsimg" class="center-block" src="img/pep.png" alt="pic">
                        </div>
                        <div class="col-sm-8">
                            <br><br><h1><b>Javascript Disabled<b></h1><br><br><br>
                            <h3><b>You don't have javascript enabled. Please enable it and reload the page<b></h3>
                        </div>
                    </div>
                </div>
        </div>
    </noscript>

    <footer class="container text-center bg-white" style="margin: 0; width: 100%;">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3"> 
            <p>      
                <span>
                    <img class="logo-footer" id="logo-footer" src="/img/Pepsi-logo.png" />
                </span>
            </p>
            <p class="footerp"> Contact us at careers@pcppi.com.ph | Copyright © 2017. Pepsi-Cola Products Philippines, Inc. | All Rights Reserved. </br>
            Created by: Eric Joseph P. Flores, Alonzo Locsin, RJ Panaguiton </p>
            </div>
            <div class="col-xs-3" id="social" style="">
                    <a href="https://www.facebook.com/PepsiPhilippines" class="fa fa-facebook"></a> 
                    <a href="http://bit.ly/CareersatPCPPI" class="fa fa-linkedin" style="margin-left: 2%;">
                    </a> 
            </div> 
        </div> 
    </footer>
</body>
</html>