<?php $__env->startSection('page-title', trans('app.general_settings')); ?>
<?php $__env->startSection('page-heading', trans('app.general_settings')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">

        <div class="box box-default">
            <?php echo Form::open(['route' => ['backend.settings.list.update', 'categories'], 'id' => 'general-settings-form']); ?>

            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.general_settings'); ?></h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.use_all_categories'); ?>
                            </label>
                            <?php echo Form::select('use_all_categories', ['0' => __('app.no'), '1' => __('app.yes')], settings('use_all_categories'), ['class' => 'form-control']); ?>

                        </div>

                        <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.use_my_games'); ?>
                            </label>
                            <?php echo Form::select('use_my_games', ['0' => __('app.no'), '1' => __('app.yes')], settings('use_my_games'), ['class' => 'form-control']); ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.use_new_categories'); ?>
                            </label>
                            <?php echo Form::select('use_new_categories', ['0' => __('app.no'), '1' => __('app.yes')], settings('use_new_categories'), ['class' => 'form-control']); ?>

                        </div>

                        <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.use_hot_categories'); ?>
                            </label>
                            <?php echo Form::select('use_hot_categories', ['0' => __('app.no'), '1' => __('app.yes')], settings('use_hot_categories'), ['class' => 'form-control']); ?>

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
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/settings/categories.blade.php ENDPATH**/ ?>