@extends('backend.master')
@section('content')
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-4 center">
                    <div class="panel panel-white" id="js-alerts">
                        <div class="panel-body">
                            <h1 class="text-xxl text-danger text-center"><img src="no.jpg" alt="" width="100"/></h1>
                            <div class="details">
                                <h3>Oops! You are not allowed to visit this</h3>
                                <p>Return <a href="{{route('/')}}"> <strong>Home</strong></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->

@endsection
