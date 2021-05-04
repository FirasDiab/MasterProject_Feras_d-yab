@extends('layout.layouts')

@section('title')
    Thank You
@endsection

@section('content')
    <div style="text-align: center; margin: 60px auto; width: 50%">
        <h3>Thank You For Purchase, Your order id : {{$orderId}}</h3>
    </div>
@endsection
