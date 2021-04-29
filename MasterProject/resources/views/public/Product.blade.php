@extends('layout.layouts')

@section('title')
    Dress
@endsection

@section('content')
    {{ print_r(session()->get('cart')) }}

    @if( session()->has('success'))
        <div class="alert alert-success text-center"> {{session()->get('success')}}</div>
    @endif
    <div class="container">
        <ol class="breadcrumb underline">
            <li><a href="/">Home</a></li>
            <li><a href="/a/{{$product->category_id}}">Dresses</a></li>
            <li>{{$product->name}}</li>
        </ol><!-- /.breadcrumb -->
    </div><!-- /.container -->


    <div class="product-details base-padd">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 rq-custom-5">
                    <div class="flexslider product_details_slider">
                        <ul class="slides">
                            <li data-thumb="../assets/dist/img/product-details/1_1.jpg">
                                <img src="{{asset("uploads/images/$product->image")}}" class="img-responsive" alt="1" />
                            </li>
                            <li data-thumb="../assets/dist/img/product-details/1_2.jpg">
                                <img src="https://assets.ajio.com/medias/sys_master/root/h2f/he2/15678454366238/-473Wx593H-461001523-multi-MODEL.jpg"  alt="1"/>
                            </li>
                            <li data-thumb="../assets/dist/img/product-details/1_3.jpg">
                                <img src="https://assets.ajio.com/medias/sys_master/root/h2f/he2/15678454366238/-473Wx593H-461001523-multi-MODEL.jpg"  alt="1"/>
                            </li>
                        </ul>
                    </div><!-- /.product_details_slider -->
                </div><!-- /.col-sm-5 -->
                <div class="col-sm-7">
                    <div class="rq-inner">
                        <a href="#" class="font-30-for-reg-0">{{$product->name}}</a>
                        <h3 class="font-18-for-reg-0">Color :  <span>{{$product->color}}</span></h3>
{{--                        <a href="#" class="rating" >--}}
{{--                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                            <i class="fa fa-star-o ash" aria-hidden="true"></i>--}}
{{--                            <span class="ash">(29)</span>--}}
{{--                        </a><!-- /.rating -->--}}
                        <h4>$ {{$product->price}} </h4>
{{--                        <del> $99  </del> <span> 50% off /</span>--}}


                        <div class="row rq-margin">
                            <div class="col-sm-6">
{{--                                <input type="hidden" name="product_id" value="{{$product->id}}">--}}

                                <a href="/addToCart/{{$product->id}}" class="btn btn-success" style="height: auto">ADD TO CART</a>
{{--                                <button type="button" id="addToCart" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--                                    ADD TO CART--}}
{{--                                </button>--}}
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                </div>
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.row -->

                        <div class="panel-group rq-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Size and fit
                                            <i class="fa fa-angle-up pull-right" aria-hidden="true"></i>
                                        </a>

                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

                                    <div class="panel-body">
                                        {{$product->size}}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Product details
                                            <i class="fa fa-angle-down pull-right" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        {{$product->desc}}
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.accordion -->

                    </div><!-- /.rq-inner -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row
 -->
        </div>	<!-- /.container -->
    </div><!-- /.product-details -->

    <div class="favorites base-padd">
        <h2>OUR FAVOURITES</h2>
        <div class="container">
            <div class="owl-favorites owl-carousel owl-theme">
                @foreach($products as $product)
                    <div class="item">
                        <figure>
                            <img src="{{asset("uploads/images/$product->image")}}" alt="">
                            <a href="booking.html">View</a>
                        </figure>
                        <a href="/b/{{$product->id}}"><h3 class="font-20-for-reg-0">{{$product->name}}</h3></a>
                        <p class="font-16-for-reg-0">{{$product->color}}</p>
                        <div class="elements">
                            <span class="font-25-for-reg-0">{{$product->price}}</span>


                        </div><!-- /.elements -->
                    </div><!-- /.item -->
                @endforeach
    </div><!-- /.owl-favorites -->
    </div><!-- /.container -->
    </div><!-- /.favorites -->
{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function (){--}}
{{--            $('#addToCart').on('click',function (e){--}}
{{--                $.ajax({--}}
{{--                    type: "GET",--}}
{{--                    url: "/addToCart/{product}",--}}
{{--                    data: $('#addToCart').serialize(),--}}
{{--                    success: function (response){--}}
{{--                        Swal.fire({--}}
{{--                            icon: 'success',--}}
{{--                            title: 'Thank you',--}}
{{--                            text: 'We will contact with you soon!'--}}
{{--                        })--}}
{{--                    },--}}
{{--                    error: function (error){--}}
{{--                        Swal.fire({--}}
{{--                            icon: 'error',--}}
{{--                            title: 'Oops...',--}}
{{--                            text: 'Enter Valid Data'--}}
{{--                        })--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function () {--}}
{{--            $('#addToCart').click(function (){--}}
{{--                alert('Clciked');--}}
{{--            });--}}

{{--        });--}}
{{--    </script>--}}
{{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>--}}

@endsection
