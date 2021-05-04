@extends('layout.layouts')

@section('title')
    Fustanek
@endsection

@section('content')
    <div class="banner">
        <div class="owl-carousel owl-theme dr-main-slider">
            <div class="item">
                <img src="{{asset('assets/img/banner/2.jpg')}}" alt="" class="img-responsive">
                <div class="text">
                    <h4>new   <span>50%<br/> <small>discount</small></span></h4>
                    <h2>Summer</h2>
                    <h3>~ MAKE YOUR CLOSET THE UNIQUE ONE ~</h3>
                    <a href="/allProducts">GET THE LOOK</a>
                </div><!-- /.text -->
            </div>
            <div class="item">
                <img src="{{asset('assets/img/banner/3.jpg')}}" alt="" class="img-responsive">
                <div class="text2">
                    <h2>Hot Sale!</h2>
                    <p>Spring & Summer</p>
                    <a href="/allProducts">GET THE LOOK</a>
                </div><!-- /.text2 -->
            </div>
        </div> <!-- /.dr-main-slider -->
    </div><!-- banner -->
    <div class="work-procedure base-padd">
        <div class="container">
            <h2>How It Works</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="inner">
                        <a href="#"><img src="{{asset('assets/img/work-procedure/1.png')}}" alt="" class="img-responsive"></a>
                        <h3 class="font-30-for-reg-0">BUY</h3>
                        <h5 >You can have anything in life if you dress for it . </h5>
                    </div><!-- /.inner -->
                </div> <!-- /.col-md-3  -->
                <div class="col-md-6">
                    <div class="inner">
                        <a href="#"><img src="{{asset('assets/img/work-procedure/2.png')}}"  alt="" class="img-responsive"></a>
                        <h3 class="font-30-for-reg-0">WEAR</h3>
                        <h5>Style is way to say who you are without speaking .</h5>
                    </div><!-- /.inner -->
                </div> <!-- /.col-md-3  -->
                <!-- /.col-md-3  -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>



    <div class="content base-padd">
        <div class="container-fulid">
            <div class="content-wrapper">

                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="margin-bottom: 20px; text-align: center">
                            <img class="card-img-top img-fluid mb-1" src="{{asset("uploads/images/$category->image")}}" style="height: 250px;" alt="{{$category->name}}">
                            <div class="text-center">
                                <a href="/category/{{$category->id}}"><h4>{{$category->name}}</h4></a>
{{--                                <p class="px-2 pb-1">{{$category->description}}</p>--}}
                            </div>
                            <a href="/category/{{$category->id}}"><button type="button" class="btn btn-primary glow px-4 category-btn">See Category</button></a>
                        </div>
                        </div>

                    @endforeach

                </div>

            </div><!-- /.content-wrapper -->
        </div><!-- /.container-fulid -->
    </div><!-- /.content -->



    <div class="join-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <a href="/register" class="btn transparent">Join us</a>
                    <a href="/allProducts" class="btn notrans">Buy Now</a>
                </div>
                <div class="col-sm-7">
				<span class="font-30-pla-reg-2">
					DO YOU LIKE DRESS ? <br/>
					BUY IT NOW AND TRY EVERYTHING...
				</span>
                </div>
            </div>

        </div><!-- /.container -->
    </div><!-- /.join-us -->


    <div class="content base-padd">
        <div class="container-fulid">
            <div class="content-wrapper">
                <h2 class="our-favourite">OUR FAVOURITES</h2>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card" style="margin-bottom: 20px; text-align: center">
                                <img src="{{asset("uploads/images/$product->image")}}" style="height: 250px;" alt="{{$product->name}}">
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

{{--    </div><!-- /.owl-favorites --> --}}
        </div><!-- /.container -->
    </div><!-- /.favorites -->



    <div class="newsletter base-padd">
        <div id="about">
        <h1>UNIQUE DRESSES </h1>
        </div>
    </div><!-- /.newsletter -->


    <div class="count-up base-padd">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-sm-3">
                    <div class="inner">
                        <div class="counter" data-count="48"><h1>0</h1></div>
                        <h3 class="font-36-for-reg-3">DAILY</h3>
                        <span class="font-24-for-reg-3">Users</span>
                    </div><!-- /.inner -->
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-3">
                    <div class="inner">
                        <div class="counter" data-count="124"><h1>0</h1></div>
                        <h3 class="font-36-for-reg-3">WEEKLY</h3>
                        <span class="font-24-for-reg-3">Users</span>
                    </div><!-- /.inner -->
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-3">
                    <div class="inner">
                        <div class="counter" data-count="520"><h1>0</h1></div>
                        <h3 class="font-36-for-reg-3">MONTHLY</h3>
                        <span class="font-24-for-reg-3">Users</span>
                    </div><!-- /.inner -->
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-3">
                    <div class="inner">
                        <div class="counter" data-count="2121"><h1>0</h1></div>
                        <h3 class="font-36-for-reg-3">YEARLY</h3>
                        <span class="font-24-for-reg-3">Users</span>
                    </div><!-- /.inner -->
                </div><!-- /.col-sm-3 -->

            </div>
        </div><!-- /.container -->
    </div><!-- /.count-up -->
@endsection
