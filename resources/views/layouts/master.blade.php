<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<!--
    This website was created by interns as part of their Internship in PCPPI. The developers
    are Eric Joseph P. Flores, Alonzo Francisco Locsin and, RJ Panaguiton. All are 3rd Year
    Computer Science Students in University of The Philippines Visayas. 

    This project was created using the Laravel Framework(https://laravel.com/).
    This project contains only basic functionalities for a Careers website. The developers allow 
    other developers to update,edit, and add other functions to this project.

    All CSS files and JS are stored in the public folder. 

-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This Careers Website is for PCPPI Vacancies only">
    <meta name="keywords" content="Pepsi Philippines, PCPPI Careers, Careers, Pepsi-Cola Philippines Inc.">
    <meta name="author" content="Eric Joseph P. Flores, Alonzo Francisco Locsin, RJ Panaguiton">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PCPPI Careers</title>
    <link rel="icon" type="image/ico" href="/img/pcppi3.ico" />

    <!-- Styles -->
    @yield('head')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/social.css">
    <link rel="stylesheet" type="text/css" href="/css/scroll.css">
    <link rel="stylesheet" type="text/css" href="/css/w3schools.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/css/scrolling-nav.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
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
                            <li class=""><a href="/careers-home">Home</a></li>
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
            @yield('content')
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
        <footer class="container text-center">
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
    </div>
</body>
</html>

