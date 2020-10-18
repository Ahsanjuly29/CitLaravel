@extends('backend.master')

@section('blogactive') active @endsection
@section('blogadd') bg-primary @endsection
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
                                {{session('message')}}
                            </div>
                        @endif
                        <div class="panel-body">
                            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="category_name">Category</label>
                                    <select name="category_id" class="form-control @error('category_name') is-invalid @enderror" id="cat_id" placeholder="Enter Category Name" style="padding: 0px 10px !important;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">2</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_name">Title</label>
                                    <input type="text" name="title" class="form-control m-t-xxs @error('title') is-invalid @enderror" id="title" placeholder="Enter Title">
                                    @error('title')
                                    <span class="is-invalid-feedback" role="alert">
												<strong>{{$message}}</strong>
											</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category_name">Image</label>
                                    <input type="file" name="f_image" class="form-control m-t-xxs @error('f_image') is-invalid @enderror" id="f_image" placeholder="Enter f_image" style="padding: 5px 35% !important;">
                                    @error('title')
                                    <span class="is-invalid-feedback" role="alert">
												<strong>{{$message}}</strong>
											</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category_name">Summary</label>
                                    <textarea name="summary" id="summary" cols=" " rows="5" class="form-control @error('summary') is-invalid @enderror my-editor"></textarea>
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
    </script>
    <script>
        $(document).ready(function() {
            $('#cat_id').select2();
        });
    </script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection
