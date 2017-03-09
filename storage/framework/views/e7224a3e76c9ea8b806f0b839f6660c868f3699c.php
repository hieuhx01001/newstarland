

<?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
        Control panel
        <small>Module Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Module</li>
      </ol>
    </section>

  <div class="content">

	<div class="box box-primary">
          
      <div class="box-body">

  <div class="ribon-sximo">
    <section >

        <div class="row m-l-none m-r-none m-t  shortcut " >
          <div class="col-sm-3  p-sm ribon-setting ">
            <span class="pull-left m-r-sm "><i class="fa fa-plus"></i></span> 
            <a href="<?php echo e(URL::to('sximo/module/create')); ?>" class="clear">
              <span class="h3 block m-t-xs"><strong> <?php echo e(Lang::get('core.btn_create')); ?> Module </strong>
              </span> <small > <?php echo e(Lang::get('core.fr_createmodule')); ?>  </small>
            </a>
          </div>        
          <div class="col-sm-3  p-sm ribon-install">
            <span class="pull-left m-r-sm "><i class="fa fa-folder-open-o"></i></span>
            <a href="javascript:void(0)" class="clear " onclick="$('.unziped').toggle()">
              <span class="h3 block m-t-xs"><strong><?php echo e(Lang::get('core.btn_install')); ?> Module </strong>
              </span> <small ><?php echo e(Lang::get('core.fr_installmodule')); ?> </small> 
            </a>
          </div>        
          <div class="col-sm-3   p-sm ribon-module">
            <span class="pull-left m-r-sm "><i class="fa fa-folder-o"></i></span>
            <a href="<?php echo e(URL::to('sximo/module/package')); ?>" class="clear post_url">
              <span class="h3 block m-t-xs"><strong><?php echo e(Lang::get('core.btn_backup')); ?> Module</strong>
              </span> <small > <?php echo e(Lang::get('core.fr_backupmodule')); ?> </small> 
            </a>
          </div>          
          <div class="col-sm-6 col-md-3  p-sm ribon-menu">
            <span class="pull-left m-r-sm "><i class="fa fa-database"></i></span>
            <a href="<?php echo e(URL::to('sximo/tables')); ?>" >
              <span class="h3 block m-t-xs"><strong>Database</strong>
              </span> <small > Manage Database Tables </small> 
            </a>
          </div>  


        </div> 

    </section>      
  </div>


	<?php if(Session::has('message')): ?>
		   <?php echo e(Session::get('message')); ?>

	<?php endif; ?>	
      <div class="white-bg p-sm m-b unziped" style=" border:solid 1px #ddd; display:none; padding: 10px 5px 30px">
	   <?php echo Form::open(array('url'=>'sximo/module/install/', 'class'=>'breadcrumb-search','files' => true , 'parsley-validate'=>'','novalidate'=>' ')); ?>

		<h3>Select File ( Module zip installer ) </h3>
        <p>  <input type="file" name="installer" required style="float:left;">  <button type="submit" class="btn btn-primary btn-xs" style="float:left;"  ><i class="icon-upload"></i> Install</button></p>
        </form>
		<div class="clr"></div>
      </div>

 	<ul class="nav nav-tabs" style="margin-bottom:10px;">
	  <li <?php if($type =='addon'): ?> class="active" <?php endif; ?>><a href="<?php echo e(URL::to('sximo/module')); ?>"> <?php echo e(Lang::get('core.tab_installed')); ?>  </a></li>
	  <li <?php if($type =='core'): ?> class="active" <?php endif; ?>><a href="<?php echo e(URL::to('sximo/module?t=core')); ?>"> <?php echo e(Lang::get('core.tab_core')); ?></a></li>
	</ul>     

	<?php if($type =='core'): ?>

		 <div class="infobox infobox-info fade in">
		  <button type="button" class="close" data-dismiss="alert"> x </button>  
		  <p>   Do not <b>Rebuild</b> or Change any Core Module </p>	
		</div>	
		 
	<?php endif; ?>
  <div class="table-responsive"> 
	 <?php echo Form::open(array('url'=>'sximo/module/package#', 'class'=>'form-horizontal' ,'ID' =>'SximoTable' )); ?>

	<div class="table-responsivet" style="min-height:400px;">
	<?php if(count($rowData) >=1): ?> 
		<table class="table table-striped  ">
			<thead>
			<tr>
				<th>Action</th>					
				<th><input type="checkbox" class="checkall" /></th>
				<th>Module</th>
				
				<th>Controller</th>
				<th>Database</th>
				<th>PRI</th>
				<th>Created</th>
		
			</tr>
			</thead>
        <tbody>
		<?php $__currentLoopData = $rowData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>		
				<td>
				<div class="btn-group">
				<button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
				<I class="fa  fa-pencil "></I> <span class="caret"></span>
				</button>
					<ul style="display: none;" class="dropdown-menu icons-right">
						<?php if($type != 'core'): ?>
						<li><a href="<?php echo e(URL::to($row->module_name)); ?>"><i class="icon-play2"></i> <?php echo e(Lang::get('core.btn_view')); ?> Module </a></li>
						<li><a href="<?php echo e(URL::to('sximo/module/duplicate/'.$row->module_id)); ?>" onclick="SximoModal(this.href,'Duplicate/Clone Module'); return false;" ><i class="icon-copy4"></i> Duplicate/Clone </a></li>						
						<?php endif; ?>
						<li><a href="<?php echo e(URL::to('sximo/module/config/'.$row->module_name)); ?>"><i class="icon-pencil4"></i> <?php echo e(Lang::get('core.btn_edit')); ?></a></li>	
						
						<?php if($type != 'core'): ?>
						<li><a href="javascript://ajax" onclick="SximoConfirmDelete('<?php echo e(URL::to('sximo/module/destroy/'.$row->module_id)); ?>')"><i class="icon-remove5"></i> <?php echo e(Lang::get('core.btn_remove')); ?></a></li>
						<li class="divider"></li>
						<li><a href="<?php echo e(URL::to('sximo/module/rebuild/'.$row->module_id)); ?>"><i class="icon-spinner7"></i> Rebuild All Codes</a></li>
						<?php endif; ?>
					</ul>
				</div>					
				</td>
				<td>
				 
				<input type="checkbox" class="ids" name="id[]" value="<?php echo e($row->module_id); ?>" /> </td>
				<td><?php echo e($row->module_title); ?> </td>
				<td><?php echo e($row->module_name); ?> </td>

				<td><?php echo e($row->module_db); ?> </td>
				<td><?php echo e($row->module_db_key); ?> </td>
				<td><?php echo e($row->module_created); ?> </td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
	</tbody>		
	</table>
	
	<?php else: ?>
		
		<p class="text-center" style="padding:50px 0;"><?php echo e(Lang::get('core.norecord')); ?> 
		<br /><br />
		<a href="<?php echo e(URL::to('sximo/module/create')); ?>" class="btn btn-default "><i class="fa fa-plus-circle"></i> New module </a>
		 </p>	
	<?php endif; ?>
	</div>	
	<?php echo Form::close(); ?>

  </div>


</div>
</div></div>
<style type="text/css">
	.info-box {cursor: pointer;}
</style>
  <script language='javascript' >
  jQuery(document).ready(function($){
    $('.post_url').click(function(e){
      e.preventDefault();
      if( ( $('.ids',$('#SximoTable')).is(':checked') )==false ){
        alert( $(this).attr('data-title') + " not selected");
        return false;
      }
      $('#SximoTable').attr({'action' : $(this).attr('href') }).submit();
    });


  })
  </script>	 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>