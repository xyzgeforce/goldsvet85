<?php $__env->startSection('page-title', 'Support'); ?>
<?php $__env->startSection('page-heading', 'Support'); ?>

<?php $__env->startSection('content'); ?>

	<section class="content-header">
		<?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</section>

	<section class="content">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Support</h3>
                <?php if (\Auth::user()->hasPermission('tickets.add')) : ?>
				<div class="pull-right box-tools">
					<a href="<?php echo e(route('backend.support.create')); ?>" class="btn btn-block btn-primary btn-sm">NEW TICKET</a>
				</div>
                <?php endif; ?>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>ID</th>
							<th>Theme</th>
							<th>Client</th>
							<th>Status</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php if(count($tickets)): ?>
							<?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php echo $__env->make('backend.tickets.partials.row', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php else: ?>
							<tr><td colspan="6">No data available in table</td></tr>
						<?php endif; ?>
						</tbody>
						<thead>
						<tr>
							<th>ID</th>
							<th>Theme</th>
							<th>Client</th>
							<th>Status</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>

	</section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/tickets/list.blade.php ENDPATH**/ ?>