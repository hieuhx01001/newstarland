<?php namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Core\Pages;
use App\Models\Core\Posts;
use App\Models\Core\Groups;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect;



class ProjectPostsController extends Controller
{

	protected $layout = "layouts.main";
	protected $data = [];
	public $module = 'posts';
	static $per_page = '10';
	public $model;
	public $info;
	public $access;

	public function __construct()
	{

		parent::__construct();
		$this->model = new Posts();

		$this->info   = $this->model->makeInfo($this->module);
		$this->access = [];

		$this->data = [
			'pageTitle'  => $this->info['title'],
			'pageNote'   => $this->info['note'],
			'pageModule' => 'core/projectposts',
			'return'     => self::returnUrl()

		];

	}

	public function getIndex(Request $request)
	{

		if (!\Auth::check()) {
			return redirect('user/login')->with('msgstatus', 'error')->with('messagetext', 'You are not login');
		}

		$this->access = $this->model->validAccess($this->info['id'], session('gid'));

		if ($this->access['is_view'] == 0) {
			return Redirect::to('dashboard')
						   ->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus', 'error')
				;
		}

		$sort  = (!is_null($request->input('sort')) ? $request->input('sort') : 'created');
		$order = (!is_null($request->input('order')) ? $request->input('order') : 'desc');
		// End Filter sort and order for query 
		// Filter Search for query		
		$filter = ' AND pagetype="project" ';

		if (!is_null($request->input('search'))) {
			$search                   = $this->buildSearch('maps');
			$filter                   .= $search['param'];
			$this->data['search_map'] = $search['maps'];
		}


		$page   = $request->input('page', 1);
		$params = [
			'page'   => $page,
			'limit'  => (!is_null($request->input('rows')) ? filter_var($request->input('rows'), FILTER_VALIDATE_INT) : static::$per_page),
			'sort'   => $sort,
			'order'  => $order,
			'params' => $filter,
			'global' => (isset($this->access['is_global']) ? $this->access['is_global'] : 0)
		];
		// Get Query 
		$results = $this->model->getRows($params);

		// Build pagination setting
		$page       = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;
		$pagination = new Paginator($results['rows'], $results['total'], $params['limit']);
		$pagination->setPath('projectposts');


		foreach ($results['rows'] as $key => $row){

			$category = ProjectCategory::find($row->category_id);
			$results['rows'][$key]->category_name = isset($category->name) ? $category->name : 'none';

		}
		
		$this->data['rowData'] = $results['rows'];

		// Build Pagination 
		$this->data['pagination'] = $pagination;
		// Build pager number and append current param GET
		$this->data['pager'] = $this->injectPaginate();
		// Row grid Number 
		$this->data['i'] = ($page * $params['limit']) - $params['limit'];
		// Grid Configuration 
		$this->data['tableGrid'] = $this->info['config']['grid'];
		$this->data['tableForm'] = $this->info['config']['forms'];
		// Group users permission
		$this->data['access'] = $this->access;
		// Detail from master if any

		// Get Post Config
		$this->data['conpost'] = json_decode(file_get_contents(base_path() . '/resources/views/core/project_posts/config.json'), true);

		// Master detail link if any 
		$this->data['subgrid'] = (isset($this->info['config']['subgrid']) ? $this->info['config']['subgrid'] : []);

		// Render into template
		return view('core.project_posts.index', $this->data);
	}


	function getUpdate(Request $request, $id = null)
	{

		if (!\Auth::check()) {
			return redirect('user/login')->with('msgstatus', 'error')->with('messagetext', 'You are not login');
		}

		$this->access = $this->model->validAccess($this->info['id'], session('gid'));
		if ($id == '') {
			if ($this->access['is_add'] == 0) {
				return Redirect::to('dashboard')->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus', 'error');
			}
		}

		if ($id != '') {
			if ($this->access['is_edit'] == 0) {
				return Redirect::to('dashboard')->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus', 'error');
			}
		}

		$row = $this->model->find($id);
		if ($row) {
			$this->data['row'] = $row;
		} else {
			$this->data['row'] = $this->model->getColumnTable('tb_pages');
		}
		$this->data['fields'] = \SiteHelpers::fieldLang($this->info['config']['forms']);

		$this->data['id'] = $id;

		if ($this->data['row']['access'] != '') {
			$access = json_decode($this->data['row']['access'], true);
		} else {
			$access = [];
		}

		$groups = Groups::all();
		$group  = [];
		foreach ($groups as $g) {
			if (session('gid') !== 1 && $g->group_id === 1) {
				continue;
			}
			$group_id = $g['group_id'];
			$a        = (isset($access[$group_id]) && $access[$group_id] == 1 ? 1 : 0);
			$group[]  = ['id' => $g->group_id, 'name' => $g->name, 'access' => $a];
		}


		$this->data['groups'] = $group;
		$articles = Article::all()->toArray();
		$articleList = [];
		foreach ($articles as $article) {
			$articleList[] = $article['name'];
		}
		$this->data['article'] = json_encode($articleList);

		return view('core.project_posts.form', $this->data);
	}

