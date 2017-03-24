<?php namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Core\Pages;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ; 


class CategoryController extends Controller {

	protected $layout = "layouts.main";
	protected $data = array();	
	public $module = 'category';
	static $per_page	= '10';

	public function __construct()
	{
		
		parent::__construct();
		$this->model = new Category();
		
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = array();
	
		$this->data = array_merge(array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'=> 'category',
			'return'	=> self::returnUrl()
			
		),$this->data);

		
	}

	public function getIndex( Request $request )
	{

		// Make Sure users Logged 
		if(!\Auth::check()) 
			return redirect('user/login')->with('msgstatus', 'error')->with('messagetext','You are not login');

		$this->access = $this->model->validAccess($this->info['id'] , session('gid'));
		if($this->access['is_view'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');

		$sort = (!is_null($request->input('sort')) ? $request->input('sort') : 'category_id'); 
		$order = (!is_null($request->input('order')) ? $request->input('order') : 'asc');
		// End Filter sort and order for query 
		// Filter Search for query		
		$filter = '';	
		if(!is_null($request->input('search')))
		{
			$search = 	$this->buildSearch('maps');
			$filter = $search['param'];
			$this->data['search_map'] = $search['maps'];
		} 

		
		$page = $request->input('page', 1);
		$params = array(
			'page'		=> $page ,
			'limit'		=> (!is_null($request->input('rows')) ? filter_var($request->input('rows'),FILTER_VALIDATE_INT) : static::$per_page ) ,
			'sort'		=> $sort ,
			'order'		=> $order,
			'params'	=> $filter,
			'global'	=> (isset($this->access['is_global']) ? $this->access['is_global'] : 0 )
		);
		// Get Query 
		$results = $this->model->getRows( $params , session('uid') );		

		foreach ($results['rows'] as $key => $row){

			// get count post of this category
			$count = Pages::where(
				[
					'category_id' => $row->category_id,
					'pageType'    => 'post'
				]
			)->count()
			;
			$results['rows'][$key]->post_count = $count;
		}

		// Build pagination setting
		$page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;	
		$pagination = new Paginator($results['rows'], $results['total'], $params['limit']);	
		$pagination->setPath('category');
		
		$this->data['rowData']		= $results['rows'];
		// Build Pagination 
		$this->data['pagination']	= $pagination;
		// Build pager number and append current param GET
		$this->data['pager'] 		= $this->injectPaginate();	
		// Row grid Number 
		$this->data['i']			= ($page * $params['limit'])- $params['limit']; 
		// Grid Configuration 
		$this->data['tableGrid'] 	= $this->info['config']['grid'];
		$this->data['tableForm'] 	= $this->info['config']['forms'];	
		// Group users permission
		$this->data['access']		= $this->access;
		// Detail from master if any
		
		// Master detail link if any 
		$this->data['subgrid']	= (isset($this->info['config']['subgrid']) ? $this->info['config']['subgrid'] : array()); 
		
		$this->data['insort']	= $sort ;
		$this->data['inorder']	= $order ;
		
		// Render into template
		return view('category.index',$this->data);
	}	



	function getUpdate(Request $request, $id = null)
	{
		// Make Sure users Logged 
		if(!\Auth::check()) 
			return redirect('user/login')->with('msgstatus', 'error')->with('messagetext','You are not login');


		$this->access = $this->model->validAccess($this->info['id'] , session('gid'));
		if($id =='')
		{
			if($this->access['is_add'] ==0 )
			return redirect('dashboard')->with('messagetext',\Lang::get('core.note_restric'))->with('msgstatus','error');
		}	
		
		if($id !='')
		{
			if($this->access['is_edit'] ==0 )
			return redirect('dashboard')->with('messagetext',\Lang::get('core.note_restric'))->with('msgstatus','error');
		}				
				
		$row = $this->model->find(filter_var($id, FILTER_VALIDATE_INT));
		if($row)
		{
			$this->data['row'] =  $row;
		} else {
			$this->data['row'] = $this->model->getColumnTable('tb_categories');
			$this->data['row']['alias'] = '';
		}
		$this->data['fields'] 		=  \SiteHelpers::fieldLang($this->info['config']['forms']);
		
		$this->data['id'] = $id;
		return view('category.form',$this->data);
	}	

	public function getShow( Request $request, $id = null)
	{

		// Make Sure users Logged 
		if(!\Auth::check()) 
			return redirect('user/login')->with('msgstatus', 'error')->with('messagetext','You are not login');

		$this->access = $this->model->validAccess($this->info['id'] , session('gid'));
		if($this->access['is_detail'] ==0) 
		return redirect('dashboard')
			->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');
					
		$row = $this->model->getRow($id);
		if($row)
		{
			$this->data['row'] =  $row;
			$this->data['fields'] 		=  \SiteHelpers::fieldLang($this->info['config']['grid']);
			$this->data['id'] = $id;
			$this->data['access']		= $this->access;
			$this->data['subgrid']	= (isset($this->info['config']['subgrid']) ? $this->info['config']['subgrid'] : array()); 
			$this->data['prevnext'] = $this->model->prevNext($id);
			return view('category.view',$this->data);
		} else {
			return redirect('category')->with('messagetext','Record Not Found !')->with('msgstatus','error');					
		}
	}	

	function postSave( Request $request)
	{
		// Make Sure users Logged 
		if(!\Auth::check()) 
			return redirect('user/login')->with('msgstatus', 'error')->with('messagetext','You are not login');

		$rules = $this->validateForm();
		$validator = Validator::make($request->all(), $rules);	
		if ($validator->passes()) {
			$data = $this->validatePost( $request );

			$data['alias'] = $request->input('alias');

			if ($data['alias'] === '' || $data['alias'] === null ) {
				$data['alias'] = \SiteHelpers::seourl($data['name']);
			}

			$data['active'] = $request->input('active') == "1" ? 1 : 0;

			$id = $this->model->insertRow($data , $request->input('category_id'));
			
			if(!is_null($request->input('apply')))
			{
				$return = 'category/update/'.$id.'?return='.self::returnUrl();
			} else {
				$return = 'category?return='.self::returnUrl();
			}

			// Insert logs into database
			if($request->input('category_id') =='')
			{
				\SiteHelpers::auditTrail( $request , 'New Data with ID '.$id.' Has been Inserted !');
			} else {
				\SiteHelpers::auditTrail($request ,'Data with ID '.$id.' Has been Updated !');
			}

			return redirect($return)->with('messagetext',\Lang::get('core.note_success'))->with('msgstatus','success');
			
		} else {

			return redirect('category/update/'.$request->input('category_id'))->with('messagetext',\Lang::get('core.note_error'))->with('msgstatus','error')
			->withErrors($validator)->withInput();
		}	
	
	}	

	public function postDelete( Request $request)
	{
		// Make Sure users Logged 
		if(!\Auth::check()) 
			return redirect('user/login')->with('msgstatus', 'error')->with('messagetext','You are not login');
			
		$this->access = $this->model->validAccess($this->info['id'] , session('gid'));
		if($this->access['is_remove'] ==0) 
			return redirect('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');
		// delete multipe rows 
		if(count($request->input('ids')) >=1)
		{
			$ids = $request->input('ids');
			foreach ($ids as $categoryId){
				// find category
				$category = Category::find($categoryId);
				// count number of post of this category

				$count = Pages::where(
					[
						'category_id' => $categoryId,
						'pageType' => 'post'
					]
				)->count();

				if ($count >= 1) {
					return redirect('category?return=' . self::returnUrl())
						->with('messagetext', 'Không thể xóa danh mục: '. $category->name. ', đã tồn tại bài viết')
						->with('msgstatus', 'error')
						;
				}

				$this->model->destroy($categoryId);
			}
			
			\SiteHelpers::auditTrail( $request , "ID : ".implode(",",$request->input('ids'))."  , Has Been Removed Successfull");
			// redirect
			return redirect('category?return='.self::returnUrl())
        		->with('messagetext', \Lang::get('core.note_success_delete'))->with('msgstatus','success'); 
	
		} else {
			return redirect('category?return='.self::returnUrl())
        		->with('messagetext','No Item Deleted')->with('msgstatus','error');				
		}

	}	

	public static function display( )
	{
		$mode  = isset($_GET['view']) ? 'view' : 'default' ;
		$model  = new Category();
		$info = $model::makeInfo('category');

		$data = array(
			'pageTitle'	=> 	$info['title'],
			'pageNote'	=>  $info['note']
			
		);

		if($mode == 'view')
		{
			$id = $_GET['view'];
			$row = $model::getRow($id);
			if($row)
			{
				$data['row'] =  $row;
				$data['fields'] 		=  \SiteHelpers::fieldLang($info['config']['grid']);
				$data['id'] = $id;
				return view('category.public.view',$data);
			} 

		} else {

			$page = isset($_GET['page']) ? $_GET['page'] : 1;
			$params = array(
				'page'		=> $page ,
				'limit'		=>  (isset($_GET['rows']) ? filter_var($_GET['rows'],FILTER_VALIDATE_INT) : 10 ) ,
				'sort'		=> 'category_id' ,
				'order'		=> 'asc',
				'params'	=> '',
				'global'	=> 1 
			);

			$result = $model::getRows( $params );
			$data['tableGrid'] 	= $info['config']['grid'];
			$data['rowData'] 	= $result['rows'];	

			$page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;	
			$pagination = new Paginator($result['rows'], $result['total'], $params['limit']);	
			$pagination->setPath('');
			$data['i']			= ($page * $params['limit'])- $params['limit']; 
			$data['pagination'] = $pagination;
			return view('category.public.index',$data);			
		}


	}

	function postSavepublic( Request $request)
	{
		
		$rules = $this->validateForm();
		$validator = Validator::make($request->all(), $rules);	
		if ($validator->passes()) {
			$data = $this->validatePost('tb_categories');		
			 $this->model->insertRow($data , $request->input('category_id'));
			return  Redirect::back()->with('messagetext','<p class="alert alert-success">'.\Lang::get('core.note_success').'</p>')->with('msgstatus','success');
		} else {

			return  Redirect::back()->with('messagetext','<p class="alert alert-danger">'.\Lang::get('core.note_error').'</p>')->with('msgstatus','error')
			->withErrors($validator)->withInput();

		}	
	
	}

	function getComboselect( Request $request)
	{
		if($request->ajax() == true && \Auth::check() == true)
		{

			$categories = Category::whereNotIn('category_id', [$request->input('id')])->get();


			/** @var Category $category */
			$items[] = [0,'Danh Mục Cha'];
			foreach($categories as $category)
			{
				$items[] = [$category->category_id, $category->name];

			}


			return json_encode($items);
		} else {
			return json_encode(array('OMG'=>" Ops .. Cant access the page !"));
		}
	}

}