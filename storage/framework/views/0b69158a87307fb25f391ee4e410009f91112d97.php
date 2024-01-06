<?php $__env->startSection('page-title', trans('app.terminal')); ?>
<?php $__env->startSection('page-heading', trans('app.terminal')); ?>

<?php $__env->startSection('content'); ?>

<section class="content-header">
    <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<section class="content">
    <div class="subuheader">
        <div class="row">
            <div class="col-md-6">
                <div class="heading"><?php echo app('translator')->get('app.terminal'); ?></div>
            </div>
            <div class="col-md-6 text-right">
                <a type="button" class="btn btn-primary text-uppercase text-white" data-toggle="modal"
                    data-target="#terminalAdd">
                    <i class="fa fa-plus-square"></i> <?php echo app('translator')->get('app.add_new_terminal'); ?> </a>
                </a>
            </div>
        </div>
    </div>
    <div class="tableList">
        <table class="table bg-white">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tickets</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Rating</th>
                    <th scope="col">TB</th>
                    <th scope="col">PB</th>
                    <th scope="col">DE</th>
                    <th scope="col">IF</th>
                    <th scope="col">HH</th>
                    <th scope="col">Refund</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($response['terminals'])>0): ?>
                <?php $__currentLoopData = $response['terminals']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <a class="fw-bold" href="<?php echo e(url('backend/terminal/details/'.encoded($item->id))); ?>">
                            <?php echo e($item->username); ?>

                        </a>
                    </td>
                    <td>
                        <?php if(!VanguardLTE\Http\Controllers\Web\Backend\Helper::is_online($item->last_online)): ?>
                        <small><i class="fa fa-circle text-red"></i> Offline</small>
                        <?php else: ?>
                        <small><i class="fa fa-circle text-green"></i> Online</small>
                        <?php endif; ?>
                    </td>
                    <td><a href="#" class="btn btn-xs btn-default detailsTicket" data-id="">Details</a></td>
                    <td><?php echo e(number_format(floatval($item->balance), 2, '.', '')); ?></td>
                    <td><?php echo e($item->rating); ?></td>
                    <td><?php echo e(number_format(floatval($item->count_tournaments), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($item->count_progress), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($item->count_daily_entries), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($item->count_invite), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($item->count_happyhours), 2, '.', '')); ?></td>
                    <td><?php echo e(number_format(floatval($item->count_refunds), 2, '.', '')); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <tr>
                    <td colspan="11">
                        <div class="noData">No terminal found!</div>
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="">
            <?php echo e($response['terminals']->appends(request()->input())->links()); ?>

            <div class="clear"></div>
        </div>
    </div>
</section>
<!-- Modals -->
<?php echo $__env->make('backend.terminal.modals.terminal_add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).on('click','.detailsTicket',function(e){
        $.ajax({
            type:'POST',
            url:'<?php echo e(env('APP_URL')); ?>/meta-stone-details',
            data:{
                "name":gname
            },
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(response){
                console.log(response);    
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/terminal/list.blade.php ENDPATH**/ ?>