<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from redqteam.com/sites/dress-rental/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 22:25:18 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Forum|Open+Sans:400,600|Roboto:100,300,400,500,700" rel="stylesheet">
{{--    href="{{asset('asset/img/favicon.ico')}}"--}}
    <link rel="stylesheet" href="{{ asset('assets/style/elements.css')}}">
    <link rel="stylesheet" href=" {{asset('assets/style/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style/footer.css')}}">
    <link rel="stylesheet" href=" {{asset('assets/style/blog.css')}}">
    <script src="https://kit.fontawesome.com/e75b9fc0ac.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- ==========================-->
<!-- LOADER-->
<!-- ==========================-->
<div id="gl-circle-loader-wrapper">
    <div id="gl-circle-loader-center">
        <div class="gl-circle-load">
            <img src="{{ asset('assets/img/ploading.gif')}}" alt="Page Loader">
        </div>
    </div>
</div>


<!-- ==========================-->
<!-- SEARCH MODAL-->
<!-- ==========================-->
<div class="header-search open-search">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <div class="navbar-search">
                    <form class="search-global">
                        <input class="search-global__input" type="text" placeholder="Type to search" autocomplete="off" name="s" value="" />
                        <button class="search-global__btn"><i class="icon stroke icon-Search"></i>
                        </button>
                        <div class="search-global__note">Begin typing your search above and press return to search.</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button class="search-close close" type="button"><i class="fa fa-times"></i></button>
</div>

<!-- <div class="top-bar" id="top_bar">
	<div class="container">
		<p class="font-14-ope-reg-0 text-center margin-0">…Enjoy 20% off when you sign up to become a member...</p>
		<i class="ion-ios-close-empty"></i>
	</div> -->
<!-- /.container -->
<!-- </div> -->
<!-- /.top-bar -->
<header class="main-nav" id="stickynav">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand font-36-pla-reg-2" href="/"><img src="{{asset('assets/img/logo.png')}}" alt="logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li class="active"><a href="/" >Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COLLECTIONS</a>
                    <ul class="dropdown-menu number2">
                        <li><a href="/a">All Products</a></li>
                        <li><a href="listing-page2.html">Category 1</a></li>
                        <li><a href="listing-page2.html">Category 1</a></li>
                        <li><a href="listing-page2.html">Category 1</a></li>
                    </ul>
                </li>
                <!--designer start here-->
                <!--designer end here -->


                <li><a href="/about-us" >ABOUT</a></li>
                <li><a href="/contact-us" >CONTACT</a></li>
            </ul>


        </div><!-- /.navbar-collapse -->

    </nav>

    <ul class="nav navbar-nav dr-cart">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                    <a class="dropdown-item" href="{{ route('logout') }} "
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <button type="button" class="btn btn-danger" style="width: 100%;height: 100%">{{ __('Logout') }}</button>


                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
{{--        <li>--}}
{{--            <a href="#" class="rq-shopping-cart-items-list login">LOGIN</a>--}}
{{--        </li>--}}

        <li>
            <a href="/shopping-cart" class="rq-shopping-cart-items-list">Cart {{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }} <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            @if(session()->has('cart'))
            <div class="rq-shopping-cart-inner-div">
                <h4>Items Recently added</h4>
                <ul>
                    @foreach( session()->get('cart')->items as $product)
                    <li>
                        <div class="wrapper for-close">
                            <a href="#" class="wrapper-img"> <img src="{{asset("uploads/images/$product[image]")}}" alt="1"/> </a>
                            <a href="#" class="product-title">{{$product['name']}}</a>
                            <p>{{$product['qty']}} x <small> $ {{$product['price']}}</small></p>
{{--                            <a href="#" class="subtraction"><i class="ion-ios-close-empty"></i></a>--}}
                                <a href="/deleteCart/{{$product['id']}}"><i class="fas fa-times"></i></a>
                        </div><!-- /.wrapper -->
                    </li>
                    @endforeach

