

<?php $__env->startSection('content'); ?>


    <section class="content-header">
      <h1>
       <i class="fa fa-user text-primary"></i>  <?php echo e(Lang::get('core.m_users')); ?> 
        <small><?php echo e($pageNote); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo e(url('core/users')); ?>"><i class="fa fa-user"></i>  <?php echo e(Lang::get('core.m_users')); ?></a></li>
        <li class="active">All</li>
      </ol>
    </section>



 <div class="content">
    <!-- Page header -->

	
	


<div class="box box-primary ">
	<div class="box-header with-border"> 
		<div class="box-header-tools pull-left" >
			<?php if($access['is_add'] ==1): ?>
	   		<a href="<?php echo e(URL::to('core/users/update')); ?>" class="tips btn btn-sm btn-default"  title="<?php echo e(Lang::get('core.btn_create')); ?>">
			<i class="fa  fa-plus "></i></a>
			<?php endif; ?>  
			<?php if($access['is_remove'] ==1): ?>
			<a href="javascript://ajax"  onclick="SximoDelete();" class="tips btn btn-sm btn-default" title="<?php echo e(Lang::get('core.btn_remove')); ?>">
			<i class="fa fa-trash-o"></i></a>
			<?php endif; ?> 		
			<?php if($access['is_excel'] ==1): ?>
			<a href="<?php echo e(URL::to('core/users/download')); ?>" class="tips btn btn-sm btn-default" title="<?php echo e(Lang::get('core.btn_download')); ?>">
			<i class="fa fa-cloud-download"></i></a>
			<?php endif; ?>	
			<a href="<?php echo e(URL::to( 'core/users/search')); ?>" class="btn btn-sm btn-default" onclick="SximoModal(this.href,'Advance Search'); return false;" ><i class="fa fa-search"></i> </a>		
		 
		</div> 
	

<div class="box-header-tools" >
		<a href="<?php echo e(url($pageModule)); ?>" class="btn btn-sm btn-default tips" title="Clear Search" ><i class="fa fa-spinner"></i></a>
		<?php if(Session::get('gid') ==1): ?>
			<a href="<?php echo e(URL::to('sximo/module/config/users')); ?>" class="btn btn-sm btn-default tips" title=" <?php echo e(Lang::get('core.btn_config')); ?>" ><i class="fa  fa-ellipsis-v"></i></a>
		<?php endif; ?> 
		</div>
	</div>
	<div class="box-body no-padding"> 	

	<div class="table-header">
		<ul class="nav nav-tabs " >
		  <li class="active"><a href="<?php echo e(URL::to('core/users')); ?>"> <?php echo e(Lang::get('core.m_users')); ?>  </a></li>
		  <li ><a href="<?php echo e(URL::to('core/groups')); ?>"> <?php echo e(Lang::get('core.m_groups')); ?> </a></li>
		  <li class=""><a href="<?php echo e(URL::to('core/users/blast')); ?>"> Send Email </a></li>
		</ul>
	</div>	
	
	
	 <?php echo Form::open(array('url'=>'core/users/delete/', 'class'=>'form-horizontal' ,'id' =>'SximoTable' )); ?>

	 <div class="table-responsive" style="min-height:70px; padding-bottom: 70px;">
    <table class="table table-striped">
        <thead>
			<tr>
				<th class="number"> No </th>
				<th> <input type="checkbox" class="checkall" /></th>
				<th ><span><?php echo e(Lang::get('core.btn_action')); ?></span></th>
				
				<?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<?php if($t['view'] =='1'): ?>
						<th><?php echo e($t['label']); ?></th>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				
			  </tr>
        </thead>

        <tbody>
						
            <?php $__currentLoopData = $rowData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
					<td width="30"> <?php echo e(++$i); ?> </td>
					<td width="50"><input type="checkbox" class="ids" name="ids[]" value="<?php echo e($row->id); ?>" />  </td>	
					<td>
					 	<div class="dropdown">
						  <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa  fa-pencil"></i>
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						 	<?php if($access['is_detail'] ==1): ?>
							<li><a href="<?php echo e(URL::to('core/users/show/'.$row->id.'?return='.$return)); ?>" class="tips" title="<?php echo e(Lang::get('core.btn_view')); ?>"><i class="fa  fa-search "></i> <?php echo e(Lang::get('core.btn_view')); ?> </a></li>
							<?php endif; ?>
							<?php if($access['is_edit'] ==1): ?>
							<li><a  href="<?php echo e(URL::to('core/users/update/'.$row->id.'?return='.$return)); ?>" class="tips" title="<?php echo e(Lang::get('core.btn_edit')); ?>"><i class="fa fa-edit "></i> <?php echo e(Lang::get('core.btn_edit')); ?> </a></li>
							<?php endif; ?>
						  </ul>
						</div>

					</td>

				 <?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					 <?php if($field['view'] =='1'): ?>
					 <td>	
						<?php if($field['field'] == 'avatar'): ?>
							<?php if( file_exists( './uploads/users/'.$row->avatar) && $row->avatar !='') { ?>
							<a href="<?php echo e(asset('uploads/users').'/'.$row->avatar); ?>" class="previewImage">
							<img src="<?php echo e(URL::to('uploads/users').'/'.$row->avatar); ?> " border="0" width="40" class="img-circle" />
							</a>
							<?php  } else { ?> 
							<img alt="" src="http://www.gravatar.com/avatar/<?php echo e(md5($row->email)); ?>" width="40" class="img-circle" />
							<?php } ?>					 				 
					 	<?php elseif($field['field'] =='active'): ?>
					 		<?php if($row->active ==1): ?>
					 			<lable class="label label-success">Active</label>
					 		<?php elseif($row->active ==2): ?>
					 			<lable class="label label-danger"> Banned </label>
					 		<?php else: ?>
					 			<lable class="label label-warning">InActive</label>
					 		<?php endif; ?>
							
								
						<?php else: ?>	
							<?php echo SiteHelpers::formatRows($row->{$field['field']},$field ,$row ); ?>		
						<?php endif; ?>						 
					 </td>
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
<script>
$(document).ready(function(){

	$('.do-quick-search').click(function(){
		$('#SximoTable').attr('action','<?php echo e(URL::to("core/users/multisearch")); ?>');
		$('#SximoTable').submit();
	});
	
});	
</script>		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>