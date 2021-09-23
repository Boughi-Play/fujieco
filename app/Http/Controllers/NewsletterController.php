<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request){
        Newsletter::subscribeOrUpdate($request->input('email'), 'newsletter');
        return redirect('/');
        
    }
}
