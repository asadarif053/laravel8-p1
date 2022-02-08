<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter){

        request()->validate([
            'email'=>'required | email'
        ]);
        $newsletter->subscribe(request('email'));

    
    return redirect('/');
    }
}
