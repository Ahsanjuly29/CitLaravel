@extends('frontend.master')

@section('content')
    <!-- About Banner Start -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="about-heading text-center">
                    <h2>About us</h2>
                    <p><a href="{{Route('/')}}/">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>about</span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Banner End -->

    <!-- About Details Start -->
    <section id="about-details">
        <div class="container">
            <div class="row">
                <div class="about-details-main">
                    <div class="col-md-7">
                        <div class="about-img">
                            <img src="{{Route('/')}}/front/images/about-details.jpg" alt="about-img" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="about-detail">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudtion ullamco laboris nisi ut aliquip ex ea comm. Duis aute irure dolor in reprehrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia desnt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                            <p>
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam uptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Details End -->

    <!-- Counter Part Start -->
    <section id="counter" class="counter">
        <div class="main_counter_area">
            <div class="overlay p-y-3">
                <div class="container">
                    <div class="row">
                        <div class="main_counter_content text-center white-text wow fadeInUp">
                            <div class="col-md-2">
                                <div class="single_counter p-y-2 m-t-1">
                                    <h2 class="statistic-counter">261</h2>
                                    <p>cup of tea</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_counter p-y-2 m-t-1">
                                    <h2 class="statistic-counter">718</h2>
                                    <p>product sold</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single_counter p-y-2 m-t-1">
                                    <h2 class="statistic-counter">999</h2>
                                    <p>happy client</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_counter p-y-2 m-t-1">
                                    <h2 class="statistic-counter">369</h2>
                                    <p>total outlets</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single_counter p-y-2 m-t-1">
                                    <h2 class="statistic-counter">209</h2>
                                    <p>award win</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter End -->

    <!-- Designer Part Start -->
    <section id="designer">
        <div class="container">
            <div class="row">
                <div class="heading6 text-center">
                    <h2>our designer</h2>
                </div>
                <div class="designer-main">
                    <div class="col-md-3 col-sm-6">
                        <div class="designer-item">
                            <div class="designer-img">
                                <img src="{{Route('/')}}/front/images/designer1.png" alt="designer1" class="img-responsive">
                                <div class="overlay4 text-center">
                                    <p><a href="#"><i class="fa fa-facebook"></i></a></p>
                                    <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                    <p><a href="#"><i class="fa fa-google-plus"></i></a></p>
                                </div>
                            </div>
                            <div class="designer-details text-center">
                                <h3>Sakeba aney</h3>
                                <p>Graphic designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="designer-item">
                            <div class="designer-img">
                                <img src="{{Route('/')}}/front/images/designer2.png" alt="designer1" class="img-responsive">
                                <div class="overlay4 text-center">
                                    <p><a href="#"><i class="fa fa-facebook"></i></a></p>
                                    <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                    <p><a href="#"><i class="fa fa-google-plus"></i></a></p>
                                </div>
                            </div>
                            <div class="designer-details text-center">
                                <h3>Tahsan Mony</h3>
                                <p>Web designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="designer-item">
                            <div class="designer-img">
                                <img src="{{Route('/')}}/front/images/designer3.png" alt="designer1" class="img-responsive">
                                <div class="overlay4 text-center">
                                    <p><a href="#"><i class="fa fa-facebook"></i></a></p>
                                    <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                    <p><a href="#"><i class="fa fa-google-plus"></i></a></p>
                                </div>
                            </div>
                            <div class="designer-details text-center">
                                <h3>Anamika Jeny</h3>
                                <p>Web developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="designer-item">
                            <div class="designer-img">
                                <img src="{{Route('/')}}/front/images/designer4.png" alt="designer1" class="img-responsive">
                                <div class="overlay4 text-center">
                                    <p><a href="#"><i class="fa fa-facebook"></i></a></p>
                                    <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                    <p><a href="#"><i class="fa fa-google-plus"></i></a></p>
                                </div>
                            </div>
                            <div class="designer-details text-center">
                                <h3>Ishtiaq Jony</h3>
                                <p>graphic designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Designer End -->

@endsection
@section('footer_js')
@endsection
