


<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1> <?php echo e($pageTitle); ?> <small> <?php echo e($pageNote); ?> </small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li  class="active"> Configuration </li>
      </ol>
    </section>

  <div class="content"> 
 
	<?php if(Session::has('message')): ?>
	  
		   <?php echo e(Session::get('message')); ?>

	   
	<?php endif; ?>
	<ul class="parsley-error-list">
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</ul>		



		

<div class="box box-primary">
	<div class="box-header with-border"> <?php echo e($pageTitle); ?>  </div>
  <div class="box-body"> 
  		<?php echo $__env->make('sximo.config.tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		 <?php echo Form::open(array('url'=>'sximo/config/save/', 'class'=>'form-horizontal row', 'files' => true)); ?>


		<div class="col-sm-6 animated fadeInRight ">
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4"><?php echo e(Lang::get('core.fr_appname')); ?> </label>
			<div class="col-md-8">
			<input name="cnf_appname" type="text" id="cnf_appname" class="form-control input-sm" required  value="<?php echo e($sximoconfig['cnf_appname']); ?>" />  
			 </div> 
		  </div>  
		  
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4"><?php echo e(Lang::get('core.fr_appdesc')); ?> </label>
			<div class="col-md-8">
			<input name="cnf_appdesc" type="text" id="cnf_appdesc" class="form-control input-sm" value="<?php echo e($sximoconfig['cnf_appdesc']); ?>" /> 
			 </div> 
		  </div>  
		  
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4"><?php echo e(Lang::get('core.fr_comname')); ?> </label>
			<div class="col-md-8">
			<input name="cnf_comname" type="text" id="cnf_comname" class="form-control input-sm" value="<?php echo e($sximoconfig['cnf_comname']); ?>" />  
			 </div> 
		  </div>      

		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4"><?php echo e(Lang::get('core.fr_emailsys')); ?> </label>
			<div class="col-md-8">
			<input name="cnf_email" type="text" id="cnf_email" class="form-control input-sm" value="<?php echo e($sximoconfig['cnf_email']); ?>" /> 
			 </div> 
		  </div>   
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4"> <?php echo e(Lang::get('core.fr_multilanguage')); ?> <br />  </label>
			<div class="col-md-8">
				<div class="checkbox">
					<input name="cnf_multilang" type="checkbox" id="cnf_multilang" value="1" class="minimal-red" 
					<?php if($sximoconfig['cnf_multilang'] ==1): ?> checked <?php endif; ?>
					  />  <?php echo e(Lang::get('core.fr_enable')); ?> 
				</div>	
			 </div> 
		  </div> 
		     
		   <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4"><?php echo e(Lang::get('core.fr_mainlanguage')); ?> </label>
			<div class="col-md-8">

					<select class="form-control" name="cnf_lang">

					<?php $__currentLoopData = SiteHelpers::langOption(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<option value="<?php echo e($lang['folder']); ?>"
						<?php if($sximoconfig['cnf_multilang'] ==$lang['folder']): ?> selected <?php endif; ?>
						><?php echo e($lang['name']); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</select>
			 </div> 
		  </div>   
		      

		   <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4"><?php echo e(Lang::get('core.fr_fronttemplate')); ?></label>
			<div class="col-md-8">
					
					<select class="form-control" name="cnf_theme">

					<?php $__currentLoopData = SiteHelpers::themeOption(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<option value="<?php echo e($t['folder']); ?>"
						<?php if($sximoconfig['cnf_theme'] ==$t['folder']): ?> selected <?php endif; ?>
						><?php echo e($t['name']); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</select>
			 </div> 
		  </div> 

		  <div class="form-group hide">
		    <label for="ipt" class=" control-label col-md-4"> Development Mode ?   </label>
			<div class="col-md-8">
				<div class="checkbox">
					<input name="cnf_mode" type="checkbox" id="cnf_mode" value="1"
					<?php if($sximoconfig['cnf_mode'] =='production'): ?> checked <?php endif; ?>
					  />  Production
				</div>
				<small> If you need to debug mode , please unchecked this option </small>	
			 </div> 
		  </div> 		  
		  
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">&nbsp;</label>
			<div class="col-md-8">
				<button class="btn btn-primary" type="submit"><?php echo e(Lang::get('core.sb_savechanges')); ?> </button>
			 </div> 
		  </div> 
		</div>

		<div class="col-sm-6 animated fadeInRight ">

		  
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4"> <?php echo e(Lang::get('core.fr_dateformat')); ?> </label>
			<div class="col-md-8">
				<select class="form-control" name="cnf_date">
				<?php $dates = array(
						'Y-m-d'=>' ( Y-m-d ) . Example : '.date('Y-m-d'),
						'Y/m/d'=>' ( Y/m/d ) . Example : '.date('Y/m/d'),
						'd-m-y'=>' ( D-M-Y ) . Example : '.date('d-m-y'),
						'd/m/y'=>' ( D/M/Y ) . Example : '.date('d/m/y'),
						'm-d-y'=>' ( m-d-Y ) . Example : '.date('m-d-Y'),
						'm/d/y'=>' ( m/d/Y ) . Example : '.date('m/d/Y'),
					  );
				foreach($dates as $key=>$val) {?>
					<option value="<?php echo e($key); ?>"
					<?php if(defined('CNF_DATE') && CNF_DATE ==$key): ?> selected <?php endif; ?>
					><?php echo e($val); ?></option>

				<?php } ?>
				</select>
			 </div> 
		  </div>  			

		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">Metakey </label>
			<div class="col-md-8">
				<textarea class="form-control input-sm" name="cnf_metakey"><?php echo e($sximoconfig['cnf_metakey']); ?></textarea>
			 </div> 
		  </div> 

		   <div class="form-group">
		    <label  class=" control-label col-md-4">Meta Description</label>
			<div class="col-md-8">
				<textarea class="form-control input-sm"  name="cnf_metadesc"><?php echo e($sximoconfig['cnf_metadesc']); ?></textarea>
			 </div> 
		  </div>  

		   <div class="form-group">
		    <label  class=" control-label col-md-4"><?php echo e(Lang::get('core.fr_backendlogo')); ?></label>
			<div class="col-md-8">
				<input type="file" name="logo">
				<p> <i>Please use image dimension 155px * 30px </i> </p>
				<div style="padding:5px; border:solid 1px #ddd; background:#f5f5f5; width:auto;">
				 	<?php if(file_exists(public_path().'/sximo/images/'.$sximoconfig['cnf_logo']) && $sximoconfig['cnf_logo'] !=''): ?>
				 	<img src="<?php echo e(asset('sximo/images/'.$sximoconfig['cnf_logo'])); ?>" alt="<?php echo e($sximoconfig['cnf_appname']); ?>" />
				 	<?php else: ?>
					<img src="<?php echo e(asset('sximo/images/logo.png')); ?>" alt="<?php echo e($sximoconfig['cnf_appname']); ?>" />
					<?php endif; ?>	
				</div>				
			 </div> 
		  </div>  		  

		</div>  
		 <?php echo Form::close(); ?>

	</div>
	</div>	 
</div>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>