@extends('layout.layouts')

@section('title')
    Dress
@endsection

@section('content')

    <div class="container">
        <ol class="breadcrumb underline">
            <li><a href="/">Home</a></li>
            <li>Dresses</li>
        </ol><!-- /.breadcrumb -->
    </div><!-- /.container -->








    <div class="filter-list base-padd">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="filters">
                        <div class="range dropdown">
                            <header>
                                <span class="font-20-for-reg-0">Price Range</span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </header>
                            <input type="text" id="range_id" value="" />
                        </div><!-- /.range -->

                        <div class="size dropdown">
                            <header>
                                <span class="font-20-for-reg-0">Select size</span>
                                <i class="fa fa-angle-down " aria-hidden="true"></i>
                            </header>
                            <div>
            	<span class="rq-checkbox">
	              <input type="checkbox" id="size-one">
	              <label for="size-one">XX small</label>
		          </span><!-- /.rq-checkbox -->
                            </div>
                            <div>
            	<span class="rq-checkbox">
	              <input type="checkbox" id="size-two">
	              <label for="size-two">X small</label>
		          </span><!-- /.rq-checkbox -->
                            </div>
                            <div>
            	<span class="rq-checkbox">
	              <input type="checkbox" id="size-three">
	              <label for="size-three">Small</label>
		          </span><!-- /.rq-checkbox -->
                            </div>
                            <div>
            	<span class="rq-checkbox">
	              <input type="checkbox" id="size-four">
	              <label for="size-four">Medium</label>
		          </span><!-- /.rq-checkbox -->
                            </div>
                            <div>
            	<span class="rq-checkbox">
	              <input type="checkbox" id="size-five">
	              <label for="size-five">Large</label>
		          </span><!-- /.rq-checkbox -->
                            </div>

                            <div>
            	<span class="rq-checkbox">
	              <input type="checkbox" id="size-six">
	              <label for="size-six">X Large</label>
		          </span><!-- /.rq-checkbox -->
                            </div>

                        </div><!-- /.size -->




                    </div><!-- /.filters -->
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-9">
                    <div class="product-display">
                        <h4 class="font-25-for-reg-0">Dresses <span>(432)</span></h4>
                        <div class="view">
                            <div class="col-sm-4">
                            </div><!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <div class="text-center">
{{--                                    <nav aria-label="Page navigation">--}}
{{--                                        <ul class="pagination">--}}
{{--                                            <li>--}}
{{--                                                <a href="#" aria-label="Previous">--}}
{{--                                                    <i class="fa fa-angle-left" aria-hidden="true"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="active" href="#">1</a></li>--}}
{{--                                            <li><a href="#">2</a></li>--}}
{{--                                            <li><a href="#">3</a></li>--}}
{{--                                            <li><a href="#">...</a></li>--}}
{{--                                            <li><a href="#">9</a></li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="active" aria-label="Next">--}}
{{--                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </nav>--}}
                                    {!! $products->links() !!}
                                </div><!-- text-center -->
                            </div><!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                            </div><!-- /.col-sm-4 -->

                        </div><!-- /.view -->
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-sm-6 col-def2">
                                    <div class="product-list">
                                        <figure>
                                            <a href="" data-lightbox="roadtrip"><img src="{{asset("uploads/images/$product->image")}}" alt=""></a>
                                            <figcaption>
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#rqModalOne" data-whatever="@mdo">Quick View</a>
                                                    <div class="modal fade rq-modal" id="rqModalOne" tabindex="-1" role="dialog" >
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="../assets/dist/img/cross.png" alt=""></button>
                                                                <div class="modal-body">

                                                                    <div class="list-view">
                                                                        <div class="row">
                                                                            <div class="col-sm-5">

                                                                                <div class="modal-carousel owl-carousel owl-theme">
                                                                                    <div class="item">
                                                                                        <figure><img class="img-responsive" src="../assets/dist/img/products-list/list3.jpg" alt="list"></figure>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <figure><img class="img-responsive" src="../assets/dist/img/products-list/list2.jpg" alt="list"></figure>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <figure><img class="img-responsive" src="../assets/dist/img/products-list/list1.jpg" alt="list"></figure>
                                                                                    </div>
                                                                                </div><!-- /.modal-carousel -->
                                                                            </div>
                                                                            <div class="col-sm-7">
                                                                                <div class="product-info">
                                                                                    <a href="/b/{{$product->id}}"><h4 class="font-20-for-reg-0">{{$product->name}}</h4></a>
                                                                                    <h4 class="font-16-for-reg-0">Brand : <span>Blue Flamingo</span></h4>
                                                                                    <h4 class="font-16-for-reg-0">Color <span>{{$product->color}}</span></h4>
                                                                                    <h5 class="font-16-for-reg-0">$50 <del>$99 rent</del> <b> 50% off /</b> <span>$999 renail</span></h5>
                                                                                    <p class="font-16-for-reg-0">{{$product->desc}} </p>

                                                                                    <div class="btn-group">

                                                                                        <div class="size">
                                                                                            <select class="rq-rental-select2">
                                                                                                <option value="AL">Size</option>
                                                                                                <option value="AL">38</option>
                                                                                                <option value="WY">39</option>
                                                                                                <option value="WY">40</option>
                                                                                                <option value="WY">41</option>
                                                                                                <option value="WY">42</option>
                                                                                                <option value="WY">43</option>
                                                                                            </select>

                                                                                        </div><!-- /.size -->
                                                                                        <div class="color">

                                                                                            <select class="rq-rental-select2">
                                                                                                <option value="AL">Color</option>
                                                                                                <option value="AL">Red</option>
                                                                                                <option value="WY">Pink</option>
                                                                                                <option value="WY">Green</option>
                                                                                            </select>
                                                                                        </div><!-- /.color -->
                                                                                    </div><!-- /.btn-group -->
                                                                                    <button class="shopping-bag">Add to Shopping Bag <i class="fa fa-shopping-bag" aria-hidden="true"></i></button>

                                                                                </div><!-- /.product-info -->
                                                                            </div>
                                                                        </div><!-- /.row -->
                                                                    </div><!-- /.list-view -->

                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="description">
                                            <a href="/b/{{$product->id}}" class="font-18-for-reg-0">{{$product->name}}</a>
                                            <p>Color : {{$product->color}}</p>
                                            <p>Size : {{$product->size}}</p>
                                            <h5>{{$product->price}} $</h5>
                                        </div><!-- /.description -->
                                    </div><!-- /.product-list -->
                                </div><!-- /.col-sm-4 -->
                            @endforeach
                        </div><!-- /.row -->
                    </div><!-- /.product-display -->
                    <div class="row mrg-top">
                        <div class="col-xs-4">
                            <a class="pages-on" href="#">1-9 of 432</a>
                        </div>
                        <div class="col-xs-8">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">9</a></li>
                                    <li>
                                        <a href="#" class="active" aria-label="Next">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.col-sm-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.filter-list -->



    <div id="go-to-top">
        <a href="#stickynav"><i class="fa fa-angle-up"></i></a>
    </div>

@endsection
