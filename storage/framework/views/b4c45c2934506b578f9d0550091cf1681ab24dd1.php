<?php $__env->startSection('content'); ?>

<div class="jumbotron text-center">
    <h1>Company</h1>
    <p>Blablablablablablablablabla</p>
    <a class="btn btn-default page-scroll" href="#next"><span class="glyphicon glyphicon-chevron-down"></span></a>
</div>           
<div id="next" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h1>Why Join Pepsi?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-sm-4">
            <img src="/img/1.png" alt="pic">
        </div>
    </div>
</div>

<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
            <img src="/img/1.png" alt="pic">
        </div>
        <div class="col-sm-8">
            <h1>Our Company</h1>
            <p>Pepsi-Cola Products Philippines Inc. is the exclusive bottler of PepsiCo beverages in the Philippines, with a relationship spanning 66 years. Lotte Chilsung, one of the biggest beverage companies in South Korea, is the lead shareholder of PCPPI as an independently-listed company and co-manages it with PepsiCo. PCPPI manufactures and sells well-known brands such as Pepsi-Cola, Mountain Dew, 7-Up, Mirinda, Mug, Gatorade, Tropicana, Lipton, Sting, and Premier. It has established manufacturing facilities across the country, serving at least 500,000 outlets and providing employment through its extensive distribution network.</p>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>