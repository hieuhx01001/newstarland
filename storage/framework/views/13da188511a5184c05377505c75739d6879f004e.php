<section class="page-header">
	<div class="container">
		<h1> <?php echo e($pageTitle); ?></h1>
		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Home</a></li>
			<li class="active"><?php echo e($pageTitle); ?></li>
		</ol><!-- /breadcrumbs -->
	</div>
</section>
<div class="container " style="padding: 30px 0">
	
		<?php echo $content ;?>
	
</div>