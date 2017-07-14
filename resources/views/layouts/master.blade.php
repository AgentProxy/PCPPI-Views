<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PCPPI Careers</title>
    <link rel="icon" type="image/ico" href="/img/pcppi3.ico" />

    <!-- Styles -->
    @yield('head')
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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

        body{
            font-family: 'Quicksand', sans-serif;
            padding-top: 0px;
            background-color: #7fd6ff;
           /*/ background-image: url(img/bubbles.gif);*/
            background-size: cover;
        }

        body,html{
            height: 100%;
        }

        #bank{
            text-decoration: underline;
            color: red; 
        }

        /*.navbar-brand .logo{
            width: 30px;
            height: 30px;
            padding: 0;
        }*/

        .navbar-brand {
            padding: 7px 8px;
        }

        #map {
            height: 100vh;
            width: 70%;
            margin-top: 20px;
            border: solid white 5px;
        }

        .navbar{
            margin-bottom: 0;
/*            height: 96px;
*/            border-bottom: 5px solid #008DBB;
            background-color: white;
            padding-top: 2px;
            padding-bottom: 0;
        }

        #logo {
            height: 78px;
            width: 70px;
        }

        #pcppi {
            font-weight: bold;
            font-size: 20px;
        }

        ul#items {
            margin: 0;
            margin-top: 20px;
        }

        #items > li {
            padding: 2px 5px;
            font-size: 16px;
        }

        li.open > ul#dropdown-menu {
            width: 15px;
        }

        #forms-section {
            margin-top: 50px;
        }

        @media(max-width: 991px){
            #relation{
                visibility: visible;
            }

            #viewjob{
                text-align: center;
            }
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

        @media(max-width:767px){  

            #addskill{
                position: relative;
                left: 20px;
            }

            .navbar-collapse {
                background-color: #DFE9FF;
                padding-left: auto;
                padding-right: auto;
             }

            #search{
                padding-bottom: 10px;
            }

          /*  .navbar {
                min-height:7em;
            }*/

            .navbar-brand .logo{
                width: 10px;
                height: 10px;
            }

            #logo{/*
                padding-bottom: 30px;*/
            }

            #addwork{
                position: relative;
                left: -180px;
                top: 20px;
            }

            #items>li { 
                display: block;
                text-align: center;
            }
            #items{
                /*border: solid black 2px;*/
                width: 100%;
                margin-right: auto;
                margin-left: auto;
            }

            ul#items {
                margin-top: 0;
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

           /* .btn, .btn-danger {
                padding: 5px 10px;
                font-size: 10px;
                border-radius: 10px;
            }*/

            #btnpad{
                padding-top: 10px;                
            }

            #logo {
                height: 70px;
                width: 66px;
            }
        }

        /* Desktop */ 

        @media (min-width: 1129px) {
            .navbar {
                height: 96px;
            }

            #items.nav {
                margin-top: 17px;
            }

            #next, #section {
                font-size: 20px;
            }
        }

        /* Medium screens */

        @media (min-width: 1024px) and (max-width: 1128px) {
            #logo {
                height: 75px;
                width: 68px;
                margin: 0;
            }
            #pcppi {
                font-size: 16px;
            }

            #items>li>a {
                padding: 7px;
                font-size: 14px;
            }

            .navbar {
                height: 94px;
            }

            .navbar-brand {
                padding: 8px 7px;
            }

            #items.nav {
                margin-top: 25px;
            }

            #dropdown-menu>li>a {
                font-size: 11px;
            }

            #next, #section {
                font-size: 16px;
            }

        }


        /* Tablets and iPad - vertical */

        @media (min-width: 768px) and (max-width: 1023px) {
            #pcppi {
                font-size: 12px;
                font-weight: bold;
            }

            #logo {
                height: 52px;
                width: 47px;
                margin-right: 0;
            }

            #items>li>a {
                font-size: 12px;
                padding: 5px;
            }

            .navbar {
                height: 5em;
                padding-bottom: 2px;
            }

            .logo-bar {
                padding-top: 5px;
            }

            #dropdown-menu>li>a {
                font-size: 10px;
            }


        }

        /* Mobile - horizontal */

        @media (min-width: 480px) and (max-width: 767px) {
            #pcppi {
                font-size: 11px;
                font-weight: bold;
            }

            #logo {
                height: 38px;
                width: 34px;
            }
