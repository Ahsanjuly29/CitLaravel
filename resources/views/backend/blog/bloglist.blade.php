@extends('backend.master')

@section('blogactive') active @endsection
@section('bloglist') bg-primary @endsection
@section('content')
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                {{--col-md-offset-2--}}
                <div class="col-md-8 col-md-offset-1">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Summary</th>
                            <th scope="col">Image</th>
                            <th scope="col">Button</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($blog as $blog)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->summary}}</td>
                                <td><img class="img-thumbnail" src="{{route('/')}}/front/{{$blog->f_image}}" alt="" width="100"></td>
                                <td style="padding: 18px 2 px!important;">
                                    <a class="btn btn-primary" href="{{route('blog.show',$blog->id) }}">View</a>
                                </td>
                                <td style="padding: 18px 2px!important;"><a class="btn btn-danger" href="{{route('blog.destroy',$blog->summary) }}">delete</a></td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
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
