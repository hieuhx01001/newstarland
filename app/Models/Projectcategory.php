<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class projectcategory extends Sximo  {
	
	protected $table = 'tb_project_categories';
	protected $primaryKey = 'category_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_project_categories.* FROM tb_project_categories  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_project_categories.category_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
