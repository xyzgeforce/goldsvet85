<?php $__env->startSection('page-title', trans('app.game_stats')); ?>
<?php $__env->startSection('page-heading', trans('app.game_stats')); ?>

<?php $__env->startSection('content'); ?>

	<section class="content-header">
		<?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</section>

	<section class="content">
		<form action="" method="GET">
			<div class="box box-danger collapsed-box game_stat_show">
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
								<label><?php echo app('translator')->get('app.game'); ?></label>
								<input type="text" class="form-control" name="game" value="<?php echo e(Request::get('game')); ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.user'); ?></label>
								<input type="text" class="form-control" name="user" value="<?php echo e(Request::get('user')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.balance_from'); ?></label>
								<input type="text" class="form-control" name="balance_from" value="<?php echo e(Request::get('balance_from')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.balance_to'); ?></label>
								<input type="text" class="form-control" name="balance_to" value="<?php echo e(Request::get('balance_to')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.bet_from'); ?></label>
								<input type="text" class="form-control" name="bet_from" value="<?php echo e(Request::get('bet_from')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.bet_to'); ?></label>
								<input type="text" class="form-control" name="bet_to" value="<?php echo e(Request::get('bet_to')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.win_from'); ?></label>
								<input type="text" class="form-control" name="win_from" value="<?php echo e(Request::get('win_from')); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><?php echo app('translator')->get('app.win_to'); ?></label>
								<input type="text" class="form-control" name="win_to" value="<?php echo e(Request::get('win_to')); ?>">
							</div>
						</div>
						<div class="col-md-6">
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
						<div class="col-md-12">
							<div class="form-group">
								<?php
									$filter = ['' => '---'];
                                    $shifts = \VanguardLTE\OpenShift::where('shop_id', Auth::user()->shop_id)->orderBy('start_date', 'DESC')->get();
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
				<h3 class="box-title"><?php echo app('translator')->get('app.game_stats'); ?></h3>
			</div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
					<thead>
					<tr>
						<th><?php echo app('translator')->get('app.game'); ?></th>
						<th><?php echo app('translator')->get('app.user'); ?></th>
						<th><?php echo app('translator')->get('app.balance'); ?></th>
						<th><?php echo app('translator')->get('app.bet'); ?></th>
						<th><?php echo app('translator')->get('app.win'); ?></th>
						<?php if(auth()->user()->hasRole('admin')): ?>
						<th><?php echo app('translator')->get('app.in_game'); ?></th>
						<th><?php echo app('translator')->get('app.in_jpg'); ?></th>
							<th><?php echo app('translator')->get('app.profit'); ?></th>
						<?php endif; ?>
						<th><?php echo app('translator')->get('app.denomination'); ?></th>
						<th><?php echo app('translator')->get('app.slots'); ?></th>					
						<th><?php echo app('translator')->get('app.fish'); ?></th>
						<th><?php echo app('translator')->get('app.table_bank'); ?></th>
						<th><?php echo app('translator')->get('app.little'); ?></th>
						<th><?php echo app('translator')->get('app.bonus'); ?></th>
						<th><?php echo app('translator')->get('app.total'); ?></th>
						<th><?php echo app('translator')->get('app.date'); ?></th>
					</tr>
					</thead>
					<tbody>
					<?php if(count($game_stat)): ?>
						<?php $__currentLoopData = $game_stat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo $__env->make('backend.games.partials.row_stat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php else: ?>
						<tr><td colspan="16"><?php echo app('translator')->get('app.no_data'); ?></td></tr>
					<?php endif; ?>
					</tbody>
					<thead>
					<tr>
						<th><?php echo app('translator')->get('app.game'); ?></th>
						<th><?php echo app('translator')->get('app.user'); ?></th>
						<th><?php echo app('translator')->get('app.balance'); ?></th>
						<th><?php echo app('translator')->get('app.bet'); ?></th>
						<th><?php echo app('translator')->get('app.win'); ?></th>
						<?php if(auth()->user()->hasRole('admin')): ?>
						<th><?php echo app('translator')->get('app.in_game'); ?></th>
						<th><?php echo app('translator')->get('app.in_jpg'); ?></th>
							<th><?php echo app('translator')->get('app.profit'); ?></th>
						<?php endif; ?>
						<th><?php echo app('translator')->get('app.denomination'); ?></th>
						<th><?php echo app('translator')->get('app.slots'); ?></th>						
						<th><?php echo app('translator')->get('app.fish'); ?></th>
						<th><?php echo app('translator')->get('app.table_bank'); ?></th>
						<th><?php echo app('translator')->get('app.little'); ?></th>
						<th><?php echo app('translator')->get('app.bonus'); ?></th>
						<th><?php echo app('translator')->get('app.total'); ?></th>
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

						<?php echo \VanguardLTE\Lib\Pagination::paging($count, $perPage, $page, route('backend.game_stat').$urlParams, '&page', 9); ?>



                    </div>			
		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script>
		$('#stats-table').dataTable();
		$(function() {
			$('input[name="dates"]').daterangepicker({
				timePicker: true,
				timePicker24Hour: true,
				startDate: moment().subtract(30, 'day'),
				endDate: moment().add(7, 'day'),

				locale: {
					format: 'YYYY-MM-DD HH:mm'
				}
			});
			$('.btn-box-tool').click(function(event){
				if( $('.game_stat_show').hasClass('collapsed-box') ){
					$.cookie('game_stat_show', '1');
				} else {
					$.removeCookie('game_stat_show');
				}
			});

			if( $.cookie('game_stat_show') ){
				$('.game_stat_show').removeClass('collapsed-box');
				$('.game_stat_show .btn-box-tool i').removeClass('fa-plus').addClass('fa-minus');
			}
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/stat/game_stat.blade.php ENDPATH**/ ?>