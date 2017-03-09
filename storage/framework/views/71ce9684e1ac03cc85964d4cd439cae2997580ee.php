<ul class="nav nav-tabs" style="margin-bottom:10px;">
  <li><a href="<?php echo e(url('sximo/module')); ?>"> All </a></li>
  <li <?php if($active == 'config'): ?> class="active" <?php endif; ?> ><a href="<?php echo e(URL::to('sximo/module/config/'.$module_name)); ?>"> Info</a></li>
  <li <?php if($active == 'sql'): ?> class="active" <?php endif; ?> >
  <?php if(isset($type) && $type =='generic'): ?>

  <?php else: ?>
  <a href="<?php echo e(URL::to('sximo/module/sql/'.$module_name)); ?>"> SQL</a></li>
  <li <?php if($active == 'table'): ?> class="active" <?php endif; ?> >
  <a href="<?php echo e(URL::to('sximo/module/table/'.$module_name)); ?>"> Table</a></li>
  <li <?php if($active == 'form' or $active == 'subform'): ?> class="active" <?php endif; ?> >
  <a href="<?php echo e(URL::to('sximo/module/form/'.$module_name)); ?>"> Form</a></li>
  <li <?php if($active == 'sub'  ): ?> class="active" <?php endif; ?> >
  <a href="<?php echo e(URL::to('sximo/module/sub/'.$module_name)); ?>"> Master Detail</a></li>
  <?php endif; ?>
  <li <?php if($active == 'permission'): ?> class="active" <?php endif; ?> >
  <a href="<?php echo e(URL::to('sximo/module/permission/'.$module_name)); ?>"> Permission</a></li>
  <?php if($type !='core' ): ?>
  <li <?php if($active == 'source'): ?> class="active" <?php endif; ?> >
  <a href="<?php echo e(URL::to('sximo/module/source/'.$module_name)); ?>"> Codes </a></li>
  <?php endif; ?>
   <li <?php if($active == 'rebuild'): ?> class="active" <?php endif; ?> >

    <?php if(isset($type) && $type =='generic'): ?>

    <?php else: ?>
   <a href="javascript://ajax" onclick="SximoModal('<?php echo e(URL::to('sximo/module/build/'.$module_name)); ?>','Rebuild Module ')"> Rebuild</a></li>
   <?php endif; ?>
    <li class="dropdown pull-right">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Swith
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <?php $md = DB::table('tb_module')->where('module_type','!=','core')->get();
      foreach($md as $m) { ?>
      <li><a href="<?php echo e(url('sximo/module/'.$active.'/'.$m->module_name)); ?>"> <?php echo e($m->module_title); ?></a></li>
      <?php } ?>
    </ul>
  </li>

  
  
</ul>