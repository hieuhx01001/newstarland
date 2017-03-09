

<?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1> <?php echo e($pageTitle); ?> <small> <?php echo e($pageNote); ?> </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li  class="active"> <?php echo e($pageTitle); ?> </li>
      </ol>
    </section>

  <div class="content"> 	

<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-header-tools pull-left" >
			<?php if($access['is_add'] ==1): ?>
	   		<a href="<?php echo e(URL::to('category/update?return='.$return)); ?>" class="tips btn btn-xs btn-default"  title="<?php echo e(Lang::get('core.btn_create')); ?>">
			<i class="fa  fa-plus "></i></a>
			<?php endif; ?>  
			<?php if($access['is_remove'] ==1): ?>
			<a href="javascript://ajax"  onclick="SximoDelete();" class="tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_remove')); ?>">
			<i class="fa fa-trash-o"></i></a>
			<?php endif; ?> 
			<a href="<?php echo e(URL::to( 'category/search?return='.$return)); ?>" class="btn btn-xs btn-default" onclick="SximoModal(this.href,'Advance Search'); return false;" title="<?php echo e(Lang::get('core.btn_search')); ?>"><i class="fa  fa-search"></i></a>				


		</div>

		<div class="box-header-tools" >
			<?php if($access['is_excel'] ==1): ?>
			<a href="<?php echo e(URL::to('category/download?return='.$return)); ?>" class="tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_download')); ?>">
			<i class="fa fa-cloud-download"></i></a>
			<?php endif; ?>

			<a href="<?php echo e(url($pageModule)); ?>" class=" tips btn btn-xs btn-default"  title="<?php echo e(Lang::get('core.btn_clearsearch')); ?>" ><i class="fa fa-spinner"></i>  </a>		
			<?php if(Session::get('gid') ==1): ?>
				<a href="<?php echo e(URL::to('sximo/module/config/'.$pageModule)); ?>" class="tips btn btn-xs btn-default" title=" <?php echo e(Lang::get('core.btn_config')); ?>" ><i class="fa  fa-ellipsis-v"></i></a>
			<?php endif; ?> 
		</div>
	</div>

	<div class="box-body no-padding"> 	
	

	 <?php echo (isset($search_map) ? $search_map : ''); ?>

	
	 <?php echo Form::open(array('url'=>'category/delete/0?return='.$return, 'class'=>'form-horizontal' ,'id' =>'SximoTable' )); ?>

	 <div class="table-responsive" style="min-height:50px;  padding-bottom:60px;">
    <table class="table table-striped  ">
        <thead>
			<tr>
				<th class="number"><span> No </span> </th>
				<th class="chbox-col"> <input type="checkbox" class="checkall" /></th>
				<th class="action-col" ><span><?php echo e(Lang::get('core.btn_action')); ?></span></th>
				
				<?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<?php if($t['view'] =='1'): ?>				
						<?php $limited = isset($t['limited']) ? $t['limited'] :''; ?>
						<?php if(SiteHelpers::filterColumn($limited )): ?>
						<?php
						$addClass='class="tbl-sorting" ';
							if($insort ==$t['field'])
							{
								$dir_order = ($inorder =='desc' ? 'sort-desc' : 'sort-asc'); 
								$addClass='class="tbl-sorting '.$dir_order.'" ';
							}
						?>							
							<th <?php echo $addClass; ?> ><span><?php echo e($t['label']); ?></span></th>			
						<?php endif; ?> 
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				
			  </tr>
        </thead>

        <tbody>        						
            <?php $__currentLoopData = $rowData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
					<td class="number"> <?php echo e(++$i); ?> </td>
					<td class="chbox-col"><input type="checkbox" class="ids" name="ids[]" value="<?php echo e($row->category_id); ?>" />  </td>	
					<td  class="action-col">
					 	<div class="dropdown">
						  <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa  fa-pencil"></i>
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						 	<?php if($access['is_detail'] ==1): ?>
							<li><a href="<?php echo e(URL::to('category/show/'.$row->category_id.'?return='.$return)); ?>" class="tips" title="<?php echo e(Lang::get('core.btn_view')); ?>"><i class="fa  fa-search "></i> <?php echo e(Lang::get('core.btn_view')); ?> </a></li>
							<?php endif; ?>
							<?php if($access['is_edit'] ==1): ?>
							<li><a  href="<?php echo e(URL::to('category/update/'.$row->category_id.'?return='.$return)); ?>" class="tips" title="<?php echo e(Lang::get('core.btn_edit')); ?>"><i class="fa fa-edit "></i> <?php echo e(Lang::get('core.btn_edit')); ?> </a></li>
							<?php endif; ?>
						  </ul>
						</div>

					</td>

				 <?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					 <?php if($field['view'] =='1'): ?>
					 	<?php $limited = isset($field['limited']) ? $field['limited'] :''; ?>
					 	<?php if(SiteHelpers::filterColumn($limited )): ?>
					 	  <?php $addClass= ($insort ==$field['field'] ? 'class="tbl-sorting-active" ' : ''); ?>
						 <td <?php echo $addClass; ?> >					 
						 	<?php echo SiteHelpers::formatRows($row->{$field['field']},$field ,$row ); ?>						 
						 </td>
						<?php endif; ?>	
					 <?php endif; ?>					 
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>		 
                </tr>
				
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
              
        </tbody>
      
    </table>
	<input type="hidden" name="md" value="" />
	</div>
	<?php echo Form::close(); ?>

	<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</div>	  
</div>	
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>