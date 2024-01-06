<?php $__env->startSection('page-title', trans('app.add_user')); ?>
<?php $__env->startSection('page-heading', trans('app.create_new_user')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">

        <?php if( Auth::user()->hasRole('cashier') ): ?>


            <?php if($happyhour && auth()->user()->hasRole('cashier')): ?>
                <div class="alert alert-success">
                    <h4><?php echo app('translator')->get('app.happyhours'); ?></h4>
                    <p> <?php echo app('translator')->get('app.all_player_deposits'); ?> <?php echo e($happyhour->multiplier); ?></p>
                </div>
            <?php endif; ?>


            <?php echo Form::open(['route' => 'backend.user.massadd', 'files' => true, 'id' => 'mass-user-form']); ?>

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo app('translator')->get('app.add_user'); ?></h3>
                </div>

                <div class="box-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo app('translator')->get('app.count'); ?></label>
                                <select name="count" class="form-control">
                                    <option value="1">1</option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo app('translator')->get('app.balance'); ?></label>
                                <input type="text" class="form-control" id="title" name="balance" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">
                        <?php echo app('translator')->get('app.add_user'); ?>
                    </button>
                </div>
            </div>
            <?php echo Form::close(); ?>

        <?php endif; ?>

        <?php echo Form::open(['route' => 'backend.user.store', 'files' => true, 'id' => 'user-form']); ?>


        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.add_user'); ?></h3>
            </div>

            <div class="box-body">
                <div class="row">

                    <?php echo $__env->make('backend.user.partials.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    <?php echo app('translator')->get('app.add_user'); ?>
                </button>
            </div>
        </div>

        <?php echo Form::close(); ?>


    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo JsValidator::formRequest('VanguardLTE\Http\Requests\User\CreateUserRequest', '#user-form'); ?>


    <script>

        $("#role_id").change(function (event) {
            var role_id = parseInt($('#role_id').val());
            $("#parent > option").each(function() {
                var id = parseInt($(this).attr('role'));
                if( (id - role_id) != 1 ){
                    $(this).attr('hidden', true);
                } else{
                    $(this).attr('hidden', false);
                }
                $(this).attr('selected', false);
            });
            $('#parent option[value=""]').attr('selected', true);
        });

        $("#role_id").trigger('change');

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/user/add.blade.php ENDPATH**/ ?>