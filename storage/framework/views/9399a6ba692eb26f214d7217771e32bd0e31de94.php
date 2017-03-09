<?php
use App\Library\Markdown;
?>
<section class="page-header">
	<div class="container">
		<h1> <?php echo e($pageTitle); ?></h1>
		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active"><?php echo e($pageTitle); ?></li>
		</ol><!-- /breadcrumbs -->
	</div>
</section>

<div class="container m-t">	

	<div class="row" style="padding-top:25px;">
		<div class="col-md-9 m-t">

					<?php if(Session::has('messagetext')): ?>	  
						   <?php echo Session::get('messagetext'); ?>

					<?php endif; ?>	
			<?php $__currentLoopData = $rowData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

			<div class="posts">
				<div class="title">
					<h3><a href="<?php echo e(url('post/view/'.$row->pageID.'/'.$row->alias)); ?>" > <?php echo e($row->title); ?> </a> </h3>
				</div>
				<div class="info">
					<i class="fa fa-user"></i>  <span> <?php echo e(ucwords($row->username)); ?>  </span>   
					<i class="fa fa-calendar"></i>  <span> <?php echo e(date("M j, Y " , strtotime($row->created))); ?> </span> 
					<i class="fa fa-comment-o "></i>   <span> <a href="<?php echo e(url('post/view/'.$row->pageID.'/'.$row->alias)); ?>#comments" > <?php echo e($row->comments); ?>  comment(s) </a> </span> 
				</div>
				<div class="note">
				<?php

				$content = explode('<hr>', $row->note);
				if(count($content>=1))
				{
					echo PostHelpers::formatContent($content[0]);
				} else {
					//echo PostHelpers::formatContent($row->note);
				}
				?>

					 
				</div>

				<div class="labels"><br />
				<b>Articles In :  </b><br />
				<?php 
				foreach(explode(',',$row->labels) as $val)
				{
					echo '<a href="'.url('post/label/'.trim($val)).'" class="btn btn-xs btn-default"> '.trim($val).' </a> ';
				}
				?>
				</div>	

				<a href="<?php echo e(url('post/view/'.$row->pageID.'/'.$row->alias)); ?>" class="btn btn-default btn-sm pull-right">Read More <i class="fa fa-arrow-right"></i>  </a> 				
			 <hr />	
			 </div>          			 
			
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</div>

		<div class="col-md-3">
			<?php echo $__env->make('post.widget', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>

	</div>
</div>

<div class="text-center"> <?php echo $pagination->render(); ?></div>

<style type="text/css">
	.posts {  }
	.posts h3 { margin: 0 0 10px 0; }
	.posts .info { padding: 10px 0 20px 0; font-size: 12px; }
	.posts .info i{ font-size: 18px; padding: 0 5px 0 15px;}
	.posts .labels { padding: 10px 0; }
	.posts .image { border: solid 1px #ddd; padding: 5px; margin-bottom: 10px; background: #eee; }
	.comments {}
	.comments .info{ font-size: 13px; font-weight: 700; }	
	.comments .info .avatar{ width: 40px; float: left;margin-right: 5px;  }
	.comments .content { font-size: 12px; border-bottom: solid 1px #eee;  padding: 5px 0 20px 50px;}
	.cloudtags { margin: 0 5px 5px 0; padding: 5px 10px; border: solid 1px #eee; display: block;  }
	ul.widgeul { margin: 0; padding:0; list-style: none; }
	ul.widgeul li{ clear: both; padding-bottom: 10px; border-bottom: solid 1px #eee;  }
	ul.widgeul li .image{ width: 60px; float: left; padding-right: 15px;  }
		

</style>