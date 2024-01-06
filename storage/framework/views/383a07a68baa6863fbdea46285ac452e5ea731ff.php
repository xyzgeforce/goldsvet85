<?php $__env->startSection('page-title', trans('app.add_shop')); ?>
<?php $__env->startSection('page-heading', trans('app.add_shop')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">
        <?php echo Form::open(['route' => 'backend.shop.admin_store', 'files' => true, 'id' => 'user-form']); ?>


        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.add_shop'); ?></h3>
            </div>

            <div class="box-body">
                <?php $__currentLoopData = ['5' => 'agent', '4' => 'distributor', 'shop' => 'shop', '3' => 'manager', '2' => 'cashier']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role_id=>$role_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($role_id == 'shop'): ?>
                        <h4><?php echo app('translator')->get('app.shop'); ?></h4>
                        <?php echo $__env->make('backend.shops.partials.base', ['edit' => false, 'profile' => false, 'balance' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                        <h4><?php echo e(strtoupper($role_name)); ?></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo app('translator')->get('app.username'); ?></label>
                                    <input type="text" class="form-control" id="username" name="<?php echo e($role_name); ?>[username]" placeholder="(<?php echo app('translator')->get('app.optional'); ?>)" value="<?php echo e(old($role_name)['username']); ?>">
                                </div>
                            </div>
                            <?php if($role_name != 'cashier' && $role_name != 'manager'): ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><?php echo e(trans('app.balance')); ?></label>
                                        <input type="text" class="form-control" id="balance" name="<?php echo e($role_name); ?>[balance]" value="<?php echo e(old($role_name)['balance']?:0); ?>">
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('app.password')); ?></label>
                                    <input type="password" class="form-control" id="password" name="<?php echo e($role_name); ?>[password]" value="<?php echo e(old($role_name)['password']); ?>">
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>


                    <hr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <h4><?php echo app('translator')->get('app.users'); ?></h4>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.count'); ?></label>
                            <?php echo Form::select('users[count]', [1=>1,5=>5,10=>10,25=>25,50=>50,100=>100], old('users')['count'] , ['class' => 'form-control']); ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.balance'); ?></label>
                            <input type="text" class="form-control" id="title" name="users[balance]" value="<?php echo e(old('users')['balance']?:0); ?>">
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">
                        <?php echo app('translator')->get('app.add_shop'); ?>
                    </button>
                </div>

            </div>



        </div>

        <?php echo Form::close(); ?>

    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/shops/admin.blade.php ENDPATH**/ ?>