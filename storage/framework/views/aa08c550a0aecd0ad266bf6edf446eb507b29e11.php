<?php $__env->startSection('page_header'); ?>
    <h1 class="page-title">
        <i class="<?php echo e($dataType->icon); ?>"></i> Viewing <?php echo e(ucfirst($dataType->display_name_singular)); ?>

    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered" style="padding-bottom:5px;">

                    <!-- /.box-header -->
                    <!-- form start -->


                    <?php $__currentLoopData = $dataType->readRows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title"><?php echo e($row->display_name); ?></h3>
                        </div>

                        <div class="panel-body" style="padding-top:0;">
                            <?php if($row->type == "image"): ?>
                                <img style="max-width:640px"
                                     src="<?php echo Voyager::image($dataTypeContent->{$row->field}); ?>">
                            <?php elseif($row->type == 'date'): ?>
                            <?php echo e(\Carbon\Carbon::parse($dataTypeContent->{$row->field})->format('F jS, Y h:i A')); ?>

                            <?php else: ?>
                                <p><?php echo e($dataTypeContent->{$row->field}); ?></p>
                            <?php endif; ?>
                        </div><!-- panel-body -->
                        <?php if(!$loop->last): ?>
                            <hr style="margin:0;">
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">User Role</h3>
                    </div>

                    <div class="panel-body" style="padding-top:0;">
                        <p><?php echo e($dataTypeContent->role->display_name); ?></p>
                    </div>


                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>