@extends('dashboard_layouts.admin_main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">Manage Products</div>
                <div class="card-body">
                    <div class="card-title">

{{--                        @if(session('addroom'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                The Room Was added Successfully !--}}
{{--                            </div>--}}
{{--                        @endif--}}

                        <h3 class="text-center title-2">Create Product</h3>
                    </div>
                    <hr>
                    <form action="/dashboard/manage_products" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Product Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name" name="name" value="{{ old('name') }}" type="text" class="form-control cc-name valid">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select_category" class=" form-control-label">Select Category</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="select_category" id="select" class="form-control" value="{{ old('select_category') }}">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('select_category')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
{{--                        <div class="row form-group">--}}
{{--                            <div class="col col-md-3">--}}
{{--                                <label for="select" class=" form-control-label">Place Name</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-9">--}}
{{--                                <select name="select_place" id="select" class="form-control">--}}
{{--                                    @foreach($places as $place)--}}
{{--                                        <option value="{{$place->id}}">{{$place->name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Description</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea  id="textarea-input" name="desc" rows="9" class="form-control">{{ old('desc') }}</textarea>
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
                                <input id="cc-name" name="size" value="{{ old('room_name') }}" type="text" class="form-control cc-name valid">
                                @error('room_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Product Color</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name" name="color" value="{{ old('room_name') }}" type="text" class="form-control cc-name valid">
                                @error('room_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>




{{--                        <div class="row form-group">--}}
{{--                            <div class="col col-md-3">--}}
{{--                                <label for="cc-name" class="control-label mb-1">Product Style</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-9">--}}
{{--                                <input id="cc-name" value="{{ old('style') }}" name="style" type="text" class="form-control cc-name valid">--}}
{{--                                @error('style')--}}
{{--                                <div class="text-danger">{{ $message }}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="row form-group">--}}
{{--                            <div class="col col-md-3">--}}
{{--                                <label for="cc-name" class="control-label mb-1">Room Capacity</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-9">--}}
{{--                                <input id="cc-name" value="{{ old('capacity') }}" name="capacity" type="text" class="form-control cc-name valid">--}}
{{--                                @error('capacity')--}}
{{--                                <div class="text-danger">{{ $message }}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Product Price</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name"  value="{{ old('price') }}" name="price" type="text"
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
                                <span id="payment-button-amount">Create</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <div class="card-header text-center bg-light"><strong>Products Table</strong></div>
                        <table class="table table-borderless table-data3">
                            <thead class="bg-info">
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Category</th>
{{--                                <th>Style</th>--}}
                                <th>Description</th>
                                <th>Size</th>
                                <th>Color</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
{{--                                    <td>{{$rooms->getplacename()}}</td>--}}
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category_id}}</td>
                                    <td>{{$product->desc}}</td>
                                    <td>{{$product->size}}</td>
                                    <td>{{$product->color}}</td>
                                    <td>{{$product->price}}</td>
                                    <td><img src="{{asset("uploads/images/$product->image")}}"</td>
                                    <td><a class="text-primary" href="/dashboard/manage_products/{{$product->id}}/edit"><span
                                                class="btn btn-primary">edit</span></a></td>
                                    <td class="text-primary"><a class="text-danger" href="/dashboard/manage_products/{{$product->id}}"><span
                                                class="btn btn-danger">delete</span></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
@endsection
