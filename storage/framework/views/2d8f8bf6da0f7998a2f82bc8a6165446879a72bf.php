<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <?php echo $__env->yieldContent('head'); ?>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




        <style type="text/css">

        #submit-btn{
                padding-bottom: 10px;
            }

        #relation{
            visibility: hidden;
        }

        .jumbotron{
            /*background-image: url("img/HOMEbg-1.jpg");*/      
            padding-top: 200px;
            padding-bottom: 200px; 
            background-repeat: no-repeat; 
            background-image: url('img/HOMEbg-1.jpg') ;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            height:100%;
        }

        body{
            font-family: 'Quicksand', sans-serif;
            padding-top: 0px;
            background-color: #7fd6ff;
            background-image: url(img/bubbles.gif);
            background-size: cover;
        }

        body,html{
            height: 100%;
        }

        /*.navbar-brand .logo{
            width: 30px;
            height: 30px;
            padding: 0;
        }*/

        .navbar-brand {
            padding: 0;
        }

        #map {
            height: 100vh;
            width: 70%;
            margin-top: 20px;
            border: solid white 5px;
        }

        .navbar{
            margin-bottom: 0;
            /*height: 7em;*/
            border-bottom: 5px solid rgb(0, 133, 202);
            background-color: white;
            padding: 0;
        }

        #pcppi {
            font-weight: bold;
        }



        @media(max-width: 1000px){
            /*#pcppi{
                display: none;
            }*/

            .logo-bar{
                width: 100px;
            }
        }
                #next, #section {
            padding: 40px 30px;
        }

        @media(max-width:768px){  

            #addskill{
                position: relative;
                left: 20px;
            }

            #search{
                padding-bottom: 10px;
            }

            .navbar {
                min-height:7em;
                padding-bottom: 10px;
            }

            .navbar-brand .logo{
                width: 10px;
                height: 10px;
                margin-top: -20px;
            }

            #logo{/*
                padding-bottom: 30px;*/
            }

            #addwork{
                position: relative;
                left: -180px;
                top: 20px;
            }

            #relation{
                visibility: visible;
            }

            .jumbotron{
                padding-bottom: 0px;
                padding-top: 40px;
                background-size: cover;
            }

            #items>li{ display: block; text-align: center; }
            #items{
                /*border: solid black 2px;*/
                width: 100%;
                margin-right: auto;
                margin-left: auto;
            }

            #sk{
                padding-top: 10px;
            }

            a > img {
                width: 60%;
            }

            .col-sm-4 > img {
                width: 75%;
                display: block;
                margin: auto;
            }

            .w3-circle {
                bottom: 6px;
            }

            

            body, h1, h2, h3, h4, li, p, label{
            font-size: 90%;
            }

            .btn, .btn-danger {
                padding: 5px 10px;
                font-size: 10px;
                border-radius: 10px;
            }

            #btnpad{
                padding-top: 10px;                
            }

            #logo {
                margin-top: 2px; 
                height: 70px;
                width: 66px;
            }

        }

        @media (min-width: 767px) {
            .navbar{
                margin-bottom: 0;
                min-height:7em;
                border-bottom: 5px solid rgb(0, 133, 202);
                background-color: white;
            }



        }

        @media (max-width: 480px) {
            .col-sm-4 > img {
                width: 45%;
                display: block;
                margin: auto;
            }

            #logo {
                height: 38px;
                width: 34px;
            }

            .navbar {
                padding: 0;
            }

            #pcppi {
                font-size: 10px;
            }

            .navbar {
                height: 20px;
            }



            #next, #section {
                padding: 30px 20px;
            }

            .glyphicon.glyphicon-chevron-down {
                font-size: 7px;
                padding: 1px
            }

            .btn {
                padding: 1px 2px;
            }

            body {
                font-size: 55%;
            }
        }

        .navbar-nav{
            /*height: 100%;*/
            margin-top: 2%;
            text-align: center;
            float: right;
        }

        #navbar{
            padding-bottom: 10px;
        }

        /*.navbar-brand,*/
        .navbar-nav li a {
            line-height: 50px;
            height: 50px;
            padding-top: 0;
            padding-bottom: 0;
            margin-bottom: 10px;
        }

        .navbar-nav > li{
            font-size: 15px;
        }

        /*#logo{
            height: 77px;
            width: 73px;
        }*/

        .logo-bar{
            margin-left: 0%;
            width: 100%;

        }

        footer .logo-footer {
            font-size: 20px;
            /*margin-bottom: 10px;*/
            padding-top: 10px;
        }

        footer{
            background-color: white;
        }

        #logo-footer{
            /*padding-top: 20px;*/
            width: 95px;
            height: 100px;
        }


        .glyphicon.glyphicon-check {
            color: green;
            font-size: 100px;
            text-align: center;
            display:block;
        }

        #title{
            text-align: center;
        }  

        #padtop{
            padding-top: 30px;
        }   

        #padbot{
            padding-bottom: 30px;
        }

        #sxspad{
            padding-bottom: 30px;
        }

        #btnpad{
            padding-top: 20px;
            padding-bottom: 60px;
        }

        #titlepad{
            padding-top: 60px;
            text-align: center;
        }

        footer{
            padding: 10px;
        }

        .footer-links{
            width: 40px;
            height: 40px;
            /*margin-left: 100px;*/
        }

        #external-sites{
            position: relative;
            top: 40px;
            right: 250px;
            /*right: 10%;
            left: 20%;*/
            /*padding-left: 50px;*/
        }

        #external-sites img {
            /*margin-left: 60px;*/
        }

        #links,a > img:hover{ position: relative; 
             top: -5px;} 

        #items>li>a:hover{ position: relative; 
             top: -5px;} 

        #links{
            position: relative;
            left: 40px;
        }

        #search-bar{
            margin-top: 50px;
        }

        /* diri ka nag add */

        .img-responsive {
            padding: auto;
            display: block;
        }



        .bg-grey {
            background-color: #f6f6f6;
        }

        .thumbnail {
            border: 1px solid #0A62EA;
            border-radius: 20px;
            transition: box-shadow 0.5s;
            padding: 10px;
        }

        .thumbnail > img {
            border-radius: 20px 20px 0 0;
        }

        .thumbnail:hover {
            box-shadow: 5px 0px 20px black;
        }

        .slideanim { visibility: hidden; }

        .slide {
            animation-name: slide;
            -webkit-animation-name:slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }

        @keyframes  slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @media  screen and (max-width:  768px) {
            .col-sm-4 {
                text-align: center;
                margin: 2-5px 0;
            }
        }

        
    </style>

    <!-- Scripts -->
    <!-- <script src="<?php echo e(asset('js/app.js')); ?>"></script> -->
    <!-- <script type="text/javascript" src="/js/js.js"></script>
    <script type="text/javascript" src="/js/script.js"></script> -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/validation/validator.js"></script>
    <script src="js/validation/proform.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body id="page-top">
    <div id="app" >
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button id="navbar-button" type="button" class="navbar-toggle" data-toggle="collapse" data-target =".navbar-collapse" style="background-color: grey; text-align: center;">
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>     
                    </button>
                    <a class="navbar-brand" href="https://www.pepsiphilippines.com/index.php" style="padding:6px 10px;">
                    <div class="logo-bar">                        
                        <img class="logo responsive visible-sm" id="logo" src="/img/small-logo.png" />
                        <img class="logo responsive hidden-sm" id="logo" src="/img/pcppi3.png" />
                        <span id="pcppi"> Pepsi-Cola Products Philippines Inc. </span>
                    </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul id="items" class="nav navbar-nav">
                        <li class="active"><a href="https://www.pepsiphilippines.com/index.php" target="_blank">Home</a></li>
                        <li><a href="https://www.pepsiphilippines.com/company.php" target="_blank">Our Company</a></li>
                        <li><a href="https://www.pepsiphilippines.com/products.php" target="_blank">Products</a></li>
                        <li><a href="">Engagements</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Careers <span class="caret"></span></a>
                            <ul id="dropdown-menu" class="dropdown-menu">
                                <li><a href="careers-home">Careers Home</a></li>
                                <li><a href="careers-internform">Internships</a></li>
                                <li><a href="careers-map">Professionals</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>       
        </nav>
        <?php echo $__env->yieldContent('content'); ?>
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
                        width: 90%;
                        padding-bottom: 110px;
                        padding-top: 110px;
                    }

                </style>
                <div id="nojs">
                    <div class="row">
                        <div class="col-sm-4 sidep slide">
                            <img id="jsimg" class="center-block" src="img/pepsi.png" alt="pic">
                        </div>
                        <div class="col-sm-8">
                            <br><br><h1>Javascript Disabled</h1><br><br>
                            <h3>You don't have javascript enabled. Please enable it and reload the page</h3>
                        </div>
                    </div>
                </div>
        </div>
    </noscript>

    <footer class="text-center" >
        <div class="container" >
            <div style="margin-left: 11%; padding-bottom: 10px;">
                <a style="text-decoration: none;" href="https://www.pepsiphilippines.com/index.php">
                    <img class="logo-footer responsive" id="logo-footer" src="/img/1.png" />
                </a>
                <span class="" style="position: relative; left: 10%;">
                <a style="text-decoration: none;" href="https://www.facebook.com/PepsiPhilippines">
                    <img id="linkedin-link" class="footer-links" src="/img/fb.png" />
                </a> 
                <a href="#" style="margin-left: 2%;">
                    <img id="fb-link" class="footer-links" src="/img/linkedin.png"  />
                </a> 
                </span>  
            </div>
            <p> Copyright © 2017. Pepsi-Cola Products Philippines, Inc. All Rights Reserved. </p>
        </div> 
    </footer>


</body>
</html>
