@extends('layout.layouts')

@section('title')
    Contact us - Fustanek
@endsection

@section('content')


    <div class="container">
        <ol class="breadcrumb underline">
            <li><a href="/">Home</a></li>
            <li>Contact Us</li>
        </ol><!-- /.breadcrumb -->
    </div><!-- /.container -->


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
                        <a href="#"><img src="{{asset('assets/img/work-procedure/2.png')}}" alt="" class="img-responsive"></a>
                        <h3 class="font-30-for-reg-0">WEAR</h3>
                        <h5>Style is way to say who you are without speaking .</h5>
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
                        <p>+962-778-870-794</p>
                        <p>+962-778-870-794</p>
                        <p>info@fustanek.com</p>
                    </div><!-- /.inner-element -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="inner-element">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4 class="font-25-pla-reg-0">Our Address</h4>
                        <div class="portion">
                            <h4 class="font-18-pla-reg-2">Head Office</h4>
                            <p>Al-hashmi Al-shmali</p>
                            <p>Amman, Jordan</p>
                        </div><!-- /.portion -->
                    </div><!-- /.inner-element -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="inner-element">
                        <i class="far fa-clock"></i>
                        <h4 class="font-25-pla-reg-0">WORKING HOUR</h4>
                        <p>Sunday - Thursday: 10am - 10pm</p>
                        <p>Friday - Saturday: 2pm - 10pm</p>
                    </div><!-- /.inner-element -->
                </div><!-- /.col-sm-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.stores -->

@endsection
