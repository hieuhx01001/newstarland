

		 {!! Form::open(array('url'=>'category/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Danh Mục Bài Viết</legend>
				{!! Form::hidden('category_id', $row['category_id']) !!}					
									  <div class="form-group  " >
										<label for="Danh Mục Cha" class=" control-label col-md-4 text-left"> Danh Mục Cha </label>
										<div class="col-md-7">
										  <select name='parent_id' rows='5' id='parent_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tên Tiêu Đề" class=" control-label col-md-4 text-left"> Tên Tiêu Đề <span class="asterix"> * </span></label>
										<div class="col-md-7">
										  <input  type='text' name='name' id='name' value='{{ $row['name'] }}' 
						required     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Link Ảnh" class=" control-label col-md-4 text-left"> Link Ảnh </label>
										<div class="col-md-7">
										  <input  type='text' name='image_url' id='image_url' value='{{ $row['image_url'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#parent_id").jCombo("{!! url('category/comboselect?filter=tb_categories:category_id:name') !!}",
		{  selected_value : '{{ $row["parent_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
