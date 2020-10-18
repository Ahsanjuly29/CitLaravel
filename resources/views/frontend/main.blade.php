@extends('frontend.master')

@section('content')

<!-- Banner Part Start -->
   <section id="banner">
      <i class="fa fa-chevron-left prv-arrow"></i>
      <i class="fa fa-chevron-right nxt-arrow"></i>
       <div class="banner-slider">
           <div class="banner-img" style="background: url( {{url('/front/')}}/images/banner1.jpg) no-repeat center; background-size: cover">
               <div class="container">
                   <div class="row">
                       <div class="col-md-5">
                           <div class="banner-content">
                           <h1>2017</h1>
                           <h2>Trendy Design</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                           <a href="#">View More</a>
                           <a class="pur" href="#">Purchase</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="banner-img" style="background: url({{url('/front/')}}/images/banner2.jpg) no-repeat center; background-size: cover">
               <div class="container">
                   <div class="row">
                       <div class="col-md-5">
                           <div class="banner-content">
                           <h1>2017</h1>
                           <h2>Trendy Design</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                           <a href="#">View More</a>
                           <a class="pur" href="#">Purchase</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="banner-img" style="background: url({{url('/front/')}}/images/banner3.jpg) no-repeat center; background-size: cover">
               <div class="container">
                   <div class="row">
                       <div class="col-md-5">
                           <div class="banner-content">
                           <h1>2017</h1>
                           <h2>Trendy Design</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                           <a href="#">View More</a>
                           <a class="pur" href="#">Purchase</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="banner-img" style="background: url({{url('/front/')}}/images/banner4.jpg) no-repeat center; background-size: cover">
               <div class="container">
                   <div class="row">
                       <div class="col-md-5">
                           <div class="banner-content">
                           <h1>2017</h1>
                           <h2>Trendy Design</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                           <a href="#">View More</a>
                           <a class="pur" href="#">Purchase</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Banner Part End -->
   
   <!-- Service Part Start -->
   <section id="service">
       <div class="container">
           <div class="row">
               <div class="service-main">
                   <div class="col-md-4">
                       <div class="service-item text-center">
                           <h3><i class="fa fa-truck rotat"></i> Free Shipping</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                   </div>
                   <div class="col-md-4 service-mid">
                       <div class="service-item text-center">
                           <h3><i class="fa fa-support"></i> 24/7 Support</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="service-item text-center">
                           <h3><i class="fa fa-money"></i> Cashback</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Service Part End -->
   
   <!-- Newest Part Start -->
   <section id="newest">
       <div class="container">
           <div class="row">
               <div class="newest-main">
                   <div class="col-md-4 col-sm-4">
                       <div class="newest-item">
                           <img src="{{asset('front/images/newest1.jpg')}}" alt="newest1" class="img-responsive">
                           <div class="overlay1 text-center">
                               <h2>new</h2>
                               <h3>Mens Collection</h3>
                               <a href="#">shop now</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-4">
                       <div class="newest-item">
                           <img src="{{asset('front/images/newest2.jpg')}}" alt="newest1" class="img-responsive">
                           <div class="overlay1 text-center">
                               <h2>2017</h2>
                               <h3>women's Collection</h3>
                               <a href="#">shop now</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-4">
                       <div class="newest-item">
                           <img src="{{asset('front/images/newest3.jpg')}}" alt="newest1" class="img-responsive">
                           <div class="overlay1 text-center">
                               <h2>best</h2>
                               <h3>Bridal Collection</h3>
                               <a href="#">shop now</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Newest Part End -->
   
   <!-- Featured Part Start -->
   <section id="featured">
       <div class="container">
           <div class="row">
               <div class="featured-main">
                   <div class="heading text-center">
                       <h2>featured Products</h2>
                   </div>
                   <div class="featured-filter">
                       <div class="text-center">
                           <button class="btn btn-default active filter-button" data-filter="all">All</button>
                           @foreach($cats as $cat)
                            <button class="btn btn-default filter-button" data-filter="{{ $cat->id}}">{{ $cat->category_name}}</button>
                           @endforeach
                        </div>
                       @foreach($cats as $cat)
                           @foreach(App\Product::where('category_id',$cat->id)->paginate(5) as $item)
                            <div class="gallery_product col-md-3 col-sm-4 filter {{ $cat->id }}">
                                <div class="featured-product">
                                    <a href="{{route('SingleProduct', $item->product_slug)}}">
                                        <img src="{{url('/')}}/assets/images/shop/{{$item->product_thumbnail}}" alt="featured-product-img" class="img-responsive">
                                    </a>
                                    <div class="overlay2 text-center">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-random"></i></a>
                                        <a href="{{route('AddToCart',$item->id)}}"><i class="fa fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="feat-details">
                                    <p>{{$item->product_name ?? ''}}</p><span>$ {{$item->product_price ?? ''}}</span>
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
                           @endforeach
                       @endforeach
                   </div>
               </div>
           </div>
       </div>
       <div style="margin: 0 auto;text-align: center;">
           {{App\Product::where('category_id',$cat->id ?? '')->paginate(4)->links() }}
       </div>
   </section>
   <!-- Featured Part End -->
   
   <!-- Upcoming Part Start -->
   <section id="upcoming">
       <div class="upcoming-bg">
           <div class="container">
               <div class="row">
                   <div class="upcoming-main">
                       <div class="col-md-6">
                           <div class="upcoming-product-img">
                               <img src="{{url('/front/')}}/images/macbook.png" alt="macbook" class="img-responsive">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="upcoming-prouct-details">
                               <h3>New Product</h3>
                               <h2>Microsoft Surface Pro</h2>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loremsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It hasived not only five centuries, with the release of Letraset sheets.</p>
                           </div>
                           <div class="luanch">
                                <h2>launch in</h2>
                                <div class="coundown_res">
                                    <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="day"></h2>
                                            <p>days</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="hour"></h2>
                                            <p>hours</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="month"></h2>
                                            <p>mins</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="second"></h2>
                                            <p>sec</p>
                                         </div>
                                      </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Upcoming Part End -->
   
   <!-- Latest Part Start -->
   <section id="latest">
      <i class="fa fa-chevron-left prv-arrow2"></i>
      <i class="fa fa-chevron-right nxt-arrow2"></i>
       <div class="container">
           <div class="row">
               <div class="latest-main">
                    <div class="heading2 text-center">
                       <h2>latest Products</h2>
                   </div>
                   <div class="latest-item">
                       @foreach(App\Product::orderBy('id', 'desc')->limit(5)->get() as $item)
                       <div class="gallery_product col-md-3">
                            <div class="featured-product">
                                <a href="{{route('SingleProduct', $item->id)}}">
                                    <img src="{{url('/')}}/assets/images/shop/{{$item->product_thumbnail}}" alt="featured-product-img" class="img-responsive">
                                </a>

                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a>
                                    <a href="{{route('AddToCart',$item->id)}}"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>{{$item->id}}</p><span>$ {{$item->product_price}}</span>
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
                       @endforeach
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Latest Part End -->
   
   <!-- Testimonial Part Start -->
   <section  id="testimonial">
      <div class="heading3 text-center">
          <h2>testimonial</h2>
      </div>
       <div class="testimonial-bg">
          <i class="fa fa-chevron-left prv-arrow3"></i>
           <i class="fa fa-chevron-right nxt-arrow3"></i>
           <div class="container">
               <div class="row">
                   <div class="testimonial-main">
                       <div class="col-md-6">
                           <div class="testimonial-item">
                                <div class="col-md-3 test-img">
                                    <img src="{{url('/front/')}}/images/testimonial1.png" alt="testimonial-img" class="img-responsive">
                                </div>
                                <div class="col-md-9 test-details">
                                    <h2>Shahin Alom</h2>
                                    <h3>Sketch Artist</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                    <h4>Shahin Alom</h4>
                                </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="testimonial-item">
                                <div class="col-md-3 test-img">
                                    <img src="{{url('/front/')}}/images/testimonial2.png" alt="testimonial-img" class="img-responsive">
                                </div>
                                <div class="col-md-9 test-details">
                                    <h2>Mahadi Tahsan</h2>
                                    <h3>Software Developer</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                    <h4>mahadi tahsan</h4>
                                </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="testimonial-item">
                                <div class="col-md-3 test-img">
                                    <img src="{{url('/front/')}}/images/testimonial1.png" alt="testimonial-img" class="img-responsive">
                                </div>
                                <div class="col-md-9 test-details">
                                    <h2>Shohan Hossain</h2>
                                    <h3>Software Developer</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                    <h4>Shohan Hossain</h4>
                                </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="testimonial-item">
                                <div class="col-md-3 test-img">
                                    <img src="{{url('/front/')}}/images/testimonial2.png" alt="testimonial-img" class="img-responsive">
                                </div>
                                <div class="col-md-9 test-details">
                                    <h2>Sujon Saha</h2>
                                    <h3>Graphic Designer</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                    <h4>Aminul Islam</h4>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Testimonial Part End -->
   
   <!-- Blog Part Start -->
   <section id="blog">
       <div class="container">
           <div class="row">
               <div class="heading4 text-center">
                   <h2>our blog</h2>
               </div>
               <div class="blog-main">
                   @foreach(App\Blog::orderBy('id', 'desc')->limit(3)->get() as $blog)
                   <div class="col-md-4 col-sm-4">
                       <div class="blog-item">
                           <div class="blog-img">
                               <img src="{{url('/front/')}}/images/{{$blog->f_image}}" alt="blog-img" class="img-responsive">
                                   <div class="overlay3">
                                        <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                        <a href="{{Route('blogsingle',$blog->id)}}"><i class="fa fa-link"></i></a>
                                        <p>
                                           <span><i class="fa fa-user"></i> By: Admin </span>
                                           <span><i class="fa fa-user"></i>  2.5k Likes </span>
                                           <span><i class="fa fa-comment"></i> {{ App\Comment::where('blog_id', '=', $blog->id)->count('blog_id') ?? '' }} Comments </span>
                                        <p>
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
               </div>
           </div>
       </div>
   </section>
   <!-- Blog Part End -->
@endsection
