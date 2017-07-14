<?php $__env->startSection('content'); ?>
<div class="container">
    <div id="search-header" >
        <div class="row">
            <h3>FIND YOUR CAREER</h3>
        </div>
        <div class="row">
            <form method="GET" action="/careers-search">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="job" id="job" placeholder="Job">
                </div>
                <div class="form-group col-md-4">
                    <select class="form-control" id="region" name="region">
                        <option value="0">All Regions</option>
                        <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($region->id); ?>"><?php echo e($region->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="submit" class="btn btn-primary col-md-12" value="Search" />
                </div>
            </form>
        </div>
        <div class="row" id="padbot">
            <h4>Can't find any vacant position in desired location and position? Leave your resume <a id="bank" href="careers-bankform"> here</a>.  </h4>
            <!-- <button type="button" class="btn btn-primary">Upload</button> -->
        </div>
    </div>
    <div id="search-results" class="full-height" style="width: 100%; height: 1024px; background-color: white;">
        <?php $__empty_1 = true; $__currentLoopData = $vacancies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vacancy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="panel panel-default"> 
            <div class="panel-heading">
                <h1> <?php echo e($vacancy->position); ?> </h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-10">
                        <h3><?php echo e($vacancy->region_id); ?></h3>
                        <h3><?php echo e($vacancy->description); ?></h3>
                    </div>
                    <div class="col-md-2" style="padding-top: 15px;">
                        <a href="careers-proform/<?php echo e($vacancy->id); ?>" class="btn btn-warning btn-lg col-xs-offset-1" role="button">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1> No Vacancies Found </h1>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>