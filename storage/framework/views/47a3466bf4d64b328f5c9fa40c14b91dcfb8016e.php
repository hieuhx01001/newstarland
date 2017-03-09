<?php  $menus = SiteHelpers::menus('top') ;?>

<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(url('')); ?>">

               <img src="<?php echo e(asset('sximo/images/'.$sximoconfig['cnf_logo'])); ?>" alt="<?php echo e($sximoconfig['cnf_appname']); ?>"    />
               </a>
        </div>


        <div class="navbar-collapse collapse ">



	
		<ul class="nav navbar-nav">

			 <li><a href="<?php echo e(url('')); ?>"> Home </a></li>
			<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		      <?php if($menu['module'] =='separator'): ?>
		        <li class="divider"></li>        
		      <?php else: ?>
				<li><!-- HOME -->
				 	<a 
					<?php if($menu['menu_type'] =='external'): ?>
						href="<?php echo e(URL::to($menu['url'])); ?>" 
					<?php else: ?>
						href="<?php echo e(URL::to($menu['module'])); ?>" 
					<?php endif; ?>
				 
					 <?php if(count($menu['childs']) > 0 ): ?> class="dropdown-toggle" data-toggle="dropdown" <?php endif; ?>>
				 		<i class="<?php echo e($menu['menu_icons']); ?>"></i> 
						
						<?php if($sximoconfig['cnf_multilang'] ==1 && isset($menu['menu_lang']['title'][Session::get('lang')]) && $menu['menu_lang']['title'][Session::get('lang')]!=''): ?>
							<?php echo e($menu['menu_lang']['title'][Session::get('lang')]); ?>

						<?php else: ?>
							<?php echo e($menu['menu_name']); ?>

						<?php endif; ?>	
					
						
						<?php if(count($menu['childs']) > 0 ): ?>
						 <i class="fa fa-angle-down"></i>
						<?php endif; ?>  
					</a> 

					<?php if(count($menu['childs']) > 0): ?>
						 <ul class="dropdown-menu dropdown-menu-right">
							<?php $__currentLoopData = $menu['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							 	<?php if($menu2['module'] =='separator'): ?>
						        	<li class="divider"> </li>        
						      	<?php else: ?>
									 <li class=" 
									 <?php if(count($menu2['childs']) > 0): ?> dropdown-submenu <?php endif; ?>
									 <?php if(Request::is($menu2['module'])): ?> active <?php endif; ?>">
									 	<a 
											<?php if($menu2['menu_type'] =='external'): ?>
												href="<?php echo e(URL::to($menu2['url'])); ?>" 
											<?php else: ?>
												href="<?php echo e(URL::to($menu2['module'])); ?>" 
											<?php endif; ?>
														
										>
											<i class="<?php echo e($menu2['menu_icons']); ?>"></i> 
												<?php if($sximoconfig['cnf_multilang'] ==1 && isset($menu2['menu_lang']['title'][Session::get('lang')])): ?>
													<?php echo e($menu2['menu_lang']['title'][Session::get('lang')]); ?>

												<?php else: ?>
													<?php echo e($menu2['menu_name']); ?>

												<?php endif; ?>
											
										</a> 
										<?php if(count($menu2['childs']) > 0): ?>
										<ul class="dropdown-menu dropdown-menu-right">
											<?php $__currentLoopData = $menu2['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu3): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
												<li <?php if(Request::is($menu3['module'])): ?> class="active" <?php endif; ?>>
													<a 
														<?php if($menu3['menu_type'] =='external'): ?>
															href="<?php echo e(URL::to($menu3['url'])); ?>" 
														<?php else: ?>
															href="<?php echo e(URL::to($menu3['module'])); ?>" 
														<?php endif; ?>										
													
													>
														<span>
														<?php if($sximoconfig['cnf_multilang'] ==1 && isset($menu3['menu_lang']['title'][Session::get('lang')])): ?>
															<?php echo e($menu3['menu_lang']['title'][Session::get('lang')]); ?>

														<?php else: ?>
															<?php echo e($menu3['menu_name']); ?>

														<?php endif; ?>
														
														</span>  
													</a>
												</li>	
											<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
										</ul>
										<?php endif; ?>							
										
										</li>	
									<?php endif; ?>							
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</ul>
					<?php endif; ?>

				</li>
				<?php endif; ?>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
          <?php if(Auth::check()): ?>
            
            <li>
              <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">   <?php echo e(Lang::get('core.m_myaccount')); ?> <i class="fa fa-angle-down"></i> </a>
              <ul class="dropdown-menu ">
                <li><a tabindex="-1" href="<?php echo e(url('dashboard')); ?>"> Dashboard</a></li>
                <li><a tabindex="-1" href="<?php echo e(url('user/profile?view=frontend')); ?>"> <?php echo e(Lang::get('core.m_profile')); ?></a></li>
                <li><a tabindex="-1" href="<?php echo e(url('user/logout')); ?>"> <?php echo e(Lang::get('core.m_logout')); ?></a></li>
              </ul>
            </li>
            <?php else: ?>
            <li>
              <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"> <?php echo e(Lang::get('core.m_myaccount')); ?></a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo e(url('user/profile?view=frontend')); ?>"> <?php echo e(Lang::get('core.signin')); ?> </a></li>
                <li><a tabindex="-1" href="<?php echo e(url('user/register')); ?>"> <?php echo e(Lang::get('core.signup')); ?></a></li>
              </ul>
            </li>
            <?php endif; ?>											
		</ul>


      </div>
    </div>
</div>


		

	