	public function getShow(Request $request, $id = null)
	{

		if (!\Auth::check()) {
			return redirect('user/login')->with('msgstatus', 'error')->with('messagetext', 'You are not login');
		}

		$this->access = $this->model->validAccess($this->info['id'], session('gid'));
		if ($this->access['is_detail'] == 0) {
			return Redirect::to('dashboard')
						   ->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus', 'error')
				;
		}

		$row = $this->model->getRow($id);
		if ($row) {
			$this->data['row']      = $row;
			$this->data['fields']   = \SiteHelpers::fieldLang($this->info['config']['grid']);
			$this->data['id']       = $id;
			$this->data['access']   = $this->access;
			$this->data['subgrid']  = (isset($this->info['config']['subgrid']) ? $this->info['config']['subgrid'] : []);
			$this->data['prevnext'] = $this->model->prevNext($id);

			return view('core.project_posts.view', $this->data);
		} else {
			return Redirect::to('projectposts')->with('messagetext', 'Record Not Found !')->with('msgstatus', 'error');
		}
	}

	function postSave(Request $request)
	{
		$rules     = $this->validateForm();
		$validator = Validator::make($request->all(), $rules);
		if ($validator->passes()) {
			$data   = $this->validatePost($request);

			$groups = Groups::all();
			$access = [];
			foreach ($groups as $group) {
				$access[$group->group_id] = (isset($_POST['group_id'][$group->group_id]) ? '1' : '0');
			}
			$data['category_id'] =  $request->input('category_id');

			// find project category is root or not
			$category = ProjectCategory::find($data['category_id']);
			if ($category->parent_id == 0){
				// count number of post for this category
				$count = Pages::where(
					[
						'category_id' => $data['category_id'],
						'pageType' => 'project'
					]
				)->count();

				if ($count > 0 && $request->input('pageID') == ''){
					return Redirect::to('core/projectposts/update?return=')
								   ->with('messagetext', 'Danh mục cha đã có bài viết')->with('msgstatus', 'error')
						;
				}
			}


			$data['access'] = json_encode($access);

			if ($request->input('pageID') == '') {
				$data['created'] = date('Y-m-d H:i:s');
				$data['userid']  = \Session::get('uid');
			} else {
				$data['updated'] = date('Y-m-d H:i:s');
			}

			if ($request->input('alias') == '') {
				$data['alias'] = \SiteHelpers::seourl($data['title']);
			}

			$data['allow_guest']  = $request->input('allow_guest');
			//$data['is_hot']       = $request->input('is_hot');
			$data['is_show_home'] = $request->input('is_show_home');
			$data['pagetype'] = 'project';

			$id = $this->model->insertRow($data, $request->input('pageID'));

			if (!is_null($request->input('apply'))) {
				$return = 'core/projectposts/update/' . $id . '?return=' . self::returnUrl();
			} else {
				$return = 'core/projectposts?return=' . self::returnUrl();
			}

			// Insert logs into database
			if ($request->input('pageID') == '') {
				\SiteHelpers::auditTrail($request, 'New Data with ID ' . $id . ' Has been Inserted !');
			} else {
				\SiteHelpers::auditTrail($request, 'Data with ID ' . $id . ' Has been Updated !');
			}

			return Redirect::to($return)->with('messagetext', \Lang::get('core.note_success'))->with('msgstatus', 'success');

		} else {

			return Redirect::to('core/projectposts/update/' . $request->input('pageID'))->with('messagetext', \Lang::get('core.note_error'))
				->with('msgstatus', 'error')
				->withErrors($validator)->withInput()
				;
		}

	}

