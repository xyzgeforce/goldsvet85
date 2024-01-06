<div class="col-md-6">
    <div class="form-group">
        <label><?php echo app('translator')->get('app.name'); ?></label>
        <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo app('translator')->get('app.name'); ?>" required value="<?php echo e($edit ? $jackpot->name : ''); ?>">
    </div>
</div>
<?php if(auth()->user()->hasRole('admin') ): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label><?php echo app('translator')->get('app.balance'); ?></label>
            <input type="number" step="0.0000001" class="form-control" id="balance" name="balance" placeholder="0.00" <?php if(!auth()->user()->hasRole('admin')): ?>disabled <?php endif; ?> value="<?php echo e($edit ? $jackpot->balance : ''); ?>" >
        </div>
    </div>
<?php endif; ?>

<?php if( auth()->user()->hasPermission('jpgame.edit') ): ?>
<div class="col-md-6">
    <div class="form-group">
        <label><?php echo app('translator')->get('app.start_balance'); ?></label>
        <?php echo Form::select('start_balance', ['' => '---'] + \VanguardLTE\JPG::$values['start_balance'], $edit ? '' : 1, ['class' => 'form-control']); ?>

    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label><?php echo app('translator')->get('app.trigger'); ?></label>
        <?php echo Form::select('pay_sum', ['' => '---'] + \VanguardLTE\JPG::$values['pay_sum'], $edit ? '' : 0, ['class' => 'form-control']); ?>

    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label><?php echo app('translator')->get('app.percent'); ?></label>
        <?php
            $percents = array_combine(\VanguardLTE\JPG::$values['percent'], \VanguardLTE\JPG::$values['percent']);
        ?>
        <?php echo Form::select('percent', ['' => '---'] + $percents, '', ['class' => 'form-control']); ?>

    </div>
</div>
<?php endif; ?>

<div class="col-md-6">
    <div class="form-group">
        <label><?php echo app('translator')->get('app.user'); ?></label>
        <?php echo Form::select('user_id', ['' => '---'] + $users, $edit ? $jackpot->user_id : 0, ['class' => 'form-control select2', 'style' => 'width: 100%;']); ?>

    </div>
</div>
<?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/jpg/partials/base.blade.php ENDPATH**/ ?>