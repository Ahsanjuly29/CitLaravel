<?php

namespace App\Http\Controllers;

use Auth;
use App\Blog;
use App\Comment;
use App\CommentReply;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function reply(Request $request){
        $reply = CommentReply::insert([
            'user_id'=>Auth::id(),
            'comment_id'=>$request->comment_id,
            'reply'=>$request->reply,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $comments = Comment::all();
//        return view('backend.blog.singleblog',compact('comments'));
//        $reply = CommentReply::where('comment_id',$blog->id)->get();

//        $blog = Blog::where('id',$blog->id)->first();
//        $comments = Comment::where('blog_id',$blog->id)->get();
//        return view('backend.blog.singleblog',compact('blog','comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Comment::insert([
            'user_id'=>Auth::id(),
            'blog_id'=>$request->blog_id,
            'comments'=>$request->comments,
            'created_at'=>Carbon::now(),
        ]);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
