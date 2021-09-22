<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view("backend.blog.table", (compact("blogs")));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $request->validate([
            "path" => "required",
            "date" => 'required',
            "title" => "required",
            "link" => 'required',
        ]);

        $blog->path = $request->file("path")->hasName();
        $request->file("path")->storePublicly("img", "public");


        $blog->date = $request->date;
        $blog->title = $request->title;
        $blog->category = $request->category;
        $blog->link = $request->link;  

        $blog->save();
        return redirect()->route("blog.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view("backend.blog.edit", compact("blog"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            "path" => "required",
            "date" => 'required',
            "title" => "required",
            "link" => 'required',
        ]);

        Storage::disk("public")->delete("img/"  .  $blog->path);
        $blog->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");

        $blog->date = $request->date;
        $blog->title = $request->title;
        $blog->category = $request->category;
        $blog->link = $request->link;  

        $blog->save();
        return redirect()->route("blog.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        Storage::disk("public")->delete("img/"  .  $blog->path);
        $blog->delete();
        return redirect()->back();

    }
}
