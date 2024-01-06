<?php $__env->startSection('page-title', trans('app.statistics')); ?>
<?php $__env->startSection('page-heading', trans('app.statistics')); ?>

<?php $__env->startSection('content'); ?>

	<section class="content-header">
		<?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</section>

	<section class="content">
<?php if(auth()->user()->hasRole(['admin', 'agent'])): ?>
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-light-blue">
					<div class="inner">
						<h3><?php echo e(number_format( $stats['total_agent'], 2 )); ?></h3>
						<p><?php echo app('translator')->get('app.credit_agents'); ?></p>
					</div>
					<div class="icon">
						<i class="fa fa-sitemap"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo e(number_format( $stats['total_distributor'], 2 )); ?></h3>
						<p><?php echo app('translator')->get('app.credit_distributors'); ?></p>
					</div>
					<div class="icon">
						<i class="fa fa-area-chart"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo e(number_format( $stats['total_credit'], 2 )); ?></h3>
						<p><?php echo app('translator')->get('app.credit_shops'); ?></p>
					</div>
					<div class="icon">
						<i class="fa fa-area-chart"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo e(number_format( $stats['total_money'], 2 )); ?></h3>
						<p><?php echo app('translator')->get('app.total_money'); ?> <?php echo e(number_format( $stats['pay_out'], 2 )); ?>%</p>
					</div>
					<div class="icon">
						<i class="fa fa-area-chart"></i>
					</div>
				</div>
			</div>

		</div>
