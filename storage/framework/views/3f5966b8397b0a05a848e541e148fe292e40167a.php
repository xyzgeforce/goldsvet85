<?php $__env->startSection('page-title', trans('app.pyour_withdraw')); ?>
<?php $__env->startSection('page-heading', trans('app.pyour_withdraw')); ?>

<?php $__env->startSection('content'); ?>

<section class="content-header">
    <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<section class="content">
    <div class="tableList">
        <table class="table bg-white text-center">
            <thead>
                <tr>
                    <th scope="col">UserName</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Wallet</th>
                    <!-- <th scope="col">Shop</th> -->
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Confirmed At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $withdraws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="fw-bold">
                    <td><?php echo e($w->user->username); ?></td>
                    <td><?php echo e($w->amount); ?> <?php echo e($w->currency); ?></td>
                    <td><?php echo e($w->wallet); ?></td>
                    <!-- <td><?php echo e($w->shop->name); ?></td> -->
                    <td><?php echo e($w->status ? ($w->status == 2 ? 'Approve' : 'Reject') : 'Pending'); ?></td>
                    <td><?php echo e($w->created_at); ?></td>
                    <td><?php echo e($w->confirmed_at ?: ''); ?></td>
                    <td>
                        <?php if($w->status == 'Pending'): ?>
                            <a href="<?php echo e(route('backend.withdraw.approve', ['id' => $w->id])); ?>" class="btn btn-inline btn-success btn-xs">Approve</a>
                            <a href="<?php echo e(route('backend.withdraw.reject', ['id' => $w->id])); ?>" class="btn btn-inline btn-danger btn-xs" style="margin-left: 10px">Reject</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($withdraws) == 0): ?>
                <tr>
                    <td colspan="10">
                        <div class="noData">
                            No diplay data.
                        </div>
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/withdraw/list.blade.php ENDPATH**/ ?>