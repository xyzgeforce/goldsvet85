<div class="col-md-6">
    <div class="form-group">
        <label for="code"><?php echo app('translator')->get('app.pincode'); ?></label>
        <input type="text" class="form-control" id="code" name="code" placeholder="" data-inputmask="'mask': '&&&&-&&&&-&&&&-&&&&-&&&&'" data-mask required value="<?php echo e($edit ? $pincode->code : ''); ?>" <?php echo e($edit ? 'disabled' : ''); ?>>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="nominal"><?php echo app('translator')->get('app.nominal'); ?></label>
        <input type="number" step="0.0000001" class="form-control" id="nominal" name="nominal" placeholder="" required value="<?php echo e($edit ? $pincode->nominal : ''); ?>" <?php echo e($edit ? 'disabled' : ''); ?>>
    </div>
</div>
<?php if($edit): ?>
<div class="col-md-6">
    <div class="form-group">
        <label for="status"><?php echo app('translator')->get('app.status'); ?></label>
        <?php echo Form::select('status', [__('app.disabled'), __('app.active')], $edit ? $pincode->status : 1, ['class' => 'form-control', 'id' => 'status']); ?>

    </div>
</div>
    <?php endif; ?>
<?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/pincodes/partials/base.blade.php ENDPATH**/ ?>