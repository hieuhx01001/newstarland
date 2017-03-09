

<?php $__env->startSection('content'); ?>
<div class="container">
<div class="login-box">
	

	<div class="box" style="border: none !important">

		<div class="box-body  no-padding" >
			<h3 class="login-title"> Sign In </h3>
  <div class="login-box-body" >
  	<div class="row">

	<div class="col-md-7">   	

    
		<div class="ajaxLoading"></div>
		<p class="message alert alert-danger " style="display:none;"></p>	
 
	    	<?php if(Session::has('message')): ?>
				<?php echo Session::get('message'); ?>

			<?php endif; ?>
		<ul class="parsley-error-list">
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</ul>	
		

		<div id="login-area">

			

	   	   <?php echo Form::open(array('url'=> 'user/signin', 'class'=>'form-vertical','id' => 'LoginAjax' , 'parsley-validate'=>'','novalidate'=>' ')); ?>

	      <div class="form-group has-feedback">
	       <input type="text" name="email" placeholder="<?php echo e(Lang::get('core.email')); ?>" class="form-control" required="email" />
	        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	      </div>
	      <div class="form-group has-feedback">
	       <input type="password" name="password" placeholder="<?php echo e(Lang::get('core.password')); ?>" class="form-control" required="true" />
	        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      </div>

			<?php if(config('sximo')['cnf_recaptcha'] =='true'): ?> 
			<div class="form-group has-feedback ">
				<label class="text-left"> Are u human ? </label>	
				<br />
				<?php echo captcha_img(); ?> <br /><br />
				<input type="text" name="captcha" placeholder="Type Security Code" class="form-control" required/>
				
				<div class="clr"></div>
			</div>	
		 	<?php endif; ?>	

			<?php if(config('sximo')['cnf_multilang'] =='1'): ?> 
			<div class="form-group has-feedback">
				
				<select class="form-control" name="language">
					<option value="">-- <?php echo e(Lang::get('core.m_sel_lang')); ?> --</option>
					<?php $__currentLoopData = SiteHelpers::langOption(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<option value="<?php echo e($lang['folder']); ?>" <?php if(Session::get('lang') ==$lang['folder']): ?> selected <?php endif; ?>>  <?php echo e($lang['name']); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

				</select>	
				
				<div class="clr"></div>
			</div>	
		 	<?php endif; ?>			 	


	      <div class="row">
	        <div class="col-xs-8">
	          <div class="checkbox icheck">
	            <label>
	              
	            </label>
	          </div>
	        </div>
	        <!-- /.col -->
	        <div class="col-xs-4">
	          <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(Lang::get('core.signin')); ?></button>
	        </div>
	        <!-- /.col -->
	      </div>
	    </form>

	    


	   <?php if($socialize['google']['client_id'] !='' || $socialize['twitter']['client_id'] !='' || $socialize['facebook'] ['client_id'] !=''): ?>

		   <div class="social-auth-links text-center">
		      <p>- <?php echo e(Lang::get('core.loginsocial')); ?> -</p>

				<?php if($socialize['facebook']['client_id'] !=''): ?> 
				<a href="<?php echo e(URL::to('user/socialize/facebook')); ?>" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook </a>
				<?php endif; ?>
				<?php if($socialize['google']['client_id'] !=''): ?> 
				<a href="<?php echo e(URL::to('user/socialize/google')); ?>" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using  Google+ </a>
				<?php endif; ?>
				<?php if($socialize['twitter']['client_id'] !=''): ?> 
				<a href="<?php echo e(URL::to('user/socialize/twitter')); ?>" class="btn btn-block btn-social btn-twitter btn-flat"><i class="fa fa-twitter"></i> Twitter </a>
				<?php endif; ?>
		    </div>
		<?php endif; ?>    
    <!-- /.social-auth-links -->

    
    </div>





	    <div id="forgot-area">
			<form method="post" action="<?php echo e(url('user/request')); ?>" class="form-vertical " id="fr">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			      <div class="form-group has-feedback">
			       <input type="text" name="credit_email"  placeholder="Enter your current email address" class="form-control" required="email" />
			        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			      </div>

				<div class="form-group has-feedback">        
			      <button type="button" class="btn btn-warning  btn-flat forgot-button"> Cancel </button> 
			      <button type="submit" class="btn btn-primary btn-flat pull-right"> <?php echo e(Lang::get('core.sb_submit')); ?> </button>        
			  </div>
			  
			  <div class="clr"></div>

			  
			</form>

	    



	      </div> 
	</div>     

	
	<div class="col-md-5">
		<div style="padding: 20px 10px ">

	        <h4 class="mb15"> You'll Have Access To Your:</h4>
	        <p class="mb15">
	            <span class="fa fa-check text-success pr5"></span> Unlimited Email Storage</p>
	        <p class="mb15">
	            <span class="fa fa-check text-success pr5"></span> Unlimited Photo Sharing/Storage</p>
	        <p class="mb15">
	            <span class="fa fa-check text-success pr5"></span> Unlimited Downloads</p>
	        <p class="mb15">
	    </div>    


	</div> 
	</p>

 </div></div>
		<div class="box-footer" style="">
			<a href="javascript:void(0)" class="forgot-button" ><?php echo e(Lang::get('core.forgotpassword')); ?></a> |
		    <?php if(config('sximo')['cnf_regist'] =='true'): ?>
		    	<a href="<?php echo e(url('user/register')); ?>" class="text-center"><?php echo e(Lang::get('core.registernew')); ?></a>	    
		    <?php endif; ?>				

		</div>
	</div>	


	
</div>

</div>
<style type="text/css">
	.login-title{
	    color: #32c5d2 ;
	    font-size: 30px;
	    font-weight: 400 !important;
	    text-align: center;
	}
	.box-footer { background: #6c7a8d;  text-align: center; color: #fff; }
	.box-footer a{ color: #fff;  }
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$('#forgot-area').hide();
		$('.forgot-button').click(function(){
			$('#login-area').toggle();
			$('#forgot-area').toggle();
		});

		var form = $('#LoginAjax'); 
		form.parsley();
		form.submit(function(){
			
			if(form.parsley('isValid') == true){			
				var options = { 
					dataType:      'json', 
					beforeSubmit :  showRequest,
					success:       showResponse  
				}  
				$(this).ajaxSubmit(options); 
				return false;
							
			} else {
				return false;
			}		
		
		});

	});

function showRequest()
{
	$('.ajaxLoading').show();		
}  
function showResponse(data)  {		
	
	if(data.status == 'success')
	{
		window.location.href = data.url;	
		$('.ajaxLoading').hide();
	} else {
		$('.message').html(data.message)	
		$('.ajaxLoading').hide();
		$('.message').show(data.message)	
		return false;
	}	
}	
</script>
<?php echo e(Sitehelpers::showNotification()); ?> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>