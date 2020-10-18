@extends('frontend.master')

@section('content')
    <!-- About Banner Start -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="about-heading text-center">
                    <h2>Shopping Cart</h2>
                    <p><a href="index.html">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Shopping Cart</span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Banner End -->

    <!-- Shopping Cart Start -->
    <section id="card">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="cart-info">
                        <table class="table table-striped table-hover table-bordered">
                            <tbody>
                            <tr>
                                <th class="tl">Product & Color</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Remove Item</th>
                            </tr>
                            <form action="{{route('CartUpdate')}}" method="post">
                                @csrf
                            @foreach($carts as $item)
                            <tr>
                                <td>
                                    <div class="col-md-12 pl">
                                        <div class="col-md-3 pl">
                                            <img src="{{url('/')}}/assets/images/shop/{{$item->product->product_thumbnail}}" alt="{{$item->product->product_name}}" class="img-responsive">
                                        </div>
                                        <div class="col-md-9 pro-info pl text-left">
                                            <h3>{{$item->product->product_name}}</h3>
                                            <p>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </p>
                                            <p>Color: Silver</p>
                                        </div>
                                    </div>
                                </td>
                                <td>৳ <span class="unitPrice{{$item->id}}" data-unit="{{$item->product->product_price}}">{{$item->product->product_price}}</span></td>
                                <td>
                                    <div class="quantity">
                                        <input type="hidden" name="id[]" value="{{$item->id}}" >
                                        <div class="handle-counter" id="handleCounter{{$item->id}}">
                                            <div class="input">
                                                <input type="text" name="p_quantity[]" class="pq{{$item->id}}" value="{{ old('p_quantity') ?? $item->quantity}}">
                                            </div>
                                            <div class="click">
                                                <span id="counter-plus{{$item->id}}" class="counter-plus btn btn-primary">+</span>
                                                <span id="counter-minus{{$item->id}}" class="counter-minus btn btn-primary">-</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </td>
                                <td>৳ <span class="totaltaka{{$item->id}}" data-taka="{{$item->product->product_price * $item->quantity}}">{{$item->product->product_price * $item->quantity}}</span></td>
                                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cart-total">
                        <h2>Have a coupon?</h2>
                            <div class="input-group">
                                <input id="coupon" name="coupon" class="form-control" type="text" value="{{old('coupon') ?? $coupon ?? ''}}" name="search" placeholder="type your code"  />
                                <span class="input-group-btn">
                                    <span id="coupon_send" class="btn btn-success" type="submit">Send</span>
                                </span>
                            </div>
                        @if(session('invalid'))
                            <div class="alert alert-danger">
                                {{session('invalid')}}
                            </div>
                        @endif
                    </div>
                    <div class="total-amount">
                        @if(session('msg'))
                            <div id="footerjs" class="alert alert-success alert-dimissible" role="alert">
                                <h5>{{session('msg')}}</h5>
                            </div>
                        @endif
                        <ul>
                            <li><h3>Cart Total</h3></li>
                            <li><span>Cart Subtotal</span><a href="#">৳ {{$grand_total + $discount_r }}</a></li>
                            <li><span>(-) Discount</span><a href="#">৳ {{ $discount_r ?? 'N/A ' }}({{$discount_p ?? ''}}%)</a></li>
                            <li><span>Grand Total</span><a href="#">৳ {{$grand_total}}</a></li>
                        </ul>
                    </div>
                    <div class="proceed">
                        <a class="updat btn btn-success" href="{{route('checkout')}}" style="display: ruby; padding: 7px 15px; border-radius: 5px;">proceed</a>
                        <button class="updat btn btn-danger" href="#">update cart</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Shopping Cart End -->
@endsection

@section('footer_js')

    <script src="{{url('/front/')}}/js/handleCounter.js"></script>

    <script>

        $(document).ready(function () {
            $('#coupon_send').click(function () {
              var coupon = $('#coupon').val();
              window.location.href = "{{ url('cart') }}/"+coupon;
            });
        });



        $(function ($) {
            var options = {
                minimum: 1,
                maximize: 100,
                onChange: valChanged,
                onMinimum: function(e) {
                    console.log('reached minimum: '+e)
                },
                onMaximize: function(e) {
                    console.log('reached maximize'+e)
                }
            }
            @foreach($carts as $it)
                $('#handleCounter{{$it->id}}').handleCounter({maximize: 100});
            @endforeach
            // $('#handleCounter').handleCounter(options)
            // $('#handleCounter2').handleCounter(options)
            // $('#handleCounter3').handleCounter(options)
            // $('#handleCounter4').handleCounter(options)
            // $('#handleCounter3').handleCounter({maximize: 100})
        })
        function valChanged(d) {
        //  console.log(d)
        }

        // AjaxPart
        $(document).ready(function () {
            @foreach($carts as $it)
            $('#counter-plus{{$it->id}}').click(function () {
                var check = $('.pq{{$it->id}}').val();
                var unitPrice = $('.unitPrice{{$it->id}}').attr("data-unit");
                $('.totaltaka{{$it->id}}').html(unitPrice * check);

                // alert(unitPrice * check);
                // var totaltaka = $('.totaltaka').attr("data-taka");
            })
            @endforeach
            @foreach($carts as $it)
            $('#counter-minus{{$it->id}}').click(function () {
                var check = $('.pq{{$it->id}}').val();
                var unitPrice = $('.unitPrice{{$it->id}}').attr("data-unit");
                $('.totaltaka{{$it->id}}').html(unitPrice * check);
            })
            @endforeach
        })



    </script>
@endsection
