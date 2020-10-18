@extends('backend.master')

@section('productactive') active @endsection
@section('ProductList') bg-primary @endsection
@section('content')

            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Data Tables</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Tables</a></li>
                            <li class="active">Products</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Products Stock</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                       @if(session('success'))
                                           <div id="footerjs" class="alert alert-success alert-dimissible" role="alert">
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
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>serial</th>
                                                <th>Code</th>
                                                <th>name</th>
                                                <th>price</th>
                                                <th>image</th>
                                                <th>Quantities</th>
                                                <th>color</th>
                                                <th>images</th>
                                                <th>created at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>serial</th>
                                                <th>Code</th>
                                                <th>name</th>
                                                <th>price</th>
                                                <th>image</th>
                                                <th>Quantities</th>
                                                <th>color</th>
                                                <th>images</th>
                                                <th>created at</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        	@foreach($product as $key => $item)
                                            <tr>
                                                <td>{{$product->firstItem()+$key}} </td>
                                                <td>{{$item->product_code ?? ''}}</td>
                                                <td>{{substr($item->product_name,0) ?? ''}}</td>
                                                <td>{{$item->product_price ?? ''}}</td>
                                                <td><img class="img-thumbnail" src="{{url('/')}}/assets/images/shop/{{$item->product_thumbnail}}" width="45" height="40px"></td>
                                                <td>{{$item->product_quantity ?? ''}}</td>
                                                <td>
                                                    {{--{{$item->product_color}}--}}
                                                    @php
                                                        $count = 1;
                                                        $data = count(json_decode($item->product_color));
                                                    @endphp
                                                	@foreach(json_decode($item->product_color) as $color)
                                                        {{App\Color::findOrFail($color)->color_name}}
                                                        @if($count <  $data)
                                                            {{','}}
                                                        @endif
                                                        @php
                                                            $count++;
                                                        @endphp
                                                	@endforeach
                                                </td>
                                                <td>
                                                    @foreach(App\ProductImage::where('product_id',$item->id)->get() as $img)
                                                       <a href="/assets/images/shop/multiple/{{$img->image_name}}">
                                                           <img class="img-thumbnail" src="/assets/images/shop/multiple/{{$img->image_name}}" width="40px">
                                                       </a>
                                                    @endforeach
                                                </td>
                                                <td>{{$item->created_at->format('Y M d:D')}} ({{$item->created_at->diffForHumans()}})</td>
                                                <td>
                                                    <a href="{{route('SingleProduct', $item->product_slug)}} " class="btn btn-primary" target="blank" ><i class="fa fa-eye"></i></a>
                                                	<a href="{{route('ProductEdit', $item->product_slug)}}" class="btn btn-primary">Edit</a>
                                                	<a href="{{route('Productdelete')}}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                       </table>  
                                    </div>
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
<script src="{{ url('/') }}/assets/js/pages/table-data.js" defer></script>
<script>
	$("#footerjs").show().delay(4000).fadeOut();
</script>script>
@endsection
