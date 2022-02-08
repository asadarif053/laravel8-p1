<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\YamlFrontMatter\YamlFrontMatter; 
use App\Services\Newsletter;

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
Route::post('/posts/{post:slug}/comments',[PostCommentsController::class,'store']);

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
Route::post('/logout', [SessionController ::class,'destroy'] )->middleware('auth');
Route::get('/login', [SessionController ::class,'create'] )->middleware('guest');
Route::Post('/login', [SessionController ::class,'store'] )->middleware('guest');



Route::get('/test', [PostController::class,'getPosts']);


Route::post('/newsletter',NewsletterController::class);