	public function postDelete(Request $request)
	{
		if (!\Auth::check()) {
			return redirect('user/login')->with('msgstatus', 'error')->with('messagetext', 'You are not login');
		}

		$this->access = $this->model->validAccess($this->info['id'], session('gid'));
		if ($this->access['is_remove'] == 0) {
			return Redirect::to('dashboard')
						   ->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus', 'error')
				;
		}
		// delete multiple rows
		if (count($request->input('ids')) >= 1) {
			$this->model->destroy($request->input('ids'));

			\SiteHelpers::auditTrail($request, "ID : " . implode(",", $request->input('ids')) . "  , Has Been Removed Successfull");

			// redirect
			return Redirect::to('core/projectposts?return=' . self::returnUrl())
				->with('messagetext', \Lang::get('core.note_success_delete'))
				->with('msgstatus', 'success')
				;

		} else {
			return Redirect::to('core/projectposts?return=' . self::returnUrl())
				->with('messagetext', 'No Item Deleted')
				->with('msgstatus', 'error')
				;
		}

	}

	public static function display()
	{
		$mode  = isset($_GET['view']) ? 'view' : 'default';
		$model = new Posts();
		$info  = $model::makeInfo('posts');

		$data = [
			'pageTitle' => $info['title'],
			'pageNote'  => $info['note']

		];

		if ($mode == 'view') {
			$id  = $_GET['view'];
			$row = $model::getRow($id);
			if ($row) {
				$data['row']    = $row;
				$data['fields'] = \SiteHelpers::fieldLang($info['config']['grid']);
				$data['id']     = $id;

				return view('core.project_posts.public.view', $data);
			}

		} else {

			$page   = isset($_GET['page']) ? $_GET['page'] : 1;
			$params = [
				'page'   => $page,
				'limit'  => (isset($_GET['rows']) ? filter_var($_GET['rows'], FILTER_VALIDATE_INT) : 10),
				'sort'   => 'pageID',
				'order'  => 'asc',
				'params' => '',
				'global' => 1
			];

			$result            = $model::getRows($params);
			$data['tableGrid'] = $info['config']['grid'];
			$data['rowData']   = $result['rows'];

			$page       = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;
			$pagination = new Paginator($result['rows'], $result['total'], $params['limit']);
			$pagination->setPath('');
			$data['i']          = ($page * $params['limit']) - $params['limit'];
			$data['pagination'] = $pagination;

			return view('core.project_posts.public.index', $data);
		}


	}

	function postSavePublic(Request $request)
	{
		$rules     = $this->validateForm();
		$validator = Validator::make($request->all(), $rules);
		if ($validator->passes()) {
			$data = $this->validatePost('tb_pages');
			$this->model->insertRow($data, $request->input('pageID'));

			return Redirect::back()
				->with('messagetext', '<p class="alert alert-success">' . \Lang::get('core.note_success') . '</p>')
				->with('msgstatus', 'success');
		} else {

			return Redirect::back()->with('messagetext', '<p class="alert alert-danger">' . \Lang::get('core.note_error') . '</p>')
				->with('msgstatus', 'error')
				->withErrors($validator)->withInput()
				;

		}

	}


	public function getList(Request $request)
	{

		$page   = isset($_GET['page']) ? $_GET['page'] : 1;
		$params = [
			'page'   => $page,
			'limit'  => (isset($_GET['rows']) ? filter_var($_GET['rows'], FILTER_VALIDATE_INT) : 10),
			'sort'   => 'pageID',
			'order'  => 'asc',
			'params' => " AND pagetype ='project'  ",
			'global' => 1
		];

		return self::articles($params, $page, 'all');

	}

	public function getLabel(Request $request, $label)
	{

		$page   = isset($_GET['page']) ? $_GET['page'] : 1;
		$params = [
			'page'   => $page,
			'limit'  => (isset($_GET['rows']) ? filter_var($_GET['rows'], FILTER_VALIDATE_INT) : 10),
			'sort'   => 'pageID',
			'order'  => 'asc',
			'params' => " AND pagetype ='project' AND labels REGEXP '" . $label . "' ",
			'global' => 1
		];

		return self::articles($params, $page, $label);

	}


