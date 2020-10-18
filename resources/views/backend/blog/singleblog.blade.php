@extends('backend.master')

@section('blogactive') active @endsection
@section('bloglist') bg-primary @endsection
@section('content')
    <div class="page-inner">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Profile</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3">
                    <div class="user-profile-panel panel panel-white">
                        <div class="panel-heading">
                            <div class="panel-title">User profile</div>
                        </div>
                        <div class="panel-body">
                            <img src="{{route('/')}}/assets/images/avatar2.png" class="user-profile-image img-circle" alt="">
                            <h4 class="text-center m-t-lg">{{Auth::user()->name}}</h4>
                            <p class="text-center">UI/UX Designer</p>
                            <hr>
                            <ul class="list-unstyled text-center">
                                {{--<li><p><i class="icon-pointer m-r-xs"></i>Melbourne, Australia</p></li>--}}
                                <li><p><i class="icon-envelope-open m-r-xs"></i><a href="#">{{Auth::user()->email}}</a></p></li>
                                <li><p><i class="icon-link m-r-xs"></i><a href="#">www.themeforest.net</a></p></li>
                            </ul>
                            <hr>
                            <button class="btn btn-info btn-block"><i class="icon-plus m-r-xs"></i>Follow</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    {{--<div class="panel panel-white">--}}
                        {{--<div class="panel-body">--}}
                            {{--<div class="post">--}}
                                {{--<textarea class="form-control" placeholder="Post" rows="4=6"></textarea>--}}
                                {{--<div class="post-options">--}}
                                    {{--<a href="#"><i class="icon-camera"></i></a>--}}
                                    {{--<a href="#"><i class="icon-camcorder"></i></a>--}}
                                    {{--<a href="#"><i class="icon-music-tone-alt"></i></a>--}}
                                    {{--<a href="#"><i class="icon-link"></i></a>--}}
                                    {{--<a href="#"><i class="icon-microphone"></i></a>--}}
                                    {{--<button class="btn btn-default pull-right">Post</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="profile-timeline">
                        <ul class="list-unstyled">
                            <li class="timeline-item">
                                <div class="panel panel-white">
                                    <div class="panel-body">
                                        <div class="timeline-item-header">
                                            <img src="{{route('/')}}/assets/images/avatar2.png" alt="">
                                            <p>{{$blog->title}}</p>
                                            <small>{{$blog->created_at}}</small>
                                        </div>
                                        <div class="timeline-item-post">
                                            <p>{{$blog->summary}}</p>
                                            <img src="{{route('/')}}/assets/images/post-image.jpeg" alt="">
                                            <div class="timeline-options">
                                                <a href="#"><i class="icon-like"></i> Like (14)</a>
                                                <a href="#"><i class="icon-bubble"></i> Comment (1)</a>
                                                <a href="#"><i class="icon-share"></i> Share (5)</a>
                                            </div>
                                            @foreach($comments as $comment)
                                            <div class="timeline-comment">
                                                <div class="timeline-comment-header">
                                                    <img src="{{route('/')}}/assets/images/avatar5.png" alt="">
                                                    <p>{{$comment->user->name}}
                                                        <small>{{$comment->created_at}}</small>
                                                    </p>
{{--                                                    {{ucfirst(App\User::findOrFail($comment->user_id)->name)}}--}}
                                                </div>
                                                <p class="timeline-comment-text">
                                                    {{$comment->comments}}
                                                </p>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <hr/>
                                                    @foreach(App\CommentReply::where('comment_id',$comment->id)->get() as $reply)
                                                    <div class="bg-light" style="padding: 10px 0px 0px 10px;">
                                                        <div class="timeline-comment-header">
                                                            <img src="{{route('/')}}/assets/images/avatar5.png" alt="">
                                                            <p>{{$reply->user->name}}
                                                                <small>{{$reply->created_at}}</small>
                                                            </p>
                                                            {{--{{ucfirst(App\User::findOrFail($reply->user_id)->name)}}--}}
                                                        </div>
                                                        <p class="timeline-comment-text">
                                                            {{$reply->reply}}
                                                        </p><hr/>
                                                    </div>
                                                    @endforeach
                                                <form action="{{url('reply')}}" method="post">
                                                    @csrf
                                                    <textarea class="form-control" name="reply" placeholder="Reply" style="border:1px solid #dddddd" ></textarea>
                                                    <input type="hidden" name="comment_id" value="{{$comment->id}}" style="margin: 10px auto;">
                                                    <input type="hidden" name="user_id" value="{{$comment->user_id}}" style="margin: 10px auto;">
                                                    <input type="submit" name="submit" value="reply {{$comment->user->name}}" style="margin: 10px auto;">
                                                </form>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div>
                                                <form action="{{route('comment.store')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{$blog->id}}" name="blog_id">
                                                    <textarea class="form-control" style="border:2px solid #aeaeae" name="comments" placeholder="Replay"></textarea>
                                                    <input type="submit" name="submit" value="Comment" style="margin: 10px auto;">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <div class="panel-title">Team</div>
                        </div>
                        <div class="panel-body">
                            <div class="team">
                                <div class="team-member">
                                    <div class="online on"></div>
                                    <img src="{{route('/')}}/assets/images/avatar1.png" alt="">
                                </div>
                                <div class="team-member">
                                    <div class="online off"></div>
                                    <img src="{{route('/')}}/assets/images/avatar2.png" alt="">
                                </div>
                                <div class="team-member">
                                    <div class="online on"></div>
                                    <img src="{{route('/')}}/assets/images/avatar3.png" alt="">
                                </div>
                                <div class="team-member">
                                    <div class="online on"></div>
                                    <img src="{{route('/')}}/assets/images/avatar5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <div class="panel-title">Skills</div>
                        </div>
                        <div class="panel-body">
                            <p>HTML5</p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div>
                            </div>
                            <p>PHP</p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                </div>
                            </div>
                            <p>Javascript</p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-footer">
            <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
        </div>
    </div><!-- Page Inner -->

@endsection
@section('footer_js')

@endsection
