<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy(){
       
        auth()->logout();

        return redirect('/')->with('success',"customer logged out successfully");
    }


    public function create(){
       
        return view('login.create');
    }


    public function store(){
        $attributes = request()->validate( [
            'email'=>'required|email',
            'password'=>'required'
        ]
        );

        //

        if(!auth()->attempt($attributes)){
            return back()->withInput()->withErrors(['email'=>'your credetial is wrong']);   
        }

        session()->regenerate();
            return redirect('/')->with('success','Welcome Back!');

        


        
    }
}
