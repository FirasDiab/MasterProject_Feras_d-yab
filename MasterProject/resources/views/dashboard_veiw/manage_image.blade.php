@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">Manage Image</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Create Image</h3>
                    </div>
                    <hr>
                    <form action="/dashboard/manage_images" method="post" enctype="multipart/form-data" >
                        @csrf
{{--                        <div class="form-group has-success">--}}
{{--                            <label for="cc-name" class="control-label mb-1">Image Name</label>--}}
{{--                            <input id="cc-name" name="name" type="text" class="form-control cc-name valid">--}}
{{--                        </div>--}}

                        <div class="row form-group">
{{--                            <div class="col col-md-3">--}}
{{--                                <label for="select" class=" form-control-label">Farm Name</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-9">--}}
{{--                                <select name="select_place" id="select" class="form-control">--}}
{{--                                    <option value="">choose here</option>--}}
{{--                                    @foreach($places as $place)--}}
{{--                                        <option value="{{$place->id}}">{{$place->name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Dress Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="select_room" id="select" class="form-control">
                                    <option value="">choose here</option>
                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}
                                        </option>
                                    @endforeach
                                </select>
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
                        <div class="card-header text-center bg-light"><strong>Images Table</strong></div>
                        <table class="table table-borderless table-data3">
                            <thead class="bg-info">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Product name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach($images as $image)--}}
{{--                            <tr>--}}
{{--                                <td>{{$image->id}}</td>--}}
{{--                                <td><img width="250rem" src="{{asset("uploads/images/$image->img")}}"</td>--}}
{{--                                <td>{{$image->getplaceyname()}}</td>--}}
{{--                                <td>{{$image->getroomname()}}</td>--}}
{{--                                <td><a class="text-primary" href="/dashboard/manage_images/{{$image->id}}/edit"><span--}}
{{--                                            class="btn btn-primary">edit</span></a></td>--}}
{{--                                <td class="text-primary"><a class="text-danger" href="/dashboard/manage_images/{{$image->id}}"><span--}}
{{--                                            class="btn btn-danger">delete</span></a></td>--}}
{{--                            </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>

@endsection
