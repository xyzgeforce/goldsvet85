<tr>
	<td><?php echo e($jackpot->id); ?></td>
	<td>
        <?php if( auth()->user()->hasPermission('jpgame.edit') ): ?>
            <a href="<?php echo e(route('backend.jpgame.edit', $jackpot->id)); ?>"><?php echo e($jackpot->name); ?></a>
        <?php else: ?>
            <?php echo e($jackpot->name); ?>

        <?php endif; ?>
    </td>
	<td><?php echo e($jackpot->balance); ?></td>
	<td><?php echo e(\VanguardLTE\JPG::$values['start_balance'][$jackpot->start_balance]); ?></td>
	<td><?php echo e(\VanguardLTE\JPG::$values['pay_sum'][$jackpot->pay_sum]); ?></td>
	<td><?php echo e($jackpot->percent); ?></td>
	<td><?php if($jackpot->user): ?> <a href="<?php echo e(route('backend.user.edit', $jackpot->user->id)); ?>"><?php echo e($jackpot->user->username); ?></a> <?php else: ?> --- <?php endif; ?></td>
    <?php if( auth()->user()->hasRole('admin') || auth()->user()->hasPermission('jpgame.edit') ): ?>
    <td>
		<label class="checkbox-container">
			<input type="checkbox" name="checkbox[<?php echo e($jackpot->id); ?>]">
			<span class="checkmark"></span>
		</label>
	</td>
    <?php endif; ?>
</tr>
<?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/jpg/partials/row.blade.php ENDPATH**/ ?>