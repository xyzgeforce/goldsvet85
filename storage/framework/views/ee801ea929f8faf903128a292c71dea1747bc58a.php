<?php $__env->startSection('page-title', trans('app.jpg')); ?>
<?php $__env->startSection('page-heading', trans('app.jpg')); ?>

<?php $__env->startSection('content'); ?>

	<section class="content-header">
		<?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</section>

	<section class="content">
		<form action="<?php echo e(route('backend.jpgame.global')); ?>" method="POST" class="pb-2 mb-3 border-bottom-light">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo app('translator')->get('app.jpg'); ?></h3>
				<div class="pull-right box-tools">
					<input type="hidden" value="<?= csrf_token() ?>" name="_token">
                    <?php if( auth()->user()->hasRole('admin') || auth()->user()->hasPermission('jpgame.edit') ): ?>
					<button class="btn btn-block btn-primary btn-sm" type="submit"><?php echo app('translator')->get('app.change'); ?></button>
                    <?php endif; ?>
				</div>
			</div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
					<thead>
					<tr>
						<th><?php echo app('translator')->get('app.id'); ?></th>
						<th><?php echo app('translator')->get('app.name'); ?></th>
						<th><?php echo app('translator')->get('app.balance'); ?></th>
						<th><?php echo app('translator')->get('app.start_balance'); ?></th>
						<th><?php echo app('translator')->get('app.trigger'); ?></th>
						<th><?php echo app('translator')->get('app.percent'); ?></th>
						<th><?php echo app('translator')->get('app.user'); ?></th>
                        <?php if( auth()->user()->hasRole('admin') || auth()->user()->hasPermission('jpgame.edit') ): ?>
						<th>
							<label class="checkbox-container">
								<input type="checkbox" class="checkAll">
								<span class="checkmark"></span>
							</label>
						</th>
                        <?php endif; ?>
					</tr>
					</thead>
					<tbody>
					<?php if(count($jackpots)): ?>
						<?php $__currentLoopData = $jackpots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jackpot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo $__env->make('backend.jpg.partials.row', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php else: ?>
						<tr><td colspan="9"><?php echo app('translator')->get('app.no_data'); ?></td></tr>
					<?php endif; ?>
					</tbody>
					<thead>
					<tr>
						<th><?php echo app('translator')->get('app.id'); ?></th>
						<th><?php echo app('translator')->get('app.name'); ?></th>
						<th><?php echo app('translator')->get('app.balance'); ?></th>
						<th><?php echo app('translator')->get('app.start_balance'); ?></th>
						<th><?php echo app('translator')->get('app.trigger'); ?></th>
						<th><?php echo app('translator')->get('app.percent'); ?></th>
						<th><?php echo app('translator')->get('app.user'); ?></th>
                        <?php if( auth()->user()->hasRole('admin') || auth()->user()->hasPermission('jpgame.edit') ): ?>
						<th>
							<label class="checkbox-container">
								<input type="checkbox" class="checkAll">
								<span class="checkmark"></span>
							</label>
						</th>
                        <?php endif; ?>
					</tr>
					</thead>
                            </table>
                        </div>
                    </div>
		</div>
		</form>
	</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script>
		$('#jackpots-table').dataTable();
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/jpg/list.blade.php ENDPATH**/ ?>