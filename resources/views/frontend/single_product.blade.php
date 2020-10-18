@extends('frontend.master')

@section('header_css')
    <link rel="stylesheet" href="{{url('/')}}/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/front/css/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/front/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{url('/')}}/front/css/jQuery.fancybox.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/')}}/front/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/front/css/media.css">
    <style>
        /*showiing review*/
        .rating1 {
            unicode-bidi: bidi-override;
            color: #c5c5c5;
            font-size: 25px;
            height: 25px;
            width: 100px;
            /*margin: 0 auto;*/
            position: relative;
            padding: 0;
            text-shadow: 0px 1px 0 #a2a2a2;
        }
        .rating-upper {
            color: #e7711b;
            padding: 0;
            position: absolute;
            z-index: 1;
            display: flex;
            top: 0;
            left: 0;
            overflow: hidden;
        }
        .rating-lower {
            padding: 0;
            display: flex;
            z-index: 0;
        }
        /*giving review*/
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
        fieldset, label { margin: 0; padding: 0; }
        h1 { font-size: 1.5em; margin: 10px; }
        /****** Style Star Rating Widget *****/
        .rating {
            border: none;
            float: left;
        }
        .rating > input { display: none; }
        .rating > label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }
        .rating > .half:before {
            content: "\f089";
            position: absolute;
        }
        .rating > label {
            color: #ddd;
            float: right;
        }
        /***** CSS Magic to Highlight Stars on Hover *****/
        .rating > input:checked ~ label, /* show gold star when clicked */
        .rating:not(:checked) > label:hover, /* hover current star */
        .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

        .rating > input:checked + label:hover, /* hover current star when changing rating */
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
        .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }
    </style>
@endsection
@section('content')

   <!-- About Banner Start -->
   <section id="about">
       <div class="container">
           <div class="row">
               <div class="about-heading text-center">
                   <h2>Product Details</h2>
                   <p><a href="{{route('/')}}">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Product Details</span></p>
               </div>
           </div>
       </div>
   </section>
   <!-- About Banner End -->

   <!-- Product Details Part start -->
   <section id="details-of-product">
       <div class="container">
           <div class="row">
               <div class="col-md-5 tahsan2">
                   <div class="xzoom-container">
                      <img class="xzoom" id="xzoom-default"
                           src="{{url('/')}}/assets/images/shop/{{$product->product_thumbnail ?? 'N/A'}}"
                           xoriginal="{{url('/')}}/assets/images/shop/{{ $product->product_thumbnail ?? 'N/A'}}"
                           alt="{{url('/')}}/assets/images/shop/{{ $product->product_thumbnail ?? 'N/A'}}"
                           width="250px" style="margin-bottom: 15px;"/>

                        <div class="xzoom-thumbs">
                            @foreach($images as $image)
                                <a href="{{url('/')}}/assets/images/shop/multiple/{{$image->image_name ?? 'N/A'}}">
                                    <img class="xzoom-gallery" width="80"
                                         src="{{url('/')}}/assets/images/shop/multiple/{{$image->image_name ?? 'N/A'}}"
                                         xpreview="{{url('/')}}/assets/images/shop/multiple/{{$image->image_name ?? 'N/A'}}"
                                         alt="{{url('/')}}/assets/images/shop/multiple/{{$image->image_name ?? 'N/A'}}"/>
                                </a>
                            @endforeach
                        </div>
                    </div>
               </div>
               <div class="details-product-item col-md-7">
                   <div class="product-details">
                       <div>
                          <h3>{{ $product->product_name }}</h3>
                          <h4>
                              <div class="rating1">
                                  <div class="rating-upper" style="width: {{$trating *20 }}%">
                                      <span>★</span>
                                      <span>★</span>
                                      <span>★</span>
                                      <span>★</span>
                                      <span>★</span>
                                  </div>
                                  <div class="rating-lower">
                                      <span>★</span>
                                      <span>★</span>
                                      <span>★</span>
                                      <span>★</span>
                                      <span>★</span>
                                  </div>
                              </div>

                          <span style="font-size:13px;" >( {{$count}} Reviews)</span>
                          </h4>
                          <h5 style="width: 100px;">price: <span>$ {{$product->product_price}}</span></h5>
                          <p>{{ $product->product_summary}}</p>
                       </div>
                   </div>
                   <div class="color-select category">
                      <div class="checkbox chek2 checkbox-success check22">
                           <ul>
                              <li><span>Color</span></li>
                               @foreach(json_decode($product->product_color) as $color)

                               <li>
                                    <input type="radio" name="color" value="{{ucfirst(App\Color::findOrFail($color)->id)}}">&nbsp;{{ucfirst(App\Color::findOrFail($color)->color_name)}}

                               </li>
                               @endforeach
                           </ul>
                        </div>
                        <div class="checkbox chek2 checkbox-success check33">
                          <ul>
                              <li><span>Size</span></li>
                              @if($product->product_size != 'null' and $product->product_size != '' )
                                  @foreach(json_decode($product->product_size) as $size)
                                  <li class="alert-block font-weight-bold">
                                    <input type="radio" name="size" class="text-capitalize" value="{{$size}}">&nbsp;{{$size}}
                                  </li>
                                  @endforeach
                              @else
                                  <li>
                                     N/A
                                  </li>
                              @endif
                          </ul>
                        </div>
                   </div>
                   <div class="quantity">
                       <div class="handle-counter" id="handleCounter">
                       <div class="quan-head">
                          <h3>Quantity :</h3>
                      </div>
                        <div class="input">
                            <input type="text" value="1">
                        </div>
                        <div class="click">
                            <button class="counter-plus btn btn-primary">+</button>
                            <button class="counter-minus btn btn-primary">-</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                   </div>
                   <div class="add-wishlist">
                       <a href="#"><i class="fa fa-heart"></i></a>
                       <a href="#"><i class="fa fa-random"></i></a>
                       <a href="#"><i class="fa fa-shopping-basket"></i></a>
                   </div>
                   <div class="code-cate">
                       <p>Code<a href="#">: {{ $product->product_code}}</a></p>
                       <p>Category<a href="#" class="tahsan3">: {{ $product->category->category_name}}</a></p>
                       <p>Tags<a href="#" class="tahsan5">: {{ $product->product_tags}}</a></p>

                   </div>
                   <div class="share">
                    <h6>Share:</h6>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-behance"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-pinterest-p"></i></a>
                  </div>
               </div>
           </div>
       </div>
   </section>
  <!-- product details end -->

<!-- Product Discription Part start -->
   <section id="discription">
       <div class="container">
           <div class="">
               <div class="">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                    <li><a href="#">|</a></li>
                    <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                    </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="profile" style="margin: 0 auto;">
                        <form action="{{route('rating')}}" method="post">
                            @csrf
                            <fieldset class="rating" style="display:block; margin: 10px auto;">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                            <textarea name="review" class="form-control my-editor ">
                            </textarea>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input name="submit" class="btn btn-danger" type="submit" value="Submit" style="display:block;margin: 10px auto;">
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="home">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occacat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
                        <p>natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explibo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                    </div>
                </div>
               </div>
           </div>
       </div>
   </section>
   <!-- product discription end -->
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

@endsection

@section('footer_js')
    <script src="{{url('/')}}/js/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="{{url('/')}}/js/jquery.fancybox.pack.js"></script>
    <script src="{{url('/')}}/front/js/xzoom.min.js"></script>
    <script src="{{url('/')}}/front/js/setup.js"></script>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }
                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };
        tinymce.init(editor_config);
    </script>
@endsection












