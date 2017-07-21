<?php $__env->startSection('content'); ?>
<div id="section" class="container">
    <div id="search-header" >
        <div class="row">
            <h3>FIND YOUR CAREER</h3>
        </div>
        <div class="row">
            <form method="GET" action="/careers-retrieve">
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" name="job" id="job" placeholder="Job" value="<?php echo old('job'); ?>">
                </div>
                <div class="form-group col-md-3">
                    <select class="form-control" id="region" name="region">
                        <option value="0" >All Regions</option>
                        <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($region->id); ?>" <?php if($region_id==$region->id): ?> selected="selected" <?php endif; ?>><?php echo e($region->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <select class="form-control" name="function" id="function">
                        <option value="0">All Functions</option>
                        <?php $__currentLoopData = $functions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $function): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($function->id); ?>" <?php if($function_id==$function->id): ?> selected="selected" <?php endif; ?>><?php echo e($function->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="submit" class="btn btn-primary col-md-12" value="Search" />
                </div>
            </form>
        </div>
        <div class="row" id="padbot">
            <h4>Can't find any vacancy in desired region and position? Leave your resume <a id="bank" href="/careers-bankform"> here</a>.  </h4>
        </div>
    </div>
    <div id="search-results" class="full-height" style="width: 100%; background-color: white;">
        <?php $__empty_1 = true; $__currentLoopData = $vacancies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vacancy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="panel panel-default"> 
            <div class="panel-heading">
                <h1> <?php echo e($vacancy->position); ?> </h1>
            </div>
            <div class="panel-body">
                <div id="viewjob" class="row">
                    <div class="col-md-10">
                        <h3>Location: <?php echo e($vacancy->regions->name); ?></h3>
                        <h3>Function: <?php echo e($vacancy->functions->name); ?></h3> 
                        <h4><?php echo e($vacancy->description); ?></h4>
                    </div>
                    <div class="col-md-2" style="padding-top: 15px;">
                        <a href="careers-proform/<?php echo e($vacancy->id); ?>" class="btn btn-view btn-cherry btn-lg col-xs-offset-1" role="button">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1 style="text-align: center;"> No Vacancies Found </h1>
        <?php endif; ?>
    </div>
    <div style="text-align: center;">
        <div class="pagination" style="margin: auto;"> <?php echo e($vacancies->links()); ?> </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>