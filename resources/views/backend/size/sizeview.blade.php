@extends('backend.master')

@section('sizeactive') active @endsection
@section('sizeview') bg-primary @endsection

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Data Tables</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">size</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">size Stock</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>serial</th>
                                        <th>size</th>
                                        <th>created at</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>serial</th>
                                        <th>size</th>
                                        <th>created at</th>
                                        <th>action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($sizes as $key => $size)

                                        <tr>
                                            <td>{{$sizes->firstItem()+$key}} </td>

                                            <td>{{$size->size_name}}</td>

                                            <td>{{$size->created_at->format('Y M d:D')}} ({{$size->created_at->diffForHumans()}})</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
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
    <script src="{{ url('/') }}/assets/js/pages/table-data.js"></script>
    <script>
        $("#footerjs").show().delay(4000).fadeOut();
    </script>script>
@endsection
