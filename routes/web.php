<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\MainController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\YamlFrontMatter\YamlFrontMatter; 

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
    DB::listen(function($query){
        logger($query->sql, $query->bindings);
    });
    //$posts= Post::all();

    $posts= Post::latest('id')->with('category','author')->get();

    return view('posts',['posts'=>$posts]);
});
Route::get('/post/{post:slug}', function (Post $post) { //Post::where('slug',$slug)->firstOrFail();

  //ROUTE-MODEL BINDING  
    //1. /post/{post
    //when you finding with the ID 
    //wildcard name and parameter varible name must be same

    //2./post/{post:slug}
    //if wildcard is other than id, you must specify the field name with a colol : everyhting other remain same

    return view('post',['post'=>$post]);
});
Route::get('categories/{category:slug}', function (Category $category) {
    
    return view('posts',['posts'=>$category->posts]); //posts is a FUNCTION defined in Cateory Model
});


Route::get('author/{author:username}', function (User $author) {
    
    return view('posts',['posts'=>$author->posts]); //posts is a FUNCTION defined in Cateory Model
});