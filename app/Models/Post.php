<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable=['title','excerpt','body'];
    protected $guarded=['id'];


    /* set the default route key . by default it is id;
    *public function getRouteKeyName()
    {
        return 'slug';
    }*/
}