	public function articles($params, $page, $title = 'all')
	{

		$model = new Posts();
		$info  = $model::makeInfo('posts');


		$data['pageLang'] = 'en';
		if (\Session::get('lang') != '') {
			$data['pageLang'] = \Session::get('lang');
		}


		$result          = $model::getRows($params);
		$data['rowData'] = $result['rows'];

		$page       = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;
		$pagination = new Paginator($result['rows'], $result['total'], $params['limit']);
		$pagination->setPath('');
		$data['i']          = ($page * $params['limit']) - $params['limit'];
		$data['pagination'] = $pagination;

		if ($title != 'all') {
			$data['pageTitle'] = 'Label :  ' . $title;

		} else {
			$data['pageTitle'] = 'Posts ';
		}


		$data['pageNote']     = 'View All';
		$data['breadcrumb']   = 'false';
		$data['pageMetakey']  = '';
		$data['pageMetadesc'] = '';
		$data['filename']     = '';


		$page          = 'layouts.' . $this->config['cnf_theme'] . '.index';
		$data['pages'] = 'posts.public.index';

		return view($page, $data);


	}


	function getView(Request $request, $id)
	{

		$row = $this->model->getRow($id);
		if ($row) {

			$data['pageLang'] = 'en';
			if (\Session::get('lang') != '') {
				$data['pageLang'] = \Session::get('lang');
			}

			$data['pageTitle']    = $row->title;
			$data['pageNote']     = 'View All';
			$data['breadcrumb']   = 'inactive';
			$data['pageMetakey']  = $row->metakey;
			$data['pageMetadesc'] = $row->metadesc;
			$data['filename']     = '';

			$data['row']      = $row;
			$data['fields']   = \SiteHelpers::fieldLang($this->info['config']['grid']);
			$data['id']       = $id;
			$data['access']   = $this->access;
			$data['prevnext'] = $this->model->prevNext($id);
			$data['labels']   = self::splitLabels($row->labels);
			$page             = 'layouts.' . $this->config['cnf_theme'] . '.index';
			$data['pages']    = 'posts.public.view';

			return view($page, $data);
		} else {
			return Redirect::to('projectposts')->with('messagetext', 'Record Not Found !')->with('msgstatus', 'error');
		}
	}

	public static function splitLabels($value = '')
	{
		$value = explode(',', $value);
		$vals  = '';
		foreach ($value as $val) {
			$vals .= '<a href="' . url('posts/label/' . trim($val)) . '" class="btn btn-xs btn-default"> ' . trim($val) . ' </a> ';
		}

		return $vals;
	}

	public static function cloudtags()
	{
		$cloud = '';
		$data  = \DB::table('pages')->where('pagetype', 'project')->get();
		foreach ($data as $row) {
			$clouds = explode(',', $row->labels);
			foreach ($clouds as $cld) {
				$cloud .= trim($cld);
			}

		}
	}

	function postConfig(Request $request)
	{
		$data = [
			"commsys"      => ($request->commsys ? 1 : 0),
			"commimage"    => ($request->commimage ? 1 : 0),
			"commlatest"   => ($request->commlatest ? 1 : 0),
			"commpopular"  => ($request->commpopular ? 1 : 0),
			"commshare"    => ($request->commshare ? 1 : 0),
			"commshareapi" => trim($request->commshareapi),
			"commperpage"  => trim($request->commperpage),
		];

		$data     = json_encode($data);
		$filename = base_path() . '/resources/views/core/project_posts/config.json';
		$fp       = fopen($filename, "w+");
		fwrite($fp, $data);
		fclose($fp);

		return Redirect::to('core/projectposts')
					   ->with('messagetext', \Lang::get('core.note_success'))->with('msgstatus', 'success')
			;

	}

	public function getSearch($mode = 'native')
	{
		$this->data['tableForm']  = $this->info['config']['forms'];
		foreach ($this->data['tableForm'] as $key => $row){

			if ($row['field'] == 'labels'){

				$this->data['tableForm'][$key]['search'] = 0;
			}

		}
		$this->data['tableGrid']  = $this->info['config']['grid'];
		$this->data['searchMode'] = $mode;
		$this->data['pageUrl']    = url('core/projectposts');
		$this->data['categories'] = ProjectCategory::all();

		return view('core.project_posts.search', $this->data);


	}


