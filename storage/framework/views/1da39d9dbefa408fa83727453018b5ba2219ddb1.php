

<?php $__env->startSection('content'); ?>

  <script type="text/javascript" src="<?php echo e(asset('sximo/js/simpleclone.js')); ?>"></script>
    <section class="content-header">
      <h1> <i class="fa fa-th"></i>  Form Generator <small> Manage FOrm  </small></h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li  class="active"> Form Generator </li>
      </ol>
    </section>

  <div class="content"> 	

<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-header-tools pull-left" >
			<?php if($access['is_add'] ==1): ?>
	   		<a href="<?php echo e(URL::to('core/forms/update?return='.$return)); ?>" class="tips btn btn-xs btn-default"  title="<?php echo e(Lang::get('core.btn_create')); ?>">
			<i class="fa  fa-plus "></i></a>
			<?php endif; ?>  
			<?php if($access['is_remove'] ==1): ?>
			<a href="javascript://ajax"  onclick="SximoDelete();" class="tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_remove')); ?>">
			<i class="fa fa-trash-o"></i> </a>
			<?php endif; ?> 
			<a href="<?php echo e(URL::to( 'core/forms/search?return='.$return)); ?>" class="btn btn-xs btn-default" onclick="SximoModal(this.href,'Advance Search'); return false;" title="<?php echo e(Lang::get('core.btn_search')); ?>"><i class="fa  fa-search"></i> </a>				

			
		</div>

		<div class="box-header-tools pull-right" >
			<a class="btn btn-xs btn-default tips" title="Documentation" href="<?php echo e(url('core/forms/docs')); ?>" onclick="SximoModal(this.href,'Documentation'); return false;"><i class="fa fa-book"></i></a>
			<?php if($access['is_excel'] ==1): ?>
			<a href="<?php echo e(URL::to('core/forms/download?return='.$return)); ?>" class="tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_download')); ?>">
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

	
	 <?php echo Form::open(array('url'=>'core/forms/delete?return='.$return, 'class'=>'form-horizontal' ,'id' =>'SximoTable' )); ?>

	 <div class="table-responsive" style="min-height:50px;  padding-bottom:60px;">
    <table class="table table-striped ">
        <thead>
			<tr>
				<th class="number"><span> No </span> </th>
				<th> <input type="checkbox" class="checkall" /></th>
				<th ><span><?php echo e(Lang::get('core.btn_action')); ?></span></th>
				
				<?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<?php if($t['view'] =='1'): ?>				
						<?php $limited = isset($t['limited']) ? $t['limited'] :''; ?>
						<?php if(SiteHelpers::filterColumn($limited )): ?>
						
							<th><span><?php echo e($t['label']); ?></span></th>			
						<?php endif; ?> 
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<th> ShortCode </th>
			  </tr>
        </thead>

        <tbody>        						
            <?php $__currentLoopData = $rowData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
					<td width="30"> <?php echo e(++$i); ?> </td>
					<td width="50"><input type="checkbox" class="ids" name="ids[]" value="<?php echo e($row->formID); ?>" />  </td>	
					<td>
					 	<div class="dropdown">
						  <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa  fa-pencil"></i>
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						 	<?php if($access['is_detail'] ==1): ?>
							<li><a href="<?php echo e(URL::to('core/forms/show/'.$row->formID.'?return='.$return)); ?>" class="tips" title="<?php echo e(Lang::get('core.btn_view')); ?>"><i class="fa  fa-search "></i> <?php echo e(Lang::get('core.btn_view')); ?> </a></li>
							<?php endif; ?>
							<?php if($access['is_edit'] ==1): ?>
							<li><a  href="<?php echo e(URL::to('core/forms/update/'.$row->formID.'?return='.$return)); ?>" class="tips" title="<?php echo e(Lang::get('core.btn_edit')); ?>"><i class="fa fa-edit "></i> <?php echo e(Lang::get('core.btn_edit')); ?> </a></li>
							<?php endif; ?>
						  </ul>
						</div>

					</td>

				 <?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					 <?php if($field['view'] =='1'): ?>
					 	<?php $limited = isset($field['limited']) ? $field['limited'] :''; ?>
					 	<?php if(SiteHelpers::filterColumn($limited )): ?>
						 <td>					 
						 	<?php echo SiteHelpers::formatRows($row->{$field['field']},$field ,$row ); ?>						 
						 </td>
						<?php endif; ?>	
					 <?php endif; ?>	
									 
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				  <td style="font-weight:bold"> !!FormHelpers|render|<?php echo e($row->formID); ?>!!</td>		 
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