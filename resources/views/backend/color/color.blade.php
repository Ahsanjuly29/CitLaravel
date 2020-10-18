@extends('backend.master')

@section('coloractive') active @endsection
@section('coloradd') bg-primary @endsection
@section('content')

             <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Color</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="{{route('/')}} ">Home</a></li>
                            <li><a href="">Color</a></li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">

                        <div class="col-md-6 col-md-offset-2">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Add color</h4>
                                </div>

								@if(session('message'))
                                <div id="footerjs" class="alert alert-success alert-dimissible" role="alert">
                                	<h5>{{session('message')}}</h5>
                                </div>
                                @endif


                                <div class="panel-body">
                                    <form action="{{route('ColorPost')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="color_code">color Code</label>
                                            <input type="color" name="color_code" class="form-control m-t-xxs @error('color_code') is-invalid @enderror" id="color_code" placeholder="Enter Category Name">
											@error('color_code') 
											<span class="is-invalid-feedback" role="alert">
												<strong>{{$message}}</strong>
											</span>
											@enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="color_name">color Name</label>
                                            <input type="text" name="color_name"class="form-control m-t-xxs @error('color_name') is-invalid @enderror" id="color_name" placeholder="Enter Category Name">
	
											@error('color_name') 
											<span class="is-invalid-feedback" role="alert">
												<strong>{{$message}}</strong>
											</span>
											@enderror
                                        </div>

                                        <button type="submit" class="btn btn-success m-t-xs m-b-xs">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
			@component('inc.copyright') @endcomponent
            </div><!-- Page Inner -->
@endsection

@section('footer_js')
<script>
	$("#footerjs").show().delay(4000).fadeOut();
</script>script>
@endsection
