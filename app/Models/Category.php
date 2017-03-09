<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class category extends Sximo  {
	
	protected $table = 'tb_categories';
	protected $primaryKey = 'category_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_categories.* FROM tb_categories  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_categories.category_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
