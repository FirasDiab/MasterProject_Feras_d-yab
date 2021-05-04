@extends('layout.layouts')

@section('title')
{{$product->name}}
@endsection

@section('content')

    @if( session()->has('success'))
        <div class="alert alert-success text-center"> {{session()->get('success')}}</div>
    @endif
    <div class="container">
        <ol class="breadcrumb underline">
            <li><a href="/">Home</a></li>
            <li><a href="/category/{{$product->category_id}}">{{$category[0]['name']}}</a></li>
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
                        <h2>{{$product->name}}</h2>
                        <h4>Color: {{$product->color}}</h4>
                        <h4>$ {{$product->price}} </h4>



                        <div class="row rq-margin">
                            <div class="col-sm-6">


                                <a href="/addToCart/{{$product->id}}" class="btn btn-success" style="height: auto">ADD TO CART</a>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="social-icon">
                                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    <a href="https://pinterest.com/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
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


    <div class="content base-padd">
        <div class="container-fulid">
            <div class="content-wrapper">
                <h2 class="our-favourite">OUR FAVOURITES</h2>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card" style="margin-bottom: 20px; text-align: center">
                                <img src="{{asset("uploads/images/$product->image")}}" style="height: 250px; width: 200px;" alt="{{$product->name}}">
                                <div class="text-center">
                                    <a href="/product/{{$product->id}}"><h3>{{$product->name}}</h3></a>
                                    {{--                                <p>Designer</p>--}}
                                    <h5 class="">Color: {{$product->color}}</h5>
                                    <h5 class=""> Price: $ {{$product->price}}</h5>
                                    <a href="/product/{{$product->id}}"><button type="button" class="btn btn-primary glow px-4 category-btn">See Product</button></a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div><!-- /.content-wrapper -->
        </div><!-- /.container-fulid -->
    </div><!-- /.content -->

@endsection
