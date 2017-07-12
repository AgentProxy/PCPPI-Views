<footer class="app-footer">
    <div class="site-footer-right">
        <?php if(rand(1,100) == 17): ?>
            <i class="voyager-beer"></i> Made by Alabang Bros &trade;
        <?php else: ?>
            Copyright 2017. Pepsi-Cola Products Philippines, Inc. All Rights Reserved.
        <?php endif; ?>
        <?php  $version = Voyager::getVersion();  ?>
        <?php if(!empty($version)): ?>
            - <?php echo e($version); ?>

        <?php endif; ?>
    </div>
</footer>
