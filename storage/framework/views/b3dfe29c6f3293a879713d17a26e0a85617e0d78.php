 <header class="main-header navbar-fixed-top">
    <!-- Logo -->
    <a href="<?php echo e(url('dashboard')); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        
        <img src="<?php echo e(asset('sximo/images/logo.png')); ?>" title="<?php echo e($sximoconfig['cnf_appname']); ?>" height="30" width="30" />
               
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
    
        <?php if(file_exists(public_path().'/sximo/images/'.$sximoconfig['cnf_logo']) && $sximoconfig['cnf_logo'] !=''): ?>
        <img src="<?php echo e(asset('sximo/images/'.$sximoconfig['cnf_logo'])); ?>" alt="<?php echo e($sximoconfig['cnf_appname']); ?>"  />
        <?php else: ?>
        <img src="<?php echo e(asset('sximo/images/logo.png')); ?>" alt="<?php echo e($sximoconfig['cnf_appname']); ?>"  />
        <?php endif; ?> 
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <a href="<?php echo e(url('')); ?>" target="_blank" class="sidebar-all hidden-xs"  title="Go To Website">
       <span ><i class="fa fa-globe"></i></span>
      </a>
      <?php if(Auth::user()->group_id == 1  ): ?>
      <a href="javascript:void(0)" class="sidebar-all hidden-xs"  onclick="$('#topbar-dropmenu').toggle();">
        <span ><i class="fa fa-desktop"></i></span>
      </a>
      <?php endif; ?>
      <a href="javascript:void(0)" class="sidebar-all hidden-xs"  onclick="requestFullScreen()">
        <span ><i class="fa fa-arrows-alt"></i> </span>

      </a>
     

        

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-wifi"></i>
              <span class="label label-warning notif-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <span class="notif-alert" style="font-weight: 600">0</span> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu" id="notification-menu">
                  
                </ul>  
              <li class="footer"><a href="<?php echo e(url('notification')); ?>">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->

         <?php if($sximoconfig['cnf_multilang'] ==1): ?>
        <li class="dropdown tasks-menu">
          <?php 
          $flag ='en';
          $langname = 'English'; 
          foreach(SiteHelpers::langOption() as $lang):
            if($lang['folder'] == session('lang') or $lang['folder'] == $sximoconfig['cnf_lang']) {
              $flag = $lang['folder'];
              $langname = $lang['name']; 
            }
            
          endforeach;?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <img class="flag-lang" src="<?php echo e(asset('sximo/images/flags/'.$flag.'.png')); ?>" width="16" height="12" alt="lang" /> <?php echo e(strtoupper($flag)); ?>

            <span class="hidden-xs">
             <i class="fa caret"></i>
            </span>
          </a>

           <ul class="dropdown-menu dropdown-menu-right icons-right">
            <li class="header"> <?php echo e(Lang::get('core.m_sel_lang')); ?> </li>
            <?php $__currentLoopData = SiteHelpers::langOption(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <li><a href="<?php echo e(URL::to('home/lang/'.$lang['folder'])); ?>"><img class="flag-lang" src="<?php echo e(asset('sximo/images/flags/'. $lang['folder'].'.png')); ?>" width="16" height="11" alt="lang"  /> <?php echo e($lang['name']); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
          </ul>

        </li> 
        <?php endif; ?>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php echo SiteHelpers::avatar( 19 ); ?>

                <span class="hidden-xs"><?php echo e(Session::get('fid')); ?>

                  <i class="fa caret"></i>
                </span>              
            </a>

            <ul class="dropdown-menu">
              <li class="header">
                
                <b> <?php echo e(Lang::get('core.lastlogin')); ?> : </b> <?php echo e(date("H:i ,M/d/y", strtotime(Session::get('ll')))); ?>

              </li>
              <li>
                  <li><a href="<?php echo e(url('user/profile')); ?>"><i class="fa fa-user"></i> My Profile  </a></li>
                  <li><a href="<?php echo e(url('core/elfinder')); ?>"><i class="fa fa-folder"></i> My Folder & Files   </a></li>
                  <li><a href="<?php echo e(url('user/logout')); ?>"><i class="fa fa-sign-out"></i> Logout  </a></li>
              </li>
                <!-- search form -->
                
                 <?php
                 $templates = array(

                    'skin-blue'        => 'Blue',
                    'skin-black'       => 'Black',
                    'skin-purple'      => 'Purple',
                    'skin-green'       => 'Green',
                    'skin-red'         => 'Red',
                    'skin-yellow'      => 'Yellow',
                    'skin-blue-light'   => 'Blue Light',
                    'skin-black-light'  => 'Black Light',
                    'skin-purple-light' => 'Purple Light',
                    'skin-green-light'  => 'Green Light',
                    'skin-red-light'    => 'Red Light',
                    'skin-yellow-light' => 'Yellow Light',


                  );
                 ?>
              
                 
                     
            </ul>

          </li>


        </ul>
      </div>
    </nav>
  </header>