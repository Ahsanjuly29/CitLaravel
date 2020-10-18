@extends('backend.master')

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Products</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Products Add</a></li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Multiple Image Details</h4>
                        </div>
                        @if(session('success'))
                            <div id="footerjs" class="alert alert-danger alert-dimissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" area-lebel="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{session('success')}}
                            </div>
                        @elseif(session('message'))
                            <div id="footerjs" class="alert alert-danger alert-dimissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" area-lebel="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{session('message')}}
                            </div>
                        @endif
                        <div class="panel-body">
                            @if($PrCount==0)
                            <form class="form-horizontal" action="{{route('multipleaddpost')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="input-Default" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="image">
                                                <div class="col-md-6">
                                                    <input type="file" name="image[]" class="form-control" id="product_name" style="padding: 6px !important;" multiple>
                                                    <input type="submit" class="btn btn-info btn-large" value="submit" style="margin-top: 10px;">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="hidden" name="product_id" value="{{$productid}}"/>
                                                    <img class="img-thumbnail" src=""
                                                         alt="" width="200px" style="margin: 10px auto;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @else
                            <form class="form-horizontal" action="{{route('MulImgPost')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="input-Default" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="image">
                                                <div class="col-md-6">
                                                    <input type="file" name="image" class="form-control" id="product_name" style="padding: 6px !important;">
                                                    <input type="submit" class="btn btn-info btn-large" value="submit" style="margin-top: 10px;">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="hidden" name="id" value="{{$multiimgid->id ?? ''}}"/>
                                                    <img class="img-thumbnail" src="{{url('/')}}/assets/images/shop/multiple/{{ $multiimgid->image_name ?? ''}}"
                                                         alt="{{ $multiimgid->image_name ?? ''}}" width="200px" style="margin: 10px auto;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endif
                        </div>
                    </div>
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Other Images Can be Changed</h4>
                            </div>
                            <div class="panel-body">
                                <?php $number = 1; ?>
                        @foreach($multiimg as $data)
                        <form class="form-horizontal" action="{{route('MulImgPost')}}" method="post" enctype="multipart/form-data">
                            <div class="form-group">@csrf
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="image">
                                            <div class="col-md-1">
                                                <label for="input-Default" class="col-sm-2 control-label">
                                                    {{ $number++ }}
                                                </label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="hidden" name="id" value="{{$data->id}}"/>
                                                <img class="img-thumbnail" src="{{url('/')}}/assets/images/shop/multiple/{{ $data->image_name ?? 'N/A'}}"
                                                     alt="{{ $data->image_name ?? 'N/A'}}" width="150px" style="margin: 10px auto;"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="input-Default" class="col-sm-2 control-label">Name</label>
                                                <input type="file" name="image" class="form-control" id="product_name"style="padding: 6px !important;"/>
                                                <input type="submit" class="btn btn-info btn-large" value="submit" style="margin-top: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @component('inc.copyright') @endcomponent
    </div>
@endsection


