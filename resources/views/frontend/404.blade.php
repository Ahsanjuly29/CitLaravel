@extends('frontend.master')
@section('content')
    <!-- About Banner Start -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="about-heading text-center">
                    <h2>404 error</h2>
                    <p>
                        <a href="{{Route('/')}}">home</a>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                        <span>404</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Banner End -->

    <!-- 404 part Start -->
    <section id="error-page">
        <div class="container">
            <div class="row">
                <div class="error text-center">
                    <img src="{{Route('/')}}/front/images/404.png" alt="404" class="img-responsive">
                    <p>Oops! The page you are looking for is not established yet.</p>
                    <a href="{{Route('/')}}">Go to Home</a>
                </div>
            </div>
        </div>
    </section>
    <!--404 part End -->
@endsection
