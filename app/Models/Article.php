<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Article extends Sximo
{

    protected $table = 'tb_articles';
    protected $primaryKey = 'id';

    public function __construct()
    {
        parent::__construct();

    }

    public static function querySelect(  ){

		return "  SELECT tb_articles.* FROM tb_articles  ";
	}

	public static function queryWhere(  ){

		return "  WHERE tb_articles.id IS NOT NULL ";
	}

	public static function queryGroup(){
		return "  ";
	}
}
