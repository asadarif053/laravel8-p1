<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{

    public function create(){
        return view('register.create');
    }

    public function store(){
        

        //dd(request());
        $attributes = request()->validate( [
            'name'=>'required',
            'username'=>['required','min:3','max:64',Rule::unique('users','username')],
            'email'=>['required','email','min:3','max:64',Rule::unique('users','email')],
            'password'=>'required'
        ]
        );

        //dd($attributes);
       // $attributes['password']=bcrypt($attributes['password']);

        $user = User::create($attributes);
        auth()->login($user);

        return redirect('/')->with("success","Your account has been created successfully");
    }



}
