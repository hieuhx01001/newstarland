	<div class="table-footer">
	<div class="row">
	 <div class="col-sm-5">
	  <div class="table-actions" style=" padding: 10px 0">
	 
	   <?php echo Form::open(array('url'=>$pageModule.'/filter/')); ?>

		   <?php  
		   	$pages = array(5,10,20,30,50); 
		    $orders = array('asc','desc') ?>
		<select name="rows" data-placeholder="<?php echo e(Lang::get('core.grid_show')); ?>" class="select-alt"  >
		  <option value=""> <?php echo e(Lang::get('core.grid_page')); ?> </option>
		  <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		  <option value="<?php echo e($p); ?>" 
			<?php if(isset($pager['rows']) && $pager['rows'] == $p): ?> 
				selected="selected"
			<?php endif; ?>	
		  ><?php echo e($p); ?></option>
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</select>
		<select name="sort" data-placeholder="<?php echo e(Lang::get('core.grid_sort')); ?>" class="select-alt"  >
		  <option value=""> <?php echo e(Lang::get('core.grid_sort')); ?> </option>	 
		  <?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		   <?php if($field['view'] =='1' && $field['sortable'] =='1'): ?> 
			  <option value="<?php echo e($field['field']); ?>" 
				<?php if(isset($pager['sort']) && $pager['sort'] == $field['field']): ?> 
					selected="selected"
				<?php endif; ?>	
			  ><?php echo e($field['label']); ?></option>
			<?php endif; ?>	  
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		 
		</select>	
		<select name="order" data-placeholder="<?php echo e(Lang::get('core.grid_order')); ?>" class="select-alt">
		  <option value=""> <?php echo e(Lang::get('core.grid_order')); ?></option>
		   <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		  <option value="<?php echo e($o); ?>"
			<?php if(isset($pager['order']) && $pager['order'] == $o): ?>
				selected="selected"
			<?php endif; ?>	
		  ><?php echo e(ucwords($o)); ?></option>
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</select>	
		<button type="submit" class="btn btn-white btn-sm btn-flat"><i class="fa fa-spinner"></i> </button>	
		<input type="hidden" name="md" value="<?php echo e((isset($masterdetail['filtermd']) ? $masterdetail['filtermd'] : '')); ?>" />
		<input type="hidden" name="sc" value="<?php echo e(@$_GET['search']); ?>" />		
	  <?php echo Form::close(); ?>

	  </div>					
	  </div>
	   <div class="col-sm-3">
		<p class="text-center" style=" padding: 15px 0 0">
		Total : <b><?php echo e($pagination->total()); ?></b>
		</p>		
	   </div>
		<div class="col-sm-4">			 
	  <?php echo $pagination->appends($pager)->render(); ?>

	  </div>
	  </div>
	</div>	
	
	