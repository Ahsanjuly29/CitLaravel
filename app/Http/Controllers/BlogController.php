<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\User;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('backend.blog.bloglist',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return back()->with('message','This Fetcher is Turned of For Security Reason');
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->summary = $request->summary;
        $blog->f_image = $request->f_image;
        $blog->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $blog = Blog::where('id',$blog->id)->first();
        $comments = Comment::where('blog_id',$blog->id)->get();
        return view('backend.blog.singleblog',compact('blog','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return back()->with('message','This Fetcher is Turned of For Security Reason');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        return back()->with('message','This Fetcher is Turned of For Security Reason');
        echo $blog->summary;
    }
}
