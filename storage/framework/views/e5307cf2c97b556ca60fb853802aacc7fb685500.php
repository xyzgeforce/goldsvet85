<?php $__env->startSection('page-title', trans('app.edit_jpg')); ?>
<?php $__env->startSection('page-heading', $jackpot->title); ?>

<?php $__env->startSection('content'); ?>

<section class="content-header">
<?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

    <section class="content">

      <div class="box box-default">
		<?php echo Form::open(['route' => array('backend.jpgame.update', $jackpot->id), 'files' => true, 'id' => 'user-form']); ?>

        <div class="box-header with-border">
          <h3 class="box-title"><?php echo app('translator')->get('app.edit_jpg'); ?></h3>
        </div>

        <div class="box-body">
          <div class="row">
            <?php echo $__env->make('backend.jpg.partials.base', ['edit' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
        </div>

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">
          <?php echo app('translator')->get('app.edit_jpg'); ?>
        </button>

        </div>
		<?php echo Form::close(); ?>

      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/jpg/edit.blade.php ENDPATH**/ ?>