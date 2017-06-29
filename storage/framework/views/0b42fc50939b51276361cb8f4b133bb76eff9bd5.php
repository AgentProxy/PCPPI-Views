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
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <style type="text/css">

        html,body{
            height: 100%;
            height:100vh;
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

        /*.navbar-brand,*/
        .navbar-nav li a {
            line-height: 70px;
            height: 70px;
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
            padding: 10px;
        }

        #logo-footer{
            /*padding-top: 20px;*/
            width: 100px;
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

        .footer-links{
            width: 40px;
            height: 40px;
        }

        #links,a img:hover{ position: relative; 
             top: -5px;} 

    </style>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script type="text/javascript" src="/js/js.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-static-top">
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
                                <li class="active"><a href="#">Careers Home</a></li>
                                <li><a href="#">Internships</a></li>
                                <li><a href="#">Professionals</a></li>
                                <li><a href="#">Search Careers</a></li>
                            </ul>
                           <!--  <li class="active"><a href="/careers-home"> Careers </a></li> -->
                        </li>
                    </ul>
                </div>

            </div>       
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="container-fluid text-center">
        <div id="links">
            <a href="https://www.pepsiphilippines.com/index.php">
                <img class="logo-footer responsive" id="logo-footer" src="/img/1.png" />
            </a>
            <div id="external-sites">
                <a href="https://www.facebook.com/PepsiPhilippines">
                    <img class="footer-links" src="/img/fb.png" />
                </a>
                <a href="#">
                    <img class="footer-links" src="/img/linkedin.png" />
                </a>
            </div>
        </div> 
        <p> Copyright © 2017. Pepsi-Cola Products Philippines, Inc. All Rights Reserved. </p>
    </footer>


</body>
</html>
