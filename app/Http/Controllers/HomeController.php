<?php  namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\category;
use App\Models\Core\Pages;
use App\Models\Core\Users;
use App\Models\projectcategory;
use Illuminate\Http\Request;
use App\Library\Markdown;
use Mail;
use Validator, Input, Redirect ; 

class HomeController extends Controller {
	const WEB_NAME = "NEWSTARLAND - NGÔI SAO MỚI";
	const TOAN_QUOC = 'Toàn Quốc';
	const HA_NOI = 'Hà Nội';
	const HAI_PHONG = 'Hải Phòng';
	const NHA_TRANG = 'Nha Trang';
	const PHU_QUOC = 'Phú Quốc';
	const HO_CHI_MINH = 'Hồ Chí Minh';
	const DA_NANG = 'Đà Nẵng';

	public function __construct()
	{
		parent::__construct();

		$this->data['pageLang'] = 'en';
		if(\Session::get('lang') != '')
		{
			$this->data['pageLang'] = \Session::get('lang');
		}
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index(  Request $request  )
	{

        if(!\Session::has('lang'))
        {
            \Session::put('lang',$this->config['cnf_lang']);
        }

        \App::setLocale(\Session::get('lang'));

		if($this->config['cnf_front'] =='false' && $request->segment(1) =='' ) :
			return Redirect::to('dashboard');
		endif; 	

		$page = $request->segment(1);
		if($page !='') :
			$content = \DB::table('tb_pages')->where('alias','=',$page)->where('status','=','enable')->get();




			if(count($content) >=1)
			{

				$row = $content[0];
				$this->data['pageTitle'] = $row->title;
				$this->data['pageNote'] = $row->note;
				$this->data['pageMetakey'] = ($row->metakey !='' ? $row->metakey : $this->config['cnf_metakey']) ;
				$this->data['pageMetadesc'] = ($row->metadesc !='' ? $row->metadesc : $this->config['cnf_metadesc']) ;

				$this->data['breadcrumb'] = 'active';					
				
				if($row->access !='')
				{
					$access = json_decode($row->access,true)	;	
				} else {
					$access = array();
				}	

				// If guest not allowed 
				if($row->allow_guest !=1)
				{	
					$group_id = \Session::get('gid');				
					$isValid =  (isset($access[$group_id]) && $access[$group_id] == 1 ? 1 : 0 );	
					if($isValid ==0)
					{
						return Redirect::to('')
							->with('message', \SiteHelpers::alert('error',Lang::get('core.note_restric')));				
					}
				}				

				if(file_exists(base_path().'/resources/views/layouts/'.$this->config['cnf_theme'].'/template/'.$row->filename.'.blade.php') && $row->filename !='')
				{
					$page_template = 'layouts.'.$this->config['cnf_theme'].'.template.'.$row->filename;
				} else {
					$page_template = 'layouts.'.$this->config['cnf_theme'].'.template.page';
				}
				
				$this->data['content'] = \PostHelpers::formatContent($row->note);
				$this->data['filename'] = $row->filename;

			//	echo '<pre>';print_r($this->data);echo '</pre>'; exit;
				if($row->template =='backend')
				{
					$this->data['pageNote'] = 'View';
					 return view($page_template,$this->data);
				} else {

					$this->data['pages'] = $page_template;
					$page = 'layouts.'.$this->config['cnf_theme'].'.index';
					return view($page,$this->data);
				}				
			
				
				
				
			} else {
				return Redirect::to('')
					->with('message', \SiteHelpers::alert('error',\Lang::get('core.note_noexists')));	
			}
			
			
		else :

			$sql = \DB::table('tb_pages')->where('default','1')->get();
			if(count($sql)>=1)
			{
				$row = $sql[0];

				$this->data['pageTitle'] 	= $row->title;
				$this->data['pageNote'] 	=  $row->note;
				$this->data['breadcrumb'] 	= 'inactive';	
				$this->data['pageMetakey'] 	=   $row->metakey ;
				$this->data['pageMetadesc'] =  $row->metadesc ;
				$this->data['filename'] 	=  $row->filename;				

				if(file_exists(base_path().'/resources/views/layouts/'.$this->config['cnf_theme'].'/template/'.$row->filename.'.blade.php') && $row->filename !='')
				{
					$page_template = 'layouts.'.$this->config['cnf_theme'].'.template.'.$row->filename;
				} else {
					$page_template = 'layouts.'.$this->config['cnf_theme'].'.template.page';
				}

				$this->data['pages'] = $page_template;
				$this->data['content'] = \PostHelpers::formatContent($row->note);
				$page = 'layouts.'.$this->config['cnf_theme'].'.index';
				return view($page,$this->data);		
						

			} else {

				return ' No Default page set up !';
			}

		endif;

	}



    public function home()
    {
		$menuLocation = Article::all();

		$postShowHome = Pages::where('is_show_home', 1)
			->where('status', 'enable')
			->get();
		$listPostHome = [];
		foreach ($postShowHome as $item) {
			if ($item->pagetype == 'project'){
				$categoryPostShowHome = projectcategory::find($item->category_id);
				$listPostHome[] = [$item, $categoryPostShowHome];
			} else {
				$categoryPostShowHome = category::find($item->category_id);
				$listPostHome[] = [$item, $categoryPostShowHome];
			}
		}


		$hotNews = Pages::where('is_hot', 1)
			->where('status', 'enable')
			->where('pagetype', 'post')
			->orderBy('created', 'desc')
			->take(5)
			->get();
		$listHotNews = [];
		foreach ($hotNews as $item) {
			$hotNewsCategory = category::find($item->category_id);
			$listHotNews[] = [$hotNewsCategory, $item];
		}

		$newsProject = Pages::where('pagetype' , 'project')
			->whereNotNull('labels')
			->get();

		$toanQuoc = [];
		$haNoi = [];
		$haiPhong = [];
		$daNang = [];
		$nhaTrang = [];
		$phuQuoc = [];
		$hoChiMinh = [];
		foreach ($newsProject as $item) {
			$location = explode(',', $item->labels);
			if (in_array(self::TOAN_QUOC, $location)) {
				$category =  projectcategory::find($item->category_id);
				$toanQuoc[] = [
					'category' => $category->alias,
					'post'	=> $item,
				];
			}

			if (in_array(self::HA_NOI, $location)){
				$category =  projectcategory::find($item->category_id);
				$haNoi[] = [
					'category' => $category->alias,
					'post'	=> $item,
				];
			}

			if (in_array(self::HAI_PHONG, $location)){
				$category =  projectcategory::find($item->category_id);
				$haiPhong[] = [
					'category' => $category->alias,
					'post'	=> $item,
				];
			}

			if (in_array(self::DA_NANG, $location)){
				$category =  projectcategory::find($item->category_id);
				$daNang[] = [
					'category' => $category->alias,
					'post'	=> $item,
				];
			}

			if (in_array(self::NHA_TRANG, $location)){
				$category =  projectcategory::find($item->category_id);
				$nhaTrang[] = [
					'category' => $category->alias,
					'post'	=> $item,
				];
			}

			if (in_array(self::PHU_QUOC, $location)){
				$category =  projectcategory::find($item->category_id);
				$phuQuoc[] = [
					'category' => $category->alias,
					'post'	=> $item,
				];
			}

			if (in_array(self::HO_CHI_MINH, $location)){
				$category =  projectcategory::find($item->category_id);
				$hoChiMinh[] = [
					'category' => $category->alias,
					'post'	=> $item,
				];
			}
		}


		return view('newstarland.home')
			->with(
				[
					'postShowHome' => $postShowHome,
					'listHotNews' => $listHotNews,
					'newsProject' => $newsProject,
					'toanQuoc' => $toanQuoc,
					'haNoi' => $haNoi,
					'haiPhong' => $haiPhong,
					'daNang' => $daNang,
					'nhaTrang' => $nhaTrang,
					'phuQuoc' => $phuQuoc,
					'hoChiMinh' => $hoChiMinh,
					'listPostHome' => $listPostHome,
					'menuLocation' => $menuLocation,
					'webName' => self::WEB_NAME,
				]
			);
	}

	public function listProject()
	{
		return view('newstarland.project.listProject');
	}

	public function projects($categoryAlias, $alias = null)
	{
		$projects = projectcategory::where('alias', $categoryAlias)
			->where('active', 1)
			->first();
		if (isset($alias)) {
			$projects = projectcategory::where('alias', $alias)
				->where('active', 1)
				->first();
		}

		$listProjectFather = projectcategory::where('parent_id', 0)
			->orderBy('name')
			->where('active', 1)
			->get();

		if (isset($projects) && $categoryAlias != $alias) {
			$listChild = projectcategory::where('parent_id', $projects->category_id)
				->where('active', 1)
				->get();
			$projectFather = projectcategory::where('category_id', $projects->parent_id)
				->where('active', 1)
				->first();

			if ($this->isFather($projects)) {
				$contentProject = Pages::where('pagetype', 'project')
					->where('status', 'enable')
					->where('category_id', $projects->category_id)
					->first();
				$projectFatherCategory = projectcategory::find($contentProject);

				if (isset($contentProject)) {
					$byUser = Users::find($contentProject->userid);

					return view('newstarland.project.projectFather')
						->with(
							[
								'webName' => self::WEB_NAME,
								'projects' => $projects,
								'contentProject' => $contentProject,
								'byUser' => $byUser,
								'listProjectFather' => $listProjectFather,
								'projectFatherCategory' => $projectFatherCategory
							]
						);
				}
				return redirect(route('index'));
			} else if($this->hasNotChild($listChild)) {
				$childPost = Pages::where('pagetype', 'project')
					->where('status', 'enable')
					->where('category_id', $projects->category_id)
					->get();
				$projectCategory = projectcategory::find($projects->category_id);
				return view('newstarland.project.project')
					->with(
						[
							'webName' => self::WEB_NAME,
							'childPost' => $childPost,
							'projects' => $projects,
							'projectFather' => $projectFather,
							'projectCategory' => $projectCategory
						]
					);
			}
			return view('newstarland.project.projects')
				->with(
					[
						'webName' => self::WEB_NAME,
						'projects' => $projects,
						'listChild' => $listChild,
						'projectFather' => $projectFather
					]
				);
		}

		$post = Pages::where('alias', $alias)
			->where('status', 'enable')
			->where('pagetype', 'project')
			->first();

		$postLike = Pages::where('pagetype', 'project')
			->where('category_id', $post->category_id)
			->where('alias', '!=', $post->alias)
			->get();
		$postCategory = projectcategory::find($post->category_id);

		if ($post) {
			$byUser = Users::find($post->userid);

			return view('newstarland.project.detailProject')
				->with(
					[
						'webName' => self::WEB_NAME,
						'post'    => $post,
						'byUser' => $byUser,
						'listProjectFather' => $listProjectFather,
						'postLike' => $postLike,
						'postCategory' => $postCategory
					]
				);
		}

	}

	public function listNews()
	{
		$recruitment = Pages::where('category_id', 2)
			->where('status', 'enable')
			->orderBy('created', 'desc')
			->take(4)
			->get();

		$internal = Pages::where('category_id', 3)
			->where('status', 'enable')
			->orderBy('created', 'desc')
			->take(4)
			->get();
		$process = Pages::where('category_id', 5)
			->where('status', 'enable')
			->orderBy('created', 'desc')
			->take(4)
			->get();
		return view('newstarland.news.index')->with(
			[
				'webName' => self::WEB_NAME,
				'recruitment' => $recruitment,
				'internal' => $internal,
				'process' => $process
			]
		);
	}

	public function news($categoryAlias, $alias = null)
	{
		$news = category::where('alias', $categoryAlias)
			->where('active', 1)
			->first();
		if (isset($alias)) {
			$categoryByAlias = category::where('alias', $alias)
				->where('active', 1)
				->first();
			if (isset($categoryByAlias)) {
				$listChild = Pages::where('category_id', $categoryByAlias->category_id)->get();
			}
		}
		$letter = Pages::where('pagetype', 'post')
			->where('status', 'enable')
			->where('category_id', 6)
			->first();
		$develop = Pages::where('pagetype', 'post')
			->where('status', 'enable')
			->where('category_id', 7)
			->first();
		$listProjectFather = projectcategory::where('parent_id', 0)
			->where('active', 1)
			->get();


		if (!isset($alias)) {
			switch ($news->category_id){
				case 1:
					return view('newstarland.news.projectNews')
						->with(
							[
								'webName' => self::WEB_NAME,
							]
						);
				case 2:
					$news = Pages::where('pagetype', 'post')
						->where('status', 'enable')
						->where('category_id', 2)
						->get();
					return view('newstarland.recruitment.recruitment')
						->with(
							[
								'listNews'	=> $news,
								'webName'	=>	self::WEB_NAME
							]
						);
				case 3:
					$internalNews = Pages::where('pagetype', 'post')
						->where('status', 'enable')
						->where('category_id', 3)
						->get();
					return view('newstarland.news.internalNews')
						->with(
							[
								'webName'	=>	self::WEB_NAME,
								'news' => $internalNews
							]
						);
				case 4:
					return view('newstarland.about.aboutUs')
						->with(
							[
								'webName' => self::WEB_NAME,
								'letter' => $letter,
								'develop' => $develop
							]
						);
				case 5:
					$processProject = Pages::where('category_id', 5)
						->where('status', 'enable')
						->where('pagetype', 'post')
						->get();
					return view('newstarland.news.processProject')
						->with(
							[
								'webName'	=>	self::WEB_NAME,
								'news' => $processProject
							]
						);
				case 6:
					return view('newstarland.about.letter')
						->with(
							[
								'webName' => self::WEB_NAME,
								'letter' => $letter,
							]
						);
				case 7:
					return view('newstarland.about.develop')
						->with(
							[
								'webName' => self::WEB_NAME,
								'develop' => $develop
							]
						);
				default:
					break;
			}
		} else {
			if (!isset($listChild) || $this->hasNotChild($listChild)) {
				$newsDetail = Pages::where('pagetype', 'post')
					->where('status', 'enable')
					->where('alias', $alias)
					->first();
				if (isset($newsDetail)) {
					$category = category::where('category_id', $newsDetail->category_id)
						->where('active', 1)
						->first();
					$byUser = Users::find($newsDetail->userid);
					$postLike = Pages::where('pagetype', 'post')
						->where('status', 'enable')
						->where('category_id', $newsDetail->category_id)
						->where('alias', '!=', $newsDetail->alias)
						->get();
					switch ($category->parent_id){
						case 0:
							$internalNews = Pages::where('category_id', $newsDetail->category_id)
								->where('status', 'enable')
								->orderBy('created', 'desc')
								->take(5)
								->get();
							return view('newstarland.news.internalNewsDetail')
								->with(
									[
										'newsDetail'=> $newsDetail,
										'webName' => self::WEB_NAME,
										'byUser'	=> $byUser['username'],
										'news' => $internalNews
									]
								);
						case 1:
							return view('newstarland.news.projectNewsDetail')
								->with(
									[
										'webName' => self::WEB_NAME,
										'newsDetail' => $newsDetail,
										'category' => $category,
										'byUser' => $byUser,
										'listProjectFather' => $listProjectFather,
										'postLike' => $postLike
									]
								);
					}
				}
				return redirect()->route('index');

			} else {
				$listNews = Pages::where('pagetype', 'post')
					->where('status', 'enable')
					->where('category_id', $categoryByAlias->category_id)
					->get();

				return view('newstarland.news.subProjectNews')
					->with([
						'listNews' => $listNews,
						'categoryByAlias' => $categoryByAlias,
						'webName' => self::WEB_NAME,

					]);
			}

		}


	}



	public function contact()
	{
		return view('newstarland.contact.contact')
			->with('webName', self::WEB_NAME);
	}

	public function getContact(Request $request)
	{
//		Mail::send('emails.contact', ['user' => $request], function ($m) use ($request) {
//			$m->from(config('mail')['username'], 'Your Application Mailler');
//
//			$m->to($request->email, $request->name)->subject($request->subject);
//		});
//		if (Mail::failures()) {
//			return false;
//		}
//		return true;
	}

	public function recruitmentDetail($alias)
	{
		$newsDetail = Pages::where('alias', $alias)
			->where('status', 'enable')
			->first();
		$byUser = Users::find($newsDetail['userid']);
		$recruitment = Pages::where('category_id', 2)
			->where('status', 'enable')
			->orderBy('created', 'desc')
			->take(4)
			->get();
		return view('newstarland.recruitment.recruitmentDetail')
			->with(
				[
					'webName' => self::WEB_NAME,
					'newsDetail'=> $newsDetail,
					'byUser'	=> $byUser['username'],
					'recruitment' => $recruitment
				]
			);
	}

	
	public function  getLang( Request $request , $lang='en')
	{
		$request->session()->put('lang', $lang);
		return  Redirect::back();
	}

	public function  getSkin($skin='sximo')
	{
		\Session::put('themes', $skin);
		return  Redirect::back();
	}		

	public  function  postContact( Request $request)
	{
	
		$this->beforeFilter('csrf', array('on'=>'post'));
		$rules = array(
				'name'		=>'required',
				'subject'	=>'required',
				'message'	=>'required|min:20',
				'sender'	=>'required|email'			
		);
		$validator = Validator::make(Input::all(), $rules);	
		if ($validator->passes()) 
		{
			
			$data = array('name'=>$request->input('name'),'sender'=>$request->input('sender'),'subject'=>$request->input('subject'),'notes'=>$request->input('message')); 
			$message = view('emails.contact', $data); 		
			$data['to'] = $this->config['cnf_email'];			
			if($this->config['cnf_mail'] =='swift')
			{ 
				Mail::send('user.emails.contact', $data, function ($message) use ($data) {
		    		$message->to($data['to'])->subject($data['subject']);
		    	});	

			}  else {

				$headers  	= 'MIME-Version: 1.0' . "\r\n";
				$headers 	.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers 	.= 'From: '.$request->input('name').' <'.$request->input('sender').'>' . "\r\n";
					//mail($data['to'],$data['subject'], $message, $headers);		
			}


	

			return Redirect::to($request->input('redirect'))->with('message', \SiteHelpers::alert('success','Thank You , Your message has been sent !'));	
				
		} else {
			return Redirect::to($request->input('redirect'))->with('message', \SiteHelpers::alert('error','The following errors occurred'))
			->withErrors($validator)->withInput();
		}		
	}	




	function postProccess( Request $request , $formID )
	{
		//$row = $this->model->find($formID);
		$sql = \DB::table('tb_forms')->where('formID',$formID)->get();
		if(count($sql)<=0)
			return Redirect::back()->with('message', \SiteHelpers::alert('error','Form not Found !'));
		
		$row = $sql[0];
		$configuration = json_decode($row->configuration,true);

		$rules = \FormHelpers::validateForm( $configuration);

		$validator = Validator::make($request->all(), $rules);	
		if ($validator->passes()) {
			$data = \FormHelpers::validatePost($request , $configuration);	
			
			if($row->method =='table')
			{

				\DB::table($row->tablename)->insert($data);
				if($row->redirect !='')
				{
					echo '<script> window.location.href= "'.$row->redirect.'" </script>';
				} else {
					return Redirect::back()->with('message', \SiteHelpers::alert('success',$row->success));	
				}
				

			} else {
				// Send all input into specific email address

				$message = '';
				foreach($configuration as $conf)
				{
					$message .='
						<b>'.$conf['label'].'</b> : '. $request->input($conf['field']).' <br />
					';
				}				
				
				$data			= array('email'=>$row->email,'name'=>$row->name);
				$data['message'] = $message;
				
				$message = view('core.forms.templateforms', $data); 				
				Mail::send('core.forms.templateforms', $data, function ($message) use ($data) {

		    		$message->to($data['email'])->subject('Submited Form :  '. $data['name']);
		    	});
		    
				if($row->redirect !='')
				{
					echo '<script> window.location.href= "'.$row->redirect.'" </script>';
				} else {

					return Redirect::back()->with('message', \SiteHelpers::alert('success',$row->success));	
				}
				

			}

			
		} else {

			//Redirect::back();
			return Redirect::back()->with('message', \SiteHelpers::alert('error','The following errors occurred'))
			->withErrors($validator)->withInput();	

		}	
	
	}

	/**
	 * @param $projects
	 *
	 * @return bool
	 */
	private function isFather($projects)
	{
		return $projects->parent_id == 0;
	}

	/**
	 * @param $listChild
	 *
	 * @return bool
	 */
	private function hasNotChild($listChild)
	{
		return count($listChild) == 0;
	}


}
