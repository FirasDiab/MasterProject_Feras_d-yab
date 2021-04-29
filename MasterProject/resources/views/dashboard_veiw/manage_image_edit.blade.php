@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">Manage Image</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Update Image</h3>
                    </div>
                    <hr>
                    <form action="/dashboard/manage_images/{{$image->id}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')

                        <div class="input-group">
                            <img class="rounded mx-auto d-block" width="200" height="200"
                                 src="{{asset("uploads/images/$image->img")}}"></div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Update Farm Id</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="select_place" id="select" class="form-control">
                                    <option value="{{$image->place_id}}">{{$image->place_id}}</option>
                                    @foreach($places as $place)
                                        <option value="{{$place->id}}">{{$place->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Update Room Id</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="select_room" id="select" class="form-control">
                                    <option value="{{$image->room_id}}">{{$image->room_id}}</option>
                                    @foreach($rooms as $room)
                                        <option value="{{$room->id}}">{{$room->room_name}} - {{$room->getplacename()}}
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
                                <span id="payment-button-amount">Update</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>




@endsection
