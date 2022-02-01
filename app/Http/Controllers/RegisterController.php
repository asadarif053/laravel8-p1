<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function create(){
        return view('register.create');
    }

    public function store(){
        

        //dd(request());
        $attributes = request()->validate( [
            'name'=>'required',
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]
        );

        //dd($attributes);
       // $attributes['password']=bcrypt($attributes['password']);

        User::create($attributes);


        echo ' aucces';
    }



}
