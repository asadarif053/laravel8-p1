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

    public function scopeFilter($query, array $filters){
        // the first argument will be passed by Laravel, and what I supply will be the second one
        // if(isset($filters['search'])??false)
        // $query
        //     ->where('title','like', '%'.request('search').'%')
        //     ->orWhere('body','like', '%'.request('search').'%');



        //updated approch; the query builder, thus we canuse multiple filter here; 
        $query->when($filters['search']??false, function($query,$search){
            $query
            ->where('title','like', '%'.$search.'%')
            ->orWhere('body','like', '%'.$search.'%');
        });

        $query->when($filters['author']??false, function($query,$author){
            $query->whereHas('author', fn($query)=>
            $query->where('username',$author)
        );


        });
        

    }
}
