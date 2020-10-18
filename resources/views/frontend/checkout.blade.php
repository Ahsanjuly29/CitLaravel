@extends('frontend.master')

@section('content')
    <style>
        .StripeElement {
            box-sizing: border-box;

            height: 40px;

            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }


    </style>
    <!-- About Banner Start -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="about-heading text-center">
                    <h2>Checkout</h2>
                    <p><a href="index.html">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Checkout</span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Banner End -->

    <!-- checkout part Start -->
    <section id="checkout">
        <div class="container">
            <div class="row">
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
                <form action="{{Route('Payment')}}" method="POST" id="payment-form">
                    @csrf
                    <div class="col-md-8">
                        <div class="checkout-input">
                            <div class="">
                                <div class="">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">BILLING DETAILS</a></li>
                                        <li><a href="#">|</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Shipping Address</a></li>
                                        <li class="tahsan12"><a href="#">(if there is any different shipping address)</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" value="{{$auth->name}}" placeholder="Name*" required>
                                            </div>
                                            <div class="form-group col-md-6 pl0">
                                                <input type="text" class="form-control" id="email" name="email" value="{{$auth->email}}" placeholder="Email*" required>
                                            </div>
                                            <div class="form-group col-md-6 pr0">
                                                <input type="text" class="form-control" id="mobile" name="mobile" value="{{$auth->mobile}}" placeholder="Phone*" required>
                                            </div>

                                            <div class="form-group">
                                                <textarea type="text" class="form-control" id="address" name="address" placeholder="address" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="country_id" id="country_id">
                                                    <option value="">Country*</option>
                                                @foreach($country as $desh)
                                                    <option value="{{$desh->id}}">{{$desh->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="state_id" id="state_id">
                                                    <option value="">State*</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="city_id" id="city_id" >
                                                    <option value="">Town/City*</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="note" id="message" placeholder="Order Notes Here" maxlength="140" rows="7"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 totala">
                        @if(session('msg'))
                            <div id="footerjs" class="alert alert-success alert-dimissible" role="alert">
                                <h5>{{session('msg')}}</h5>
                            </div>
                        @endif
                        <div class="total-amount">
                            <ul>
                                <li><h3>Cart Total</h3></li>
                                <li><span>Cart Subtotal</span><a href="#">৳ {{$grand_total + $discount}}</a></li>
                                <li><span>(+) Shipping</span><a href="#">৳ 10.00</a></li>
                                <li><span>(-) Discount</span><a href="#">৳ {{$discount}}</a></li>
                                <li><span>Grand Total</span><a href="#">৳ {{$grand_total}}</a></li>
                            </ul>
                        </div>
                        <div class="payments">
                            <div class="payment-head">
                                <h3>Payments</h3>
                                <div class="">
                                    <input id="checkbox111" name="payment" value="1" type="radio">
                                    <label for="checkbox111">Cash On Delivary</label>
                                </div>
                                {{--<p>Lorem Ipsum is simply dummy text of the printing and typing isum has been the industry's standard dummy te ever since the 1500s, when an unknown printer.</p>--}}
                                {{--<div class="">--}}
                                    {{--<input id="checkbox112" name="payment" value="2" type="radio">--}}
                                    {{--<label for="checkbox112">Paypal</label>--}}
                                {{--</div>--}}
                                <div class="">
                                    <input id="checkbox113" name="payment" value="3" type="radio" onclick="show2();">
                                    <label for="checkbox113">Stripe</label>
                                </div>
                                <div class="form-row" id="div1">
                                    <label for="card-element">
                                        Credit or debit card
                                    </label>
                                    <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>

                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>

                                <div class="procd">
                                    <button type="submit" class="btn btn-primary">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- checkout part End -->
@endsection

@section('footer_js')
    <script src="//js.stripe.com/v3/"></script>
    <script>
        // Country State City JS
        $(document).ready(function () {
            $('#div1').hide();
            $('#checkbox113').change(function () {
                // Create a Stripe client.
                var stripe = Stripe('pk_test_iUySztCbSknp85EpGO0329Ew00XP0WCl6f');

                // Create an instance of Elements.
                var elements = stripe.elements();

                // Custom styling can be passed to options when creating an Element.
                // (Note that this demo uses a wider set of styles than the guide below.)
                var style = {
                    base: {
                        color: '#32325d',
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4'
                        }
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a'
                    }
                };
                // Create an instance of the card Element.
                var card = elements.create('card', {style: style});
                // Add an instance of the card Element into the `card-element` <div>.
                card.mount('#card-element');
                // Handle real-time validation errors from the card Element.
                card.addEventListener('change', function(event) {
                    var displayError = document.getElementById('card-errors');
                    if (event.error) {
                        displayError.textContent = event.error.message;
                    } else {
                        displayError.textContent = '';
                    }
                });
                // Handle form submission.
                var form = document.getElementById('payment-form');
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    stripe.createToken(card).then(function(result) {
                        if (result.error) {
                            // Inform the user if there was an error.
                            var errorElement = document.getElementById('card-errors');
                            errorElement.textContent = result.error.message;
                        } else {
                            // Send the token to your server.
                            stripeTokenHandler(result.token);
                        }
                    });
                });
                // Submit the form with the token ID.
                function stripeTokenHandler(token) {
                    // Insert the token ID into the form so it gets submitted to the server
                    var form = document.getElementById('payment-form');
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', token.id);
                    form.appendChild(hiddenInput);
                    // Submit the form
                    form.submit();
                }

                if ($(this).is(':checked')){
                    $('#div1').show();
                }
            });
            $('#div1').hide();
            $('#checkbox112').change(function () {
                if ($(this).is(':checked')){
                    $('#div1').show();
                }
            });
            $('#country_id').change(function(){
                var countryID = $(this).val();
                if(countryID){

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:"GET",
                        url:"{{url('/ajax/state/list')}}/"+countryID,
                        success:function(res){
                            if(res){
                                $("#state_id").empty();
                                $("#state_id").append('<option>Select*</option>');
                                $.each(res,function(key,value){
                                    $("#state_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                                });

                            }
                            else{
                                $("#state_id").empty();
                            }
                        }
                    });
                }
                else{
                    $("#state_id").empty();
                    $("#city_id").empty();
                }
            });
            $('#state_id').change(function(){
                var stateID = $(this).val();
                if(stateID){

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:"GET",
                        url:"{{url('/ajax/city/list/')}}/"+stateID,
                        success:function(res){
                            if(res){
                                $("#city_id").empty();
                                $("#city_id").append('<option>Select*</option>');
                                $.each(res,function(key,value){
                                    $("#city_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                                });

                            }else{
                                $("#city_id").empty();
                            }
                        }
                    });
                }
                else{
                    $("#city_id").empty();
                }
            });
        });
    </script>
@endsection
