

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
                <a href="<?php echo e(url('core/pages')); ?>">
                    <i class="fa fa-file-text-o"></i>
                    Post Article
                </a>
            </li>
            <li class="active">All</li>
        </ol>
    </section>



    <div class="content">

        <ul class="nav nav-tabs " style="border-bottom: none !important">
            <li class="active">
                <a href="#info" data-toggle="tab">
                    <i class="fa  fa-info-circle"></i>
                    All Posts
                </a>
            </li>
            <li>
                <a href="#config" data-toggle="tab">
                    <i class="fa fa-cog"></i>
                    Post Setting
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="info">


                <div class="box box-info ">
                    <div class="box-header with-border">
                        <div class="box-header-tools pull-left">
                            <?php if($access['is_add'] ==1): ?>
                                <a href="<?php echo e(URL::to('core/posts/update?return='.$return)); ?>" class="tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_create')); ?>">
                                    <i class="fa  fa-plus "></i>
                                </a>
                            <?php endif; ?>
                            <?php if($access['is_remove'] ==1): ?>
                                <a href="javascript://ajax" onclick="SximoDelete();" class="tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_remove')); ?>">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            <?php endif; ?>
                            <a href="<?php echo e(URL::to( 'core/posts/search')); ?>" class="btn btn-xs btn-default" onclick="SximoModal(this.href,'Advance Search'); return false;" title="<?php echo e(Lang::get('core.btn_search')); ?>">
                                <i class="fa  fa-search"></i>
                            </a>

                        </div>

                        <div class="box-header-tools pull-right">
                            <?php if($access['is_excel'] ==1): ?>
                                <a href="<?php echo e(URL::to('core/posts/download?return='.$return)); ?>" class="tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_download')); ?>">
                                    <i class="fa fa-cloud-download"></i>
                                </a>
                            <?php endif; ?>

                            <a href="<?php echo e(url($pageModule)); ?>" class=" tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_clearsearch')); ?>">
                                <i class="fa fa-spinner"></i>
                            </a>
                            <?php if(Session::get('gid') ==1): ?>
                                <a href="<?php echo e(URL::to('sximo/module/config/'.$pageModule)); ?>" class="tips btn btn-xs btn-default" title=" <?php echo e(Lang::get('core.btn_config')); ?>">
                                    <i class="fa  fa-ellipsis-v"></i>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="box-body no-padding">


                        <?php echo (isset($search_map) ? $search_map : ''); ?>


                        <?php echo Form::open(array('url'=>'core/posts/delete?return='.$return, 'class'=>'form-horizontal' ,'id' =>'SximoTable' )); ?>

                        <div class="table-responsive" style="min-height:300px;  padding-bottom:60px;">
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th class="number"><span> No </span></th>
                                        <th>
                                            <input type="checkbox" class="checkall"/>
                                        </th>
                                        <th><span><?php echo e(Lang::get('core.btn_action')); ?></span></th>

                                        <?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <?php if($t['view'] =='1'): ?>
                                                <?php $limited = isset($t['limited']) ? $t['limited'] : ''; ?>
                                                <?php if(SiteHelpers::filterColumn($limited )): ?>

                                                    <th><span><?php echo e($t['label']); ?></span></th>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $rowData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <tr>
                                            <td width="30"> <?php echo e(++$i); ?> </td>
                                            <td width="50">
                                                <input type="checkbox" class="ids" name="ids[]" value="<?php echo e($row->pageID); ?>"/>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <i class="fa  fa-pencil"></i>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <?php if($access['is_detail'] ==1): ?>
                                                            <li>
                                                                <a href="<?php echo e(url('post/view/'. $row->pageID.'/'.$row->alias)); ?>" class="tips" title="<?php echo e(Lang::get('core.btn_view')); ?>" target="_blank">
                                                                    <i class="fa  fa-search "></i> <?php echo e(Lang::get('core.btn_view')); ?>

                                                                </a>
                                                            </li>
                                                        <?php endif; ?>
                                                        <?php if($access['is_edit'] ==1): ?>
                                                            <li>
                                                                <a href="<?php echo e(URL::to('core/posts/update/'.$row->pageID.'?return='.$return)); ?>" class="tips" title="<?php echo e(Lang::get('core.btn_edit')); ?>">
                                                                    <i class="fa fa-edit "></i> <?php echo e(Lang::get('core.btn_edit')); ?>

                                                                </a>
                                                            </li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>

                                            </td>

                                            <?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <?php if($field['view'] =='1'): ?>
                                                    <?php $limited = isset($field['limited']) ? $field['limited'] : ''; ?>
                                                    <?php if(SiteHelpers::filterColumn($limited )): ?>
                                                        <td>
                                                            <?php if($field['field'] =='status'): ?>
                                                                <?php echo $row->status == 'enable' ? '<i class="text-success fa fa-check-circle"></i>' : '<i class="text-danger fa fa-minus-circle"></i>'; ?>


                                                            <?php else: ?>
                                                                <?php echo SiteHelpers::formatRows($row->{$field['field']},$field ,$row ); ?>

                                                            <?php endif; ?>
                                                        </td>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                </tbody>

                            </table>
                            <input type="hidden" name="md" value=""/>
                        </div>
                        <?php echo Form::close(); ?>

                        <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>


            </div>

            <div class="tab-pane" id="config">

                <div class="box box-primary ">
                    <div class="box-header with-border"> Post Configuration</div>
                    <div class="box-body">

                        <?php echo Form::open(array('url'=>'core/posts/config', 'class'=>'form-horizontal' ,'id' =>'' )); ?>

                        <div class="form-group  ">
                            <label class="col-md-4"> Allow Comment system</label>
                            <div class="col-md-8">
                                <input type="checkbox" name="commsys" class="checkbox minimal-red" value="1"
                                       <?php if($conpost['commsys'] ==1): ?> checked <?php endif; ?>
                                />
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="col-md-4"> Display Image in every post(s)</label>
                            <div class="col-md-8">
                                <input type="checkbox" name="commimage" class="checkbox minimal-red" value="1"
                                       <?php if($conpost['commimage'] ==1): ?> checked <?php endif; ?>
                                />
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="col-md-4"> Display Latest post(s)</label>
                            <div class="col-md-8">
                                <input type="checkbox" name="commlatest" class="checkbox minimal-red" value="1"
                                       <?php if($conpost['commlatest'] ==1): ?> checked <?php endif; ?>
                                />
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label class="col-md-4"> Display Popular post(s)</label>
                            <div class="col-md-8">
                                <input type="checkbox" name="commpopular" class="checkbox minimal-red" value="1"
                                       <?php if($conpost['commpopular'] ==1): ?> checked <?php endif; ?>
                                />
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label class="col-md-4"> Allow Share post(s) :</label>
                            <div class="col-md-8">
                                <input type="checkbox" name="commshare" class="checkbox minimal-red" value="1"
                                       <?php if($conpost['commshare'] ==1): ?> checked <?php endif; ?>
                                />
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="col-md-4"> Share post(s) API KEY :</label>
                            <div class="col-md-8">
                                <input type="text" name="commshareapi" class="form-control" value="<?php echo e($conpost['commshareapi']); ?>"/>

                                Get your own API :
                                <a href="http://www.sharethis.com/get-sharing-tools/" target="_blank"> http://www.sharethis.com/get-sharing-tools/</a>
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label class="col-md-4"> Display post(s) per/page</label>
                            <div class="col-md-8">
                                <input type="text" name="commperpage" class="form-control" style="width: 50px;" value="<?php echo e($conpost['commperpage']); ?>"/>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="col-md-4"></label>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary"> Save Configuration</button>
                            </div>
                        </div>

                        <?php echo Form::close(); ?>

                    </div>
                </div>


            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>