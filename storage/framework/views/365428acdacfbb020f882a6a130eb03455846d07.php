<tr>
	<?php if(!auth()->user()->hasRole('cashier')): ?>
	<td><?php echo e($stat->id); ?></td>
	<?php endif; ?>
	<td><?php echo e($stat->user->username); ?></td>
	<td><?php echo e(date(config('app.date_time_format'), strtotime($stat->start_date))); ?></td>
	<td><?php echo e($stat->end_date ? date(config('app.date_time_format'), strtotime($stat->end_date)) : ''); ?></td>
	<?php if(!auth()->user()->hasRole('cashier')): ?>
		<td><?php echo e($stat->balance); ?></td>
		<td><?php echo e($stat->balance_in); ?></td>
		<td><?php echo e($stat->balance_out); ?></td>
		<td><?php echo e(number_format ((float)$stat->balance + (float)$stat->balance_in - (float)$stat->balance_out, 4, ".", "")); ?></td>
	<?php endif; ?>

	<?php
		$money = $stat->users;
		if($stat->end_date == NULL){
			$money = $stat->get_money();
		}
	?>

	<td><?php echo e($money); ?></td>
	<td><?php echo e($stat->money_in); ?></td>
	<td><?php echo e($stat->money_out); ?></td>

	<?php
		$total = (float)$stat->money_in - (float)$stat->money_out;
	?>

	<td><?php echo e(number_format ($total, 4, ".", "")); ?></td>
	<td><?php echo e($stat->transfers); ?></td>

	<?php
		$payout = (float)$stat->money_in > 0 ? ((float)$stat->money_out / (float)$stat->money_in) * 100 : 0;
	?>
	<td><?php echo e(number_format ($payout, 4, ".", "")); ?></td>

</tr>
<?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/stat/partials/row_shift_stat.blade.php ENDPATH**/ ?>