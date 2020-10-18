@extends('backend.master')

@section('catactive') active @endsection
@section('catadd') bg-primary @endsection
@section('content')

             <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Form Elements</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Form Elements</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">

                        <div class="col-md-6 col-md-offset-2">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Add Category</h4>
                                </div>

								@if(session('success'))
                                <div id="footerjs" class="alert alert-success alert-dimissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" area-lebel="close">
										<span aria-hidden="true">&times;</span>
									</button>
                                	{{session('success')}}
                                </div>
                                @endif
                                @if(session('message'))
                                    <div id="footerjs" class="alert alert-danger alert-dimissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" area-lebel="close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4>{{session('message')}}</h4>
                                    </div>
                                @endif

                                <div class="panel-body">
                                    <form action="{{route('CategoryPost')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="category_name">Category Name</label>
                                            <input type="text" name="category_name" class="form-control m-t-xxs @error('category_name') is-invalid @enderror" id="category_name" placeholder="Enter Category Name">
                                        </div>
                                        <button type="submit" class="btn btn-success m-t-xs m-b-xs">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
 
 

                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
                </div>
            </div><!-- Page Inner -->

@endsection

@section('footer_js')
<script>
	$("#footerjs").show().delay(1000).fadeOut();
</script>script>
@endsection
