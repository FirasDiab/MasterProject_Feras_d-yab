@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">Booking Table</div>


            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <div class="card-header text-center bg-light"><strong>Booking Table</strong></div>
                        <table class="table table-borderless table-data3">
                            <thead class="bg-info">
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Place Name</th>
                                <th>Room Name</th>
                                <th>Date From</th>
                                <th>Date To</th>
                                <th>Additional Information</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
@endsection
