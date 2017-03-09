<h3><i class="fa fa-tags"></i> Article Categories </h3>
<?php echo PostHelpers::cloudtags(); ?>

<hr />


<h3> Latest Post </h3>
<ul class="widgeul">
<?php $__currentLoopData = $latestposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<li>
		<?php if($conpost['commimage'] ==1 ): ?>
		<div class="image">
			<img src="<?php echo e(asset('uploads/images/'.$row->image)); ?>"  width="50" />
		</div>	
		<?php endif; ?>

		<div class="post">
			<b><a href="<?php echo e(url('post/view/'.$row->pageID.'/'.$row->alias)); ?>"> <?php echo e($row->title); ?></a></b><br />
			<span> <?php echo e(date("M j, Y " , strtotime($row->created))); ?> </span>
		</div>	
	</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</ul>
