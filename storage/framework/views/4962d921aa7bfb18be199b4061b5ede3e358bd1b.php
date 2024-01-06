<?php $__env->startComponent('mail::message'); ?>
# Hello Admin, 

There is new withdrawal request from user <?php echo e($details['username']); ?>.<br>
below is more details about withdrawal request.

Amount: <?php echo e($details['amount']); ?><br>
Currency: <?php echo e($details['currency']); ?>


Thank you!!<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\OpenServer\domains\localhost\resources\views/emails/user_withdraw_request.blade.php ENDPATH**/ ?>