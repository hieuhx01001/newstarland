<section class="page-header">
	<div class="container">
		<h1> <?php echo e($pageTitle); ?></h1>
		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="<?php echo e(url('post')); ?>"> Posts </a></li>
			<li class="active"><?php echo e($pageTitle); ?></li>
		</ol><!-- /breadcrumbs -->
	</div>
</section>
<div class="container m-t">
	<div class="row"  style="padding:25px 0;">

		<div class="col-md-9">
			<div class="posts">
				
				<div class="info">
					<i class="fa fa-eye "></i>  <span>  Views (<b> <?php echo e($row->views); ?> </b>)  </span>   
					<i class="fa fa-user "></i>  <span>  <?php echo e(ucwords($row->username)); ?>  </span>   
					<i class="fa fa-calendar "></i>  <span> <?php echo e(date("M j, Y " , strtotime($row->created))); ?> </span> 
					<i class="fa fa-comment-o "></i>   <span>  <?php echo e($row->comments); ?> comment(s)  </span> 
				</div>
				<?php if($conpost['commshare'] ==1 AND $conpost['commshareapi'] !=''): ?>
				<span class='st_sharethis_large' displayText='ShareThis'></span>
				<span class='st_facebook_large' displayText='Facebook'></span>
				<span class='st_twitter_large' displayText='Tweet'></span>
				<span class='st_googleplus_large' displayText='Google +'></span>
				<span class='st_linkedin_large' displayText='LinkedIn'></span>
				<span class='st_email_large' displayText='Email'></span>
				<?php endif; ?>				


				<?php if($conpost['commimage'] ==1 ): ?>
				<div class="image">
				<img src="<?php echo e(asset('uploads/images/'.$row->image)); ?>" class="img-responsive" />
				</div>	
				<?php endif; ?>
				<div class="note">
					<?php if(Session::has('messagetext')): ?>	  
						   <?php echo Session::get('messagetext'); ?>

					<?php endif; ?>	

					 <?php echo PostHelpers::formatContent($row->note); ?>


				</div>

				<div class="labels"><br />
				<b>Articles In :  </b><br /><br />
				<?php echo $labels; ?>

				
				<a href="<?php echo e(url('post')); ?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-arrow-left"></i> Back </a>
				<hr />

					<?php if($conpost['commsys'] ==1): ?>
					<div class="comments">
						<h3> Comment(s) </h3>

						<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comm): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<div class="info" >
							<div class="avatar">
							<?php if( file_exists( './uploads/users/'.$comm->avatar) && $comm->avatar !='') { ?>
								<img src="<?php echo e(URL::to('uploads/users').'/'.$comm->avatar); ?> " border="0" width="40" class="img-circle" />
							<?php  } else { ?> 
								<img alt="" src="http://www.gravatar.com/avatar/<?php echo e(md5($comm->email)); ?>" width="40" class="img-circle" />
							<?php } ?> 
							</div>

								<?php echo e(ucwords($comm->username)); ?> | 
								 <?php echo e(date("M j, Y " , strtotime($comm->posted))); ?>

								
							</div>
							<div class="content">
								<?php echo PostHelpers::formatContent($comm->comments); ?>

								<div class="tools">
									<?php if(Session::get('gid') == '1' OR $comm->userID == Session::get('uid')): ?> 
									<a href="<?php echo e(url('post/remove/'.$row->pageID.'/'. $row->alias.'/'.$comm->commentID)); ?>"><i class="fa fa-minus-circle"></i> Remove  </a>
									<?php endif; ?>
								</div>
							</div> 

						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

						<hr />
						<form method="post"  action="<?php echo e(url('post/comment')); ?>" parsley-validate novalidate class="form">
						<?php echo e(csrf_field()); ?>

							<textarea rows="5" placeholder="Leave comments here ...." class="form-control " required name="comments"></textarea><br />
							<button type="submit" class="btn btn-primary "> Submit Comment </button>	
							<input type="hidden" name="pageID" value="<?php echo e($row->pageID); ?>" />	
							<input type="hidden" name="alias" value="<?php echo e($row->alias); ?>" />						
						</form>

					</div>
					<?php endif; ?>
				</div>	
			</div>   
		</div>

		<div class="col-md-3">
			<?php echo $__env->make('post.widget',array("conpost"=>$conpost), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>

	</div>
</div>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=90d7901a-4bf9-4acd-967c-a770c0fc6756"></script>
<script type="text/javascript">stLight.options({publisher: "90d7901a-4bf9-4acd-967c-a770c0fc6756", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

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
