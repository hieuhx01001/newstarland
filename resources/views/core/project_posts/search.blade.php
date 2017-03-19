<link href="{{ asset('sximo/js/plugins/select2/select2.css')}}" rel="stylesheet">
<div >
<form id="core/projectpostsSearch">
<table class="table search-table table-striped" id="advance-search">
	<tbody>
		<tr id="category_id" class="fieldsearch">
			<td>Danh Mục</td>
			<td>
				<select id="category_id_operate" class="form-control oper" name="operate" onchange="changeOperate(this.value , 'category_id')">
					<option value="equal"> Bằng</option>
				</select>
			</td>
			<td id="field_category_id">
				<select name='category_id' id="category_id" class='form-control select2'>
					<option value=''> -- Select --</option>
					@foreach( $categories as $category)
						<option value='{{ $category->category_id }}'> {{ $category->name }}</option>
					@endforeach
				</select>
			</td>
		</tr>


		<tr id="title" class="fieldsearch">
			<td>Tiêu Đề </td>
			<td >
			<select id="title_operate" class="form-control oper" name="operate" onchange="changeOperate(this.value , 'title')">
				<option value="equal"> Bằng </option>
				<option value="like"> Gần Đúng </option>
			</select>
			</td>
			<td id="field_title"><input  type='text' name='title' class='form-control input-sm'  value=''/></td>
		</tr>

		<tr id="created" class="fieldsearch">
			<td>Ngày Tạo </td>
			<td >
			<select id="created_operate" class="form-control oper" name="operate" onchange="changeOperate(this.value , 'created')">
				<option value="equal"> Bằng </option>
				<option value="between"> Khoảng </option>
			</select>
			</td>
			<td id="field_created"><input  type='text' name='created'  class='date form-control input-sm'   value=''/> </td>

		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><button type="button" name="search" class="doSearch btn btn-sm btn-primary"> Search </button></td>
		</tr>
	</tbody>     
	</table>
</form>	
</div>

<script>

function changeOperate( val , field )
{
	if(val =='is_null') {
		$('input[name='+field+']').attr('readonly','1');
		$('input[name='+field+']').val('is_null');
	} else if(val =='not_null') {
		$('input[name='+field+']').attr('readonly','1');
		$('input[name='+field+']').val('not_null');		

	} else if(val =='between') {
	
		html = '<input name="'+field+'" class="date form-control" placeholder="Từ Ngày" style="width:150px;"  /> -  <input name="'+field+'_end" class="date form-control"  placeholder="Đến Ngày" style="width:150px;"    />';
		$('#field_'+field+'').html(html);
	} else {
		//$('input[name='+field+']').removeAttr('readonly');
		dateClass = field == 'created' ? 'date' : '';
		$('#field_'+field+'').html('<input type="text" value="" class="'+dateClass+' form-control input-sm" name="'+field+'">');
		$('input[name='+field+']').val('');	
		
	}
	$('.date').datepicker({format:'yyyy-mm-dd',autoClose:true})
}
jQuery(function(){

	//$("select#category_id").select2();

	$('.date').datepicker({format:'yyyy-mm-dd',autoClose:true})
	$('.doSearch').click(function(){
		//alert('test');
		var attr = '';
		$('#advance-search tr.fieldsearch').each(function(i){
			var field = $(this).attr('id');
			var operate = $(this).find('#'+field+'_operate').val();
			var value_select  = $(this).find("select[name="+field+"] option:selected").val();
			if( typeof value_select !=='undefined' )
			{
				value  = value_select;
			} else {
				value  = $(this).find("input[name="+field+"]").val();
			}

			if(value !=='' && typeof value !=='undefined' && this.name !='_token')
			{

				if(operate =='between')
				{
					var value  = $(this).find("input[name="+field+"]").val();
					var value2  = $(this).find("input[name="+field+"_end]").val();
					attr += field+':'+operate+':'+value+':'+value2+'|';
				} else {
					attr += field+':'+operate+':'+value+'|';
				}	
					
			}
			
		});
		
		window.location.href = '{{ $pageUrl }}?search='+attr;
	});
});

</script>
