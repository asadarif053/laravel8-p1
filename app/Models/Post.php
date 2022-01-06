<?php

Namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter; 


class Post{

    public $title,$date,$body,$excerpt,$slug;

    public function __construct($title,$excerpt,$date,$slug,$body){
        $this->title=$title;
        $this->excerpt=$excerpt;
        $this->date=$date;
        $this->slug=$slug;
        $this->body= $body;
    }



    public static function all(){    
        
        //return cache()->rememberForever('post.all',function(){
            return collect(File::files(resource_path('posts')))
            ->map(function($file){
                return YamlFrontMatter::parseFile($file);
            })
            ->map(function($document){
                return new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->slug,
                    $document->body() 
                );
            })
            ->sortByDesc('date');
        //});
        


         /*$files = File::files(resource_path('posts'));
        return  array_map(fn($file)=>
            YamlFrontMatter::parseFile($file)
        ,$files);*/
    }

    public static function find($slug){
        $post =  static::all()->firstWhere('slug',$slug);
        if(!$post) throw new ModelNotFoundException();

        return $post;
       
        
        //return YamlFrontMatter::parseFile(resource_path('posts').'/'.$slug.'.html');       
    }

}