	function getArticleList( Request $request)
	{
		if($request->ajax() == true && \Auth::check() == true)
		{
			$articles = Article::all()->toArray();
			$result = [];
			foreach ($articles as $article){
				$result[] = $article['name'];
			}

			return json_encode($result);
		} else {
			return json_encode(array('OMG'=>" Ops .. Cant access the page !"));
		}
	}

	public function postUploadImage(Request $request)
	{
		if ($_FILES['file']['name']) {
            if (!$_FILES['file']['error']) {
                $name = md5(rand(100, 200));
                $ext = explode('.', $_FILES['file']['name']);
                $filename = $name . '.' . $ext[1];
                $destination = public_path('uploads/postFiles') ; //change this directory
                $location = $_FILES["file"]["tmp_name"];
                move_uploaded_file($location, $destination.'/'. $filename);
                echo asset('uploads/postFiles') .'/'. $filename;//change this URL
            }
            else
            {
              echo  $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
            }
        }
	}

	function buildSearch( $map = false)
	{

			$keywords = ''; $fields = '';	$param ='';
			$this->info['config']['forms'][] = [
				"field"      => "category_id",
				"alias"      => "tb_pages",
				"language"   => [],
				"label"      => "Danh Mục",
				"form_group" => "",
				"required"   => "0",
				"view"       => 1,
				"type"       => "select",
				"add"        => 1,
				"size"       => "0",
				"edit"       => 1,
				"search"     => "1",
				"sortlist"   => "2",
				"limited"    => ""
			];

			$allowsearch = $this->info['config']['forms'];

			$arr = array();
			foreach($allowsearch as $as) $arr[$as['field']] = $as ;
			$mapping = '';
			if($_GET['search'] !='')
			{
				$type = explode("|",$_GET['search'] );
				if(count($type) >= 1)
				{
					foreach($type as $t)
					{
						$keys = explode(":",$t);
						if(in_array($keys[0],array_keys($arr))):
							if($arr[$keys[0]]['type'] == 'select' || $arr[$keys[0]]['type'] == 'radio' )
							{
								$param .= " AND ".$arr[$keys[0]]['alias'].".".$keys[0]." ".self::searchOperation($keys[1])." '".$keys[2]."' ";
								$mapping .= $keys[0].' '.self::searchOperation($keys[1]).' '.$keys[2]. '<br />';

							} else {
								$operate = self::searchOperation($keys[1]);
								if($operate == 'like')
								{
									$param .= " AND ".$arr[$keys[0]]['alias'].".".$keys[0]." LIKE '%".$keys[2]."%' ";
									$mapping .= $keys[0].' LIKE '.$keys[2]. '<br />';
								} else if( $operate =='is_null') {
									$param .= " AND ".$arr[$keys[0]]['alias'].".".$keys[0]." IS NULL ";
									$mapping .= $keys[0].' IS NULL <br />';

								} else if( $operate =='not_null') {
									$param .= " AND ".$arr[$keys[0]]['alias'].".".$keys[0]." IS NOT NULL ";
									$mapping .= $keys[0].' IS NOT NULL <br />';

								} else if( $operate =='between') {
									$param .= " AND (".$arr[$keys[0]]['alias'].".".$keys[0]." BETWEEN '".$keys[2]."' AND '".$keys[3]."' ) ";
									$mapping .= $keys[0].' BETWEEN '.$keys[2]. ' - '. $keys[3] .'<br />';
								} else {
									$param .= " AND ".$arr[$keys[0]]['alias'].".".$keys[0]." ".self::searchOperation($keys[1])." '".$keys[2]."' ";
									$mapping .= $keys[0].' '.self::searchOperation($keys[1]).' '.$keys[2]. '<br />';
								}
							}
						endif;
					}
				}
			}

		if($map == true)
		{
			return $param = array(
					'param'	=> $param,
					'maps'	=> '
					<div class="infobox infobox-info fade in" style="font-size:10px;">
					  <button data-dismiss="alert" class="close" type="button"> x </button>  
					 <b class="text-danger"> Search Result </b> :  <br /> '.$mapping.'
					</div>
					'
				);

		} else {
			return $param;
		}


	}


}