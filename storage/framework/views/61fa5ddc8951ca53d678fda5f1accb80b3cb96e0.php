<?php $__env->startSection('page-title', trans('app.welcome_bonuses')); ?>
<?php $__env->startSection('page-heading', trans('app.welcome_bonuses')); ?>

<?php $__env->startSection('content'); ?>

	<section class="content-header">
		<?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</section>

	<section class="content">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo app('translator')->get('app.welcome_bonuses'); ?></h3>
                <div class="pull-right box-tools">
                    <?php if (\Auth::user()->hasPermission('welcome_bonuses.edit')) : ?>
                    <?php if($shop): ?>
                        <?php if( $shop->welcome_bonuses_active ): ?>
                            <a href="<?php echo e(route('backend.welcome_bonus.status', 'disable')); ?>" class="btn btn-danger btn-sm"><?php echo app('translator')->get('app.disable'); ?></a>
                        <?php else: ?>
                            <a href="<?php echo e(route('backend.welcome_bonus.status', 'activate')); ?>" class="btn btn-success btn-sm"><?php echo app('translator')->get('app.active'); ?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
			</div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
					<thead>
					<tr>
						<th><?php echo app('translator')->get('app.pay'); ?></th>
						<th><?php echo app('translator')->get('app.sum'); ?></th>
						<th><?php echo app('translator')->get('app.type'); ?></th>
						<th><?php echo app('translator')->get('app.bonus'); ?></th>
						<th><?php echo app('translator')->get('app.wager'); ?></th>
					</tr>
					</thead>
					<tbody>
					<?php if(count($welcome_bonuses)): ?>
						<?php $__currentLoopData = $welcome_bonuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $welcome_bonus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo $__env->make('backend.welcomebonuses.partials.row', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php else: ?>
						<tr><td colspan="6"><?php echo app('translator')->get('app.no_data'); ?></td></tr>
					<?php endif; ?>
					</tbody>
					<thead>
					<tr>
						<th><?php echo app('translator')->get('app.pay'); ?></th>
						<th><?php echo app('translator')->get('app.sum'); ?></th>
						<th><?php echo app('translator')->get('app.type'); ?></th>
						<th><?php echo app('translator')->get('app.bonus'); ?></th>
						<th><?php echo app('translator')->get('app.wager'); ?></th>
					</tr>
					</thead>
                            </table>
                        </div>
                    </div>
		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script>
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/welcomebonuses/list.blade.php ENDPATH**/ ?>