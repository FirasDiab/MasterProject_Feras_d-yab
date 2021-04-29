@extends('layout.layouts')

@section('title')
    Dress
@endsection

@section('content')
    <div class="banner">
        <div class="owl-carousel owl-theme dr-main-slider">
            <div class="item">
                <img src="{{asset('assets/img/banner/2.jpg')}}" alt="" class="img-responsive">
                <div class="text">
                    <h4>new   <span>50%<br/> <small>discount</small></span></h4>
                    <h2>Spring</h2>
                    <h3>~ MAKE YOUR CLOSET THE UNIQUE ONE ~</h3>
                    <a href="/a">GET THE LOOK</a>
                </div><!-- /.text -->
            </div>
            <div class="item">
                <img src="{{asset('assets/img/banner/3.jpg')}}" alt="" class="img-responsive">
                <div class="text2">
                    <h2>Hot Sale!</h2>
                    <p>Spring & winter</p>
                    <a href="/a">GET THE LOOK</a>
                </div><!-- /.text2 -->
            </div>
        </div> <!-- /.dr-main-slider -->
    </div><!-- banner -->



{{--    <div class="pickupdate">--}}
{{--        <div class="container-fluid">--}}
{{--            <form>--}}
{{--                <div class="date-display">--}}
{{--                    <div class="form-date">--}}
{{--                        <div id="houston-component"></div>--}}
{{--                        <div class="mydiv"></div>--}}
{{--                    </div>--}}
{{--                    <div class="form-date">--}}
{{--                        <select class="rq-rental-select2 rq-custom-select">--}}
{{--                            <option value="AL">Categories</option>--}}
{{--                            <option value="AL">38</option>--}}
{{--                            <option value="WY">39</option>--}}
{{--                            <option value="WY">40</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-date">--}}
{{--                        <select class="rq-rental-select2 rq-custom-select">--}}
{{--                            <option value="AL">Size</option>--}}
{{--                            <option value="AL">38</option>--}}
{{--                            <option value="WY">39</option>--}}
{{--                            <option value="WY">40</option>--}}
{{--                            <option value="WY">41</option>--}}
{{--                            <option value="WY">42</option>--}}
{{--                            <option value="WY">43</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="btn-search">--}}
{{--                        <button>Search</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div><!-- /.container-fluit -->--}}
{{--    </div><!-- /.pickupdate -->--}}


    <div class="work-procedure base-padd">
        <div class="container">
            <h2>How It Works</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="inner">
                        <a href="#"><img src="{{asset('assets/img/work-procedure/1.png')}}" alt="" class="img-responsive"></a>
                        <h3 class="font-30-for-reg-0">BUY</h3>
                        <p class="font-16-for-reg-0"><a href="#">Lorem ipsum </a>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div><!-- /.inner -->
                </div> <!-- /.col-md-3  -->
                <div class="col-md-6">
                    <div class="inner">
                        <a href="#"><img src="{{asset('assets/img/work-procedure/2.png')}}"  alt="" class="img-responsive"></a>
                        <h3 class="font-30-for-reg-0">WEAR</h3>
                        <p class="font-16-for-reg-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <a href="#"> do eiusmod </a> tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div><!-- /.inner -->
                </div> <!-- /.col-md-3  -->
{{--                <div class="col-md-4">--}}
{{--                    <div class="inner">--}}
{{--                        <a href="#"><img src="{{asset('assets/img/work-procedure/3.png')}}" alt="" class="img-responsive"></a>--}}
{{--                        <h3 class="font-30-for-reg-0">RETURN</h3>--}}
{{--                        <p class="font-16-for-reg-0">Lorem ipsum dolor sit amet,<a href="#"> consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
{{--                    </div>--}}
{{--                    <!-- /.inner -->--}}
{{--                </div> --}}
                <!-- /.col-md-3  -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>



    <div class="content base-padd">
        <div class="container-fulid">
            <div class="content-wrapper">

                <div class="row">
                    @foreach($categories as $category)
{{--                    <div class="col-lg-4 col-sm-12">--}}
{{--                        <div class="card" style="width: 18rem;">--}}
{{--                            <img class="card-img-top" src="{{asset("uploads/images/$category->image")}}" style="height: 300px; width:300px;" alt="Card image cap">--}}

{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">{{$category->name}}</h5>--}}
{{--                                <p class="card-text">{{$category->description}}</p>--}}
{{--                                <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                        <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <img class="card-img-top img-fluid mb-1" src="{{asset("uploads/images/$category->image")}}" style="height: 250px; width:100%;" alt="Card image cap">
                            <div class="text-center">
                                <a href="/a/{{$category->id}}"><h4>{{$category->name}}</h4></a>
{{--                                <p>Designer</p>--}}
                                <p class="px-2 pb-1">{{$category->description}}</p>
                            </div>
{{--                            <button type="button" class="btn btn-primary glow px-4">Follow</button>--}}
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
                    <a href="#" class="btn transparent">Join us</a>
                    <a href="#" class="btn notrans">Buy Now</a>
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

{{--                <div class="item">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('assets/img/favorites/2.png')}}" alt="">--}}
{{--                        <a href="booking.html">View</a>--}}
{{--                    </figure>--}}
{{--                    <h3 class="font-20-for-reg-0">PARTY</h3>--}}
{{--                    <p class="font-16-for-reg-0">SASSA’s Collection</p>--}}
{{--                    <div class="elements">--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO WISHLIST</span>--}}
{{--                            <a href="#" ><img src="{{asset('assets/img/favorites/wish.png')}}" alt=""></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                        <span class="font-25-for-reg-0">$99</span>--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO FAVORITE</span>--}}
{{--                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                    </div><!-- /.elements -->--}}
{{--                </div><!-- /.item -->--}}

{{--                <div class="item">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('assets/img/favorites/2.png')}}" alt="">--}}
{{--                        <a href="booking.html">View</a>--}}
{{--                    </figure>--}}
{{--                    <h3 class="font-20-for-reg-0">GRACE</h3>--}}
{{--                    <p class="font-16-for-reg-0">Black & White</p>--}}
{{--                    <div class="elements">--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO WISHLIST</span>--}}
{{--                            <a href="#" ><img src="{{asset('assets/img/favorites/wish.png')}}" alt=""></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                        <span class="font-25-for-reg-0">$99</span>--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO FAVORITE</span>--}}
{{--                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                    </div><!-- /.elements -->--}}
{{--                </div><!-- /.item -->--}}

{{--                <div class="item">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('assets/img/favorites/4.png')}}" alt="">--}}
{{--                        <a href="booking.html">View</a>--}}
{{--                    </figure>--}}
{{--                    <h3 class="font-20-for-reg-0">PINK</h3>--}}
{{--                    <p class="font-16-for-reg-0">Black & White</p>--}}
{{--                    <div class="elements">--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO WISHLIST</span>--}}
{{--                            <a href="#" ><img src="{{asset('assets/img/favorites/wish.png')}}" alt=""></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                        <span class="font-25-for-reg-0">$99</span>--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO FAVORITE</span>--}}
{{--                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                    </div><!-- /.elements -->--}}
{{--                </div><!-- /.item -->--}}

{{--                <div class="item">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('assets/img/favorites/5.png')}}" alt="">--}}
{{--                        <a href="booking.html">View</a>--}}
{{--                    </figure>--}}
{{--                    <h3 class="font-20-for-reg-0">WHITE</h3>--}}
{{--                    <p class="font-16-for-reg-0">SASSA’s Collection</p>--}}
{{--                    <div class="elements">--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO WISHLIST</span>--}}
{{--                            <a href="#" ><img src="{{asset('assets/img/favorites/wish.png')}}" alt=""></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                        <span class="font-25-for-reg-0">$99</span>--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO FAVORITE</span>--}}
{{--                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                    </div><!-- /.elements -->--}}
{{--                </div><!-- /.item -->--}}

{{--                <div class="item">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('assets/img/favorites/1.png')}}" alt="">--}}
{{--                        <a href="booking.html">View</a>--}}
{{--                    </figure>--}}
{{--                    <h3 class="font-20-for-reg-0">LACE</h3>--}}
{{--                    <p class="font-16-for-reg-0">Black & White</p>--}}
{{--                    <div class="elements">--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO WISHLIST</span>--}}
{{--                            <a href="#" ><img src="{{asset('assets/img/favorites/wish.png')}}" alt=""></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                        <span class="font-25-for-reg-0">$99</span>--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO FAVORITE</span>--}}
{{--                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                    </div><!-- /.elements -->--}}
{{--                </div><!-- /.item -->--}}

{{--                <div class="item">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('assets/img/favorites/2.png')}}" alt="">--}}
{{--                        <a href="booking.html">View</a>--}}
{{--                    </figure>--}}
{{--                    <h3 class="font-20-for-reg-0">PARTY</h3>--}}
{{--                    <p class="font-16-for-reg-0">SASSA’s Collection</p>--}}
{{--                    <div class="elements">--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO WISHLIST</span>--}}
{{--                            <a href="#" ><img src="{{asset('assets/img/favorites/wish.png')}}" alt=""></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                        <span class="font-25-for-reg-0">$99</span>--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO FAVORITE</span>--}}
{{--                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                    </div><!-- /.elements -->--}}
{{--                </div><!-- /.item -->--}}

{{--                <div class="item">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('assets/img/favorites/1.png')}}" alt="">--}}
{{--                        <a href="booking.html">View</a>--}}
{{--                    </figure>--}}
{{--                    <h3 class="font-20-for-reg-0">GRACE</h3>--}}
{{--                    <p class="font-16-for-reg-0">Black & White</p>--}}
{{--                    <div class="elements">--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO WISHLIST</span>--}}
{{--                            <a href="#" ><img src="{{asset('assets/img/favorites/wish.png')}}" alt=""></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                        <span class="font-25-for-reg-0">$99</span>--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO FAVORITE</span>--}}
{{--                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                    </div><!-- /.elements -->--}}
{{--                </div><!-- /.item -->--}}

{{--                <div class="item">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('assets/img/favorites/4.png')}}" alt="">--}}
{{--                        <a href="booking.html">View</a>--}}
{{--                    </figure>--}}
{{--                    <h3 class="font-20-for-reg-0">PINK</h3>--}}
{{--                    <p class="font-16-for-reg-0">Black & White</p>--}}
{{--                    <div class="elements">--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO WISHLIST</span>--}}
{{--                            <a href="#" ><img src="{{asset('assets/img/favorites/wish.png')}}" alt=""></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                        <span class="font-25-for-reg-0">$99</span>--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO FAVORITE</span>--}}
{{--                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                    </div><!-- /.elements -->--}}
{{--                </div><!-- /.item -->--}}

{{--                <div class="item">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('assets/img/favorites/5.png')}}" alt="">--}}
{{--                        <a href="booking.html">View</a>--}}
{{--                    </figure>--}}
{{--                    <h3 class="font-20-for-reg-0">WHITE</h3>--}}
{{--                    <p class="font-16-for-reg-0">SASSA’s Collection</p>--}}
{{--                    <div class="elements">--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO WISHLIST</span>--}}
{{--                            <a href="#" ><img src="{{asset('assets/img/favorites/wish.png')}}" alt=""></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                        <span class="font-25-for-reg-0">$99</span>--}}
{{--                        <div class="tool-tip">--}}
{{--                            <span class="tooltiptext">ADD TO FAVORITE</span>--}}
{{--                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
{{--                        </div><!-- /.tool-tip -->--}}

{{--                    </div><!-- /.elements -->--}}
{{--                </div><!-- /.item -->--}}

            </div><!-- /.owl-favorites -->
        </div><!-- /.container -->
    </div><!-- /.favorites -->



    <div class="newsletter base-padd">
        <div id="about">
        <h1>About us</h1>
        </div>
        <p class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores consequatur deleniti, dicta exercitationem facere nemo non rerum! Alias aspernatur excepturi labore porro reiciendis. Consectetur earum error excepturi quidem reiciendis.</p>
    </div><!-- /.newsletter -->



{{--    <div class="opinion base-padd">--}}
{{--        <div class="container">--}}
{{--            <div class="owl-opinion owl-carousel owl-theme">--}}
{{--                <div class="item">--}}
{{--                    <img src="{{asset('assets/img/opinion/1.png')}}" alt="">--}}
{{--                    <p class="font-14-ope-reg-0">Jonathen Nora, CEO-AURORA inc</p>--}}
{{--                    <h3>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>--}}
{{--                    </h3>--}}
{{--                    <p class="edit">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the ap into electronic typesetting,” remaining essentially unchanged.</p>--}}
{{--                </div><!-- /.item -->--}}
{{--                <div class="item">--}}
{{--                    <img src="{{asset('assets/img/opinion/1.png')}}" alt="">--}}
{{--                    <p class="font-14-ope-reg-0">Jonathen Nora, CEO-AURORA inc</p>--}}
{{--                    <h3>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>--}}
{{--                    </h3>--}}
{{--                    <p class="edit">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the ap into electronic typesetting,” remaining essentially unchanged.</p>--}}
{{--                </div><!-- /.item -->--}}
{{--                <div class="item">--}}
{{--                    <img src="{{asset('assets/img/opinion/1.png')}}" alt="">--}}
{{--                    <p class="font-14-ope-reg-0">Jonathen Nora, CEO-AURORA inc</p>--}}
{{--                    <h3>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>--}}
{{--                    </h3>--}}
{{--                    <p class="edit">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the ap into electronic typesetting,” remaining essentially unchanged.</p>--}}
{{--                </div><!-- /.item -->--}}
{{--            </div><!-- /.owl-opinion -->--}}
{{--        </div><!-- /.container -->--}}
{{--    </div><!-- /.opinion -->--}}





{{--    <div class="sponsors base-padd">--}}
{{--        <div class="container-fluid wrapper">--}}
{{--            <div class="sponsors-carousel owl-theme owl-carousel">--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/1.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/2.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/3.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/4.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/5.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/6.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/2.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/5.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/4.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/3.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/2.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/6.png')}}" alt=""></a></div>--}}
{{--                <div class="item"><a href="#"><img src="{{asset('assets/img/sponsors/1.png')}}" alt=""></a></div>--}}
{{--            </div>--}}
            <!-- /.sponsors-carousel	 -->
{{--        </div>--}}
        <!-- /.container-fluid -->
{{--    </div>--}}
    <!-- /.sponsors -->



{{--    <div class="community base-padd">--}}

{{--        <!-- /.container -->--}}
{{--    </div><!-- /.community -->--}}



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
