<?php $__env->startSection('page-title', trans('app.general_settings')); ?>
<?php $__env->startSection('page-heading', trans('app.general_settings')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">

        <div class="box box-default">
            <?php echo Form::open(['route' => ['backend.settings.list.update', 'payment'], 'id' => 'general-settings-form']); ?>

            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.general_settings'); ?></h3>
            </div>

            <div class="box-body">
                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.default_currency'); ?></label>
                            <?php
                                $currencies = array_combine(\VanguardLTE\Shop::$values['currency'], \VanguardLTE\Shop::$values['currency']);
                            ?>
                            <?php echo Form::select('default_currency', $currencies, settings('default_currency', 'USD'), ['class' => 'form-control']); ?>

                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.minimum_payment_amount'); ?></label>
                            <input type="number" step="0.0000001" name="minimum_payment_amount" class="form-control" value="<?php echo e(settings('minimum_payment_amount', 0)); ?>">
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.maximum_payment_amount'); ?></label>
                            <input type="number" step="0.0000001" name="maximum_payment_amount" class="form-control" value="<?php echo e(settings('maximum_payment_amount', 10000)); ?>">
                        </div>


                    </div>

                    <div class="col-md-6">

                       <!-- <div class="form-group">
                            <label>
                                IK
                            </label>
                            <?php echo Form::select('payment_interkassa', ['0' => __('app.no'), '1' => __('app.yes')], settings('payment_interkassa'), ['class' => 'form-control']); ?>

                        </div> -->
                        <div class="form-group">
                            <label>
                                CB
                            </label>
                            <?php echo Form::select('payment_coinbase', ['0' => __('app.no'), '1' => __('app.yes')], settings('payment_coinbase'), ['class' => 'form-control']); ?>

                        </div>
                       <!-- <div class="form-group">
                            <label>
                                BP
                            </label>
                            <?php echo Form::select('payment_btcpayserver', ['0' => __('app.no'), '1' => __('app.yes')], settings('payment_btcpayserver'), ['class' => 'form-control']); ?>

                        </div> -->
                         <div class="form-group">
                            <label>
                                Pin
                            </label>
                            <?php echo Form::select('payment_pin', ['0' => __('app.no'), '1' => __('app.yes')], settings('payment_pin'), ['class' => 'form-control']); ?>

                        </div> 


                    </div>

                </div>

                <hr>

               <!-- <h4>Interkassa</h4>
                <div class="row">
                    <?php $__currentLoopData = config('payments.interkassa.fields'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo e($field); ?></label>
                                <input type="text" class="form-control" name="system[interkassa][<?php echo e($field); ?>][<?php echo e(auth()->user()->shop_id); ?>]" value="<?php echo e(\VanguardLTE\Lib\Setting::get_value('interkassa', $field, auth()->user()->shop_id)); ?>">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> -->

                <h4>Coinbase</h4>
                <div class="row">
                    <?php $__currentLoopData = config('payments.coinbase.fields'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo e($field); ?></label>
                                <input type="text" class="form-control" name="system[coinbase][<?php echo e($field); ?>][<?php echo e(auth()->user()->shop_id); ?>]" value="<?php echo e(\VanguardLTE\Lib\Setting::get_value('coinbase', $field, auth()->user()->shop_id)); ?>">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> 

                <!-- <h4>BtcPayServer</h4>
                <div class="row">
                    <?php $__currentLoopData = config('payments.btcpayserver.fields'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo e($field); ?></label>
                                <input type="text" class="form-control" name="system[btcpayserver][<?php echo e($field); ?>][<?php echo e(auth()->user()->shop_id); ?>]" value="<?php echo e(\VanguardLTE\Lib\Setting::get_value('btcpayserver', $field, auth()->user()->shop_id)); ?>">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> -->

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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/settings/payment.blade.php ENDPATH**/ ?>