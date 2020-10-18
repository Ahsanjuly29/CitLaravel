@extends('frontend.master')
@section('content')


    <!-- About Banner Start -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="about-heading text-center">
                    <h2>Products</h2>
                    <p><a href="{{route('/')}}">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Products</span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Banner End -->
    <!-- Product-item start -->
    <section id="product-grid-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="single category">
                        <h3 class="side-title">Category</h3>
                        <ul class="list-unstyled">
                            @foreach($cats as $cat)
                            <li style="display: block;width: 100%;">
                                <form action="" method="get" style="display: inline-block; width: 80%;" disabled>
                                    <input class="btn btn-block btn-mini" type="submit" value="{{ $cat->category_name}}" disabled>
                                </form>
                                <a href="{{Route('/')}}/shop/{{ $cat->id}}" title="" style="display: inline-block; width: 20%; float: right; text-align:right; ">
                                    <span class="btn pull-right" style="padding-right: 5px;">
                                        &#8826;{{ App\Product::where('category_id', '=', $cat->id)->count('category_id') ?? '' }}&#8827;
                                    </span>
                                </a>
                            </li>
                            @endforeach
                            <li style="display: block;width: 100%; text-align: center" disabled>
                                <form action="#" style="display: inline-block; width: 80%; "disabled>
                                    <input class="btn btn-block btn-mini" type="submit" value="-----"disabled>
                                </form>
                                <a href="#" style="display: inline-block; width: 20%; float: right; text-align:right;" disabled>
                                    <span class="pull-right" style="padding-right: 5px;" disabled>
                                        &#8826;-&#8827;
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form action="{{Route('searchshoplike')}}" method="get">
                        <div class="single category brand-name">
                            <h3 class="side-title">Filter By Color</h3>
                            <ul>

                            @foreach($colors as $color)
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="c{{$color->id}}" type="checkbox" name="color[]" value="{{$color->id}}">
                                        <label for="c{{$color->id}}">{{$color->color_name}}</label>
                                        &#8826;{{ App\ProductColor::where('color_id', '=', $color->id)->count('product_id') ?? '' }}&#8827;
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        {{--<div class="single category brand-name tahsan12">--}}
                            {{--<h3 class="side-title">filter by size</h3>--}}
                            {{--<ul>--}}
                                {{--@foreach($sizes as $size)--}}
                                {{--<li>--}}
                                    {{--<div class="checkbox checkbox-primary">--}}
                                        {{--<input id="s{{$size->id}}" type="checkbox" name="size[]" value="{{$size->id}}">--}}
                                        {{--<label for="s{{$size->id}}">{{$size->size_name}}</label>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <input type="submit" class="btn btn-primary" value="search"  style="display: block; width: 100%; margin-top:10px; " />
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="pro-grid-sidebar col-md-12">
                        <div class="col-md-2 col-sm-4">
                            <div class="grid-type">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="pages text-right">
                                <ul class="pagination">
                                    {{$product->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="latest-main">
                        @foreach($product as $prodct)
                        <div class="product-grid-item" style="padding: 0px !important;">
                            <div class="gallery_product col-md-4 col-sm-4">
                                <div class="featured-product">
                                    <a href="{{route('SingleProduct', $prodct->product_slug)}}">
                                        <img src="{{route('/')}}/assets/images/shop/{{$prodct->product_thumbnail}}" alt="featured-product-img" class="img-responsive">
                                    </a>
                                    <div class="overlay2 text-center">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-random"></i></a>
                                        <a href="{{route('AddToCart',$prodct->id)}}"><i class="fa fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="feat-details feat-details2">
                                    <p>{{$prodct->product_name ?? ''}}</p><span>$ {{$prodct->product_price ?? ''}}</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="clearfix"></div>
                    <div class="pages-bottom">
                        <div class="pages pages2 text-center">
                            <ul class="pagination">
                                <li class=""><a href="#">Pages:</a></li>
                                <ul class="pagination">
                                    {{$product->links()}}
                                </ul>
                            </ul>
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
