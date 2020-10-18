@extends('backend.master')

@section('productactive') active @endsection
@section('productadd') bg-primary @endsection
@section('header_css')
	<link href="//cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

	<!-- Selectize -->
	<link href="{{ url('/') }}/assets/css/selectize.default.css" rel="stylesheet" type="text/css">
	<!-- <link href="{{ url('/') }}/assets/css/selectize.css" rel="stylesheet" type="text/css"> -->
@endsection
@section('content')
		  
		  <style type="text/css">
				.form-control{
					 padding: 0px 10px !important;
				}
		  </style>

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
										  <h4 class="panel-title">Product Details</h4>
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
										  <form class="form-horizontal" action="{{route('ProductPost')}}" method="post" enctype="multipart/form-data">
												@csrf
												<div class="form-group">
													 <label for="input-Default" class="col-sm-2 control-label">Name</label>
													 <div class="col-sm-10">
														  <div class="row">
																<div class="col-md-6">
																	 <input type="text" name="product_name" class="form-control" id="product_name" value="{{ old('product_name') }}">
																</div>
																<div class="col-md-6">
																	 <input type="text" name="product_slug" class="form-control" id="slug" placeholder="Slug" value="{{ old('product_slug') }}"readonly>
																</div>
														  </div>
													 </div>
												</div>
												<div class="form-group">
													 <label for="input-help-block" class="col-sm-2 control-label">Code</label>
													 <div class="col-sm-10">
														  <input type="text" name="product_code" class="form-control" id="input-help-block" value="{{ $unique_code }}" readonly>
													 </div>
												</div>
												<div class="form-group">
													 <label for="input-placeholder" class="col-sm-2 control-label">summary</label>
													 <div class="col-sm-10">
														  <textarea type="text" name="product_summary" class="form-control" id="input-placeholder" placeholder="placeholder">{{ old('product_summary') }}</textarea>
													 </div>
												</div> 

												<div class="form-group">
													 <label for="input-placeholder" class="col-sm-2 control-label">description</label>
													 <div class="col-sm-10">
														  <textarea type="text" name="product_desc" class="form-control" id="input-placeholder" placeholder="placeholder">{{ old('product_desc') }}</textarea>
													 </div>
												</div>
												<div class="form-group">
													 <label class="col-sm-2 control-label">color</label>
													 <div class="col-sm-9">
														  <select multiple class="form-control m-b-sm" name="product_color[]" id="color">
																@foreach($colors as $color)
																<option value="{{$color->id}}">{{$color->color_name}}</option>
																@endforeach
														  </select>
													 </div>
                                                    <div class="col-sm-1">
                                                        <a href="{{ route('coloradd') }}">
                                                            <i class="fa fa-plus"></i>&nbsp;new Color
                                                        </a>
                                                    </div>
												</div>
												<div class="form-group">
													 <label class="col-sm-2 control-label">size</label>
													 <div class="col-sm-9">
														  <select multiple class="form-control m-b-sm" name="product_size[]" id="size">
																@foreach($sizes as $size)
																<option value="{{$size->size_name}}">{{$size->size_name}}</option>
																@endforeach
														  </select>                                            
													 </div>
                                                    <div class="col-sm-1">
                                                        <a href="{{ route('CategoryForm') }}">
                                                            <i class="fa fa-plus"></i>&nbsp;size name
                                                        </a>
                                                    </div>
												</div>

												<div class="form-group">
													 <label for="input-help-block" class="col-sm-2 control-label">price</label>
													 <div class="col-sm-10">
														  <input type="number" name="product_price" class="form-control" value="{{ old('product_price') }}" min="1">
													 </div>
												</div>

												<div class="form-group">
													 <label for="input-help-block" class="col-sm-2 control-label">thumbnail</label>
													 <div class="col-sm-10">
														  <input type="file" name="product_thumbnail" class="form-control" id="input-help-block" style="padding: 7px 40px !important;" value="{{ old('product_thumbnail') }}">
													 </div>
												</div>

												<div class="form-group addRow">
													 <label for="input-help-block" class="col-sm-2 control-label">quantity</label>
													 <div class="col-sm-10">
														  <input type="number" name="product_quantity" class="form-control" id="input-help-block" value="{{ old('product_quantity') }}" min="1" >
													 </div>
                                                </div>
												<div class="form-group">
													 <label for="input-help-block" class="col-sm-2 control-label">category</label>
													 <div class="col-sm-9">
														  <select class="form-control m-b-sm" name="category_id" id="category">
																@foreach($categories as $category)
																<option value="{{$category->id}}">{{$category->category_name}}</option>
																@endforeach
														  </select> 
													 </div>
                                                    <div class="col-sm-1">
                                                        <a href="{{ route('CategoryForm') }}">
                                                            <i class="fa fa-plus"></i>&nbsp;catg name
                                                        </a>
                                                    </div>
												</div>
												<div class="form-group">
													 <label for="input-help-block" class="col-sm-2 control-label">subcategory</label>
													 <div class="col-sm-9">
														  <select multiple class="form-control m-b-sm" name="subcategory_id[]" id="subcat">
																@foreach($subcat ?? '' as $sub)
																<option value="{{$sub->id}}">{{$sub->subCategory_name}}</option>
																@endforeach
														  </select> 
													 </div>
                                                    <div class="col-sm-1">
                                                        <a href="{{ route('subCategory') }}">
                                                            <i class="fa fa-plus"></i>&nbsp;sub catg
                                                        </a>
                                                    </div>
												</div>
												<div class="form-group">
													 <label for="input-help-block" class="col-sm-2 control-label">product alert</label>
													 <div class="col-sm-10">
														  <input type="number" name="product_alert" class="form-control" id="input-help-block" value="{{ old('product_alert') }}" min="1">
													 </div>
												</div>
												<div class="form-group">
													 <label for="tags" class="col-sm-2 control-label">tags</label>
													 <div class="col-sm-10">
													 	<input type="text" name="product_tags[]" class="m-b-sm" id="tags" />                                             
													 </div>
												</div>
												<div class="form-group">
												  <div>
												  		<label for="product_image" class="col-sm-2 control-label">Multiple Images</label>
														<div class="col-sm-10">
															 <input type="file" name="product_image[]" id="product_image" class="form-control fallback" value="{{ old('product_image') }}" style="padding: 7px 40px !important;" multiple />
														</div>
												  </div>
												</div>

												<div class="form-group">
													 <div class="col-sm-12">
														  <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit" id="input-help-block" style="font-weight: 800 !important">
													 </div>
												</div>
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
	<script src="//cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
	<script src="{{ url('/') }}/assets/js/selectize.js"></script>
	
	<script>
    // 1
    $(document).ready(function() {
        $('#color,#size,#category,#subcat').select2();


        // selectize
        $('#tags').selectize({
            plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
        });
    });
    // 2
    $("#footerjs").show().delay(1500).fadeOut();
    // 3
    $('#product_name').keyup(function(){
            $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
    });

    //Add Row
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });

            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

    </script>

@endsection
