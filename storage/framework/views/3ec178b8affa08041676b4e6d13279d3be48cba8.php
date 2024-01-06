<?php $__env->startSection('page-title', trans('app.general_settings')); ?>
<?php $__env->startSection('page-heading', trans('app.general_settings')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">

        <div class="box box-default">
            <?php echo Form::open(['route' => ['backend.settings.list.update', 'banks'], 'id' => 'general-settings-form']); ?>

            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.general_settings'); ?></h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Slots</label>
                            <input type="number" step="0.0000001" class="form-control" name="default_slots" value="<?php echo e(settings('default_slots', 0)); ?>">
                        </div>
                        <div class="form-group">
                            <label>Little</label>
                            <input type="number" step="0.0000001" class="form-control" name="default_little" value="<?php echo e(settings('default_little', 0)); ?>">
                        </div>
                        <div class="form-group">
                            <label>Table</label>
                            <input type="number" step="0.0000001" class="form-control" name="default_table" value="<?php echo e(settings('default_table', 0)); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fish</label>
                            <input type="number" step="0.0000001" class="form-control" name="default_fish" value="<?php echo e(settings('default_fish', 0)); ?>">
                        </div>
                        <div class="form-group">
                            <label>Bonus</label>
                            <input type="number" step="0.0000001" class="form-control" name="default_bonus" value="<?php echo e(settings('default_bonus', 0)); ?>">
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/settings/banks.blade.php ENDPATH**/ ?>