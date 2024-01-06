<?php $__env->startSection('title', 'Site is Closed'); ?>

<?php $__env->startSection('content'); ?>
    <div class="title"><?php echo app('translator')->get('app.site_is_closed'); ?></div>
    <div class="reason"><?php echo app('translator')->get('app.we_will_back_soon'); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('system.layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/system/pages/siteisclosed.blade.php ENDPATH**/ ?>