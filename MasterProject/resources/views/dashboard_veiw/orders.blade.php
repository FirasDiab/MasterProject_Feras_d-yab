@extends('dashboard_layouts.admin_main')

@section('content')

{{--@foreach($orders as $order)--}}
{{--    @foreach($order->cart->items as $item)--}}
{{--        <span class="badge">{{$item['price']}} $</span>--}}
{{--        {{$item['name']}} | {{$item['qty']}}--}}
{{--    @endforeach--}}

{{--    Total : $ {{$order->cart->totalPrice}}--}}
{{--@endforeach--}}

<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <div class="card-header text-center bg-light"><strong>Orders Table</strong></div>
            <table class="table table-borderless table-data3">
                <thead class="bg-info">
                <tr>
                    <th>ID</th>
                    <th>F.Name</th>
                    <th>L.Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Postal</th>
{{--                    <th>Image</th>--}}
{{--                    <th>Edit</th>--}}
{{--                    <th>Delete</th>--}}
                </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->fname}}</td>
                        <td>{{$order->lname}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->mobile}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->country}}</td>
                        <td>{{$order->city}}</td>
                        <td>{{$order->postal}}</td>
{{--                        <td><img src= style="height: 90px; width:90px;"></td>--}}
{{--                        <td><a class="text-primary" href="/dashboard/category//edit"><span class="btn btn-primary">edit</span></a></td>--}}
{{--                        <td class="text-primary"><a class="text-danger" href="/dashboard/category/"><span--}}
{{--                                    class="btn btn-danger">delete</span></a></td>--}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>


<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <div class="card-header text-center bg-light"><strong>Orders Table</strong></div>
            <table class="table table-borderless table-data3">
                <thead class="bg-info">
                <tr>
                    <th>Order ID</th>
                    <th>Product Price</th>
                    <th>Product Name</th>
                    <th>Product Quantity</th>
                    <th>Product Size</th>
                    <th>Product Color</th>
                    <th>Product Image</th>
                    <th>Total Order Price</th>
                    {{--                    <th>Edit</th>--}}
                    {{--                    <th>Delete</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $orderdetail)

                @foreach($orderdetail->cart->items as $item)
                    <tr>
                        <td>{{$orderdetail->id}}</td>
                        <td>$ {{$item['price']}}</td>
                        <td>{{$item['name']}} </td>
                        <td>{{$item['qty']}}</td>
{{--                        <td>{{$item['image']}}</td>--}}
                        <td>{{$item['size']}}</td>
                        <td>{{$item['color']}}</td>
                        <td><img src="{{asset("uploads/images/$item[image]")}}" style="height: 90px; width:90px;"></td>
                        <td>$ {{$orderdetail->cart->totalPrice}}</td>
{{--                                                <td><a class="text-primary" href="/dashboard/category//edit"><span class="btn btn-primary">edit</span></a></td>--}}
{{--                                                <td class="text-primary"><a class="text-danger" href="/dashboard/category/"><span--}}
{{--                                                            class="btn btn-danger">delete</span></a></td>--}}
                    </tr>
                @endforeach

                @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->

        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <div class="card-header text-center bg-light"><strong>Orders Table</strong></div>
                    <table class="table table-borderless table-data3">
                        <thead class="bg-info">
                        <tr>
                            <th>ID</th>
{{--                            <th>Edit</th>--}}
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
{{--                                <td><a class="text-primary" href="/dashboard/category/{{$order->id}}/edit"><span class="btn btn-primary">edit</span></a></td>--}}
                                <td class="text-primary" style="padding-right: 30px"><a class="text-danger" href="/orders/{{$order->id}}"><span
                                            class="btn btn-danger">delete</span></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>

@endsection
