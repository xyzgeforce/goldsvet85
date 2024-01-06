<?php $__env->startSection('page-title', trans('app.terminal')); ?>
<?php $__env->startSection('page-heading', trans('app.terminal')); ?>

<?php $__env->startSection('content'); ?>

<section class="content-header">
    <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<section class="content">
    <div class="subuheader">
        <div class="row">
            <div class="col-md-6">
                <div class="heading"><?php echo app('translator')->get('app.atm'); ?></div>
            </div>
            <div class="col-md-6 text-right">
                <?php if($response['atms']): ?>
                <?php if($response['atms']->atm_status=='active'): ?>
                <a href="<?php echo e(url('backend/atm/status/'.encoded('inactive'))); ?>" class="btn btn-success"
                    onclick="return confirm('Are you sure to inactive this ATM?')"><i class="fa fa-check-circle"></i>
                    Active</a>
                <?php else: ?>
                <a href="<?php echo e(url('backend/atm/status/'.encoded('active'))); ?>" class="btn btn-warning"
                    onclick="return confirm('Are you sure to active this ATM?')"><i class="fa fa-times-circle"></i> In
                    Active</a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="tableList">
        <table class="table bg-white text-center">
            <thead>
                <tr>
                    <th scope="col">ATM Name</th>
                    <th scope="col">In</th>
                    <th scope="col">Out</th>
                    <th scope="col">Recycle</th>
                    <th scope="col">Rec 5<?php echo e($response['shop']->currency); ?></th>
                    <th scope="col">Rec 10<?php echo e($response['shop']->currency); ?></th>
                    <th scope="col">Rec 20<?php echo e($response['shop']->currency); ?></th>
                    <th scope="col">Rec 50<?php echo e($response['shop']->currency); ?></th>
                    <th scope="col">Rec 100<?php echo e($response['shop']->currency); ?></th>
                    <th scope="col">Rec 200<?php echo e($response['shop']->currency); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php if($response['atms']): ?>
                <tr class="fw-bold">
                    <td><?php echo e($response['atms']->atm_name); ?></td>
                    <td><?php echo e(number_format(floatval($response['atms']->atm_in), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($response['atms']->atm_out), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($response['atms']->atm_recycle), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($response['atms']->atm_rec_5), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($response['atms']->atm_rec_10), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($response['atms']->atm_rec_20), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($response['atms']->atm_rec_50), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($response['atms']->atm_rec_100), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($response['atms']->atm_rec_200), 2, '.', '')); ?></td>
                </tr>
                <?php else: ?>
                <tr>
                    <td colspan="10">
                        <div class="noData">
                            No ATM found! <a href="<?php echo e(url('backend/atm/create')); ?>" class="btn btn-danger btn-sm">Create
                                new ATM</a>
                        </div>
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php if($response['atms']): ?>
        <div class="text-center">
            <a href="<?php echo e(url('backend/atm/reset')); ?>" class="btn btn-primary"
                onclick="return confirm('Are you sure to reset ATP?')"><i class="fa fa-history"></i> Reset</a>
            <a href="<?php echo e(url('backend/atm/newkey/'.encoded($response['atms']->api_key_id))); ?>"
                class="btn btn-success ml-1 mr-1" onclick="return confirm('Are you sure to generate new key?')"><i
                    class="fa fa-key"></i> New KEY</a>
            <a href="<?php echo e(url('backend/atm/delete/'.encoded($response['atms']->id).'/'.encoded($response['atms']->api_key_id))); ?>"
                class="btn btn-danger " onclick="return confirm('Are you sure to delete ATP?')"><i
                    class="fa fa-trash"></i> Delete</a>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/atm/list.blade.php ENDPATH**/ ?>