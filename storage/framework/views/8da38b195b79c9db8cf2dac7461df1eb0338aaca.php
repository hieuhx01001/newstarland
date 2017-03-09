

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1> <?php echo e($pageTitle); ?>

            <small> <?php echo e($pageNote); ?> </small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('category?return='.$return)); ?>">
                    <i class="fa fa-th"></i> <?php echo e($pageTitle); ?> </a>
            </li>
            <li class="active"> Update</li>
        </ol>
    </section>

    <div class="content">

        <div class="box box-primary">
            <div class="box-header with-border">

                <div class="box-header-tools pull-left">
                    <a href="<?php echo e(url($pageModule.'?return='.$return)); ?>" class="tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_back')); ?>">
                        <i class="fa  fa-arrow-left"></i>
                    </a>
                </div>
                <div class="box-header-tools ">
                    <?php if(Session::get('gid') ==1): ?>
                        <a href="<?php echo e(URL::to('sximo/module/config/'.$pageModule)); ?>" class="tips btn btn-xs btn-default" title=" <?php echo e(Lang::get('core.btn_config')); ?>">
                            <i class="fa  fa-ellipsis-v"></i>
                        </a>
                    <?php endif; ?>
                </div>

            </div>
            <div class="box-body">

                <ul class="parsley-error-list">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </ul>

                <?php echo Form::open(array('url'=>'category/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')); ?>

                <div class="col-md-12">
                    <fieldset>
                        <legend> Danh Mục Bài Viết</legend>
                        <?php echo Form::hidden('category_id', $row['category_id']); ?>

                        <div class="form-group  ">
                            <label for="Danh Mục Cha" class=" control-label col-md-4 text-left"> Danh Mục Cha</label>
                            <div class="col-md-7">
                                <select name='parent_id' rows='5' id='parent_id' class='select2 '></select>
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="Tên Tiêu Đề" class=" control-label col-md-4 text-left"> Tên Tiêu Đề
                                <span class="asterix"> * </span></label>
                            <div class="col-md-7">
                                <input type='text' name='name' id='name' value='<?php echo e($row['name']); ?>'
                                       required class='form-control '/>
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="Link Ảnh" class=" control-label col-md-4 text-left"> Link Ảnh</label>
                            <div class="col-md-7">
                                <input type='text' name='image_url' id='image_url' value='<?php echo e($row['image_url']); ?>'
                                       class='form-control '/>
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                    </fieldset>
                </div>


                <div style="clear:both"></div>


                <div class="form-group">
                    <label class="col-sm-4 text-right">&nbsp;</label>
                    <div class="col-sm-8">
                        <button type="submit" name="apply" class="btn btn-info btn-sm">
                            <i class="icon-checkmark-circle2"></i> <?php echo e(Lang::get('core.sb_apply')); ?></button>
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                            <i class="icon-bubble-check"></i> <?php echo e(Lang::get('core.sb_save')); ?></button>
                        <button type="button" onclick="location.href='<?php echo e(URL::to('category?return='.$return)); ?>' " class="btn btn-warning btn-sm ">
                            <i class="icon-cancel-circle2 "></i> <?php echo e(Lang::get('core.sb_cancel')); ?> </button>
                    </div>

                </div>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {


            $("#parent_id").jCombo("<?php echo url('category/comboselect?filter=tb_categories:category_id:name'); ?>",
                    {selected_value: '<?php echo e($row["parent_id"]); ?>'});


            $('.removeMultiFiles').on('click', function () {
                var removeUrl = '<?php echo e(url("category/removefiles?file=")); ?>' + $(this).attr('url');
                $(this).parent().remove();
                $.get(removeUrl, function (response) {
                });
                $(this).parent('div').empty();
                return false;
            });

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>