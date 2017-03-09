

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            <i class="fa  fa-file-text-o "></i> <?php echo e($pageTitle); ?>

            <small><?php echo e($pageNote); ?></small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('dashboard')); ?>">
                    <i class="fa fa-dashboard"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('core/posts')); ?>">
                    <i class="fa fa-user"></i>
                    Post Article
                </a>
            </li>
            <li class="active">Edit</li>
        </ol>
    </section>

    <div class="content">
        <div class="box box-primary ">
            <div class="box-header with-border">
                <div class="box-header-tools pull-left">
                    <a href="<?php echo e(url($pageModule.'?return='.$return)); ?>" class="tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_back')); ?>">
                        <i class="fa  fa-arrow-left"></i>
                    </a>
                </div>
                <div class="box-header-tools pull-right ">
                    <?php if(Session::get('gid') ==1): ?>
                        <a href="<?php echo e(URL::to('sximo/module/config/posts')); ?>" class="tips btn btn-xs btn-default" title=" <?php echo e(Lang::get('core.btn_config')); ?>">
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
                <?php echo Form::open(array('url'=>'core/posts/save?return='.$return, 'class'=>'form-vertical','files' => true , 'parsley-validate'=>'','novalidate'=>' ')); ?>

                <div class="col-md-9">
                    <ul class="nav nav-tabs m-b">
                        <li class="active">
                            <a href="#info" data-toggle="tab">
                                <i class="fa  fa-info-circle"></i>
                                Nội Dung Trang
                            </a>
                        </li>
                        <li>
                            <a href="#meta" data-toggle="tab">
                                <i class="fa fa-sitemap"></i>
                                Thẻ Meta & Description
                            </a>
                        </li>
                        <li>
                            <a href="#image" data-toggle="tab">
                                <i class="fa fa-picture-o"></i>
                                Ảnh Đại Diện
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active m-t" id="info">

                            <?php echo Form::hidden('pageID', $row['pageID']); ?>

                            <?php echo Form::hidden('pagetype', 'post'); ?>

                            <?php echo Form::hidden('pageID', $row['pageID']); ?>

                            <div class="form-group  ">
                                <label> Tiêu Đề Bài Viết</label>
                                <?php echo Form::text('title', $row['title'],array('class'=>'form-control', 'placeholder'=>'',   )); ?>

                            </div>
                            <div class="form-group  ">
                                <label for="ipt" class=" btn-primary  btn btn-sm">  <?php echo url('post/view/'); ?>  </label>
                                <?php echo Form::text('alias', $row['alias'],array('class'=>'form-control', 'placeholder'=>'', 'style'=>'width:350px; display:inline-block;'   )); ?>

                            </div>
                            <div class="form-group  ">
                                <label> Nội Dung</label>
                                <textarea name='note' rows='25' id='note-content' class='form-control note-content'>
                                    <?php echo e($row['note']); ?>

                                </textarea>
                            </div>
                        </div>
                        <div class="tab-pane m-t" id="meta">
                            <div class="form-group  ">
                                <label> Metakey</label>
                                <textarea name='metakey' rows='5' id='metakey' class='form-control '>
                                    <?php echo e($row['metakey']); ?>

                                </textarea>
                            </div>
                            <div class="form-group  ">
                                <label> Metadesc</label>
                                <textarea name='metadesc' rows='5' id='metadesc' class='form-control '>
                                    <?php echo e($row['metadesc']); ?>

                                </textarea>
                            </div>
                        </div>

                        <div class="tab-pane m-t" id="image">
                            <div class="form-group  ">
                                <label> Ảnh Đại Diện</label>
                                <input type="file" name="image" />
                                <?php echo SiteHelpers::showUploadedFile($row['image'],'/uploads/images/'); ?>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group  ">
                        <label> Danh Mục :</label>
                        <div class="input-group m-b" style="width:250px !important;">
                            <select name='category_id' rows='5' id='category_id' class='select2 '></select>
                        </div>
                    </div>
                    <div class="form-group  ">
                        <label> Nhãn :</label>
                        <div class="input-group m-b" style="width:250px !important;">

                            <input value="<?php echo e($row['labels']); ?>" name="labels" id="select-label"  class=""  type="text" style="width:250px !important"/>
                        </div>
                    </div>

                    <div class="form-group  ">
                        <label> Thuộc Tính Bài Viết :</label>
                        <label class="checkbox">
                            <input type='checkbox' name='is_hot' class="minimal-red" <?php if($row['is_hot'] ==1 ): ?> checked <?php endif; ?> value="1"/>
                            Tin Hot ?
                        </label>
                        <label class="checkbox">
                            <input type='checkbox' name='is_show_home' class="minimal-red" <?php if($row['is_show_home'] ==1 ): ?> checked <?php endif; ?> value="1"/>
                            Hiển Thị Trên Trang Chủ ?
                        </label>
                    </div>



                    <div class="form-group  ">
                        <label> Trạng Thái :</label>
                        <label class="radio  ">
                            <input type='radio' name='status' value="enable" required class="minimal-red"
                                   <?php if( $row['status'] =='enable'): ?>    checked <?php endif; ?>
                            />
                            Hoạt Động
                        </label>
                        <label class="radio">
                            <input type='radio' name='status' value="disable" required class="minimal-red"
                                   <?php if( $row['status'] =='disable'): ?>    checked <?php endif; ?>
                            />
                            Ngừng
                        </label>
                    </div>

                    <div class="form-group  ">
                        <label for="ipt" class=" control-label "> Ngày Tạo</label>
                        <div class="input-group m-b" style="width:150px !important;">
                            <?php echo Form::text('created', $row['created'],array('class'=>'form-control date', 'style'=>'width:200px !important;')); ?>

                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>

                    <div class="form-group  ">
                        <label for="ipt"> Ai có thể nhìn </label>
                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <label class="checkbox">
                                <input type='checkbox' name='group_id[<?php echo e($group['id']); ?>]' value="<?php echo e($group['id']); ?>"
                                       <?php if($group['access'] ==1 or $group['id'] ==1): ?>
                                       checked
                                       <?php endif; ?>
                                       class="minimal-red"
                                />
                                <?php echo e($group['name']); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </div>

                    <div class="form-group  ">
                        <label> Cho Phép Hiển Thị Công Khai: </label>
                        <label class="checkbox">
                            <input type='checkbox' name='allow_guest' class="minimal-red" <?php if($row['allow_guest'] ==1 ): ?> checked <?php endif; ?> value="1"/>
                            Công Khai ?
                        </label>
                    </div>



                    <div class="form-group">

                        <button type="submit" name="apply" class="btn btn-info btn-sm btn-flat">
                            <i class="icon-checkmark-circle2"></i>
                            Apply
                        </button>
                        <button type="submit" name="submit" class="btn btn-primary btn-sm btn-flat">
                            <i class="icon-bubble-check"></i> <?php echo e(Lang::get('core.sb_save')); ?></button>
                        <button type="button" onclick="location.href='<?php echo e(URL::to('core/posts?return='.$return)); ?>' " class="btn btn-warning btn-sm btn-flat">
                            <i class="icon-cancel-circle2 "></i> <?php echo e(Lang::get('core.sb_cancel')); ?> </button>

                    </div>
                    <input type="hidden" value="<?php echo e($article); ?>" id="article-data">

                </div>
                <div style="clear:both;"></div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {

            $("#select-label").select2({
                tags: JSON.parse($('#article-data').val())
            });

            $("#category_id").jCombo("<?php echo url('core/posts/comboselect?filter=tb_categories:category_id:name'); ?>",
                    {selected_value: '<?php echo e($row["category_id"]); ?>'});

            $('.removeMultiFiles').on('click', function () {
                var removeUrl = '<?php echo e(url("posts/removefiles?file=")); ?>' + $(this).attr('url');
                $(this).parent().remove();
                $.get(removeUrl, function (response) {
                });
                $(this).parent('div').empty();
                return false;
            });

            $('#note-content').summernote({
                height:    500,
                callbacks: {
                    onImageUpload: function (files, editor, welEditable) {
                        sendFile(files[0], editor, welEditable);
                    }
                }

            });

            function sendFile(file, editor, welEditable) {
                data = new FormData();
                data.append("file", file);
                $.ajax({
                    data:        data,
                    type:        "POST",
                    url:         "<?php echo e(url('core/posts/upload-image')); ?>",
                    cache:       false,
                    contentType: false,
                    processData: false,
                    success:     function (url) {
                        $('#note-content').summernote('editor.insertImage', url);
                    }
                });
            };

        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>