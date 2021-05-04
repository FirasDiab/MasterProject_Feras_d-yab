@extends('layout.layouts')

@section('title')
    {{$category['0']['name']}}
@endsection

@section('content')

    <div class="container">
        <ol class="breadcrumb underline">
            <li><a href="/">Home</a></li>
            <li>{{$category['0']['name']}}</li>
        </ol><!-- /.breadcrumb -->
    </div><!-- /.container -->

    <div class="filter-list base-padd">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-9">
                    <div class="product-display">
                        <h4 class="font-25-for-reg-0">Dresses <span>({{$productCount}})</span></h4>
                        <div class="view">
                            <div class="col-sm-4">
                            </div><!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <div class="text-center">
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
                                    <figure style="text-align: center;">
                                        <a href="/product/{{$product->id}}"><img src="{{asset("uploads/images/$product->image")}}" style="height: 250px; max-width: 300px" alt=""></a>

                                    </figure>
                                    <div class="description">
                                        <a href="/product/{{$product->id}}"><h3>{{$product->name}}</h3></a>
                                        <h5>Color : {{$product->color}}</h5>
                                        <h5>Size : {{$product->size}}</h5>
                                        <h5>$ {{$product->price}}</h5>
                                    </div><!-- /.description -->
                                </div><!-- /.product-list -->
                            </div><!-- /.col-sm-4 -->
                            @endforeach
                        </div><!-- /.row -->
                    </div><!-- /.product-display -->
                    <div class="row mrg-top">
                        <div class="col-xs-4">
                        </div>
                        <div class="col-xs-8">
                            {!! $products->links() !!}
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
