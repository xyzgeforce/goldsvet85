
<div class="col-md-3">

    <div class="box box-primary">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="/back/img/<?php echo e($user->present()->role_id); ?>.png" alt="<?php echo e($user->present()->username); ?>">
            <h4 class="profile-username text-center"><?php echo e($user->present()->username); ?></h4>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b><?php echo app('translator')->get('app.balance'); ?></b> <a class="pull-right"><?php echo e($user->present()->balance); ?></a>
                </li>

                <?php if( $user->hasRole('user') ): ?>
                    <li class="list-group-item">
                        <b><?php echo app('translator')->get('app.in'); ?></b> <a class="pull-right"><?php echo e(number_format($user->present()->total_in,2)); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b><?php echo app('translator')->get('app.out'); ?></b> <a class="pull-right"><?php echo e(number_format($user->present()->total_out,2)); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b><?php echo app('translator')->get('app.total'); ?></b> <a class="pull-right"><?php echo e(number_format($user->present()->total_in - $user->present()->total_out,2)); ?></a>
                    </li>
                <?php endif; ?>


            </ul>


            <?php if( $user->id != Auth::id() ): ?>
                <?php if(

                    (auth()->user()->hasRole('agent') && $user->hasRole('distributor'))
                    ||
                    (auth()->user()->hasRole('distributor') && $user->hasRole('manager'))
                    ||
                    (auth()->user()->hasRole('manager') && $user->hasRole('cashier'))
                    ||
                    (auth()->user()->hasRole('cashier') && $user->hasRole('user'))
                ): ?>
                    <?php if (\Auth::user()->hasPermission('users.delete')) : ?>
                    <a href="<?php echo e(route('backend.user.delete', $user->id)); ?>"
                       class="btn btn-danger btn-block"
                       data-method="DELETE"
                       data-confirm-title="<?php echo app('translator')->get('app.please_confirm'); ?>"
                       data-confirm-text="<?php echo app('translator')->get('app.are_you_sure_delete_user'); ?>"
                       data-confirm-delete="<?php echo app('translator')->get('app.yes_delete_him'); ?>">
                        <b><?php echo app('translator')->get('app.delete'); ?></b></a>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (\Auth::user()->hasPermission('users.delete')) : ?>
                <?php if(auth()->user()->hasRole('admin') && $user->hasRole(['agent','distributor']) ): ?>
                    <a href="<?php echo e(route('backend.user.hard_delete', $user->id)); ?>"
                       class="btn btn-danger btn-block"
                       data-method="DELETE"
                       data-confirm-title="<?php echo app('translator')->get('app.please_confirm'); ?>"
                       data-confirm-text="<?php echo app('translator')->get('app.are_you_sure_delete_user'); ?>"
                       data-confirm-delete="<?php echo app('translator')->get('app.yes_delete_him'); ?>">
                        <b><?php echo app('translator')->get('app.hard_delete'); ?> <?php echo e($user->role->name); ?></b></a>
                <?php endif; ?>
                <?php endif; ?>

            <?php endif; ?>
        </div>
    </div>

    <?php if(!$user->hasRole('admin')): ?>
    <div>

        <?php if(
                    (Auth::user()->hasRole('admin') && $user->hasRole(['agent'])) ||
                    (Auth::user()->hasRole('agent') && $user->hasRole(['distributor'])) ||
                    (Auth::user()->hasRole('cashier') && $user->hasRole('user'))
                ): ?>
            <button type="button" class="btn btn-block btn-success btn-xs newPayment addPayment" data-toggle="modal" data-target="#openAddModal" data-id="<?php echo e($user->id); ?>"><?php echo app('translator')->get('app.add'); ?></button>
        <?php else: ?>
            <button type="button" class="btn btn-block btn-success disabled btn-xs"><?php echo app('translator')->get('app.add'); ?></button>
        <?php endif; ?>


        <?php if(
            (
				(Auth::user()->hasRole('admin') && $user->hasRole(['agent'])) ||
				(Auth::user()->hasRole('agent') && $user->hasRole(['distributor'])) ||
				(Auth::user()->hasRole('cashier') && $user->hasRole('user'))
			)
			&&
			!( $user->count_tournaments > 0 || $user->count_happyhours > 0 || $user->count_refunds > 0 ||
                $user->count_progress > 0 || $user->count_daily_entries > 0 || $user->count_invite > 0 ||
                $user->count_welcomebonus > 0 || $user->count_smsbonus > 0 || $user->count_wheelfortune > 0 ||
                $user->status == \VanguardLTE\Support\Enum\UserStatus::BANNED
            )

        ): ?>
            <button type="button" class="btn btn-block btn-danger btn-xs newPayment outPayment" data-toggle="modal" data-target="#openOutModal" data-id="<?php echo e($user->id); ?>"><?php echo app('translator')->get('app.out'); ?></button>
        <?php else: ?>
            <button type="button" class="btn btn-block btn-danger disabled btn-xs"><?php echo app('translator')->get('app.out'); ?></button>
        <?php endif; ?>

    </div><br />
    <?php endif; ?>

    <?php if($user->hasRole('admin')): ?>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.google_2fa'); ?></h3>
            </div>
            <div class="box-body">

                <div class="form-group">
                    <label><?php echo app('translator')->get('app.enable'); ?></label>
                    <?php echo Form::select('google2fa_enable', [0 => __('app.disabled'), 1 => __('app.active')], $user->google2fa_enable, ['class' => 'form-control']); ?>

                    <input value="<?php echo e($secret); ?>" type="hidden" name="secret_key">
                </div>

                <?php if(
                    ($user->google2fa_secret == null && $user->google2fa_enable) ||
                    ($user->google2fa_secret != null && !$user->google2fa_enable)
                ): ?>
                    <div class="form-group">
                        <label><?php echo app('translator')->get('app.code'); ?></label>
                        <input type="text" name="google_2fa_code"  value="" class="form-control">
                    </div>
                <?php endif; ?>

                <?php if($QR_Image): ?>
                    <?php if($user->google2fa_secret == ''): ?>
                        <p>Set up your two factor authentication by scanning the barcode below. Alternatively, you can use the code <?php echo e($secret); ?></p>
                        <div>
                            <img src="<?php echo e($QR_Image); ?>">
                        </div>
                        <p>You must set up your Google Authenticator app before continuing. You will be unable to login otherwise</p>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="update-details-btn">
                    <?php echo app('translator')->get('app.edit_user'); ?>
                </button>
            </div>
        </div>


    <?php endif; ?>





</div>
<?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/user/partials/info.blade.php ENDPATH**/ ?>