<?php $__env->startSection('page-title', trans('app.general_settings')); ?>
<?php $__env->startSection('page-heading', trans('app.general_settings')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">

        <div class="box box-default">
            <?php echo Form::open(['route' => ['backend.settings.list.update', 'securities'], 'id' => 'general-settings-form']); ?>

            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.general_settings'); ?></h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.agent_balance_x'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" name="agent_balance_x" value="<?php echo e(settings('agent_balance_x')); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.distributor_balance_x'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" name="distributor_balance_x" value="<?php echo e(settings('distributor_balance_x')); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.shop_balance_x'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" name="shop_balance_x" value="<?php echo e(settings('shop_balance_x')); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.user_balance_x'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" name="user_balance_x" value="<?php echo e(settings('user_balance_x')); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.user_in_out_x'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" name="user_in_out_x" value="<?php echo e(settings('user_in_out_x')); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.game_in_out_x'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" name="game_in_out_x" value="<?php echo e(settings('game_in_out_x')); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.bank_balance_x'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" name="bank_balance_x" value="<?php echo e(settings('bank_balance_x')); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.user_win_x'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" name="user_win_x" value="<?php echo e(settings('user_win_x')); ?>">
                        </div>

                        <hr>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.agent_balance_bigger_x'); ?></label>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('agent_balance_bigger_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('agent_balance_bigger_x_block'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('agent_balance_bigger_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('agent_balance_bigger_x_sms'), ['class' => 'form-control']); ?>

                        </div>



                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('agent_balance_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('agent_balance_x_block'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('distributor_balance_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('distributor_balance_x_block'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('shop_balance_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('shop_balance_x_block'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('user_balance_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('user_balance_x_block'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('user_in_out_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('user_in_out_x_block'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('game_in_out_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('game_in_out_x_block'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('bank_balance_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('bank_balance_x_block'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('user_win_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('user_win_x_block'), ['class' => 'form-control']); ?>

                        </div>

                        <hr>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.distributor_balance_bigger_x'); ?></label>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('distributor_balance_bigger_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('distributor_balance_bigger_x_block'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('distributor_balance_bigger_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('distributor_balance_bigger_x_sms'), ['class' => 'form-control']); ?>

                        </div>



                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('agent_balance_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('agent_balance_x_sms'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('distributor_balance_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('distributor_balance_x_sms'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('shop_balance_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('shop_balance_x_sms'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('user_balance_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('user_balance_x_sms'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('user_in_out_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('user_in_out_x_sms'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('game_in_out_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('game_in_out_x_sms'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('bank_balance_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('bank_balance_x_sms'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('user_win_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('user_win_x_sms'), ['class' => 'form-control']); ?>

                        </div>

                        <hr>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.shop_balance_bigger_x'); ?></label>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.block'); ?></label>
                            <?php echo Form::select('shop_balance_bigger_x_block', ['0' => __('app.no'), '1' => __('app.yes')], settings('shop_balance_bigger_x_block'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.send_sms'); ?></label>
                            <?php echo Form::select('shop_balance_bigger_x_sms', ['0' => __('app.no'), '1' => __('app.yes')], settings('shop_balance_bigger_x_sms'), ['class' => 'form-control']); ?>

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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/settings/securities.blade.php ENDPATH**/ ?>