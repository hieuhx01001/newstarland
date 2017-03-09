

<?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1> Module <small>Configuration</small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo e(url('sximo/module')); ?>"><i class="fa fa-th"></i> Module</a></li>
        <li class="active">Permission  </li>
         <li class="active"><?php echo e($row->module_title); ?></li>
      </ol>
    </section>

   <div class="content">


 <?php echo Form::open(array('url'=>'sximo/module/savepermission/'.$module_name, 'class'=>'form-horizontal')); ?>


<div class="box box-primary">
 <div class="box-header with-border"> <h4> <?php echo e($row->module_title); ?> <small> : Permission  ( Set Access to Groups ) </small></h4></div>
	<div class="box-body">	



	<?php echo $__env->make('sximo.module.tab',array('active'=>'permission','type'=>$type), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php if(Session::has('message')): ?>
	       <?php echo e(Session::get('message')); ?>

	<?php endif; ?>
	

		<table class="table table-striped " id="table">
		<thead class="no-border">
  <tr>
	<th field="name1" width="20">No</th>
	<th field="name2">Group </th>
	<?php foreach($tasks as $item=>$val) {?>	
	<th field="name3" data-hide="phone"><?php echo $val;?> </th>
	<?php }?>

  </tr>
</thead>  
<tbody class="no-border-x no-border-y">	
  <?php $i=0; foreach($access as $gp) {?>	
  	<tr>
		<td  width="20"><?php echo ++$i;?>
		<input type="hidden" name="group_id[]" value="<?php echo $gp['group_id'];?>" /></td>
		<td ><?php echo $gp['group_name'];?> </td>
		<?php foreach($tasks as $item=>$val) {?>	
		<td  class="">
		
		<label >
			<input name="<?php echo $item;?>[<?php echo $gp['group_id'];?>]" class="c<?php echo $gp['group_id'];?>" type="checkbox"  value="1"
			<?php if($gp[$item] ==1) echo ' checked="checked" ';?> />
		</label>	
		</td>

		<?php }?>
	</tr>  
	<?php }?>
  </tbody>
</table>	

<div class="infobox infobox-danger fade in">
  <button type="button" class="close" data-dismiss="alert"> x </button>
  <h5>Please Read !</h5>
  <ol> 
  	<li> If you want users <strong>only</strong> able to access they own records , then <strong>Global</strong> must be <code>uncheck</code> </li>
	<li> When you using this feature , Database table must have <strong><code>entry_by</code></strong> field </li>
	</ol>	
</div>	
<button type="submit" class="btn btn-success"> Save Changes </button>	
	
<input name="module_id" type="hidden" id="module_id" value="<?php echo $row->module_id;?>" />
</div>	</div>
 <?php echo Form::close(); ?>	
	

</div>	

<script>
	$(document).ready(function(){
	
		$(".checkAll").click(function() {
			var cblist = $(this).attr('rel');
			var cblist = $(cblist);
			if($(this).is(":checked"))
			{				
				cblist.prop("checked", !cblist.is(":checked"));
			} else {	
				cblist.removeAttr("checked");
			}	
			
		});  	
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>