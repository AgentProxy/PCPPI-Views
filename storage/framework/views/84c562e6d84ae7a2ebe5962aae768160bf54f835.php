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

        body{
            background-color: grey;
        }
    </style>

    <!-- Scripts -->
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target ="#navbar" style="background-color: grey">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>     
                    </button>
                    <a class="navbar-brand" href="/">
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

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>