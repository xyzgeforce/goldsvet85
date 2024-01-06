<?php $__env->startSection('page-title', trans('app.activity_log')); ?>
<?php $__env->startSection('page-heading', trans('app.activity_log')); ?>

<?php $__env->startSection('content'); ?>

	<section class="content-header">
		<?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</section>

	<section class="content">
		<form action="" method="GET">
			<div class="box box-danger collapsed-box activity_show">
				<div class="box-header with-border">
					<h3 class="box-title"><?php echo app('translator')->get('app.filter'); ?></h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.user'); ?></label>
								<input type="text" class="form-control" name="username" value="<?php echo e(Request::get('username')); ?>" placeholder="<?php echo app('translator')->get('app.search_for_users'); ?>">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.message'); ?></label>
								<input type="text" class="form-control" name="search" value="<?php echo e(Request::get('search')); ?>" placeholder="">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.ip'); ?></label>
								<input type="text" class="form-control" name="ip" value="<?php echo e(Request::get('ip')); ?>" placeholder="">
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">
						Filter
					</button>

					<?php if( Auth::user()->hasRole('admin') ): ?>
						<a href="<?php echo e(route('backend.activity.clear')); ?>"
						   class="btn btn-danger"
						   data-method="DELETE"
						   data-confirm-title="<?php echo app('translator')->get('app.please_confirm'); ?>"
						   data-confirm-text="<?php echo app('translator')->get('app.are_you_sure_delete_shop'); ?>"
						   data-confirm-delete="<?php echo app('translator')->get('app.yes_i_do'); ?>">
							Delete Logs
						</a>
					<?php endif; ?>

				</div>
			</div>
		</form>

		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo app('translator')->get('app.activity_log'); ?></h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
						<tr>
							<?php if(isset($adminView)): ?>
								<th><?php echo app('translator')->get('app.user'); ?></th>
							<?php endif; ?>
							<th><?php echo app('translator')->get('app.message'); ?></th>
							<th><?php echo app('translator')->get('app.log_time'); ?></th>
							<th><?php echo app('translator')->get('app.more_info'); ?></th>
						</tr>
						</thead>
						<tbody>
						<?php if(count($activities)): ?>
							<?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<?php if(isset($adminView)): ?>
										<td>
											<?php if(isset($user)): ?>
												<?php echo e($activity->user->username); ?>

											<?php else: ?>
												<a href="<?php echo e(route('backend.activity.user.log', $activity->user_id)); ?>"><?php echo e($activity->user->username); ?></a>
											<?php endif; ?>
										</td>
									<?php endif; ?>

									<td>
										<?php if($activity->old): ?>
											<b><?php echo app('translator')->get('app.after'); ?>: </b><br>
										<?php endif; ?>
											<?php echo e($activity->description); ?>

										<?php if($activity->old): ?>
											<br><b><?php echo app('translator')->get('app.before'); ?>: </b><br><?php echo e($activity->old); ?>

										<?php endif; ?>
									</td>
									<td><?php echo e(date(config('app.date_time_format'), strtotime($activity->created_at))); ?></td>
										<td>
											<b> <?php echo app('translator')->get('app.country'); ?></b>: <?php echo e($activity->country); ?> <br>
											<b> <?php echo app('translator')->get('app.city'); ?></b>: <?php echo e($activity->city); ?> <br>
											<b> <?php echo app('translator')->get('app.os'); ?></b>: <?php echo e($activity->os); ?> <br>
											<b> <?php echo app('translator')->get('app.device'); ?></b>: <?php echo e($activity->device); ?> <br>
											<b> <?php echo app('translator')->get('app.browser'); ?></b>: <?php echo e($activity->browser); ?> <br>
											<b> <?php echo app('translator')->get('app.ip'); ?></b>: <?php echo e($activity->ip_address); ?> <br>
											<b> <?php echo app('translator')->get('app.user_agent'); ?></b>: <?php echo e($activity->user_agent); ?> <br>
										</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php else: ?>
							<tr><td colspan="<?php if(isset($adminView)): ?> 5 <?php else: ?> 4 <?php endif; ?>"><?php echo app('translator')->get('app.no_data'); ?></td></tr>
						<?php endif; ?>
						</tbody>
						<thead>
						<tr>
							<?php if(isset($adminView)): ?>
								<th><?php echo app('translator')->get('app.user'); ?></th>
							<?php endif; ?>
							<th><?php echo app('translator')->get('app.message'); ?></th>
							<th><?php echo app('translator')->get('app.log_time'); ?></th>
							<th><?php echo app('translator')->get('app.more_info'); ?></th>
						</tr>
						</thead>
					</table>
				</div>
				<?php echo e($activities->links()); ?>

			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script>
		$(function() {
			$('#stat-table').dataTable();
			$('input[name="dates"]').daterangepicker({
				timePicker: true,
				timePicker24Hour: true,
				startDate: moment().subtract(30, 'day'),
				endDate: moment().add(7, 'day'),

				locale: {
					format: 'YYYY-MM-DD HH:mm',
					timeZone: '<?php echo e(config('app.timezone')); ?>'
				}
			});

			$('.btn-box-tool').click(function(event){
				if( $('.activity_show').hasClass('collapsed-box') ){
					$.cookie('activity_show', '1');
				} else {
					$.removeCookie('activity_show');
				}
			});

			if( $.cookie('activity_show') ){
				$('.activity_show').removeClass('collapsed-box');
				$('.activity_show .btn-box-tool i').removeClass('fa-plus').addClass('fa-minus');
			}
		});
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/activity/index.blade.php ENDPATH**/ ?>