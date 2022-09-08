<?php



use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){

   return  response('<h1>Hello world</h1>',200)
   ->header('Content-Type','text/plain')
   ->header('foo','bar');

    

});

Route::get('/posts/{id}', function($id){

//   ddd($id); //die  dumpers helpers help in debugging
 return response('post'.$id); 
})->where('id','[0-9]+');

Route::get('/search',function(Request $request){

    return $request->name.''.$request->city;

});