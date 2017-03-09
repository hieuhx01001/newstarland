

<?php $__env->startSection('content'); ?>

<section class="content-header">
  <h1> Module <small>Configuration</small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo e(url('sximo/module')); ?>"><i class="fa fa-th"></i> Module</a></li>
    <li class="active">Config</li>
     <li class="active"><?php echo e($row->module_title); ?></li>
  </ol>
</section>

<div class="content">	
	
<?php if(Session::has('message')): ?>
       <?php echo e(Session::get('message')); ?>

<?php endif; ?>
<ul>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<li><?php echo e($error); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</ul>	
<div class="box box-primary">
	<div class="box-header with-border"><h4> <?php echo e($row->module_title); ?> <small>  :  Basic Info  ( Information of module ) </small> </h4></div>
	<div class="box-body ">	
		<?php echo $__env->make('sximo.module.tab',array('active'=>'config','type'=> $type), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<hr />

	<div class="col-md-8">
	<?php echo Form::open(array('url'=>'sximo/module/saveconfig/'.$module_name, 'class'=>'form-horizontal ')); ?>

		<input  type='text' name='module_id' id='module_id'  value='<?php echo e($row->module_id); ?>'  style="display:none; " />
		<div class="form-group">
		<label for="ipt" class=" control-label col-md-4">Name / Title </label>
		<div class="col-md-8">	
		<input  type='text' name='module_title' id='module_title' class="form-control " required value='<?php echo e($row->module_title); ?>'  /> 
		 </div> 
		</div>  

		<div class="form-group">
		<label for="ipt" class=" control-label col-md-4">Module Note</label>
		<div class="col-md-8">
			<input  type='text' name='module_note' id='module_note'  value='<?php echo e($row->module_note); ?>' class="form-control "  />
		 </div> 
		</div>    	

		<div class="form-group">
		<label for="ipt" class=" control-label col-md-4">Class Controller </label>
		<div class="col-md-8">
		<input  type='text' name='module_name' id='module_name' readonly="1"  class="form-control " required value='<?php echo e($row->module_name); ?>'  />
		 </div> 
		</div>  

		<div class="form-group">
		<label for="ipt" class=" control-label col-md-4">Table Master</label>
		<div class="col-md-8">
		<input  type='text' name='module_db' id='module_db' readonly="1"  class="form-control " required value='<?php echo e($row->module_db); ?>'  />
		  
		 </div> 
		</div>  

		<div class="form-group" style="display:none;" >
		<label for="ipt" class=" control-label col-md-4">Author </label>
		<div class="col-md-8">
		<input  type='text' name='module_author' id='module_author' class="form-control " required readonly="1"  value='<?php echo e($row->module_author); ?>'  />
		 </div> 
		</div>  
		<div class="form-group">
			<label for="ipt" class=" control-label col-md-4"> ShortCode </label>
			<div class="col-md-8 " >
						<b>Form Shortcode : </b><code><br /><?php echo "!!SximoHelpers|showForm|".$row->module_name."!!"; ?></code><br />
					<b>Table Shortcode : </b><br />
					<code><?php echo htmlentities('<php>');?> use \App\Http\Controllers\<?php echo ucwords($row->module_name).'Controller;';?> <br />
					<?php echo ' echo '.ucwords($row->module_name).'Controller::display();'. htmlentities('</php>') ; ?></code>
			</div> 
		</div>   
	

		<div class="form-group">
			<label for="ipt" class=" control-label col-md-4"></label>
			<div class="col-md-8">
				<button type="submit" name="submit" class="btn btn-primary"> Update Module </button>
			</div> 
		</div>   
	
  	<?php echo Form::close(); ?>

	
  
	</div>
	<div class="clr clear"></div>
	</div>
</div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>