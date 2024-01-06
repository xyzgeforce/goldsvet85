<?php $__env->startSection('page-title', trans('app.games')); ?>
<?php $__env->startSection('page-heading', trans('app.games')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.game_update'); ?></h3>
            </div>
            <div class="box-body">
                <div class="row">

                    <form action="<?php echo e(route('backend.game.categories')); ?>" method="POST" class="pb-2 mb-3 border-bottom-light" id="massForm">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="change_category"><?php echo app('translator')->get('app.add_or_change'); ?></label>
                                <select name="action" class="form-control" id="massAction">
                                    <option value="change_values">---</option>
                                    <option value="add_category"><?php echo app('translator')->get('app.add_in_categories'); ?></option>
                                    <option value="change_category"><?php echo app('translator')->get('app.change_categories'); ?></option>
                                    <option value="delete_games"><?php echo app('translator')->get('app.delete_games'); ?></option>
                                    <option value="stay_games"><?php echo app('translator')->get('app.stay_games'); ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="device"><?php echo app('translator')->get('app.categories'); ?></label>
                                <select name="category[]" id="category" class="form-control select2" multiple="multiple" style="width: 100%;" >
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" ><?php echo e($category->title); ?></option>
                                        <?php $__currentLoopData = $category->inner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($inner->id); ?>"><?php echo e($inner->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="games"><?php echo app('translator')->get('app.games_list'); ?></label>
                                <textarea id="games" name="games" class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                </div>

                <div class="row">


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rezerv"><?php echo app('translator')->get('app.doubling'); ?></label>
                            <?php echo Form::select('rezerv', $emptyGame->get_values('rezerv', true), '', ['class' => 'form-control']); ?>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="view"><?php echo app('translator')->get('app.view'); ?></label>
                            <select name="view" id="view" class="form-control">
                                <option value="">---</option>
                                <option value="1"><?php echo app('translator')->get('app.active'); ?></option>
                                <option value="0"><?php echo app('translator')->get('app.disabled'); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bet"><?php echo app('translator')->get('app.bet'); ?></label>
                            <?php echo Form::select('bet', $emptyGame->get_values('bet', true), '', ['class' => 'form-control']); ?>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="scaleMode"><?php echo app('translator')->get('app.scaling'); ?></label>
                            <select name="scaleMode" id="scaleMode" class="form-control" >
                                <option value="">---</option>
                                <option value="showAll"><?php echo app('translator')->get('app.default'); ?></option>
                                <option value="exactFit"><?php echo app('translator')->get('app.full_screen'); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="slotViewState"><?php echo app('translator')->get('app.ui'); ?></label>
                            <select name="slotViewState" id="slotViewState" class="form-control" >
                                <option value="">---</option>
                                <option value="Normal"><?php echo app('translator')->get('app.visible_ui'); ?></option>
                                <option value="HideUI"><?php echo app('translator')->get('app.hide_ui'); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title"><?php echo app('translator')->get('app.gamebank'); ?></label>
                            <?php echo Form::select('gamebank', ['' => '---'] + $emptyGame->gamebankNames, '', ['class' => 'form-control']); ?>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.denomination'); ?></label>
                            <?php
                                $denominations = array_combine(\VanguardLTE\Game::$values['denomination'], \VanguardLTE\Game::$values['denomination']);
                            ?>
                            <?php echo Form::select('denomination', ['' => '---'] + $denominations, '', ['class' => 'form-control']); ?>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title"><?php echo app('translator')->get('app.labels'); ?></label>
                            <?php echo Form::select('label', ['' => '---'] + $emptyGame->labels + ['clear' => 'Clear'], '', ['class' => 'form-control']); ?>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title"><?php echo app('translator')->get('app.jpg'); ?></label>
                            <?php echo Form::select('jpg_id', ['' => '---'] + $jpgs, '', ['class' => 'form-control']); ?>

                        </div>
                    </div>

                </div>



                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <?php $__currentLoopData = [1,3,5,7,9,10]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <?php $__currentLoopData = \VanguardLTE\Game::$values['random_keys']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $random_key=>$values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $key = 'lines_percent_config_spin';
                                        $array_key = 'line_spin[line'.$index.']['.$random_key.']';
                                        $value = $emptyGame->get_line_value($emptyGame->$key, 'line'.$index, $random_key, true);
                                    ?>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Spin L <?php echo e($index); ?> - <?php echo e($values[0]); ?>, <?php echo e($values[1]); ?></label>
                                            <?php echo Form::select($array_key, $emptyGame->get_values('random_values', true), '', ['class' => 'form-control']); ?>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                </ul>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <?php $__currentLoopData = [1,3,5,7,9,10]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <?php $__currentLoopData = \VanguardLTE\Game::$values['random_keys']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $random_key=>$values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $key = 'lines_percent_config_spin_bonus';
                                        $array_key = 'line_spin_bonus[line'.$index.'_bonus]['.$random_key.']';
                                        $value = $emptyGame->get_line_value($emptyGame->$key, 'line'.$index.'_bonus', $random_key, true);
                                    ?>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Spin L <?php echo e($index); ?> Bonus - <?php echo e($values[0]); ?>, <?php echo e($values[1]); ?></label>
                                            <?php echo Form::select($array_key, $emptyGame->get_values('random_values', true), '', ['class' => 'form-control']); ?>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                </ul>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <?php $__currentLoopData = [1,3,5,7,9,10]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <?php $__currentLoopData = \VanguardLTE\Game::$values['random_keys']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $random_key=>$values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $key = 'lines_percent_config_bonus';
                                        $array_key = 'line_bonus[line'.$index.']['.$random_key.']';
                                        $value = $emptyGame->get_line_value($emptyGame->$key, 'line'.$index, $random_key, true);
                                    ?>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Bonus L <?php echo e($index); ?> - <?php echo e($values[0]); ?>, <?php echo e($values[1]); ?></label>
                                            <?php echo Form::select($array_key, $emptyGame->get_values('random_values', true), '', ['class' => 'form-control']); ?>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                </ul>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <?php $__currentLoopData = [1,3,5,7,9,10]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <?php $__currentLoopData = \VanguardLTE\Game::$values['random_keys']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $random_key=>$values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $key = 'lines_percent_config_bonus_bonus';
                                        $array_key = 'line_bonus_bonus[line'.$index.'_bonus]['.$random_key.']';
                                        $value = $emptyGame->get_line_value($emptyGame->$key, 'line'.$index.'_bonus', $random_key, true);
                                    ?>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Bonus L <?php echo e($index); ?> Bonus - <?php echo e($values[0]); ?>, <?php echo e($values[1]); ?></label>
                                            <?php echo Form::select($array_key, $emptyGame->get_values('random_values', true), '', ['class' => 'form-control']); ?>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                </ul>



                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" value="<?= csrf_token() ?>" name="_token">
                        <input type="hidden" value="<?php echo e(implode(',', $ids)); ?>" name="ids">
                        <input type="hidden" value="0" name="all_shops" id="all_shops">
                        <button type="submit" class="btn btn-primary">
                            <?php echo app('translator')->get('app.update'); ?>
                        </button>

                        <?php if(auth()->user()->hasRole('admin') && auth()->user()->shop_id == 0): ?>
                            <button type="button" class="btn btn-primary" id="updateAllShops">
                                Update All Shops
                            </button>
                        <?php endif; ?>

                        <button type="button" class="btn btn-danger" id="massDelete">
                            <?php echo app('translator')->get('app.delete'); ?>
                        </button>


                        <button type="button" class="btn btn-danger" id="massStay">
                            <?php echo app('translator')->get('app.stay_games'); ?>
                        </button>



                    </div>
                </div>
                </form>
            </div>
        </div>

    </section>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $('#massDelete').click(function(){
            $('#massAction option[value="delete_games"]').prop('selected', true);

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-secondary'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: "<?php echo app('translator')->get('app.please_confirm'); ?>",
                html: "<?php echo app('translator')->get('app.are_you_sure_delete_game'); ?>",
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                focusCancel: false,
                reverseButtons: true,
                position: 'top-start',
                confirmButtonText: "<?php echo app('translator')->get('app.yes_delete_him'); ?>",
            }).then(function (t) {
                $('form#massForm').submit();
            });

        });


        $('#massStay').click(function(){
            $('#massAction option[value="stay_games"]').prop('selected', true);

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-secondary'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: "<?php echo app('translator')->get('app.please_confirm'); ?>",
                html: "<?php echo app('translator')->get('app.are_you_sure_delete_game'); ?>",
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                focusCancel: false,
                reverseButtons: true,
                position: 'top-start',
                confirmButtonText: "<?php echo app('translator')->get('app.yes_i_do'); ?>",
            }).then(function (t) {
                $('form#massForm').submit();
            });

        });

        $('#updateAllShops').click(function(){
            $('#all_shops').val('1');
            $('form#massForm').submit();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/backend/games/mass.blade.php ENDPATH**/ ?>