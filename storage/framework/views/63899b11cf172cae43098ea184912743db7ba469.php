<?php $__env->startSection('page-title', trans('app.edit_user')); ?>
<?php $__env->startSection('page-heading', $user->present()->username); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">
        <?php echo Form::open(['route' => ['backend.user.update.details', $user->id], 'method' => 'PUT', 'id' => 'details-form']); ?>


        <div class="row">
            <?php echo $__env->make('backend.user.partials.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-md-9">



                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li <?php if(!Request::get('date') && !Request::get('page')): ?> class="active" <?php endif; ?>>
                            <a id="details-tab"
                               data-toggle="tab"
                               href="#details">
                                <?php echo app('translator')->get('app.edit_user'); ?>
                            </a>
                        </li>
                        <?php if (\Auth::user()->hasPermission('users.activity')) : ?>
                        <li <?php if(Request::get('page')): ?> class="active" <?php endif; ?>>
                            <a id="authentication-tab"
                               data-toggle="tab"
                               href="#login-details">
                                <?php echo app('translator')->get('app.latest_activity'); ?>
                            </a>
                        </li>
                        <?php endif; ?>

                    </ul>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="<?php if(!Request::get('date') && !Request::get('page')): ?> active <?php endif; ?> tab-pane" id="details">
                            <?php echo $__env->make('backend.user.partials.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </div>


                        <?php if (\Auth::user()->hasPermission('users.activity')) : ?>
                        <div class="tab-pane <?php if(Request::get('page')): ?> active <?php endif; ?>" id="login-details">
                            <?php if(count($userActivities)): ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th><?php echo app('translator')->get('app.date'); ?></th>
                                        <th><?php echo app('translator')->get('app.more_info'); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $userActivities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($activity->created_at->format(config('app.date_time_format'))); ?></td>
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
                                    </tbody>
                                </table>

                                <?php echo $userActivities->links(); ?>

                            <?php else: ?>
                                <p class="text-muted font-weight-light"><em><?php echo app('translator')->get('app.no_activity_from_this_user_yet'); ?></em></p>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <div class="tab-pane <?php if(Request::get('date')): ?> active <?php endif; ?>" id="bonus-details">

                            <form action="" method="GET">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('app.date'); ?></label>
                                            <input type="text" class="form-control" name="date" value="<?php echo e(Request::get('date')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>&nbsp;</label><br>
                                            <button type="submit" class="btn btn-primary">
                                                <?php echo app('translator')->get('app.filter'); ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <?php echo Form::close(); ?>



        <?php if(!$user->hasRole('admin')): ?>
            <?php echo $__env->make('backend.user.partials.modals', ['user' => $user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>


    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(function() {
            $('input[name="date"]').datepicker({
                format: 'yyyy-mm-dd',
            });
        });
        $('.outPayment').click(function(event){
            $('#outAll').val('');
        });
        $('#doOutAll').click(function () {
            $('#outAll').val('1');
            $('form#outForm').submit();
        });
    </script>
    <?php echo HTML::script('/back/js/as/app.js'); ?>

    <?php echo HTML::script('/back/js/as/btn.js'); ?>

    <?php echo HTML::script('/back/js/as/profile.js'); ?>

    <?php echo JsValidator::formRequest('VanguardLTE\Http\Requests\User\UpdateDetailsRequest', '#details-form'); ?>

    <?php echo JsValidator::formRequest('VanguardLTE\Http\Requests\User\UpdateLoginDetailsRequest', '#login-details-form'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/user/edit.blade.php ENDPATH**/ ?>