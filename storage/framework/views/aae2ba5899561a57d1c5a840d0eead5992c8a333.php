<?php $__env->startSection('page-title', trans('app.wheelfortune')); ?>
<?php $__env->startSection('page-heading', trans('app.wheelfortune')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">
            <?php echo Form::open(['route' => 'backend.wheelfortune.update']); ?>

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(trans('app.wheelfortune')); ?></h3>
                <div class="pull-right box-tools">
                    <?php if (\Auth::user()->hasPermission('wheelfortune.manage')) : ?>
                    <?php if( auth()->user()->shop ): ?>
                        <?php if( auth()->user()->shop->wheelfortune_active ): ?>
                            <a href="<?php echo e(route('backend.wheelfortune.status', 'disable')); ?>" class="btn btn-danger btn-sm"><?php echo app('translator')->get('app.disable'); ?></a>
                        <?php else: ?>
                            <a href="<?php echo e(route('backend.wheelfortune.status', 'activate')); ?>" class="btn btn-success btn-sm"><?php echo app('translator')->get('app.active'); ?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>

            <?php
                $wh1 = array_combine(\VanguardLTE\WheelFortune::$values['wh1'], \VanguardLTE\WheelFortune::$values['wh1']);
                $wh2 = array_combine(\VanguardLTE\WheelFortune::$values['wh2'], \VanguardLTE\WheelFortune::$values['wh2']);
            ?>

            <div class="box-body">
                <div class="row">
                    <?php for($i=1; $i<=7; $i++): ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo app('translator')->get('app.wh'); ?>1 <?php echo e($i); ?></label>
                                <?php echo Form::select('wh1_'.$i, \VanguardLTE\WheelFortune::$values['wh1'], $wheelfortune->{'wh1_'.$i}, ['class' => 'form-control']); ?>

                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

                <hr>

                <div class="row">
                    <?php for($i=1; $i<=8; $i++): ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo app('translator')->get('app.wh'); ?>2 <?php echo e($i); ?></label>
                                <?php echo Form::select('wh2_'.$i, \VanguardLTE\WheelFortune::$values['wh1'], $wheelfortune->{'wh2_'.$i} , ['class' => 'form-control']); ?>

                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

                <hr>

                <div class="row">
                    <?php for($i=1; $i<=16; $i++): ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo app('translator')->get('app.wh'); ?>3 <?php echo e($i); ?></label>
                                <?php echo Form::select('wh3_'.$i, \VanguardLTE\WheelFortune::$values['wh2'], $wheelfortune->{'wh3_'.$i}, ['class' => 'form-control']); ?>

                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.wager'); ?></label>
                            <?php echo Form::select('wager', \VanguardLTE\WheelFortune::$values['wager'], $wheelfortune->wager, ['class' => 'form-control']); ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status"><?php echo app('translator')->get('app.status'); ?></label>
                            <?php echo Form::select('status', [__('app.disabled'), __('app.active')], $wheelfortune->status, ['class' => 'form-control', 'id' => 'status']); ?>

                        </div>
                    </div>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    <?php echo app('translator')->get('app.edit_wheelfortune'); ?>
                </button>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/dashboard/wheelfortune.blade.php ENDPATH**/ ?>