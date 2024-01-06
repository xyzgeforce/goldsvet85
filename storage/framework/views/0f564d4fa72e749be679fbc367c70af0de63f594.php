<?php $__env->startSection('page-title', trans('app.general_settings')); ?>
<?php $__env->startSection('page-heading', trans('app.general_settings')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">

        <div class="box box-default">
            <?php echo Form::open(['route' => ['backend.settings.list.update', 'auth'], 'id' => 'general-settings-form']); ?>

            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.general_settings'); ?></h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.reset_token_lifetime'); ?>
                            </label>
                            <input type="number" step="0.0000001" name="login_reset_token_lifetime" class="form-control" value="<?php echo e(settings('login_reset_token_lifetime', 30)); ?>">
                        </div>
                        <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.use_email'); ?>
                            </label>
                            <?php echo Form::select('use_email', ['0' => __('app.no'), '1' => __('app.yes')], settings('use_email'), ['class' => 'form-control']); ?>

                        </div>

                        <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.reset_authentication'); ?>
                            </label>
                            <?php echo Form::select('reset_authentication', ['0' => __('app.no'), '1' => __('app.yes')], settings('reset_authentication'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.maximum_number_of_attempts'); ?>
                                <small class="text-muted"><?php echo app('translator')->get('app.max_number_of_incorrect_login_attempts'); ?></small>
                            </label>
                            <input type="number" step="0.0000001" name="throttle_attempts" class="form-control" value="<?php echo e(settings('throttle_attempts', 10)); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.lockout_time'); ?></label>
                            <input type="number" step="0.0000001" name="throttle_lockout_time" class="form-control" value="<?php echo e(settings('throttle_lockout_time', 1)); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.throttle_authentication'); ?></label>
                            <?php echo Form::select('throttle_enabled', ['0' => __('app.no'), '1' => __('app.yes')], settings('throttle_enabled'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.allow_registration'); ?></label>
                            <?php echo Form::select('reg_enabled', ['0' => __('app.no'), '1' => __('app.yes')], settings('reg_enabled'), ['class' => 'form-control']); ?>

                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.forgot_password'); ?></label>
                            <?php echo Form::select('forgot_password', ['0' => __('app.no'), '1' => __('app.yes')], settings('forgot_password'), ['class' => 'form-control']); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    <?php echo app('translator')->get('app.edit_settings'); ?>
                </button>



            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/settings/auth.blade.php ENDPATH**/ ?>