{{--                    <li>--}}
{{--                        <div class="wrapper">--}}
{{--                            <a href="#" class="wrapper-img"> <img src="{{asset('assets/img/content/7.jpg')}}" alt="1"/> </a>--}}
{{--                            <a href="#" class="product-title">Mercedes Ben C-Class</a>--}}
{{--                            <p>1 x <small> $65.00</small></p>--}}
{{--                            <a href="#" class="subtraction"><i class="ion-ios-close-empty"></i></a>--}}
{{--                        </div><!-- /.wrapper -->--}}
{{--                    </li>--}}
                </ul>
                <div class="subtotal">
                    <strong>Total Quantity:</strong>
                    <strong>{{session()->get('cart')->totalQty}} pieces</strong>
                </div><!-- /.subtotal -->
                <div class="subtotal">
                    <strong>Subtotal:</strong>
                    <strong>$ {{session()->get('cart')->totalPrice}}</strong>
                </div><!-- /.subtotal -->
                <div class="view-cart">
                    <a href="/shopping-cart">View Cart</a>
                </div><!-- /.subtotal -->
            </div><!-- /.rq-shopping-cart-inner-div -->

        </li>




        @endif


    </ul>
</header><!-- /.End header -->

@yield('content')




<footer class="main-footer">
    <div class="footer">
        <div class="rq-container">
            <div class="item1">
                <a href="index.html" class="font-36-pla-reg-2"><img src="{{asset('assets/img/logo.png')}}" alt="logo" /></a>
                <p>The very best thing about placing an order with Glam Corner is the option to add a “backup dress” for $15. Basically, this means you are delivered two dresses and just leave the tag on the one you don’t decide to wear. For me, this took a lot of the stress out of my first renting experience.</p>
                <div class="get-touch">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div><!-- /.get-touch -->
            </div><!-- /.item1 -->
            <div class="item2">
                <h3 class="font-18-pla-reg-2">GET HELP</h3>
                <ul class="list-unstyled">
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Delivery & Return</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Size & Fits</a></li>
                </ul>
            </div><!-- /.item2 -->
            <div class="item3">
                <h3 class="font-18-pla-reg-2">SERVICES</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Booking</a></li>
                    <li><a href="#">Renting</a></li>
                    <li><a href="#">Retail</a></li>
                    <li><a href="#">Listing</a></li>
                </ul>
            </div><!-- /.item3 -->
            <div class="item4">
                <h3 class="font-18-pla-reg-2">COMPANY</h3>
                <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Book Your Dress</a></li>
                    <li><a href="#">Recent Posts</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </div><!-- /.item4 -->
            <div class="item5">
                <h3 class="font-18-pla-reg-2">CONTACT </h3>
                <ul class="list-unstyled contact">
                    <li class="map-marker"><p>Road 3, West side</p>
                        <p>Texas, USA</p></li>
                    <li class="phone"><p>+6789870352</p></li>
                    <li class="mobile"><p>+67800017338829</p></li>
                    <li class="envelope"><p>rnb@rnb.com</p></li>
                </ul>
            </div><!-- /.item5 -->
            <div class="item6">
                <h3 class="font-18-pla-reg-2">NEWSLETTER</h3>
                <p>Sign up for latest updates and offer.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter email address...">
                        <button type="submit" class="btn"><i class="ion-ios-arrow-thin-right"></i></button>
                    </div>

                </form>
                <div class="payment">
                    <a href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
                </div><!-- /.payment -->
            </div><!-- /.item6 -->
        </div><!-- /.rq-container -->
    </div><!-- /.footer -->
    <div class="bottom-bar">
        <p>Copyright 2021 &copy; <a href="#">Abu DIab</a></p>
    </div><!-- /.bottom-bar -->
</footer>






<script src="{{asset('assets/js/vendor/jquery-3.2.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/countUp.js')}}"></script>
<script src="{{asset('assets/js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/dateRangePicker.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/select2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/lightbox.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.smooth-scroll.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
{{--<script src="jquery-3.5.1.min.js"></script>--}}

</body>

<!-- Mirrored from redqteam.com/sites/dress-rental/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 22:25:33 GMT -->
</html>
{{--            <div class="rq-shopping-cart-inner-div ex-fix">--}}
{{--                <h4>Login Form</h4>--}}
{{--                <div class="rq-login">--}}
{{--                    <form>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="email" class="form-control"  placeholder="Email address">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="password" class="form-control"  placeholder="Password">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <button type="submit">Login</button>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <p class="or">Or</p>--}}
{{--                        </div>--}}
{{--                        <div class="form-inner">--}}
{{--                            <span>Login With</span>--}}
{{--                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>--}}
{{--                        </div><!-- /.form-inner -->--}}
{{--                    </form>--}}
{{--                </div><!-- /.rq-login -->--}}
{{--            </div>--}}
<!-- /.rq-shopping-cart-inner-div -->
