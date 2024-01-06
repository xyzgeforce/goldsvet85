<?php $__env->startSection('page-title', trans('app.permissions')); ?>
<?php $__env->startSection('page-heading', trans('app.permissions')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h2 class="box-title"><?php echo app('translator')->get('app.permissions'); ?></h2>

            </div>
        </div>

        <?php echo Form::open(['route' => 'backend.permission.save', 'class' => 'mb-4']); ?>



        <div class="box box-primary">
            <div class="box-header with-border"><h3 class="box-title">
                    <?php echo app('translator')->get('app.permissions'); ?>
                </h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-pills nav-stacked">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if( count($permissions) ): ?>
                                        <li <?php if($loop->first): ?> class="active" <?php endif; ?>><a href="#permissions_<?php echo e($key); ?>" data-toggle="tab" aria-expanded="false"><?php echo app('translator')->get('app.permissions_' . $key); ?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">

                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if( count($permissions) ): ?>
                                    <div class="tab-pane <?php if($loop->first): ?> active <?php endif; ?>" id="permissions_<?php echo e($key); ?>">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th><?php echo app('translator')->get('app.name'); ?></th>
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if( !in_array($role->id, [1,6]) ): ?>
                                                            <th><?php echo e($role->name); ?></th>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(count($permissions)): ?>
                                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($permission->name ?: $permission->name); ?></td>

                                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if( !in_array($role->id, [1,6]) ): ?>
                                                                    <td>

                                                                        <?php if(
                                                                (in_array($role->id, [2,3,4]) && in_array($permission->id, [11,95,131])  )
                                                                    ||
                                                                (in_array($role->id, [2,3]) && in_array($permission->id, [60,130,14,81,82,83,84,85,86,87,88,89,132,133,134,135,136,137,138,139])  )
                                                                    ||
                                                                ( $role->id == 2 && in_array($permission->id, [56,57,58,59,103,104,105,106,121,90,122,80,114,115,116,117,118,119,10,123,8,98,96,97,102,127,128,36,38,39,125]))
                                                                ): ?>
                                                                            <label class="checkbox-container" for="cb-<?php echo e($role->id); ?>-<?php echo e($permission->id); ?>">
                                                                                <?php echo Form::checkbox(
                                                                                    "roles_temp[{$role->id}][]",
                                                                                    $permission->id,
                                                                                    $role->hasOnePermission($permission->id),
                                                                                    [
                                                                                        'id' => "cb-{$role->id}-{$permission->id}",
                                                                                        'disabled' => 'disabled'
                                                                                    ]
                                                                                ); ?>


                                                                                <?php echo Form::checkbox(
                                                                                "roles[{$role->id}][]",
                                                                                $permission->id,
                                                                                $role->id == 6 ? true: $role->hasOnePermission($permission->id),
                                                                                [
                                                                                    'id' => "cb-{$role->id}-{$permission->id}",
                                                                                    'style' => 'display: none;'
                                                                                ]
                                                                            ); ?>



                                                                                <span class="checkmark"></span>
                                                                            </label>

                                                                        <?php else: ?>

                                                                            <label class="checkbox-container" for="cb-<?php echo e($role->id); ?>-<?php echo e($permission->id); ?>">
                                                                                <?php echo Form::checkbox(
                                                                                    "roles[{$role->id}][]",
                                                                                    $permission->id,
                                                                                    $role->hasOnePermission($permission->id),
                                                                                    [
                                                                                        'id' => "cb-{$role->id}-{$permission->id}"
                                                                                    ]
                                                                                ); ?>

                                                                                <span class="checkmark"></span>
                                                                            </label>

                                                                        <?php endif; ?>

                                                                    </td>
                                                                <?php else: ?>
                                                                    <?php echo Form::checkbox(
                                                                                "roles[{$role->id}][]",
                                                                                $permission->id,
                                                                                $role->id == 6 ? true: $role->hasOnePermission($permission->id),
                                                                                [
                                                                                    'id' => "cb-{$role->id}-{$permission->id}",
                                                                                    'style' => 'display: none;'
                                                                                ]
                                                                            ); ?>

                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                                </tbody>
                                                <thead>
                                                <tr>
                                                    <th><?php echo app('translator')->get('app.name'); ?></th>
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if( !in_array($role->id, [1,6]) ): ?>
                                                            <th><?php echo e($role->name); ?></th>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>

                                        <?php $__currentLoopData = $hidden; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo Form::checkbox(
                                                                "roles[{$role->id}][]",
                                                                $permission->id,
                                                                $role->id == 6 ? true: $role->hasOnePermission($permission->id),
                                                                [
                                                                    'class' => 'custom-control-input',
                                                                    'id' => "cb-{$role->id}-{$permission->id}",
                                                                    'style' => 'display: none;'
                                                                ]
                                                            ); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <button type="submit" class="btn btn-primary">
                                            <?php echo app('translator')->get('app.save_permissions'); ?>
                                        </button>

                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    <?php echo app('translator')->get('app.save_permissions'); ?>
                </button>
            </div>
        </div>


        <?php echo Form::close(); ?>


    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/permission/index.blade.php ENDPATH**/ ?>