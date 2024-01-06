<div class="col-md-6">
    <div class="form-group">
        <label><?php echo app('translator')->get('app.username'); ?></label>
        <input type="text" class="form-control" id="username" name="username" placeholder="(<?php echo app('translator')->get('app.optional'); ?>)" value="">
    </div>
</div>


<div class="col-md-6">
    <div class="form-group">
        <label><?php echo app('translator')->get('app.role'); ?></label>
        <?php echo Form::select('role_id', Auth::user()->available_roles(), '',
            ['class' => 'form-control', 'id' => 'role_id', '']); ?>

    </div>
</div>


<?php if(auth()->user()->hasRole(['distributor'])): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label><?php echo app('translator')->get('app.shops'); ?></label>
            <?php if( auth()->user()->hasRole(['admin', 'agent']) ): ?>
                <?php echo Form::select('shop_id', ['0' => '---'] + $shops, '0', ['class' => 'form-control', 'id' => 'shops']); ?>

            <?php else: ?>
                <?php echo Form::select('shop_id', $shops, '0', ['class' => 'form-control', 'id' => 'shops']); ?>

            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php if( auth()->user()->hasRole(['manager', 'cashier']) ): ?>
    <input type="hidden" name="shop_id" value="<?php echo e(auth()->user()->shop_id); ?>">
<?php endif; ?>

<?php if( auth()->user()->hasRole(['cashier']) ): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label><?php echo e(trans('app.balance')); ?></label>
            <input type="text" class="form-control" id="balance" name="balance" value="0">
        </div>
    </div>
<?php endif; ?>
<div class="col-md-6">
    <div class="form-group">
        <label><?php echo e(trans('app.password')); ?></label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label><?php echo e(trans('app.confirm_password')); ?></label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>
</div><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/user/partials/create.blade.php ENDPATH**/ ?>