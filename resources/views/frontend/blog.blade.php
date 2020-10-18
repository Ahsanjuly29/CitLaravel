@extends('frontend.master')
@section('content')

    <!-- About Banner Start -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="about-heading text-center">
                    <h2>Blog</h2>
                    <p><a href="{{Route('/')}}">home</a>
                        <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i>
                        <span>Blog</span>
                    </p>
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
                    <form action="{{Route('searchbloglike')}}" method="get">
                        <div class="form-group">
                            <input type="search" name="blogsearch" class="form-control" placeholder="Type Your Keywords">
                        </div>
                    </form>
                    <div class="single category">
                        <h3 class="side-title">Categories</h3>
                        <ul class="list-unstyled">
                            @foreach($blog_cat as $blogg)
                            <li>
                                <a href="{{Route('/')}}/blogs/{{$blogg->category_id}}" title="">
                                    {{$blogg->category->category_name}}
                                    <span class="pull-right">{{ App\Blog::where('category_id', '=', $blogg->category_id)->count('category_id') ?? '' }}
                                    </span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="pages text-right">
                        <ul class="pagination">
                            {{--$blog_cat->links()--}}
                            {{
                            $blog_cat->appends(Request::all())->links()
                            }}
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
                                    @foreach(App\Blog::orderBy('id', 'DESC')->paginate(3) as $blogg)
                                    <div class="row blog-popular-main">
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
                                            <span><i class="fa fa-comments-o"></i> {{ App\Comment::where('blog_id', '=', $blogg->id)->count('blog_id') ?? '' }}Comments</span>
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
                            <a href="blogs/{{$blogg->category_id}}" style="display: inline-block;">
                                {{$blogg->category->category_name}}
                            </a>
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="pro-grid-sidebar blog-grid-sidebar col-md-12">
                        <div class="col-md-6 col-sm-12 col-md-offset-2">
                            <div class="pages text-right">
                                <ul class="pagination">
                                    {{$blogs->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row blog-side-bar blog-grid-list">
                        @foreach($blogs as $blog)
                        <div class="col-md-12 col-sm-6">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{Route('/')}}/front/images/{{$blog->f_image}}" alt="blog-img" class="img-responsive">
                                    <div class="overlay3">
                                        <h4><i class="fa fa-calendar"></i> {{$blog->created_at}}</h4>
                                        <a href="{{Route('blogsingle',$blog->id)}}"><i class="fa fa-link"></i> </a>
                                        <p><span><i class="fa fa-user"></i> By: Admin </span>
                                            <b><span><i class="fa fa-user"></i>  2.5k Likes </span>
                                                <span><i class="fa fa-comment"></i> {{ App\Comment::where('blog_id', '=', $blog->id)->count('blog_id') ?? '' }} Comments </span></b>
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-details">
                                    <h3>{{$blog->title}}</h3>
                                    <p>{{$blog->summary}}</p>
                                    <a href="{{Route('blogsingle',$blog->id)}}">read more <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                        <div class="pages-bottom">
                            <div class="pages pages2 text-center">
                                <ul class="pagination">
                                    {{$blogs->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product-item end -->
@endsection
@section('footer_js')
@endsection
