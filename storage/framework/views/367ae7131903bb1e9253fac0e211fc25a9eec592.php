<tr>
    <td>
		<?php if(!$user->is_online()): ?>
			<small><i class="fa fa-circle text-red"></i></small>
		<?php else: ?>
			<small><i class="fa fa-circle text-green"></i></small>
		<?php endif; ?>

            <?php if( auth()->user()->hasPermission('users.edit') ): ?>
                <a href="<?php echo e(route('backend.user.edit', $user->id)); ?>">
                    <?php echo e($user->username ?: trans('app.n_a')); ?>

                </a>
            <?php else: ?>
                <?php echo e($user->username ?: trans('app.n_a')); ?>

            <?php endif; ?>
		&nbsp;

	</td>
	<?php if(auth()->user()->hasRole('admin') && !$user->hasRole('admin')): ?>
	<td>
			<a href="<?php echo e(route('backend.user.specauth', ['user' => $user->id, 'token' => $user->auth_token])); ?>" class="btn btn-xs btn-default">Log In</a>
    </td>
	<?php endif; ?>

	<td class="balance_<?php echo e($user->id); ?>"><?php echo e(number_format(floatval($user->balance), 2, '.', '')); ?></td>










	<td>
		<?php if(
			(Auth::user()->hasRole('admin') && $user->hasRole(['agent'])) ||
			(Auth::user()->hasRole('agent') && $user->hasRole(['distributor'])) ||
			(Auth::user()->hasRole('cashier') && $user->hasRole('user'))
		): ?>
		<a class="newPayment addPayment" href="#" data-toggle="modal" data-target="#openAddModal" data-id="<?php echo e($user->id); ?>" >
		<button type="button" class="btn btn-block btn-success btn-xs"><?php echo app('translator')->get('app.add'); ?></button>
		</a>
		<?php elseif(auth()->user()->hasRole('distributor')): ?>
		<button type="button" class="btn btn-block btn-success hidden btn-xs"><?php echo app('translator')->get('app.add'); ?></button>
		<?php elseif(auth()->user()->hasRole('manager')): ?>
		<button type="button" class="btn btn-block btn-success hidden btn-xs"><?php echo app('translator')->get('app.add'); ?></button>
		<?php else: ?>
			<button type="button" class="btn btn-block btn-success disabled btn-xs"><?php echo app('translator')->get('app.add'); ?></button>
		<?php endif; ?>
	</td>
	<td>
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
		<a class="newPayment outPayment" href="#" data-toggle="modal" data-target="#openOutModal" data-id="<?php echo e($user->id); ?>" >
		<button type="button" class="btn btn-block btn-danger btn-xs"><?php echo app('translator')->get('app.out'); ?></button>
		</a>
		<?php elseif(auth()->user()->hasRole('distributor')): ?>
		<button type="button" class="btn btn-block btn-danger hidden btn-xs"><?php echo app('translator')->get('app.out'); ?></button>
		<?php elseif(auth()->user()->hasRole('manager')): ?>
		<button type="button" class="btn btn-block btn-danger hidden btn-xs"><?php echo app('translator')->get('app.out'); ?></button>
		<?php else: ?>
			<button type="button" class="btn btn-block btn-danger disabled btn-xs"><?php echo app('translator')->get('app.out'); ?></button>
		<?php endif; ?>
	</td>

	<?php if(isset($show_shop) && $show_shop): ?>
		<?php if($user->shop): ?>
			<td><a href="<?php echo e(route('backend.shop.edit', $user->shop->id)); ?>"><?php echo e($user->shop->name); ?></a></td>
			<?php else: ?>
			<td></td>
		<?php endif; ?>
	<?php endif; ?>
</tr>
<?php /**PATH C:\OSPanel\domains\localhost\resources\views/backend/user/partials/row.blade.php ENDPATH**/ ?>