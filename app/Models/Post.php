<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable=['title','excerpt','body'];
    protected $guarded=['id'];
    protected $with=['category','author'];


    /* set the default route key . by default it is id;
    *public function getRouteKeyName()
    {
        return 'slug';
    }*/

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments()
    {
       return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, array $filters){
        // the first argument will be passed by Laravel, and what I supply will be the second one
        // if(isset($filters['search'])??false)
        // $query
        //     ->where('title','like', '%'.request('search').'%')
        //     ->orWhere('body','like', '%'.request('search').'%');



        //updated approch; the query builder, thus we canuse multiple filter here; 
        $query->when($filters['search']??false, fn($query,$search)=>
            $query->where(fn($query)=>
                $query->where('title','like', '%'.$search.'%')
                    ->orWhere('body','like', '%'.$search.'%')
            )
        );

        $query->when($filters['category']??false, function($query,$category){
       
            $query->whereHas('category', fn($query)=>
            $query->where('slug',$category)
        );
        });
        

        $query->when($filters['author']??false, function($query,$author){
       
            $query->whereHas('author', fn($query)=>
            $query->where('username',$author)
        );


        });
        

    }
}
