<?php $__env->startSection('content'); ?>
<div class="container">
    <div id="search-header" >
        <div class="row">
            <h3>FIND YOUR CAREER</h3>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="job" placeholder="Job">
            </div>
            <div class="form-group col-md-4">
                <select class="form-control" id="loc">
                    <option>Region 1</option>
                    <option>Region 2</option>
                    <option>Region 3</option>
                    <option>Region 4</option>
                    <option>Region 5</option>
                </select>
            </div>
            <div class="col-md-4">
                <a href="careers-search" class="btn btn-primary col-md-12" role="button">Search</a>
            </div>
        </div>
        <div class="row" id="padbot">
            <h4>Can't find any vacant position in desired location and position? Leave your resume <a id="bank" href="careers-bankform"> here</a>.  </h4>
            <!-- <button type="button" class="btn btn-primary">Upload</button> -->
        </div>
    </div>
    <div id="search-results" class="full-height" style="width: 100%; height: 1024px;">
        <div class="panel panel-default"> 
            <div class="panel-heading">
                <h1> Sales Manager </h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Mindanao</h3>
                        <h3>Manages sales</h3>
                    </div>
                    <div class="col-md-2" style="padding-top: 15px;">
                        <a href="careers-proform" class="btn btn-warning btn-lg col-xs-offset-1" role="button">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>