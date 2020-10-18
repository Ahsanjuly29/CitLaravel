@extends('frontend.master')

@section('content')
    <!-- About Banner Start -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="about-heading text-center">
                    <h2>Blog Details</h2>
                    <p><a href="{{Route('/')}}">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Blog Details</span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Banner End -->

    <!-- Blog-item start -->
    <section id="product-grid-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-4 blog-side-categ">
                    <form>
                        <div class="form-group">
                            <input type="search" class="form-control" placeholder="Type Your Keywords">
                        </div>
                    </form>
                    <div class="single category">
                        <h3 class="side-title">Categories</h3>
                        <ul class="list-unstyled">
                            @foreach($blog_cat as $blogg)
                                <li><a href="{{route('/')}}/blogs/{{$blogg->category_id}}" title="">
                                        {{$blogg->category->category_name}}
                                        <span class="pull-right">{{ App\Blog::where('category_id', '=', $blogg->category_id)->count('category_id') ?? '' }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="popular">
                        <div class="card2">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active" role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Recent</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    @foreach($blog_cat as $blogg)

                                        <div class="row blog-popular-main" style="margin-top: 5px;">
                                            <div class="col-md-4">
                                                <div class="popular-img">
                                                    <img src="{{Route('/')}}/front/images/{{$blogg->f_image}}" alt="popular1" class="img-responsive">
                                                    <div class="popular-overlay">
                                                        <a href="{{Route('blogsingle',$blogg->id)}}"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 popular-intro">
                                                <h3>{{$blogg->title}}</h3>
                                                <span><i class="fa fa-thumbs-o-up"></i> 2.5K Likes </span>
                                                <span><i class="fa fa-comments-o"></i> {{ App\comment::where('blog_id', '=', $blogg->id)->count('blog_id') ?? '' }}Comments</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tags">
                        <h3>Tags</h3>
                        <p>
                            @foreach($blog_cat as $blogg)
                                <a href="{{route('/')}}/blogs/{{$blogg->category_id}}">{{$blogg->category->category_name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row blog-side-bar blog-grid-list blog-details-page">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{Route('/')}}/front/images/{{$blog->f_image}}" alt="blog-img" class="img-responsive">
                                </div>
                                <div class="blog-details">
                                    <h3>{{$blog->title}}</h3>
                                    <p><span><i class="fa fa-user"></i> By: Admin </span>
                                        <b><span><i class="fa fa-user"></i>  2.5k Likes </span>
                                           <span><i class="fa fa-comment"></i> {{ App\comment::where('blog_id', '=', $blog->id)->count('blog_id') ?? '' }} Comments </span></b>
                                    </p>
                                    <p>{{$blog->summary}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 post-comments">
                            <div class="comments-heading">
                                <h3>{{ App\Comment::where('blog_id', '=', $blog->id)->count('blog_id') ?? '' }} Comments</h3>
                            </div>
                            {{--Comments--}}
                        @foreach(App\Comment::where('blog_id',$blog->id)->get() as $comment)
                            <div class="all-comments br-top">
                                <div class="col-md-2 pl0">
                                    <img src="{{Route('/')}}/front/images/{{$comment->user->image}}" alt="coment-img1" class="img-responsive" width="80" style="margin-bottom: 10px; border: 1px solid #494949; padding: 5px;padding-bottom: 0px">
                                </div>
                                <div class="com-md-10">
                                    <h3>{{$comment->user->name}}<span>{{$comment->created_at}}</span></h3>
                                    <p>{{$comment->comments}}</p>
                                    <form action="{{url('reply')}}" method="post">
                                        @csrf
                                        <textarea class="form-control" name="reply" placeholder="Reply" style="border:1px solid #dddddd; color: black; " ></textarea>
                                        <input type="hidden" name="comment_id" value="{{$comment->id}}" style="margin: 10px auto;">
                                        <input type="hidden" name="user_id" value="{{$comment->user_id}}" style="margin: 10px auto;">
                                        <i class="fa fa-reply-all">
                                            <input class="btn btn-primary" type="submit" name="submit" value="reply {{$comment->user->name}}" style="margin:10px; ">
                                        </i>
                                    </form>
                                </div>
                            </div>
                            {{--Reply--}}
                                @foreach(App\CommentReply::where('comment_id',$comment->id)->get() as $reply)
                            <div class="all-comments">
                                <div class="col-md-2 pl0 col-md-offset-1">
                                    <img src="{{Route('/')}}/front/images/{{$reply->user->image}}" alt="coment-img1" class="img-responsive" style="width: 50px;border-radius: 100px;">
                                </div>
                                <div class="com-md-8">
                                    <h3>{{$reply->user->name}} <span>{{$reply->created_at}} </span></h3>
                                    <p>{{$reply->reply}}</p>
                                    <a href="#"><i class="fa fa-reply-all"></i> reply</a>
                                </div>
                            </div>
                        @endforeach
                        @endforeach
                        </div>
                        <div class="clearfix"></div>
                        @if(Auth::check())
                        <div class="reply-comments">
                            <h3>Leave a reply</h3>
                            <form action="{{route('comment.store')}}" method="post">
                                @csrf
                                <div class="reply-form">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" value="{{$blog->id}}" name="blog_id">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="comments" placeholder="Replay"id="message" placeholder="Your Message" maxlength="140" rows="7" style="border:2px solid #aeaeae" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Comment" style="margin: 10px auto;">
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product-item end -->
@endsection

@section('footer_js')
@endsection
