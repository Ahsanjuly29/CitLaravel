@extends('backend.master')

@section('sizeactive') active @endsection
@section('sizeadd') bg-primary @endsection
@section('content')

             <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Color</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                             <li><a href="{{route('/')}}">Home</a></li>
                            <li><a href="">Size</a></li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">

                        <div class="col-md-6 col-md-offset-2">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Add Size</h4>
                                </div>

								@if(session('success'))
                                <div id="footerjs" class="alert alert-success alert-dimissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" area-lebel="close">
										<span aria-hidden="true">&times;</span>
									</button>
                                	{{session('success')}}
                                </div>
                                @endif


                                <div class="panel-body">
                                    <form action="{{route('sizepost')}}" method="post">
                                        @if(session('msg'))
                                            <div id="footerjs" class="alert alert-success alert-dimissible" role="alert">
                                                <h4>{{session('msg')}}</h4>
                                            </div>
                                        @endif

                                        @csrf
                                        <div class="form-group">
                                            <label for="category_name">Add Size</label>
                                            <input type="text" name="size_name"class="form-control m-t-xxs @error('size_name') is-invalid @enderror" id="size_name" placeholder="Enter size name">
	
											@error('size_name')
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
	$("#footerjs").show().delay(1000).fadeOut();
</script>script>
@endsection
