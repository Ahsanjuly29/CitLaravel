@extends('layouts.master')

@section('content')

<!-- my account part Start -->
<section id="account">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="login-account">
                    <h3>login your account</h3>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
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
