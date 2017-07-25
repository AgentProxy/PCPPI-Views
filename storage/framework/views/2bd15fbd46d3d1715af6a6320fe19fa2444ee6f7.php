<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<!--
    The head part is present here because of FB's specific meta tags. We cannot extend the head section used in all websites in this specific
    blade/view because of that reason. 

-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This Careers Website is for PCPPI Vacancies only">
    <meta name="keywords" content="Pepsi Philippines, PCPPI Careers, Careers, Pepsi-Cola Philippines Inc.">
    <meta name="author" content="Eric Joseph P. Flores, Alonzo Francisco Locsin, RJ A. Panaguiton">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>PCPPI Careers</title>
    <link rel="icon" type="image/ico" href="/img/pcppi3.ico" />

    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
	<meta property="og:url"           content="http://pcppijobs.tk/careers-internform" />
  	<meta property="og:type"          content="website" />
  	<meta property="og:title"         content="Pepsi-Cola Products Philippines Inc. Internship" />
  	<meta property="og:description"   content="Pepsi-Cola Products Philippines Inc. accepts and trains interns! Apply now and start your Pepsified journey with us!" />
    <meta property="og:image"         content="/img/Pepsi-logo.png" />

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
	<div id="wrapper">
    <div id="app" class="last">
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

<div class="container">
	<div class="row" id="btnpad">
		<div>
			<a href="careers-home" class="btn btn-back btn-lg" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to Careers Home</a>
		</div>
	</div>
	<div id="job" class="container well">
		<div class="row">
			<h1 class="text-center bold">Internship</h1>
			<p>Our Program is designed to give graduating students a diverse and rewarding experience throughout their on the job training.</p>
			<p>PCPPI Internship Program provides hands-on learning opportunities in the field of Operations, Supply Chain, Human Resources, Sales, Finance, and Information Technology Departments, allowing them to grow and broaden their horizon in their chosen careers.</p>
		</div>
		<div class="row">
			<!-- This is for FB's Share
			CHANGE THE DOMAIN NAME ONLY TO THE DOMAIN NAME USED CURRENTLY NOT THE WHOLE LINK.
			EX. "http://your-domain/careers-proform/......"

			EDIT THE META PROPERTIES ABOVE TO CONFIGURE THE LINK PREVIEW WHICH WOULD BE SHARED ON FACEBOK.
			-->
			<div class="fb-share-button pull-right"
			    data-href="http://pcppijobs.tk/careers-internform"  
			    data-layout="button"
				data-size="large"
			>
		  	</div>
		  	<!-- -->
		</div> 	
	</div>

