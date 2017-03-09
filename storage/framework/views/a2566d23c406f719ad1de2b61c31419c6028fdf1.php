

<?php $__env->startSection('content'); ?>
  <script type="text/javascript" src="<?php echo e(asset('sximo/js/simpleclone.js')); ?>"></script>
    <section class="content-header">
      <h1>   Database <small> Manage tables </small></h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('dashboard')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li  class="active"> Database </li>
      </ol>
    </section>

  <div class="content"> 

 		<div class="ajaxLoading"></div>
<div class="box box-primary">
	<div class="box-header with-border"> 
			<div class="box-header-tools pull-left">	
				<a href="<?php echo e(url('sximo/tables/tableconfig/')); ?>" class="btn btn-sm btn-default linkConfig tips" title="New Table "><i class="fa fa-plus"></i> </a>
				<a href="<?php echo e(url('sximo/tables/mysqleditor/')); ?>" class="btn btn-sm btn-default linkConfig tips" title="MySQL Editor"><i class="fa fa-pencil"></i>  </a>
			</div>	
			</div>
			<div class="box-body">

			

			<div class="row">
				<div class="col-md-3">
					<?php echo Form::open(array('url'=>'sximo/tables/tableremove/', 'class'=>'form-horizontal','id'=>'removeTable' )); ?>

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									
									<th width="30"> <input type="checkbox" class="checkall i-checks-all " /></th>
									<th> Table Name </th>
									<th width="50"> Action </th>
								</tr>
							</thead>
							<tbody>
							<?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<tr>
									<td><input type="checkbox" class="ids  i-checks" name="id[]" value="<?php echo e($table); ?>" /> </td>
									<td><a href="<?php echo e(URL::TO('sximo/tables/tableconfig/'.$table)); ?>" class="linkConfig" > <?php echo e($table); ?></a></td>
									<td>
									<a href="javascript:void(0)" onclick="droptable()" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							</tbody>
						
						</table>
					
					</div>
					<?php echo Form::close(); ?>		
				</div>
				<div class="col-md-9">
					
					<div class="tableconfig" style="background:#fff; padding:10px; min-height:300px; border:solid 1px #ddd;">

					</div>

				</div>

			</div>
		</div>
		</div>
	
	
</div>	  
<script type="text/javascript">
$(document).ready(function(){

	$('.linkConfig').click(function(){
		$('.ajaxLoading').show();
		var url =  $(this).attr('href');
		$.get( url , function( data ) {
			$( ".tableconfig" ).html( data );
			$('.ajaxLoading').hide();
			
			
		});
		return false;
	});
});

function droptable()
{
	if(confirm('are you sure remove selected table(s) ?'))
	{
		$('#removeTable').submit();
	} else {
		return false;
	}
}

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>