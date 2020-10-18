@extends('backend.master')

@section('catactive') active @endsection
@section('catview') bg-primary @endsection

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
        <div class="row"><!--Trash Data-->
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Trash Data</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if(session('msg'))
                                <div id="footerjs" class="alert alert-danger alert-dimissible" role="alert">
                                    <h4>{{session('msg')}}</h4>
                                </div>
                            @endif
                            @if(session('msg2'))
                                <div id="footerjs" class="alert alert-success alert-dimissible" role="alert">
                                    <h4>{{session('msg2')}}</h4>
                                </div>
                            @endif
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>category Name</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trash as $key => $item)
                                    <tr>
                                        <th>{{$trash->firstItem() + $key}}</th>
                                        <td>{{ $item->category_name }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('CategoryRestore', $item->id)}}">Restore</a>
                                            <!-- <a class="btn btn-danger" href="{{route('CategoryDelete', $item->id)}} ">delete</a> -->
                                            <a class="btn btn-danger" href="{{route('CategoryPermanent', $item->id)}}" id="delete">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $trash->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row --><!--End Trash Data-->

    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
</div>
@endsection


@section('footer_js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
      

     // $(document).on("click", "#delete", function(e){e.preventDefault();
     //     var link = $(this).attr("href");
     //
     //    const swalWithBootstrapButtons = Swal.mixin({
     //      customClass: {
     //        confirmButton: 'btn btn-success',
     //        cancelButton: 'btn btn-danger'
     //      },
     //      buttonsStyling: false
     //    })
     //    swalWithBootstrapButtons.fire({
     //      title: 'Are you sure?',
     //      text: "You won't be able to revert this!",
     //      icon: 'warning',
     //      showCancelButton: true,
     //      confirmButtonText: 'Yes, delete it!',
     //      cancelButtonText: 'No, cancel!',
     //      reverseButtons: true
     //    }).then((result) => {
     //      if (result.value) {
     //        swalWithBootstrapButtons.fire(
     //          'Deleted!',
     //          'Your file has been deleted.',
     //          'success'
     //        )
     //      } else if (
     //        /* Read more about handling dismissals below */
     //        result.dismiss === Swal.DismissReason.cancel
     //      ) {
     //        swalWithBootstrapButtons.fire(
     //          'Cancelled',
     //          'Your imaginary file is safe :)',
     //          'error'
     //        )
     //      }
     //    })
     //
     //    });
    </script>
@endsection
