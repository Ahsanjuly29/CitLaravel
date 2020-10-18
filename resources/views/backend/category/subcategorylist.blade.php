@extends('backend.master')

@section('subcatactive') active @endsection
@section('subcatview') bg-primary @endsection

@section('content')
<div class="page-inner" style="min-height:790.2000122070312px !important">
    <div class="page-title">
        <h3 class="breadcrumb-header">Responsive Tables</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb breadcrumb-with-header">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Responsive Tables</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Bordered</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if(session('msg'))
                                <div id="footerjs" class="alert alert-danger alert-dimissible" role="alert">
                                    <h4>{{session('msg')}}</h4>
                                </div>
                            @endif
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>category Name</th>
                                        <th>Sub Category Name</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								    @foreach($subcat as $key => $item)
                                    <tr>
                                        <th>{{$subcat->firstItem() + $key}}</th>
                                        {{--<td>{{ $item->category_id }}</td>--}}
                                        <td>{{ $item->category->category_name }}</td>
                                        <td>{{ $item->subCategory_name }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                        	<a class="btn btn-warning" href="{{route('subCategoryEdit', $item->id)}}">edit</a>
                                            <a class="btn btn-danger" href="{{route('subCategoryDelete', $item->id)}} ">delete</a>
                                        </td>
                                    </tr>
								    @endforeach
                                </tbody>
                            </table>
                            {{ $subcat->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
</div>
@endsection
