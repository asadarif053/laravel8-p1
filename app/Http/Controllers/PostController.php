<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        
        //dd(request(['search']));
            return view('posts.index',[
                'posts'=>Post::latest()->filter(request(['search','category']))->get(),
                //'categories'=>Category::all()
                ]);
    }


    public function show(Post $post){
        return view('posts.view',['post'=>$post]);
    }

    

    protected function getPosts(){
        
        //no longer needed
       // return Post::latest()->filter()->get();

       $users = Post::first();
    print_r($users);
       return $users;


        // $posts= Post::latest();

        //     if(request('search')){
        //         $posts->where('title','like', '%'.request('search').'%')
        //             ->orWhere('body','like', '%'.request('search').'%');
        //     }

        // return $posts->get();    
    }
}
