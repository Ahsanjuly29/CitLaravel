@extends('backend.master')

@section('profile') active @endsection
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
                <div class="col-md-6 col-md-offset-3">
                    <div class="user-profile-panel panel panel-white">
                        <div class="panel-heading">
                            <div class="panel-title">Admin profile</div>
                        </div>
                        <div class="panel-body">
                            @if(session('msg'))
                                <div id="footerjs" class="alert alert-danger alert-dimissible" role="alert">
                                    <h4>{{session('msg')}}</h4>
                                </div>
                            @endif
                            <img src="{{route('/')}}/assets/images/{{Auth::user()->image}}" class="user-profile-image img-circle" alt="">
                            <h4 class="text-center m-t-lg">{{Auth::user()->name}}</h4>
                            <p class="text-center">UI/UX Designer</p>
                            <hr>
                            <ul class="list-unstyled text-center">
                                {{--<li><p><i class="icon-pointer m-r-xs"></i>Melbourne, Australia</p></li>--}}
                                <li><p><i class="icon-envelope-open m-r-xs"></i><a href="#">{{Auth::user()->email}}</a></p></li>
                                <li><p><i class="icon-link m-r-xs"></i><a href="#">www.themeforest.net</a></p></li>
                            </ul>
                            <hr>
                            <a class="btn btn-info btn-inline-block" href="{{route('adminedit')}}"><i class="icon-key m-r-xs"></i>Edit</a>
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
