@extends('layouts.master')

@section('content')
<!-- my account part Start -->
<section id="account">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login-account">
                    <h3>login your account</h3>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <a class="btn btn-primary" href="{{route('facebook')}}" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-danger" href="{{route('google')}}" target="_blank"><i class="fa fa-google"></i></a>
                            <a class="btn" href="{{route('redirectToProvider')}}" style="background: #6c757d !important; color: #fff;" target="_blank"><i class="fa fa-github"></i></a>
                            <a class="btn btn-info" href="{{route('redirectToProvider')}}" target="_blank"><i class="fa fa-twitter"></i></a>
                            <fb:login-button
                                scope="public_profile,email"
                                onlogin="checkLoginState();">
                            </fb:login-button>
                            <script>
                                function checkLoginState() {
                                    FB.getLoginStatus(function(response) {
                                        statusChangeCallback(response);
                                    });
                                }
                            </script>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="tahsan3">
                            <div class="checkbox chek2 checkbox-success check33">
                                <input id="checkbox111" type="checkbox">
                                <label for="checkbox111">Remember me</label>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="procd">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="register">
                    <h3>Register Now <a href="#">(If don’t have any account)</a></h3>
                    table
                    {{--<form  action="{{ route('register') }}" method="POST">--}}
                        {{--@csrf--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6 login-account">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">--}}
                                    {{--@error('name')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@enderror--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6 login-account">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">--}}

                                    {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@enderror--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6 login-account">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">--}}

                                    {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@enderror--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6 login-account">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="tahsan3 tahsan5">--}}
                            {{--<div class="checkbox chek2 checkbox-success check33">--}}
                                {{--<input id="checkbox113" type="checkbox">--}}
                                {{--<label for="checkbox113"> I accept all the term and conditions, including privacy policy</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="register-now">--}}
                            {{--<div class="procd">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Register') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account part End -->

<!-- Brand Start -->
<section id="brand">
    <i class="fa fa-chevron-left prv-arrow4"></i>
    <i class="fa fa-chevron-right nxt-arrow4"></i>
    <div class="container">
        <div class="row">
            <div class="brand-slider">
                <div class="col-md-2">
                    <a href="#">
                        <div class="brand-item">
                            <img src="{{asset('front/images/brand2.png')}}" alt="brand" class="img-responsive">
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <div class="brand-item">
                            <img src="{{asset('front/images/brand1.png')}}" alt="brand" class="img-responsive">
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <div class="brand-item">
                            <img src="{{asset('front/images/brand3.png')}}" alt="brand" class="img-responsive">
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <div class="brand-item">
                            <img src="{{asset('front/images/brand4.png')}}" alt="brand" class="img-responsive">
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <div class="brand-item">
                            <img src="{{asset('front/images/brand5.png')}}" alt="brand" class="img-responsive">
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <div class="brand-item">
                            <img src="{{asset('front/images/brand3.png')}}" alt="brand" class="img-responsive">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Brand End -->
@endsection
