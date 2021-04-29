@extends('layout.layouts')

@section('title')
    Dress
@endsection

@section('content')


    <div class="container">
        <ol class="breadcrumb underline">
            <li><a href="/">Home</a></li>
            <li>Services</li>
        </ol><!-- /.breadcrumb -->
    </div><!-- /.container -->











    <div class="work-procedure base-padd">
        <div class="container">
            <h2>How It Works</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="inner">
                        <a href="#"><img src="{{asset('assets/img/work-procedure/1.png')}}" alt="" class="img-responsive"></a>
                        <h3 class="font-30-for-reg-0">RENT</h3>
                        <p class="font-16-for-reg-0"><a href="#">Lorem ipsum </a>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div><!-- /.inner -->
                </div> <!-- /.col-md-3  -->
                <div class="col-md-6">
                    <div class="inner">
                        <a href="#"><img src="{{asset('assets/img/work-procedure/2.png')}}" alt="" class="img-responsive"></a>
                        <h3 class="font-30-for-reg-0">WEAR</h3>
                        <p class="font-16-for-reg-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <a href="#"> do eiusmod </a> tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div><!-- /.inner -->
                </div> <!-- /.col-md-3  -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.work-procedure -->

    <div class="contact-form base-padd">
        <h2>CONTACT WITH US</h2>
        <div class="rq-form">
            <form class="form-horizontal">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-custom">
                            <label for="inputEmail3" class="control-label">Full Name</label>
                            <div class="input">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                        <div class="form-custom">
                            <label for="inputEmail4" class=" control-label">Email</label>
                            <div class="input">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                        </div>
                    </div><!-- /.col-sm-6 -->
                </div><!-- /.row -->

                <div class="form-custom">
                    <label class="control-label">Message</label>
                    <div class="textarea">
                        <textarea rows="6"></textarea>
                    </div>
                </div>
                <div class="form-custom pull">
                    <button type="submit" class="btn contact">Submit</button>

                </div>
            </form>
        </div><!-- /.rq-form -->
    </div><!-- /.contact-form -->



    <div class="stores base-padd">
        <h2>Our Stores</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="inner-element">
                        <i class="fas fa-phone-alt"></i>
                        <h4 class="font-25-pla-reg-0">Call Us At</h4>
                        <p>(+678) 9870352</p>
                        <p>(+678) 00017338829</p>
                        <p>dressrental@mail.com</p>
                    </div><!-- /.inner-element -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="inner-element">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4 class="font-25-pla-reg-0">Our Address</h4>
                        <div class="portion">
                            <h4 class="font-18-pla-reg-2">Head Office</h4>
                            <p>Road 3, West side lane</p>
                            <p>Texas, USA</p>
                        </div><!-- /.portion -->
                        <div class="portion">
                            <h4 class="font-18-pla-reg-2">New york Office</h4>
                            <p>Road 11, Library road</p>
                            <p>NY, USA</p>
                        </div><!-- /.portion -->
                    </div><!-- /.inner-element -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="inner-element">
                        <i class="far fa-clock"></i>
                        <h4 class="font-25-pla-reg-0">WORKING HOUR</h4>
                        <p>Monday - Friday: 6am - 10pm</p>
                        <p>Saterday - Sunday: 10am - 2pm</p>
                    </div><!-- /.inner-element -->
                </div><!-- /.col-sm-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.stores -->

@endsection
