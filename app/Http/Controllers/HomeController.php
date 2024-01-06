<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
	protected $navbar = [];
	public function __construct()
	{
		/*$this->navbar['nav_country'] = DB::table('creator_teams')
			->select('slug', 'title', 'logo')
			->get();
		
		$this->navbar['foot_keyword'] = DB::table('keywords')
			->select('slug', 'title_en')
			->get();*/
	
	}
	public function index()
	{
		return view('front.home');
	}
   
	public function readingArticle($articleSlug){

		return view('front/reading_article');
	}

	public function watch($videoSlug)
	{
		return view('front/waching_video');
	}
   public function	phumaisaActivity(){
	return view('front/phumasia_activity');
   }
   public function	mayamer_shope_desing(){
	return view('front/myamershop');
   }

}