<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\MainController;
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

        // $posts =  array_map(function ($file){
        //     $document = YamlFrontMatter::parseFile($file);
        //     return new Post(
        //         $document->title,
        //         $document->excerpt,
        //         $document->date,
        //         $document->slug,
        //         $document->body() 
        //     );
        // },$files);

        $posts= Post::all();

    return view('posts',['posts'=>$posts]);
});
//Route::get('/test',[MainController::class,'testing']);
Route::get('/post/{pm}', function ($slug) {
    //return ["foo" => "bar"];
    //
    $post = Post::find($slug);
    
    return view('post',['post'=>$post]);

})->where('pm','[A-z_\-]+');

