<?php echo Form::open(array('url'=>'home/proccess/1', 'id'=>'formconfiguration','class'=>'form-vertical' ,'files' => true , 'parsley-validate'=>'','novalidate'=>' ')); ?>

<?php if(Session::has('message')): ?>	  
		<?php echo Session::get('message'); ?>

<?php endif; ?>	
	
<ul class="parsley-error-list">
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<li><?php echo e($error); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</ul>

<div class="form-group  " >
					<label for="ipt" class="  "> Your Name  </label>
				<?php echo Form::text('name','',array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )); ?>

		</div>

		<div class="form-group  " >
					<label for="ipt" class="  "> Subject  </label>
				<?php echo Form::text('subject','',array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )); ?>

		</div>

		<div class="form-group  " >
					<label for="ipt" class="  "> Email Address  </label>
				<?php echo Form::text('email','',array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'email'   )); ?>

		</div>

		<div class="form-group  " >
					<label for="ipt" class="  "> Your Message  </label>
				<textarea name='message' rows='5' id='message' class='form-control '  
				         required  ></textarea>
		</div>

		
		<div class="form-group  " >					
				<button type="submit" name="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Submit </button>
		</div>

<?php echo Form::close(); ?>


<link href="<?php echo e(asset('sximo/js/plugins/iCheck/skins/square/red.css')); ?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo e(asset('sximo/js/plugins/iCheck/icheck.min.js')); ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('input[type="checkbox"],input[type="radio"]').iCheck({
			checkboxClass: 'icheckbox_square-red',
			radioClass: 'iradio_square-red',
		});	
	});

	
</script>