<?php
use App\Models\Core\Users;
use App\Models\Core\Logs;

$userModel = new Users();
$userInfor = $userModel->makeInfo('users');
$this->access = $userModel->validAccess($userInfor['id'] , session('gid'));

$logModel = new Logs();
$logInfor = $logModel->makeInfo('logs');
$this->logAccess = $logModel->validAccess($logInfor['id'] , session('gid'));

$sidebar = SiteHelpers::menus('sidebar');
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->


        <ul class="sidebar-menu">
            <?php $__currentLoopData = $sidebar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                <?php if($menu['module'] =='separator'): ?>
                    <li class="header">
                        <?php if($sximoconfig['cnf_multilang'] ==1 && isset($menu['menu_lang']['title'][Session::get('lang')])): ?>
                            <?php echo e($menu['menu_lang']['title'][Session::get('lang')]); ?>

                        <?php else: ?>
                            <?php echo e($menu['menu_name']); ?>

                        <?php endif; ?>


                    </li>
                <?php else: ?>
                    <li class="treeview <?php if(Request::segment(1) == $menu['module']): ?> active <?php endif; ?>">
                        <a
                                <?php if($menu['menu_type'] =='external'): ?>
                                href="<?php echo e($menu['url']); ?>"
                                <?php else: ?>
                                href="<?php echo e(URL::to($menu['module'])); ?>"
                                <?php endif; ?>
                        >
                            <i class="<?php echo e($menu['menu_icons']); ?>"></i>
            <span>
              <?php if($sximoconfig['cnf_multilang'] ==1 && isset($menu['menu_lang']['title'][Session::get('lang')])): ?>
                    <?php echo e($menu['menu_lang']['title'][Session::get('lang')]); ?>

                <?php else: ?>
                    <?php echo e($menu['menu_name']); ?>

                <?php endif; ?>
            </span>
                            <?php if(count($menu['childs']) > 0 ): ?>
                                <span class="pull-right-container">
              <i class="caret pull-right"></i>
            </span>
                            <?php endif; ?>
                        </a>
                        <!--- LEVEL II -->
                        <?php if(count($menu['childs']) > 0 ): ?>

                            <ul class="treeview-menu">
                                <?php $__currentLoopData = $menu['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <li <?php if(Request::segment(1) == $menu2['module']): ?> class="active" <?php endif; ?> >
                                        <a
                                                <?php if($menu2['menu_type'] =='external'): ?>
                                                href="<?php echo e($menu2['url']); ?>"
                                                <?php else: ?>
                                                href="<?php echo e(url($menu2['module'])); ?>"
                                                <?php endif; ?>
                                        >
                                            <i class="<?php echo e($menu2['menu_icons']); ?>"></i>
                                            <?php if($sximoconfig['cnf_multilang'] ==1 && isset($menu2['menu_lang']['title'][Session::get('lang')])): ?>
                                                <?php echo e($menu2['menu_lang']['title'][Session::get('lang')]); ?>

                                            <?php else: ?>
                                                <?php echo e($menu2['menu_name']); ?>

                                            <?php endif; ?>
                                            <?php if(count($menu2['childs']) > 0 ): ?>
                                                <span class="pull-right-container">
                      <i class="caret pull-right"></i>
                    </span>
                                            <?php endif; ?>
                                        </a>
                                        <!-- LEVEL III -->

                                        <?php if(count($menu2['childs']) > 0): ?>
                                            <ul class="treeview-menu">
                                                <?php $__currentLoopData = $menu2['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu3): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                    <li <?php if(Request::segment(1) == $menu3['module']): ?> class="active" <?php endif; ?>>
                                                        <a
                                                                <?php if($menu3['menu_type'] =='external'): ?>
                                                                href="<?php echo e($menu3['url']); ?>"
                                                                <?php else: ?>
                                                                href="<?php echo e(url($menu3['module'])); ?>"
                                                                <?php endif; ?>
                                                        >
                                                            <i class="<?php echo e($menu3['menu_icons']); ?>"></i>
                                                            <?php if($sximoconfig['cnf_multilang'] ==1 && isset($menu3['menu_lang']['title'][Session::get('lang')])): ?>
                                                                <?php echo e($menu3['menu_lang']['title'][Session::get('lang')]); ?>

                                                            <?php else: ?>
                                                                <?php echo e($menu3['menu_name']); ?>

                                                            <?php endif; ?>
                                                        </a>

                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                            </ul>
                                    <?php endif; ?>
                                    <!-- END LEVEL III -->
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </ul>
                    <?php endif; ?>
                    <!-- END LEVEL II -->
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

            <li class="header">ADMINISTRATOR</li>
                <?php if($this->access !== false): ?>
                    <li <?php if(Request::segment(2) == 'users'): ?> class="treeview active" <?php else: ?> class="treeview" <?php endif; ?> >
                        <a href="<?php echo e(url('core/users')); ?>">
                            <i class="fa fa-user"></i>
                            <span> Tài Khoản </span>
                        </a>
                    </li>
                <?php endif; ?>
            <li class="treeview">
                <a href="javascript:void(0)">
                    <i class="fa fa-newspaper-o"></i>
                    <span> Dự Án </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">

                    <li <?php if(Request::segment(1) == 'projectcategory'): ?> class="active" <?php endif; ?>>
                        <a href="<?php echo e(url('projectcategory')); ?>"><span>Danh Mục</span></a>
                    </li>

                    <li <?php if(Request::segment(2) == 'projectposts'): ?> class="active" <?php endif; ?>>
                        <a href="<?php echo e(url('core/projectposts')); ?>"><span>Danh Sách Dự Án</span></a>
                    </li>
                </ul>

            </li>

            <li class="treeview">
                <a href="javascript:void(0)">
                    <i class="fa fa-newspaper-o"></i>
                    <span> Tin Tức </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">

                    
                    
                    
                    
                    


                    
                    
                    
                    <li <?php if(Request::segment(1) == 'category'): ?> class="active" <?php endif; ?>>
                        <a href="<?php echo e(url('category')); ?>"><span>Danh Mục</span></a>
                    </li>

                    <li <?php if(Request::segment(2) == 'posts'): ?> class="active" <?php endif; ?>>
                        <a href="<?php echo e(url('core/posts')); ?>"><span>Bài Viết</span></a>
                    </li>
                    
                    
                    
                </ul>

            </li>
                <?php if($this->logAccess !== false): ?>
                <li <?php if(Request::segment(2) == 'logs'): ?> class="treeview active" <?php else: ?> class="treeview" <?php endif; ?> >
                    <a href="<?php echo e(url('core/logs')); ?>">
                        <i class="fa fa-sticky-note-o"></i>
                        <span> Hoạt Động </span>
                    </a>
                </li>
                <?php endif; ?>

            <?php if(Auth::user()->group_id == 1  ): ?>
                <li class="treeview">
                    <a href="javascript:void(0)">
                        <i class="fa fa-cog"></i>
                        <span> Superadmin Area </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li <?php if(Request::segment(2) == 'config'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(url('sximo/config')); ?>">
                                <span>  <?php echo e(Lang::get('core.m_setting')); ?> </span>
                            </a>
                        </li>
                        <li <?php if(Request::segment(2) == 'menu'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(url('sximo/menu')); ?>">
                                <span>  <?php echo e(Lang::get('core.m_menu')); ?></span>
                            </a>
                        </li>
                        <li <?php if(Request::segment(2) == 'module'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(url('sximo/module')); ?>">
                                <span> <?php echo e(Lang::get('core.m_codebuilder')); ?> </span>
                            </a>
                        </li>
                        <li <?php if(Request::segment(2) == 'tables'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(url('sximo/tables')); ?>">
                                <span>  <?php echo e(Lang::get('core.m_database')); ?>  </span>
                            </a>
                        </li>
                        <li <?php if(Request::segment(2) == 'code'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(url('sximo/code')); ?>">
                                <span>  <?php echo e(Lang::get('core.m_sourceeditor')); ?>  </span>
                            </a>
                        </li>
                        <li <?php if(Request::segment(2) == 'forms'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(url('core/forms')); ?>">
                                <span> <?php echo e(Lang::get('core.m_formbuilder')); ?> </span>
                            </a>
                        </li>
                        <li <?php if(Request::segment(2) == 'rac'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(url('sximo/rac')); ?>">
                                <span> RestAPI Generator </span>
                            </a>
                        </li>
                        <li <?php if(Request::segment(3) == 'clearlog'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(url('sximo/config/clearlog')); ?>" class="clearCache">
                                <span> Clear Log & Caches  </span>
                            </a>
                        </li>
                    </ul>
                </li>

            <?php endif; ?>
        </ul>


        <!-- /.control-sidebar-menu -->

    </section>
    <!-- /.sidebar -->
</aside>