<div class="container well">
	<div class="row">
		<h2  id="titlepad">APPLICATION</h2>
	</div>
	<div id="forms-section" class="row">
		<div class="col-md-4 col-md-offset-2">
		<small class="text-danger"><strong>Fields with * are required</strong></small>		
		<h4 >PERSONAL INFORMATION</h4>
		</div>
	</div>
	<form id='i-recaptcha' method="POST" action="/form_validation/3" data-toggle="validator" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>


		<input type="text" value="3" name="form_type" style="display: none;"/>
		<input type="text" value="Internship" name="applicant_type" style="display: none;"/>

		<input type="text" value="3" name="form_type" style="display: none;">
		<div class="row">
		  	<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="fname">First Name *</label>
	    		<input type="text" class="form-control" id="fname" name="fname" data-error="Please input your first name" required maxlength="75" value="<?php echo old('fname'); ?>" placeholder="">

	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-4">
	    		<label for="lname">Last Name *</label>
	    		<input type="text" class="form-control" name="lname" id="lname" data-error="Please input your last name" required maxlength="75" value="<?php echo old('lname'); ?>" placeholder="">

	    		<div class="help-block with-errors" value="<?php echo old('lname'); ?>"></div>
	  		</div>
		</div>	
		<div class="row">
		  	<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="present"> Present Address *</label>
	    		<input type="text" class="form-control" id="present" name="present" data-error="Please input your present address" required maxlength="150" value="<?php echo old('present'); ?>" placeholder="">
	    		<div class="help-block with-errors"></div>
	  		</div>		
		</div>	
		<div class="row">
		  	<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="prov"> Provincial Address *</label>
	    		<input type="text" class="form-control" id="prov" name="prov" data-error="Please input your provincial address" required maxlength="150" value="<?php echo old('prov'); ?>" placeholder="">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-2">
	    		<label for="bday">Date of Birth *</label>
	    		<input type="date" class="form-control datepicker" id="bday" name="bday" data-error="Please input your birthdate" required value="<?php echo old('bday'); ?>" placeholder="">
	    		<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
	    		<label for="phone">Mobile Number *</label>
	    		<input type="text" class="form-control" id="phone" name="phone" pattern="0\d{10}" placeholder="" data-match-error="Please input a valid phone number" data-error="Please input your mobile number" required value="<?php echo old('phone'); ?>">
	    		<div class="help-block with-errors"></div>
	    		<div class="help-block"><small>Should have 11 digits</small></div>
	  		</div>
	  		<div class="form-group col-md-3">
	    		<label for="email">Email Address *</label>
	    		<input type="email" class="form-control" id="email" name="email" data-error="Please input a valid email address" required maxlength="75" value="<?php echo old('email'); ?>" placeholder="">
	    		<div class="help-block with-errors"></div>
	  		</div>
		</div>	
		<div id="forms-section" class="row">
			<h4 class="col-md-4 col-md-offset-2">INTERNSHIP DETAILS</h4>
		</div>
		<div class="row">
	  		<div class="form-group col-md-8 col-md-offset-2">
	    		<label for="school">School/College/University *</label>
	    		<input type="text" class="form-control" id="school" name="school" data-error="Please input this field" required maxlength="75" value="<?php echo old('school'); ?>" placeholder="">
    			<div class="help-block with-errors"></div>
	  		</div>
		</div>	
		<div class="row">
	  		<div class="form-group col-md-4 col-md-offset-2">
	    		<label for="course">Undergraduate Course *</label>
	    		<input type="text" class="form-control" id="course" name="course" data-error="Please input this field" required maxlength="75" value="<?php echo old('course'); ?>" placeholder="">
    			<div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-4">
				<label for="loc" >Preferred Region *</label>
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
	  		<div class="form-group col-md-3 col-md-offset-2">
  				<label for="level">Year Level *</label>
  				<select class="form-control" id="level" name="level" required>
  					<option value="" selected disabled>--</option>
			        <option>First Year</option>
			        <option>Second Year</option>
			        <option>Third Year</option>
			        <option>Fourth Year</option>
			        <option>Fifth Year</option>
			    </select>
			    <div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-3">
  				<label for="sem">Sem *</label>
  				<select class="form-control" id="sem" name="sem" required>
  					<option value="" selected disabled>--</option>
			        <option>First</option>
			        <option>Second</option>
			        <option>Third</option>
			        <option>Midyear</option>
			     </select>
			     <div class="help-block with-errors"></div>
	  		</div>
	  		<div class="form-group col-md-2">
  				<label for="hrs">Hours Required *</label>
  				<select class="form-control" id="hrs" name="hrs" required>
  					<option value="" selected disabled>--</option>
  					<option>100-200</option> 
			        <option>200-300</option>
			        <option>300-400</option>
			        <option>500-above</option>
			     </select>
			     <div class="help-block with-errors"></div>
	  		</div>	
		</div>
		<div id="forms-section" class="row">
			<h4 class="col-md-4 col-md-offset-2">Attach Resume *</h4>
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
		<div class="g-recaptcha col-md-offset-2" data-sitekey="<?php echo e(env('GOOGLE_RECAPTCHA_KEY')); ?>"></div>
		<button type="submit" id="Submit" class="btn btn-primary btn-lg center-block" style="margin-top: 5%; margin-bottom: 5%;">Submit Application</button>
	</form>
