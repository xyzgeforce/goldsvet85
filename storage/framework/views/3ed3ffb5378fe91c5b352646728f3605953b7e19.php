<tr>
	<td>
		<a href="<?php echo e(route('backend.category.edit', $category->id)); ?>">
			<span class=" <?php if($base): ?> text-blue <?php else: ?> text-green <?php endif; ?> "><?php echo e($category->title); ?></span>
		</a>
	</td>
	<td><?php echo e($category->position); ?></td>
	<td><?php if(!$base): ?>/<?php echo e($category->parentOne->href); ?>/<?php endif; ?><?php echo e($category->href); ?></td>
	<td>
		<?php echo e($category->games()->count()); ?>

	</td>
</tr><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/categories/partials/row.blade.php ENDPATH**/ ?>