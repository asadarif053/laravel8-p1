<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [PostController::class,'index']);
Route::get('/post/{post:slug}',[PostController::class,'show']);

/*
Route::get('categories/{category:slug}', function (Category $category) {
    
    return view('posts',[
        'posts'=>$category->posts,
        'categories'=>Category::all()
    ]); 
});
*/


Route::get('author/{author:username}', function (User $author) {
    
    return view('posts.index',[
        'posts'=>$author->posts,
        'categories'=>Category::all()
    ]); 
});



Route::get('/register', [RegisterController::class,'create'] )->middleware('guest');
Route::post('/register', [RegisterController::class,'store'] )->middleware('guest');


Route::get('/test', [PostController::class,'getPosts']);