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
		$data['new_video_feed'] = DB::table('video')
		->where('status', 1)
		->orderBy('created_at', 'DESC')
		->limit(3)
		->get();

		return view('front.home', compact('data'));
	}
	public function trandictoinal(){
		return view('front/tradictional');
	}
	public function readingArticle($articleSlug){

		return view('front/reading_article');
	}

	public function watch($videoSlug, Request $request)
	{
		$data['video_taget'] = DB::table('video')
		->where('id', $videoSlug)
		->first();
		return view('front/waching_video')->with('data', $data);
	}
   public function	phumaisaActivity(){
	$data['video'] = DB::table('video')
	->select()
	->orderBy('created_at', 'DESC')
	->get();
	return view('front/phumasia_activity')->with('data', $data);
   }
   public function	mayamer_shope_desing(){
	return view('front/myamershop');
   }

}