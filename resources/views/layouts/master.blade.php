<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @yield('head')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <style type="text/css">

        body{
            padding-top: 130px;
            
        }

        body,html{
            height: 100%;
        }

        .navbar-brand .logo{
            width: 30px;
            height: 30px;
            padding: 0;
        }

        .navbar{
            margin-bottom: 0;
            /*height: 7em;*/
            border-bottom: 5px solid rgb(0, 133, 202);
            background-color: white;
        }

        #pcppi {
            font-weight: bold;
        }

        @media(max-width: 1000px){
            #pcppi{
                display: none;
            }

            .logo-bar{
                width: 100px;
            }
        }

        @media(max-width:768px){   
            .navbar {min-height:7em;}
        }

        @media (min-width: 767px) {
            .navbar{
                margin-bottom: 0;
                
                border-bottom: 5px solid rgb(0, 133, 202);
                background-color: white;
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

        #logo{
            height: 77px;
            width: 73px;
        }

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

/*<<<<<<< HEAD*/
        .glyphicon.glyphicon-check {
            color: green;
            font-size: 100px;
            text-align: center;
            display:block;
        }

        #title{
            text-align: center;
        }     

        #padbot{
            padding-bottom: 30px;
        }

        #pad{
            padding-top: 30px;
            padding-bottom: 30px;
        }

        #btnpad{
            padding-top: 15px;
            padding-bottom: 60px;
        }

        #titlepad{
            padding-top: 60px;
            text-align: center;
        }
/*=======*/
        footer{
            padding: 10px;
        }

        .footer-links{
            width: 40px;
            height: 40px;
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

        #links,a img:hover{ position: relative; 
             top: -5px;} 

        #links{
            position: relative;
            left: 40px;
        }
/*>>>>>>> 19fc61fa7714cbe2e3499172173a28214ef30f5e*/

    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
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
    
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>


</head>
<body id="page-top">
    <div id="app">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target ="#navbar" style="background-color: grey; margin-top: 5%; text-align: center;">
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>     
                    </button>
                    <a class="navbar-brand" href="https://www.pepsiphilippines.com/index.php">
                    <div class="logo-bar">                        
                        <img class="logo responsive" id="logo" src="/img/pcppi3.png" /> <span id="pcppi"> Pepsi-Cola Products Philippines Inc. </span>
                    </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul id="items" class="nav navbar-nav">
                        <li><a href="https://www.pepsiphilippines.com/index.php" target="_blank">Home</a></li>
                        <li><a href="https://www.pepsiphilippines.com/company.php">Our Company</a></li>
                        <li><a href="https://www.pepsiphilippines.com/products.php">Products</a></li>
                        <li><a href="">Engagements</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Careers <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="careers-home">Careers Home</a></li>
                                <li><a href="careers-internform">Internships</a></li>
                                <li><a href="careers-proform">Professionals</a></li>
                                <li><a href="careers-search">Search Careers</a></li>
                            </ul>
                           <!--  <li class="active"><a href="/careers-home"> Careers </a></li> -->
                        </li>
                    </ul>
                </div>

            </div>       
        </nav>

        @yield('content')
    </div>

    <footer class="container-fluid text-center center-block ">
        <div id="links">
            <a href="https://www.pepsiphilippines.com/index.php">
                <img class="logo-footer responsive" id="logo-footer" src="/img/1.png" />
            </a>
            <div id="external-sites" class="pull-right">
                <a href="https://www.facebook.com/PepsiPhilippines">
                    <img class="footer-links" src="/img/fb.png" />
                </a> 
                <a href="#">
                    <img class="footer-links" src="/img/linkedin.png" style="position: relative; left: 50px;" />
                </a> 
            </div>
        </div> 
        <p> Copyright © 2017. Pepsi-Cola Products Philippines, Inc. All Rights Reserved. </p>
    </footer>


</body>
</html>