</div>
<div class="container well">
	<div class="row text-center">
		<div>
			<h2>Hiring Process</h2>
		</div>
		<hr />
		<div class="col-md-4">
	    	<h2>Step 1</h2>
	    	<p>Once your application is received, a recruiter will reach out, pending your qualifications.</p>
		</div>
		<hr class="visible-sm visible-xs" />
		<div class="col-md-4">
	    	<h2>Step 2</h2>
		    	<p>Series of interviews and qualifying exams will be given as we proceed with your application.</p>
		</div>
		<hr class="visible-sm visible-xs" />
		<div class="col-md-4">
	    	<h2>Step 3</h2>
	    	<p>Recruiter will send a notification on your application status via email.</p>
		</div>
	</div>
</div>
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
                        text-align: center;
                        font-family: 'Play', sans-serif;
                    }

                    h1 {
                        margin-top: 15%;
                        font-size: 66px;
                    }
                    h3 {
                        font-size: 20px;
                    }

                    #jsimg{
                        width: 85%;
                        padding-bottom: 75px;
                        padding-top: 75px;
                    }

                    .container.well {
                        margin-top: 6%;
                        background: #f6f6f6;
                        border: 2px solid rgba(0,0,0,0.5);
                        border-radius: 20px;
                    }

                    @media (min-width: 768px) and (max-width: 1023px) {
                        h1 {
                            margin-top: 5px;
                            font-size: 40px;
                        }
                        h3 {
                            font-size: 12px;
                        }

                        #jsimg{
                            width: 45%;
                            padding-top: 0;
                            padding-bottom: 0;
                        }

                        .container.well {
                            width: 95vw;
                            margin-top: 10%;
                            margin-bottom: 20%;
                        }
                    }

                    @media (min-width: 480px) and (max-width: 767px) {
                        h1 {
                            margin-top: 5px;
                            font-size: 40px;
                        }
                        h3 {
                            font-size: 12px;
                        }

                        #jsimg{
                            width: 45%;
                            padding-top: 0;
                            padding-bottom: 0;
                        }

                        .container.well {
                            width: 95vw;
                            margin-top: 4%;
                            margin-bottom: 20%;
                        }
                    }

                    @media (min-width: 321px) and (max-width: 479px) {
                        h1 {
                            margin-top: 15%;
                            font-size: 40px;
                        }
                        h3 {
                            font-size: 12px;
                        }

                        #jsimg{
                            width: 95%;
                            padding-bottom: 30px;
                            padding-top: 20px;
                        }

                        .container.well {
                            width: 95vw;
                            margin-top: 18%;
                            margin-bottom: 20%;
                        }
                    }

                    @media (max-width: 320px) {
                        h1 {
                            margin-top: 15%;
                            font-size: 40px;
                        }
                        h3 {
                            font-size: 12px;
                        }

                        #jsimg{
                            width: 55%;
                            padding-bottom: 22px;
                            padding-top: 16px;
                        }

                        .container.well {
                            width: 95vw;
                            margin-top:10%;
                        }
                    }
                </style>
                <div class="container" id="nojs">
                    <div class="row">
                        <div class="container well">
                            <div class="col-md-4 sidep slide">
                                <img id="jsimg" class="center-block" src="img/pepsi.png" alt="pic">
                            </div>
                            <div class="col-md-8">
                                <h1><b>Javascript Disabled</b></h1>
                                <h3><b>You don't have javascript enabled. Please enable it and reload the page</b></h3>
                            </div>
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
            Created by: Eric Joseph P. Flores, Alonzo Francisco Locsin, RJ Panaguiton </p>
            </div>
            <div class="col-xs-3" id="social" style="">
                    <a href="https://www.facebook.com/PepsiPhilippines" class="fa fa-facebook"></a> 
                    <a href="http://bit.ly/CareersatPCPPI" class="fa fa-linkedin" style="margin-left: 2%;">
                    </a> 
            </div> 
        </div> 
    </footer>
    </div>
</body>
</html>