@extends('backend.master')

@section('subcatactive') active @endsection
@section('subcatadd') bg-primary @endsection

@section('header_css')
    <link href="//cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Form Elements</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="">sub category</a></li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-2">
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
                            {{session('message')}}
                        </div>
                    @endif
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Add Sub Category</h4>
                        </div>
                        <div class="panel-body">
                            <form action="{{route('subCategoryPost')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="category_name">Category</label>
                                    <select name="category_id" class="form-control m-t-xxs @error('category_name') is-invalid @enderror" id="cat_id" placeholder="Enter Category Name" required>
                                        <option value="">Select</option>
                                        @foreach($categories as $item)
                                          <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_name')
                                    <span class="is-invalid-feedback" role="alert">
												<strong>{{$message}}</strong>
											</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="sub_category_name">Sub Category Name</label>
                                    <input type="text" name="subCategory_name"class="form-control m-t-xxs @error('sub_category_name') is-invalid @enderror" id="sub_category_name" placeholder="Enter Category Name" required>

                                    @error('sub_category_name')
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
        <div class="page-footer">
            <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
        </div>
    </div><!-- Page Inner -->

@endsection

@section('footer_js')
    <script src="//cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#cat_id').select2();
        });        
    </script>
    <script>
        $("#footerjs").show().delay(1000).fadeOut();
    </script>script>
@endsection