<?php endif; ?>
		<form action="" method="GET">
			<div class="box box-danger collapsed-box shift_stat_show">
				<div class="box-header with-border">
					<h3 class="box-title"><?php echo app('translator')->get('app.filter'); ?></h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.user'); ?></label>
								<input type="text" class="form-control" name="user" value="<?php echo e(Request::get('user')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.type_in_out'); ?></label>
								<?php echo Form::select('type_in_out', [0 => __('app.no'), 1 => __('app.yes')], Request::get('type_in_out'), ['class' => 'form-control']); ?>

							</div>
						</div>
						<div class="col-md-3">

							<div class="form-group">
								<label> <?php echo app('translator')->get('app.date_start'); ?></label>
								<div class="input-group">
									<button type="button" class="btn btn-default pull-right" id="daterange-btn">
									<span><i class="fa fa-calendar"></i> <?php echo e(Request::get('dates_view') ?: __('app.date_start_picker')); ?></span>
										<i class="fa fa-caret-down"></i>
									</button>
								</div>
								<input type="hidden" id="dates_view" name="dates_view" value="<?php echo e(Request::get('dates_view')); ?>">
								<input type="hidden" id="dates" name="dates" value="<?php echo e(Request::get('dates')); ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.type'); ?></label>
								<?php echo Form::select('system', $systems, Request::get('system'), ['id' => 'system', 'class' => 'form-control']); ?>

							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.role'); ?></label>
								<?php echo Form::select('role', ['' => '---'] + $roles, Request::get('role'), ['id' => 'role', 'class' => 'form-control']); ?>

							</div>
						</div>
						<?php if(auth()->user()->hasRole(['admin', 'agent', 'distributor'])): ?>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.credit_in'); ?> <?php echo app('translator')->get('app.from'); ?></label>
								<input type="text" class="form-control" name="credit_in_from" value="<?php echo e(Request::get('credit_in_from')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.credit_in'); ?> <?php echo app('translator')->get('app.to'); ?></label>
								<input type="text" class="form-control" name="credit_in_to" value="<?php echo e(Request::get('credit_in_to')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.credit_out'); ?> <?php echo app('translator')->get('app.from'); ?></label>
								<input type="text" class="form-control" name="credit_out_from" value="<?php echo e(Request::get('credit_out_from')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.credit_out'); ?> <?php echo app('translator')->get('app.to'); ?></label>
								<input type="text" class="form-control" name="credit_out_to" value="<?php echo e(Request::get('credit_out_to')); ?>">
							</div>
						</div>
						<?php endif; ?>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.money_in'); ?> <?php echo app('translator')->get('app.from'); ?></label>
								<input type="text" class="form-control" name="money_in_from" value="<?php echo e(Request::get('money_in_from')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.money_in'); ?> <?php echo app('translator')->get('app.to'); ?></label>
								<input type="text" class="form-control" name="money_in_to" value="<?php echo e(Request::get('money_in_to')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.money_out'); ?> <?php echo app('translator')->get('app.from'); ?></label>
								<input type="text" class="form-control" name="money_out_from" value="<?php echo e(Request::get('money_out_from')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.money_out'); ?> <?php echo app('translator')->get('app.to'); ?></label>
								<input type="text" class="form-control" name="money_out_to" value="<?php echo e(Request::get('money_out_to')); ?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<?php
									$filter = ['' => '---'];
                                    $shifts = \VanguardLTE\OpenShift::orderBy('start_date', 'DESC')->get();
                                    if( count($shifts) ){
                                        foreach($shifts AS $shift){
                                            $filter[$shift->id] = $shift->id . ' - ' . $shift->start_date;
                                        }
                                    }
								?>
								<label><?php echo app('translator')->get('app.shifts'); ?></label>
								<?php echo Form::select('shifts', $filter, Request::get('shifts'), ['id' => 'shifts', 'class' => 'form-control']); ?>

							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">
						<?php echo app('translator')->get('app.filter'); ?>
					</button>
				</div>
			</div>
		</form>

		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo app('translator')->get('app.statistics'); ?></h3>
			</div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
					<thead>
					<tr>
						<?php if(auth()->user()->hasRole(['admin'])): ?>
							<th><?php echo app('translator')->get('app.admin'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin', 'agent'])): ?>
							<th><?php echo app('translator')->get('app.agent'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin', 'agent', 'distributor'])): ?>
							<th><?php echo app('translator')->get('app.distributor'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin', 'agent', 'distributor'])): ?>
							<th><?php echo app('translator')->get('app.shop'); ?></th>
						<?php endif; ?>
						<th><?php echo app('translator')->get('app.cashier'); ?></th>
						<th><?php echo app('translator')->get('app.type'); ?></th>
						<th><?php echo app('translator')->get('app.user'); ?></th>
						<?php if(auth()->user()->hasRole(['admin', 'agent'])): ?>
							<th><?php echo app('translator')->get('app.agent'); ?> <?php echo app('translator')->get('app.in'); ?></th>
							<th><?php echo app('translator')->get('app.agent'); ?> <?php echo app('translator')->get('app.out'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin', 'agent', 'distributor'])): ?>
							<th><?php echo app('translator')->get('app.distributor'); ?> <?php echo app('translator')->get('app.in'); ?></th>
							<th><?php echo app('translator')->get('app.distributor'); ?> <?php echo app('translator')->get('app.out'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin'])): ?>
							<th><?php echo app('translator')->get('app.type'); ?> <?php echo app('translator')->get('app.in'); ?></th>
							<th><?php echo app('translator')->get('app.type'); ?> <?php echo app('translator')->get('app.out'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin', 'agent', 'distributor'])): ?>
							<th><?php echo app('translator')->get('app.credit'); ?> <?php echo app('translator')->get('app.in'); ?></th>
							<th><?php echo app('translator')->get('app.credit'); ?> <?php echo app('translator')->get('app.out'); ?></th>
						<?php endif; ?>
						<th><?php echo app('translator')->get('app.money'); ?> <?php echo app('translator')->get('app.in'); ?></th>
						<th><?php echo app('translator')->get('app.money'); ?> <?php echo app('translator')->get('app.out'); ?></th>
						<th><?php echo app('translator')->get('app.date'); ?></th>
					</tr>
					</thead>
					<tbody>
					<?php if(count($transactions)): ?>
						<?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo $__env->make('backend.stat.partials.transaction_stat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php else: ?>
						<tr><td colspan="18"><?php echo app('translator')->get('app.no_data'); ?></td></tr>
					<?php endif; ?>
					</tbody>
					<thead>
					<tr>
						<?php if(auth()->user()->hasRole(['admin'])): ?>
							<th><?php echo app('translator')->get('app.admin'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin', 'agent'])): ?>
							<th><?php echo app('translator')->get('app.agent'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin', 'agent', 'distributor'])): ?>
							<th><?php echo app('translator')->get('app.distributor'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin', 'agent', 'distributor'])): ?>
							<th><?php echo app('translator')->get('app.shop'); ?></th>
						<?php endif; ?>
						<th><?php echo app('translator')->get('app.cashier'); ?></th>
						<th><?php echo app('translator')->get('app.type'); ?></th>
						<th><?php echo app('translator')->get('app.user'); ?></th>
						<?php if(auth()->user()->hasRole(['admin', 'agent'])): ?>
							<th><?php echo app('translator')->get('app.agent'); ?> <?php echo app('translator')->get('app.in'); ?></th>
							<th><?php echo app('translator')->get('app.agent'); ?> <?php echo app('translator')->get('app.out'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin', 'agent', 'distributor'])): ?>
							<th><?php echo app('translator')->get('app.distributor'); ?> <?php echo app('translator')->get('app.in'); ?></th>
							<th><?php echo app('translator')->get('app.distributor'); ?> <?php echo app('translator')->get('app.out'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin'])): ?>
							<th><?php echo app('translator')->get('app.type'); ?> <?php echo app('translator')->get('app.in'); ?></th>
							<th><?php echo app('translator')->get('app.type'); ?> <?php echo app('translator')->get('app.out'); ?></th>
						<?php endif; ?>
						<?php if(auth()->user()->hasRole(['admin', 'agent', 'distributor'])): ?>
							<th><?php echo app('translator')->get('app.credit'); ?> <?php echo app('translator')->get('app.in'); ?></th>
							<th><?php echo app('translator')->get('app.credit'); ?> <?php echo app('translator')->get('app.out'); ?></th>
						<?php endif; ?>
						<th><?php echo app('translator')->get('app.money'); ?> <?php echo app('translator')->get('app.in'); ?></th>
						<th><?php echo app('translator')->get('app.money'); ?> <?php echo app('translator')->get('app.out'); ?></th>
						<th><?php echo app('translator')->get('app.date'); ?></th>
					</tr>
					</thead>
                            </table>
                        </div>


						<?php
							$urlParams = '?';
                            foreach(request()->all() AS $key=>$value){
                                if($key != 'page'){
                                    $urlParams .= '&' . $key . '=' . $value;
                                }
                            }
						?>

						<?php echo \VanguardLTE\Lib\Pagination::paging($count, $perPage, $page, route('backend.transactions').$urlParams, '&page', 9); ?>


                    </div>
		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script>
		$(function() {
			$('#stat-table').dataTable();

			$('.btn-box-tool').click(function(event){
				if( $('.shift_stat_show').hasClass('collapsed-box') ){
					$.cookie('shift_stat_show', '1');
				} else {
					$.removeCookie('shift_stat_show');
				}
			});

			if( $.cookie('shift_stat_show') ){
				$('.shift_stat_show').removeClass('collapsed-box');
				$('.shift_stat_show .btn-box-tool i').removeClass('fa-plus').addClass('fa-minus');
			}
		});
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/stat/transactions.blade.php ENDPATH**/ ?>