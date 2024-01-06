<?php $__env->startSection('page-title', trans('app.invite')); ?>
<?php $__env->startSection('page-heading', trans('app.invite')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">
        <?php if( auth()->user()->hasPermission('invite.edit') ): ?>
            <?php echo Form::open(['route' => 'backend.invites.update']); ?>

        <?php endif; ?>
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(trans('app.invite')); ?></h3>
                <div class="pull-right box-tools">
                    <?php if (\Auth::user()->hasPermission('invite.edit')) : ?>
                    <?php if(auth()->user()->shop ): ?>
                        <?php if( auth()->user()->shop->invite_active): ?>
                            <a href="<?php echo e(route('backend.invite.status', 'disable')); ?>" class="btn btn-danger btn-sm"><?php echo app('translator')->get('app.disable'); ?></a>
                        <?php else: ?>
                            <a href="<?php echo e(route('backend.invite.status', 'activate')); ?>" class="btn btn-success btn-sm"><?php echo app('translator')->get('app.active'); ?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="box-body">
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.message'); ?></label>
                            <textarea class="form-control" id="message" name="message" rows="5"><?php echo e($invite->message); ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.bonus'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" id="sum" name="sum"value="<?php echo e($invite->sum); ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.bonus_friend'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" id="sum_ref" name="sum_ref" value="<?php echo e($invite->sum_ref); ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.sum'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" id="min_amount" name="min_amount" value="<?php echo e($invite->min_amount); ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.waiting_time'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" id="waiting_time" name="waiting_time" value="<?php echo e($invite->waiting_time); ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.wager'); ?></label>
                            <?php echo Form::select('wager', \VanguardLTE\Invite::$values['wager'], $invite->wager, ['class' => 'form-control']); ?>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status"><?php echo app('translator')->get('app.type'); ?></label>
                            <?php echo Form::select('type', \VanguardLTE\Invite::$values['type'], $invite->type, ['class' => 'form-control', 'id' => 'type']); ?>

                        </div>
                    </div>


                </div>
            </div>

            <?php if( auth()->user()->hasPermission('invite.edit') ): ?>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    <?php echo app('translator')->get('app.edit_invite'); ?>
                </button>
            </div>
            <?php endif; ?>
        </div>
        <?php if( auth()->user()->hasPermission('invite.edit') ): ?>
        <?php echo Form::close(); ?>

        <?php endif; ?>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/dashboard/invite.blade.php ENDPATH**/ ?>