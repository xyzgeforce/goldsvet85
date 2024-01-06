<?php $__env->startSection('page-title', trans('app.general_settings')); ?>
<?php $__env->startSection('page-heading', trans('app.general_settings')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">

        <div class="box box-default">
            <?php echo Form::open(['route' => ['backend.settings.list.update', 'sms'], 'id' => 'general-settings-form']); ?>

            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.general_settings'); ?></h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.smsto_client_api_key'); ?></label>
                            <input type="text" class="form-control" name="smsto_client_api_key" value="<?php echo e(settings('smsto_client_api_key')); ?>">
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.smsto_client_id'); ?></label>
                            <input type="text" class="form-control" name="smsto_client_id" value="<?php echo e(settings('smsto_client_id')); ?>">
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.smsto_client_secret'); ?></label>
                            <input type="text" class="form-control" name="smsto_client_secret" value="<?php echo e(settings('smsto_client_secret')); ?>">
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.smsto_limit'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" name="smsto_limit" value="<?php echo e(settings('smsto_limit')); ?>">
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.smsto_time'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" name="smsto_time" value="<?php echo e(settings('smsto_time')); ?>">
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.smsto_alert_phone'); ?></label>
                            <div class="input-group">
                                <span class="input-group-addon">+</span>
                                <input type="text" class="form-control onlynumber" name="smsto_alert_phone" value="<?php echo e(settings('smsto_alert_phone')); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.smsto_alert_phone'); ?> #2</label>
                            <div class="input-group">
                                <span class="input-group-addon">+</span>
                                <input type="text" class="form-control onlynumber" name="smsto_alert_phone_2" value="<?php echo e(settings('smsto_alert_phone_2')); ?>">
                            </div>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/settings/sms.blade.php ENDPATH**/ ?>