
@extends('layout.layouts')

@section('title')
    Cart
@endsection

@section('content')


    @if($cart)
<div class="cart-setp">
    <div class="container">
        <figure><img src="{{asset('assets/img/cart/cart-step.png')}}" class="img-responsive" alt=""/></figure>
    </div>
</div><!-- /.cart-setp -->



<div class="shopping-details base-padd">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="shopping-bag">
                    <h4 class="one">Shopping Bag</h4>
                    @foreach( $cart->items as $product)
                    <div class="diva short-dress">
                        <img src="{{asset("uploads/images/$product[image]")}}" alt="1" style="width: 150px ; height: 120px"/>
                        <h5 class="font-30-for-reg-0">{{$product['name']}}</h5>
                        <p class="color">Quantity : <span>{{$product['qty']}}</span></p>
                        <p>Price : <span>$ {{$product['price']}}</span></p>
                        <p>Size : <span>{{$product['size']}}</span></p>
                        <p>Color : <span>{{$product['color']}}</span></p>
                        <p>Delivery Date : <span>25 Feb 2017</span></p>
{{--                        <button><i class="ion-edit"></i> Edit</button>--}}
                        <a href="/deleteCart/{{$product['id']}}"><button type="button" class="btn btn-danger">Remove</button></a>

                    </div><!-- /.short-dress -->
                    @endforeach
                    <a href="#" class="btn continue">Continue Shopping</a>
                    <a href="#" class="btn update">Update Busket</a>

                    <h4 class="two">Delivery Address</h4>
                    <div class="diva delivery-address">

                        <form class="form-inline" action="/Thank-you" method="post">
                            @csrf

{{--                        <h6 class="divider"><span>or</span></h6><!-- /.divider -->--}}
                        <form class="form-horizontal">
                            <div class="error-field">
                                @error('fname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @error('lname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @error('mobile')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @error('country')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @error('city')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @error('postal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="inner-form">
                                        <p>First Name</p>
                                        <input type="text" name="fname" class="form-control" value="{{old('fname')}}" />
                                    </div><!-- /.inner-form -->
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="inner-form">
                                        <p>Last Name</p>
                                        <input type="text" name="lname" class="form-control" value="{{old('lanme')}}"/>
                                    </div><!-- /.inner-form -->
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="inner-form">
                                        <p>Email address</p>
                                        <input type="email" name="email" class="form-control" value="{{old('email')}}"/>
                                    </div><!-- /.inner-form -->
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="inner-form">
                                        <p>Mobile No.</p>
                                        <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}"/>
                                    </div><!-- /.inner-form -->
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-12">
                                    <div class="inner-form">
                                        <p>Street Address</p>
                                        <input type="text" name="address" class="form-control" value="{{old('address')}}"/>
                                    </div><!-- /.inner-form -->
                                </div><!-- /.col-sm-12 -->
                                <div class="col-sm-6">
                                    <div class="inner-form">
                                        <p>Postl Code</p>
                                        <input type="text" name="postal" class="form-control" value="{{old('postal')}}"/>
                                    </div><!-- /.inner-form -->
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="inner-form">
                                        <p>City</p>
                                        <input type="text" name="city" class="form-control" value="{{old('city')}}"/>
                                    </div><!-- /.inner-form -->
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="inner-form">
                                        <p>Country</p>
                                        <input type="text" name="country" class="form-control" value="{{old('country')}}"/>
                                    </div><!-- /.inner-form -->
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="inner-form">
                                        <p>State</p>
                                        <input type="text" name="state" class="form-control" value="{{old('state')}}"/>
                                    </div><!-- /.inner-form -->
                                </div><!-- /.col-sm-6 -->
                            </div><!-- /.row -->
{{--                        </form><!-- form-horizontal -->--}}

                    </div><!-- /.delivery-address -->

                    <h4 class="three">Payment Method</h4>
                    <div class="diva delivery-address payment-method">
{{--                        <h4 class="font-30-for-reg-0">Select the preferred payment method</h4>--}}
{{--                        <form class="form-horizontal">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="inner-form">--}}
{{--                                        <p>Pay with credit card</p>--}}
{{--                                        <input type="email" class="form-control" />--}}
{{--                                    </div><!-- /.inner-form -->--}}
{{--                                </div><!-- /.col-sm-6 -->--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <div class="inner-form">--}}
{{--                                        <p>Pay with credit card</p>--}}
{{--                                        <textarea rows="6"></textarea>--}}
{{--                                    </div><!-- /.inner-form -->--}}
{{--                                </div><!-- /.col-sm-12 -->--}}
{{--                            </div><!-- /.row -->--}}
                        <h4>Cash on delivery only available</h4>
{{--                        </form><!-- form-horizontal -->--}}
                    </div><!-- /.payment-method -->
                    <button type="submit" class="btn btn-blog">Proceed To Order</button>
                </div><!-- /.shopping-bag -->
            </div><!-- /.col-sm-8 -->
            <div class="col-sm-4">
                <div class="fixedElement">
                    <div class="discount ">
                        <div class="flex discount1">
                            <input type="text" placeholder="Discount Code"/>
                            <button>Apply</button>
                        </div><!-- /.flex -->
                        <div class="flex">
                            <p>Sub Total :</p>
                            <span>$ {{$cart->totalPrice}}</span>
                        </div><!-- /.flex -->
{{--                        <div class="flex">--}}
{{--                            <p class="color">Promotional Savings  :</p>--}}
{{--                            <span class="color">-$0.0</span>--}}
{{--                        </div><!-- /.flex -->--}}
                        <div class="flex bar">
                            <p>Shipping Cost  :</p>
                            <span>FREE Shipping</span>
                        </div><!-- /.flex -->
                        <div class="flex ">
                            <h4>TOTAL  :</h4>
                            <h4>$ {{$cart->totalPrice}}</h4>
                        </div><!-- /.flex -->

                    </div><!-- /.discount -->
                    <button type="submit" class="btn btn-blog">Proceed To Order</button>
                    </form>
                </div><!-- /.fixedElement	 -->
            </div><!-- /.col-sm-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.shopping-details -->
    @else
    <h2>There are no items in the cart</h2>
    @endif
@endsection
