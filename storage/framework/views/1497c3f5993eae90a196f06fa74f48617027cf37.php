<div class="modal fade" id="openAddModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo e(route('backend.user.balance.update')); ?>" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo app('translator')->get('app.balance'); ?> <?php echo app('translator')->get('app.pay_in'); ?></h4>
                </div>
                <div class="modal-body">
                    <?php if($happyhour && auth()->user()->hasRole('cashier')): ?>
                        <div class="alert alert-success">
                            <h4><?php echo app('translator')->get('app.happyhours'); ?></h4>
                            <p> <?php echo app('translator')->get('app.all_player_deposits'); ?> <?php echo e($happyhour->multiplier); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="OutSum"><?php echo app('translator')->get('app.sum'); ?></label>
                        <input type="text" class="form-control" id="OutSum" name="summ" placeholder="<?php echo app('translator')->get('app.sum'); ?>" required>
                        <input type="hidden" name="type" value="add">
                        <input type="hidden" id="AddId" name="user_id" value="<?php if(isset($user)): ?><?php echo e($user->id); ?><?php endif; ?>">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    </div>

                    <?php if( auth()->user()->hasRole('admin') && auth()->user()->google2fa_secret != null && auth()->user()->google2fa_enable ): ?>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.google_2fa'); ?></label>
                            <input type="text" name="google_2fa_code"  value="" class="form-control">
                        </div>
                    <?php endif; ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?php echo app('translator')->get('app.close'); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('app.pay_in'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="openOutModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo e(route('backend.user.balance.update')); ?>" method="POST" id="outForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo app('translator')->get('app.balance'); ?> <?php echo app('translator')->get('app.pay_out'); ?></h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="OutSum"><?php echo app('translator')->get('app.sum'); ?></label>
                        <input type="text" class="form-control" id="OutSum" name="summ" required autofocus>
                        <input type="hidden" name="type" value="out">
                        <input type="hidden" id="outAll" name="all" value="0">
                        <input type="hidden" id="OutId" name="user_id" value="<?php if(isset($user)): ?><?php echo e($user->id); ?><?php endif; ?>">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    </div>

                    <?php if( auth()->user()->hasRole('admin') && auth()->user()->google2fa_secret != null && auth()->user()->google2fa_enable ): ?>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.google_2fa'); ?></label>
                            <input type="text" name="google_2fa_code"  value="" class="form-control">
                        </div>
                    <?php endif; ?>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?php echo app('translator')->get('app.close'); ?></button>
                    <button type="button" class="btn btn-danger" id="doOutAll"><?php echo app('translator')->get('app.pay_out'); ?> <?php echo app('translator')->get('app.all'); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('app.pay_out'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/user/partials/modals.blade.php ENDPATH**/ ?>