<?php $__env->startSection('page-title', trans('app.sms_bonuses')); ?>
<?php $__env->startSection('page-heading', trans('app.sms_bonuses')); ?>

<?php $__env->startSection('content'); ?>

	<section class="content-header">
		<?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</section>

	<section class="content">

		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo app('translator')->get('app.sms_bonuses'); ?></h3>

				<div class="pull-right box-tools">
                    <?php if (\Auth::user()->hasPermission('sms_bonuses.edit')) : ?>
                    <?php if($shop): ?>
                        <?php if( $shop->sms_bonuses_active ): ?>
                            <a href="<?php echo e(route('backend.sms_bonus.status', 'disable')); ?>" class="btn btn-danger btn-sm"><?php echo app('translator')->get('app.disable'); ?></a>
                        <?php else: ?>
                            <a href="<?php echo e(route('backend.sms_bonus.status', 'activate')); ?>" class="btn btn-success btn-sm"><?php echo app('translator')->get('app.active'); ?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php if (\Auth::user()->hasPermission('sms_bonuses.add')) : ?>
					<a href="<?php echo e(route('backend.sms_bonus.create')); ?>" class="btn btn-primary btn-sm"><?php echo app('translator')->get('app.add'); ?></a>
                    <?php endif; ?>
				</div>

			</div>
			<div class="box-body">
				<table class="table table-bordered table-striped">
					<thead>
					<tr>
						<th><?php echo app('translator')->get('app.day'); ?></th>
						<th><?php echo app('translator')->get('app.bonus'); ?></th>
						<th><?php echo app('translator')->get('app.wager'); ?></th>
					</tr>
					</thead>
					<tbody>
					<?php if(count($sms_bonuses)): ?>
						<?php $__currentLoopData = $sms_bonuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sms_bonus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo $__env->make('backend.sms_bonuses.partials.row', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php else: ?>
						<tr><td colspan="3"><?php echo app('translator')->get('app.no_data'); ?></td></tr>
					<?php endif; ?>
					</tbody>
					<thead>
					<tr>
						<th><?php echo app('translator')->get('app.day'); ?></th>
						<th><?php echo app('translator')->get('app.bonus'); ?></th>
						<th><?php echo app('translator')->get('app.wager'); ?></th>
					</tr>
					</thead>
				</table>
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/sms_bonuses/list.blade.php ENDPATH**/ ?>