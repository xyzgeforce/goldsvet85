<tr>
    <td><?php echo e($stat->game); ?></td>
	<td><?php echo e($stat->user->username); ?></td>
	<td><span class="text-green"><?php echo e($stat->balance); ?></span></td>
	<td><?php echo e($stat->bet); ?></td>
	<td><?php echo e($stat->win); ?></td>
	<?php if(auth()->user()->hasRole('admin')): ?>
	<td><?php echo e($stat->in_game); ?></td>
	<td><?php echo e($stat->in_jpg); ?></td>
	<td><?php echo e($stat->in_profit); ?></td>
	<?php endif; ?>
	<td><?php echo e($stat->denomination); ?></td>

	<td><?php echo e($stat->slots_bank); ?></td>
	<td><?php echo e($stat->fish_bank); ?></td>
	<td><?php echo e($stat->table_bank); ?></td>
	<td><?php echo e($stat->little_bank); ?></td>
	<td><?php echo e($stat->bonus_bank); ?></td>
	<td><?php echo e($stat->total_bank); ?></td>

	<td><?php echo e($stat->date_time); ?></td>
    <?php if(isset($show_shop) && $show_shop): ?>
        <?php if($stat->shop): ?>
            <td><a href="<?php echo e(route('backend.shop.edit', $stat->shop->id)); ?>"><?php echo e($stat->shop->name); ?></a></td>
        <?php else: ?>
            <td><?php echo app('translator')->get('app.no_shop'); ?></td>
        <?php endif; ?>
    <?php endif; ?>
</tr><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/games/partials/row_stat.blade.php ENDPATH**/ ?>