<tr>
	<td><?php echo e($happyhour->id); ?></td>
	<td><a href="<?php echo e(route('backend.happyhour.edit', $happyhour->id)); ?>"><?php echo e($happyhour->multiplier); ?></a></td>
	<td>x<?php echo e($happyhour->wager); ?></td>
	<td><?php echo e(\VanguardLTE\HappyHour::$values['time'][$happyhour->time]); ?></td>

</tr>
<?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/happyhours/partials/row.blade.php ENDPATH**/ ?>