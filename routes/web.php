<?php
//use App\Models\Post;
use App\Models\Post;
use App\Models\User;

//
//////use Illuminate\Support\Facades\Route;
////
/////*
////|--------------------------------------------------------------------------
////| Web Routes
////|--------------------------------------------------------------------------
////|
////| Here is where you can register web routes for your application. These
////| routes are loaded by the RouteServiceProvider within a group which
////| contains the "web" middleware group. Now create something great!
////|
////*/
////////
//////Route::get('/', function () {
//////    return view('welcome');
//////});
////Route::get('/',function (){
////    return view('welcome');
////});
////
////Route::get('/',function () {
////
////    return ("hi leence");
////});
////
////Route::get('/about',function (){
////    return("HI...About!");
////});
////
////Route::get('/contact',function (){
////    return("HI...contact!");
////});
////
////Route::get('/post/{id}',function ($id)
////{
////    return 'This is post number'.$id. 'Edwin';
////});
////
////Route::get('admin/post/example',array('as'=>'admin.home',function(){
////
////    $url=Route('admin.home');
////    return "this url is".$url;
////}));
//use Illuminate\Support\Facades\DB;
//
//Route::get('/insert',function (){
//   DB::insert('insert into posts(title,body )values(?,?)',['PHP with laravel','Laravel is the best thing that happened to php']);
//});
//Route::get('/insert',function (){
//    DB::insert('insert into posts(title,body )values(?,?)',['Wambua','Loves coding with laravel inf php']);
//});
//
//Route::get('/read',function (){
//
//$results=DB::select('select * from posts where id =?',[1]);
//
//foreach ($results as $post)
//{
//    return $post->title;
//}
//
//});
//DATABASE QUERIES
//Route::get('/update',function(){
//
//    $updated=DB::update('update posts set title="update title"where id=?',[1]);
//
//    return $updated;
//});
//
//Route::get('/delete',function(){
//
//    $deleted=DB::delete('delete from posts where id=?',[1]);
//
//    return $deleted;
//
//});
//
//
//
////    return view('welcome');
////    Route::get('/post','PostController@index')
////});
//
////Route::get('/post/{id}','App\Http\Controllers\PostController@index');
//
//Route::resource('posts','App\Http\Controllers\PostController');
//
//Route::get('/contact','\App\Http\Controllers\PostController@contact');
//
//Route::get('post/{id}/{name}/{password}','App\Http\Controllers\PostController@show_post');
//
//ELOQUENT
//READING IN ORM
//Route::get('/read',function(){
//$posts=Post::all();
//
//foreach ($posts as $post)
//{
//    return $post->title;
//}
//});
//Route::get('/find1',function (){
//   $post=Post::find(1);
//   return $post->title;});
    //return Post::where(id,'<',10)->firstOrFail();


////READING /FINDING WITH CONSTRAINTS
//Route::get('/find',function (){
//    return Post::find(5)->orderBy('id','desc')->take(1)->get();
//    //return Post::where(id,'<',10)->firstOrFail();
//});


//Route::get('/findwhere',function (){
//
//    $posts=Post::where('id', 5);
//    return $posts;
//
//});
//Route::get('/update',function(){
//   Post::where('id',5)->where('is_admin',0)->update(['title'=>'Leence Lidonde','body'=>'Loves coding']);
//});
//
//Route::get('/delete',function (){
//    $post=Post::find(4);
//    $post->delete();
//});
//Route::get('/delete2',function(){
//    Post::destroy(4);
//});
//Route::get('/delete3',function (){
//    Post::destroy([4,5]);
//});
//Route::get('/softDeletes',function (){
//Post::find(2)->delete();
//});
//Route::get('/read/softDeletes',function(){
//   $post=Post::find(2);
//   return $post;
    //$post=Post::withTrashed()->where('id',2)->get();
//$post=Post::withTrashed()->where('id',1)->get();
//return $post;
//});
//Route::get('/read/softDeletes',function(){
//  $post=Post::onlyTrashed()->where('title',0)->get();
//  return $post;
//});
//Route::get('/restore',function(){
//   Post::withTrashed()->where('title',0)->get();
//});
//Route::get('/forcedelete',function(){
//   Post::withTrashed()->where('title',0)->forceDelete();
//});
//RELATIONSHIPS
//ONE TO ONE RELATIONSHIP
//Route::get('/user/{id}/post',function ($id){
//     return Post::find($id)->title;
//
//});
//Route::get('/post/{id}/user',function($id){
//    return Post::find($id)->body;
//});

//ONE TO MANY RELATIONSHIP
Route::get('/posts',function (){
    $user = user::find(3);
    foreach($user->posts as $post)
    {//return $post->title;
      echo $post->title;
    }
});



