

<?php $__env->startSection('content'); ?>
<section class="content-header">
  <h1>
   <i class="fa  fa-file-text-o "></i>  <?php echo e($pageTitle); ?>

    <small><?php echo e($pageNote); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo e(url('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><a href="<?php echo e(url('core/posts')); ?>"><i class="fa fa-files-o"></i>  PageCMS </a></li>
    <li class="active">Edit / Update</li>
  </ol>
</section>



 <div class="content">

<div class="box box-danger ">
	<div class="box-header with-border"> 
				<div class="box-header-tools pull-left" >
					<a href="<?php echo e(url($pageModule.'?return='.$return)); ?>" class="tips btn btn-xs btn-default"  title="<?php echo e(Lang::get('core.btn_back')); ?>" ><i class="fa  fa-arrow-left"></i></a> 
				</div>
				<div class="box-header-tools pull-right" >
					<?php if(Session::get('gid') ==1): ?>
						<a href="<?php echo e(URL::to('sximo/module/config/pages')); ?>" class="tips btn btn-xs btn-default" title=" <?php echo e(Lang::get('core.btn_config')); ?>" ><i class="fa  fa-ellipsis-v"></i></a>
					<?php endif; ?> 			
				</div> 
			 </div>	
			<div class="box-body">	

			<?php if(Session::has('message')): ?>	  
				   <?php echo e(Session::get('message')); ?>

			<?php endif; ?>	
			
			<ul class="parsley-error-list">
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</ul>
		 <?php echo Form::open(array('url'=>'core/pages/save', 'class'=>'form-vertical row ','files' => true , 'parsley-validate'=>'','novalidate'=>' ')); ?>			

			<div class="col-sm-9 ">
	

						<ul class="nav nav-tabs" >
						  <li class="active"><a href="#info" data-toggle="tab"> Page Content </a></li>
						  <li ><a href="#meta" data-toggle="tab"> Meta & Description </a></li>
						</ul>	

						<div class="tab-content">
						  <div class="tab-pane active m-t" id="info">
				  <div class="form-group  " >
					<label for="ipt" > Title </label>
					
					  <?php echo Form::text('title', $row['title'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )); ?> 
					
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" btn-primary  btn btn-sm">  <?php echo url(''); ?>/  </label>						 
						<?php echo Form::text('alias', $row['alias'],array('class'=>'form-control', 'placeholder'=>'', 'style'=>'width:150px; display:inline-block;'   )); ?> 
				  </div> 

							  <div class="form-group  " >
								
								<div class="" style="background:#fff;">
								  <textarea name='note' rows='35' id='note'    class='form-control editor'  
									 ><?php echo e($row['note']); ?></textarea> 
								 </div> 
							  </div> 						  

						  </div>

						  <div class="tab-pane m-t" id="meta">

					  		<div class="form-group  " >
								<label class=""> Metakey </label>
								<div class="" style="background:#fff;">
								  <textarea name='metakey' rows='5' id='metakey' class='form-control markItUp'><?php echo e($row['metakey']); ?></textarea> 
								 </div> 
							  </div> 

				  			<div class="form-group  " >
								<label class=""> Meta Description </label>
								<div class="" style="background:#fff;">
								  <textarea name='metadesc' rows='10' id='metadesc' class='form-control markItUp'><?php echo e($row['metadesc']); ?></textarea> 
								 </div> 
							  </div> 							  						  

						  </div>

						</div>  
		 	</div>		 
		 
		 	<div class="col-sm-3 ">
					
				  <div class="form-group hidethis " style="display:none;">
					<label for="ipt" class=""> PageID </label>
					
					  <?php echo Form::text('pageID', $row['pageID'],array('class'=>'form-control', 'placeholder'=>'',   )); ?> 
					
				  </div> 					
					

				  <div class="form-group  " >
				  <label for="ipt"> Who can view this page ? </label>
					<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
					<label class="checkbox">					
					  <input  type='checkbox' name='group_id[<?php echo e($group['id']); ?>]'    value="<?php echo e($group['id']); ?>"
					  <?php if($group['access'] ==1 or $group['id'] ==1): ?>
					  	checked
					  <?php endif; ?>	
					  class="minimal-red" 			 
					   /> 
					  <?php echo e($group['name']); ?>

					</label>  
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
						  
				  </div> 
				  <div class="form-group  " >
					<label> Show for Guest ? unlogged  </label>
					<label class="checkbox"><input  type='checkbox' name='allow_guest'  class="minimal-red" 
 						<?php if($row['allow_guest'] ==1 ): ?> checked  <?php endif; ?>	
					   value="1"	/> Allow Guest ?  </lable>
				  </div>


				  	
	
				  <div class="form-group  " >
					<label> Status </label>
					<label class="radio">					
					  <input  type='radio' name='status'  value="enable" required class="minimal-red" 
					  <?php if( $row['status'] =='enable'): ?>  	checked	  <?php endif; ?>				  
					   /> 
					  Enable
					</label> 
					<label class="radio">					
					  <input  type='radio' name='status'  value="disabled" required class="minimal-red" 
					   <?php if( $row['status'] =='disabled'): ?>  	checked	  <?php endif; ?>				  
					   /> 
					  Disabled
					</label> 					 
				  </div> 

				  <div class="form-group  " >
					<label> Template </label>
					<label class="radio">					
					  <input  type='radio' name='template'  value="frontend" required class="minimal-red" 
					  <?php if( $row['template'] =='frontend'): ?>  	checked	  <?php endif; ?>				  
					   /> 
					  Frontend
					</label> 
					<label class="radio">					
					  <input  type='radio' name='template'  value="backend" required class="minimal-red" 
					   <?php if( $row['template'] =='backend'): ?>  	checked	  <?php endif; ?>				  
					   /> 
					  Backend
					</label> 					 
				  </div> 	

				  <div class="form-group  " >
					<label> Set As Homepage ? </label>
					<label class="checkbox"><input  type='checkbox' name='default' class="minimal-red" 
 						<?php if($row['default'] ==1 ): ?> checked  <?php endif; ?>	
					   value="1"	/> Yes  
					</lable>					 
				  </div> 
				  <div class="form-group  " >
					<label for="ipt" > Page Template </label>

					<select class="form-control" name="filename">
						<option value="page"> Select Template </option>
						<?php $__currentLoopData = $pagetemplate['template']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $val): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<option value="<?php echo e($val); ?>" <?php if($row['filename'] == $val): ?> selected <?php endif; ?>><?php echo e($key); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


					</select>
					
					  
					
				  </div> 

				  
			  <div class="form-group">
				
				<button type="submit" class="btn btn-success " name="apply">  Apply </button>
				<button type="submit" class="btn btn-primary ">  Submit </button>
				<a href="<?php echo e(url('core/pages')); ?>" class="btn btn-info"> Cancel </a>
				 
		
			  </div> 
						  				  
				  		
			</div>
			 <?php echo Form::close(); ?>

			<div style="clear: both;"></div>
			</div>
		</div>

		
	

</div>	
			 	 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>