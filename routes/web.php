<?php

use App\Http\Controllers\SiteOne\SiteOneController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , function() {
       return 'Home , Home';
});*/
// user , profile
/*
Route::get('/user/profile/{id}' , function($id) {
    echo 'user id : ' . $id ;
});
*/
/*
// news , all news , new
Route::get('/news/{id?}' , function($id = null) {
    $news = [1 , 2 , 3 , 6 , 8 ] ;

    if($id){
      echo 'new is : ' . $id ;
    }else{
        echo 'all news : <br>' ;
        foreach($news as $new){
            echo $new . '<br>' ;
         }
    }
});*/


// site 1 / home , about us , contact us
// home
// prefix

Route::prefix('site1')->controller(SiteOneController::class)->group(function(){
    Route::get('/home' , 'home');
    Route::get('/about' ,  'about');
    Route::get('/contact' ,  'contact');
    Route::get('/msg/{id}' ,  'msg');
});





















