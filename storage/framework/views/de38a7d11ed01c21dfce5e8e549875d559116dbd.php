<?php $__env->startSection('page-title', trans('app.add_pincode')); ?>
<?php $__env->startSection('page-heading', trans('app.add_pincode')); ?>

<?php $__env->startSection('content'); ?>

<section class="content-header">
<?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

    <section class="content">

        <?php echo Form::open(['route' => 'backend.pincode.massadd', 'files' => true]); ?>

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">ADD PIN</h3>
            </div>

            <div class="box-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.count2'); ?></label>
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
                            <label><?php echo app('translator')->get('app.nominal'); ?></label>
                            <input type="number" step="0.0000001" class="form-control" id="title" name="nominal" value="0">
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    ADD PIN
                </button>
            </div>
        </div>
        <?php echo Form::close(); ?>



            <?php echo Form::open(['route' => 'backend.pincode.store', 'files' => true, 'id' => 'user-form']); ?>

      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">ADD PIN</h3>
        </div>

        <div class="box-body">
          <div class="row">

                <?php echo $__env->make('backend.pincodes.partials.base', ['edit' => false, 'profile' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          </div>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">
                ADD PIN
            </button>
        </div>
      </div>

            <?php echo Form::close(); ?>


    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(function() {
            $('[data-mask]').inputmask({
                mask: "****-****-****-****-****",
                definitions: {'5': {validator: "[0-9A-Z]"}}
            });
            $('#datepicker').datetimepicker({
                locale: 'ru',
                format: 'YYYY-MM-DD HH-mm',
                timeZone: '<?php echo e(config('app.timezone')); ?>'
            })
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/pincodes/add.blade.php ENDPATH**/ ?>