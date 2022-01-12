@extends('admin-source')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Tours</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="mt-2 font-weight-bold text-primary" style="float: left">Tours Table</h6>
            <a href="/admin-addtour" type="button" class="btn btn-primary" style="float: right">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Tour ID</th>
                        <th>Tour Type (ID)</th>
                        <th>Tour Name</th>
                        <th>First Image</th>
                        <th>Second Image</th>
                        <th>Short Description</th>
                        <th>Start Date</th>
                        <th>Number of Days</th>
                        <th>Available Seats</th>
                        <th>Long Description</th>
                        <th>Adult Price</th>
                        <th>Children (14-17) Price</th>
                        <th>Children (<14) Price</th>
                        <th width="30px">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($tours as $tour)
                        <tr>
                            <td>{{$tour->id}}</td>
                            <td>{{$tour->id_type}}</td>
                            <td>{{$tour->name}}</td>
                            <td><img src="{{$tour->image1}}" alt="image1" width = "50px" height = "50px"></td>
                            <td><img src="{{$tour->image2}}" alt="image2" width = "50px" height = "50px"></td>
                            <td>{{$tour->short_description}}</td>
                            <td>{{$tour->date_start}}</td>
                            <td>{{$tour->number_days}} days</td>
                            <td>{{$tour->seats}} seats</td>
                            <td>{{$tour->long_description}}</td>
                            <td>{{$tour->adult_price}} $/person</td>
                            <td>{{$tour->children_price}} $/person</td>
                            <td>{{$tour->youngchildren_price}} $/person</td>
                            <td>
                                <a href="/admin-edittour/{{$tour->id}}"><button class="btn btn-warning" style="width:100%">Edit</button></a>
                                <a href="/admin-deletetour/{{$tour->id}}"><button class="btn btn-danger mt-1" style="width:100%">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">{{$tours->links("pagination::bootstrap-4")}}</div>
            </div>
        </div>
    </div>

</div>
@endsection
