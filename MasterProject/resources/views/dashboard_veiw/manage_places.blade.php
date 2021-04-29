@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Manage</strong> Places
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select_category" class=" form-control-label">Select Category</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select_category" id="select" class="form-control" value="{{ old('select_category') }}">
                                @foreach($categorys as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('select_category')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Select Location</label>
                        </div>
                        <div class="col-12 col-md-9">

                            <select name="select_location" id="select" class="form-control" value="{{ old('select_location') }}">
                                <option value="Amman">Amman</option>
                                <option value="Zarqa">Zarqa</option>
                                <option value="Irbid">Irbid</option>
                                <option value="Salt">Al-Salt</option>
                                <option value="al-Karak">al-Karak</option>
                                <option value="Madaba">Madaba</option>
                                <option value="Jerash">Jerash</option>
                                <option value="Ma'an">Ma'an</option>
                                <option value="at-Tafila">at-Tafila</option>
                                <option value="Aqaba">Aqaba</option>
                            </select>
                            @error('select_location')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Place Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name"  class="form-control"
                                   value="{{ old('name') }}" >
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Place Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="desc" id="textarea-input" rows="9" class="form-control">{{ old('desc') }}</textarea>
                            @error('desc')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Select Rate</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select_stars" id="select" class="form-control" >
                                <option value="" selected >Choose here</option>
                                <option value="5">5 stars</option>
                                <option value="4">4 stars</option>
                                <option value="3">3 stars</option>
                                <option value="2">2 stars</option>
                                <option value="1">1 star</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Number of Rooms</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="num_rooms" placeholder=""
                                   class="form-control" value="{{ old('num_rooms') }}">
                            @error('num_rooms')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Capacity</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="capacity" placeholder=""
                                   class="form-control"  value="{{ old('capacity') }}">
                            @error('capacity')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="cc-name" class="control-label mb-1">Place Price</label>
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


            </div>
            <div class="card-footer">
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Create Place</span>
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>


    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <div class="card-header text-center bg-light justify-content-center"><strong>Places Table</strong></div>
                <table class="table table-borderless table-data3">
                    <thead class="bg-info">
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Location</th>
                        <th>Place Name</th>
                        <th>Rate</th>
                        <th># of Rooms</th>
                        <th>Capacity</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($places as $place)
                           <tr>
                               <td>{{$place->id}}</td>
                               <td>{{$place->getcategoryname()}}</td>
                               <td>{{$place->location}}</td>
                               <td>{{$place->name}}</td>
                               <td>{{$place->stars}}</td>
                               <td>{{$place->num_rooms}}</td>
                               <td>{{$place->capacity}}</td>
                               <td><img src="{{asset("uploads/images/$place->image")}}"</td>
                               <td><a class="text-primary" href="/dashboard/manage_places/{{$place->id}}/edit"><span
                                           class="btn btn-primary">edit</span></a></td>
                               <td class="text-primary"><a class="text-danger" href="/dashboard/manage_places/{{$place->id}}"><span
                                           class="btn btn-danger">delete</span></a></td>
                           </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->

        </div>
    </div>

@endsection
