<?php

$tabs = array(
		'' 		        => ''. Lang::get('core.tab_siteinfo'),
		'email'			=> ' '. Lang::get('core.tab_email'),
		'security'		=> ' '. Lang::get('core.tab_loginsecurity') ,
		'translation'	=>' '.Lang::get('core.tab_translation'),
		'log'			=>' '. Lang::get('core.m_clearcache')
	);

?>

<ul class="nav nav-tabs m-b" >
<?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<li  <?php if($key == $active): ?> class="active" <?php endif; ?>><a href="<?php echo e(URL::to('sximo/config/'.$key)); ?>"> <?php echo $val; ?>  </a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

</ul>