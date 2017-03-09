

<?php $__env->startSection('content'); ?>

<section class="content-header">
  <h1>
   <i class="fa  fa-file-text-o "></i>  <?php echo e($pageTitle); ?>

    <small><?php echo e($pageNote); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo e(url('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><a href="<?php echo e(url('core/logs')); ?>"><i class="fa fa-files-o"></i>  Logs </a></li>
    <li class="active">All</li>
  </ol>
</section>



 <div class="content">

<div class="box box-success ">
	<div class="box-header with-border">
		<div class="box-header-tools pull-left" >
 
			<?php if($access['is_remove'] ==1): ?>
			<a href="javascript://ajax"  onclick="SximoDelete();" class="tips btn btn-sm btn-default" title="<?php echo e(Lang::get('core.btn_remove')); ?>">
			<i class="fa fa-trash-o"></i></a>
			<?php endif; ?> 		
			<?php if($access['is_excel'] ==1): ?>
			<a href="<?php echo e(URL::to('core/logs/download')); ?>" class="tips btn btn-sm btn-default" title="<?php echo e(Lang::get('core.btn_download')); ?>">
			<i class="fa fa-cloud-download"></i></a>
			<?php endif; ?>			
		</div>	
	</div>
	<div class="box-body no-padding"> 	
	
	
	 <?php echo Form::open(array('url'=>'core/logs/delete/', 'class'=>'form-horizontal' ,'id' =>'SximoTable' )); ?>

	 <div class="table-responsive" style="min-height:300px;">
    <table class="table table-striped">
        <thead>
			<tr>
				<th class="number"> No </th>
				<th> <input type="checkbox" class="checkall" /></th>
				
				<?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<?php if($t['view'] =='1'): ?>
						<th><?php echo e($t['label']); ?></th>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<th width="70" ><?php echo e(Lang::get('core.btn_action')); ?></th>
			  </tr>
        </thead>

        <tbody>
						
            <?php $__currentLoopData = $rowData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
					<td width="30"> <?php echo e(++$i); ?> </td>
					<td width="50"><input type="checkbox" class="ids" name="id[]" value="<?php echo e($row->auditID); ?>" />  </td>									
				 <?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					 <?php if($field['view'] =='1'): ?>
					 <td>					 
					 	<?php echo SiteHelpers::formatRows($row->{$field['field']},$field ,$row ); ?>					 
					 </td>
					 <?php endif; ?>					 
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				 <td>
					 	<?php if($access['is_detail'] ==1): ?>
						<a href="<?php echo e(URL::to('core/logs/show/'.$row->auditID.'?return='.$return)); ?>" class="tips btn btn-xs btn-default" title="<?php echo e(Lang::get('core.btn_view')); ?>"><i class="fa  fa-search "></i></a>
						<?php endif; ?>
						<?php if($access['is_edit'] ==1): ?>
						<a  href="<?php echo e(URL::to('core/logs/update/'.$row->auditID.'?return='.$return)); ?>" class="tips btn btn-xs btn-white" title="<?php echo e(Lang::get('core.btn_edit')); ?>"><i class="fa fa-edit "></i></a>
						<?php endif; ?>
												
					
				</td>				 
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
		$('#SximoTable').attr('action','<?php echo e(URL::to("logs/multisearch")); ?>');
		$('#SximoTable').submit();
	});
	
});	
</script>		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>