@extends('dashboard_layouts.admin_main')
@section('title')
    Products Edit
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">Manage Product</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Edit Product</h3>
                    </div>
                    <hr>
                    <form action="/dashboard/manage_products/{{$product->id}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <img class="rounded mx-auto d-block" width="200" height="200"
                                 src="{{asset("uploads/images/$product->image")}}"></div>
                        <br>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Product Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name" name="name" value="{{$product->name}}" type="text" class="form-control cc-name valid">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Description</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea  id="textarea-input" name="desc" rows="9"  class="form-control">{{$product->desc}}</textarea>
                                @error('desc')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Product Size</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name" value="{{$product->size}}" name="size" type="text" class="form-control cc-name valid">
                                @error('style')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Product Color</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name" value="{{$product->color}}" name="color" type="text" class="form-control cc-name valid">
                                @error('capacity')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Product Price</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name"  value="{{$product->price}}" name="price" type="text"
                                       class="form-control cc-name valid">
                                @error('price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="file-input" class=" form-control-label">Uploaded Image</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="file-input" name="image" class="form-control-file">
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Update</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
