@extends('layouts.app')
@section('title')
    Admin Login
@endsection
@section('content')

<div class="container">
    <form class="form-horizontal" role="form" method="post" action="{{ route('admin.login') }}" style="  max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    ">
        @csrf
        <h4 style=" margin-bottom: 1em;  text-align: center" class="reg-form">Admin Login</h4>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control" value="{{ old('email') }}" name="email" required autocomplete="email">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control" name="password">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->
@endsection
