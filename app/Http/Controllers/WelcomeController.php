<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Blog;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $video = Video::all();
        $blog = Blog::all();

        return view("welcome", compact('video','blog'));
    }


}
