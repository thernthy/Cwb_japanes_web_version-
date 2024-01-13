<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any', '.*');

Route::get('/', function () {
    return redirect('/');
});
Route::get('/', 'HomeController@index');
Route::get('rel/{articalName}', 'HomeController@readingArticle');
Route::get('/phumasia-activity', 'HomeController@phumaisaActivity');
Route::get('/trandictoinal', 'HomeController@trandictoinal');
Route::get('watch/{videoSlug}', 'HomeController@watch');
Route::get('/shop-with-impact', 'HomeController@mayamer_shope_desing');
Route::post('/subscription', function(Request $request){
  $emailCheck = DB::table('subscriptions')
  ->select('email')
  ->where('email', $request->email)
  ->first();
  if(!$emailCheck){
      $rqr = DB::table('subscriptions')
        ->insert([
          'email' => $request->email,
        ]);
        if($rqr){
          return response()->json(['Message' => 'Thanks you!']);
        }else{
          return response()->json(['Error'=>'Somthing was wrong!']);
        }
    }else{
      return response()->json(["Error"=>'Your Email has been subscripted!']);
    }
});
Route::get('/welcomepage', function() {
  return view('front/ex');
});
