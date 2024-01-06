<tr>
	<td><a href="<?php echo e(route('backend.welcome_bonus.edit', $welcome_bonus->id)); ?>"><?php echo e(mb_convert_case($welcome_bonus->pay, MB_CASE_TITLE)); ?></a></td>
	<td><?php echo e($welcome_bonus->sum); ?></td>
	<td><?php echo e(\VanguardLTE\WelcomeBonus::$values['type'][$welcome_bonus->type]); ?></td>
	<td><?php echo e($welcome_bonus->bonus); ?></td>
	<td>x<?php echo e($welcome_bonus->wager); ?></td>

</tr>
<?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/welcomebonuses/partials/row.blade.php ENDPATH**/ ?>