/*
            .navbar {
                height: 60px;
            }*/

            .col-sm-4 > img {
                width: 45%;
                display: block;
            }
        }

        /* Mobile - Vertical */

        @media (min-width: 320px) and (max-width: 479px) {
            .col-sm-4 > img {
                width: 45%;
                display: block;
                margin: auto;
            }

            #logo {
                height: 38px;
                width: 34px;
                margin: 0;
            }

            #pcppi {
                font-size: 9px;
                font-weight: bold;
            }

            .navbar {
                padding-top: 4px;
            }

            .navbar-brand {
                padding: 4px 8px;
            }

            .navbar-nav li a {
            line-height: 50px;
            height: 50px;
            padding-top: 0;
            padding-bottom: 0;
            margin-bottom: 0;
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

            #next, #section {
                font-size: 70%;
            }
        }

        /* Smaller than mobile ? */

        @media (max-width: 319px) {
            #pcppi {
                display: none;
            }

            #logo {
                height: 38px;
                width: 34px;
            }

/*            .navbar {
                height: auto;
            }*/
        }

        .navbar-nav{
            /*height: 100%;*/
            margin-top: 2%;
            text-align: center;
            float: right;
        }



        .navbar-nav > li{
            font-size: 15px;
        }

        /*#logo{
            height: 77px;
            width: 73px;
        }*/

        .logo-bar{
            margin-left: 0;
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

        #items>li>a:hover { 
            position: relative; 
            top: -5px;
            background-color: white;
            font-weight: bold;
        } 

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

        @keyframes slide {
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

        @media screen and (max-width:  768px) {
            .col-sm-4 {
                text-align: center;
                margin: 2-5px 0;
            }
        }

        
    </style>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <!-- <script type="text/javascript" src="/js/js.js"></script>
    <script type="text/javascript" src="/js/script.js"></script> -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target =".navbar-collapse" style="background-color: grey; text-align: center;">
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>     
                    </button>
                    <a class="navbar-brand" href="careers-home">
                    <div class="logo-bar">                        
                        <img class="logo responsive" id="logo" src="/img/small-logo.png" />
                        <!-- <img class="logo responsive hidden-lg" id="logo" src="/img/small-logo.png" /> -->
                        <span id="pcppi"> Pepsi-Cola Products Philippines, Inc. - Careers </span>
                    </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul id="items" class="nav navbar-nav">
                        <li class="active"><a href="https://www.pepsiphilippines.com/index.php" target="_blank">Home</a></li>
                        <li class="dropdown clearfix">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Main Website <span class="caret"></span></a>
                            <ul id="dropdown-menu" class="dropdown-menu">
                                <li><a href="https://www.pepsiphilippines.com/company.php">Our Company</a></li>
                                <li><a href="https://www.pepsiphilippines.com/products.php">Products</a></li>
                            </ul>
                        </li>
                        <li><a href="">Engagements</a></li>
                        <li class="dropdown clearfix">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Careers <span class="caret"></span></a>
                            <ul id="dropdown-menu" class="dropdown-menu">
                                <li><a href="careers-internform">Internships</a></li>
                                <li><a href="careers-map">Professionals</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>       
        </nav>
        @yield('content')
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
                <a href="http://bit.ly/CareersatPCPPI" style="margin-left: 2%;">
                    <img id="fb-link" class="footer-links" src="/img/linkedin.png"  />
                </a> 
                </span>  
            </div>
            <p> Copyright © 2017. Pepsi-Cola Products Philippines, Inc. All Rights Reserved. </p>
        </div> 
    </footer>

    <script type="text/javascript">
         // Add slideDown animation to Bootstrap dropdown when expanding.
        $('.dropdown').on('show.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
      });

          // Add slideUp animation to Bootstrap dropdown when collapsing.
        $('.dropdown').on('hide.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
      });
    </script>

</body>
</html>

