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

    public function scopeFilter($query){
        $query
            ->where('title','like', '%'.request('search').'%')
            ->orWhere('body','like', '%'.request('search').'%');

    }
}
