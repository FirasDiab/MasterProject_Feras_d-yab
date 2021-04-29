@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Manage</strong> Places
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Select Category</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                @foreach($categorys as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Place Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Place Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Select Location</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Amman</option>
                                <option value="1">Zarqa</option>
                                <option value="2">Irbid</option>
                                <option value="2">as-Salt</option>
                                <option value="2">al-Karak</option>
                                <option value="2">Madaba</option>
                                <option value="2">Jerash</option>
                                <option value="2">Ma'an</option>
                                <option value="2">at-Tafila</option>
                                <option value="2">Aqaba</option>
                            </select>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Select Rate</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">5 stars</option>
                                <option value="4">4 stars</option>
                                <option value="3">3 stars</option>
                                <option value="2">2 stars</option>
                                <option value="1">1 star</option>
                            </select>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Uploaded Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="file-input" class="form-control-file">
                        </div>
                    </div>

                </form>
            </div>
            <div class="card-footer">
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Create Place</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
@endsection
