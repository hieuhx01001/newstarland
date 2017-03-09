<?php echo Form::open(array('url'=>'sximo/tables/tablefieldsave/'.$table, 'class'=>'form-horizontal','id'=>'columnTable' )); ?>

	<input type="hidden" value="<?php echo e(isset($field) ? $field : ''); ?>" name="currentfield">
	<div class="form-group">
		<label class="col-md-4">Column Name </label>
		<div class="col-md-8">
			<input type="text" name="field" value="<?php echo e(isset($field) ? $field : ''); ?>" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4"> DataType </label>
		<div class="col-md-8">
	        <select name="type" class="form-control" >
				<?php $__currentLoopData = $tbtypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				 <option value="<?php echo e($t); ?>" <?php if(isset($type) && $type ==$t): ?> selected="selected" <?php endif; ?> ><?php echo e($t); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	        </select>	
        </div>
	</div>
	<div class="form-group">
		<label class="col-md-4">Lenght/Values </label>
		<div class="col-md-8">
			<input type="text" name="lenght" value="<?php echo e(isset($lenght) ? $lenght : ''); ?>" class="form-control">
		</div>	
	</div>
	<div class="form-group">
		<label class="col-md-4"> Default </label>
		<div class="col-md-8">
			<input type="text" name="default" value="<?php echo e(isset($default) ? $default : ''); ?>" class="form-control">
		</div>	
	</div>		

	<div class="form-group">
		<label class="col-md-4"> Option  </label>
		<div class="col-md-8">
			
			<label class="checkbox"><input type="checkbox" name="null" value="1" <?php if(isset($notnull) && $notnull =='NO'): ?> checked="checked" <?php endif; ?> /> Not Null ?</label>
			<label class="checkbox"><input type="checkbox" name="key" value="1"  <?php if(isset($key) && $key =='PRI'): ?> checked="checked" <?php endif; ?> /> Primary Key  ?</label>
			<label class="checkbox"><input type="checkbox" name="ai" value="1" <?php if(isset($ai) && $ai =='auto_increment'): ?> checked="checked" <?php endif; ?> /> Autoincrement </label>
		</div>	
		
		
	</div>	

	<div class="form-group">
		<label class="col-md-4">  </label>
		<div class="col-md-8">
			<button type="submit" class="btn btn-sm btn-primary"> Save Column</button>
		</div>	
	</div>

<?php echo Form::close(); ?>


  <script type="text/javascript">
 $(document).ready(function(){
 		var form = $('#columnTable');
		form.parsley();
		form.submit(function(){
			
			if(form.parsley('isValid') == true){			
				var options = { 
					dataType:      'json', 
					beforeSubmit :  showRequest,
					success:       showResponse  
				}  
				$(this).ajaxSubmit(options); 
				return false;
							
			} else {
				return false;
			}		
		
		});	
 });
function showRequest()
{
	$('.ajaxLoading').show();
}  
function showResponse(data)  {		
	
	if(data.status == 'success')
	{
		url = "<?php echo e(URL::TO('sximo/tables/tableconfig/'.$table)); ?>";	
		$.get( url , function( data ) {
			$('#sximo-modal').modal('hide');
			$( ".tableconfig" ).html( data );
			$('.ajaxLoading').hide();
			
				
		});
	
	} else {
		alert(data.message);
	}	
	$('.ajaxLoading').hide();
} 

</script>	