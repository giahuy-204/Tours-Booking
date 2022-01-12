@extends('admin-source')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Tours</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="mt-2 font-weight-bold text-primary" style="float: left">Bills Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Bill ID</th>
                        <th>Customer First Name</th>
                        <th>Customer Last Name</th>
                        <th>Customer Email</th>
                        <th>Customer Phone</th>
                        <th>Customer Tour Booked (ID)</th>
                        <th>Customer Date Booked</th>
                        <th>Adult (>17)</th>
                        <th>Children (14-17)</th>
                        <th>Children (<14)</th>
                        <th>Total Price</th>
                        <th width="30px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($bills as $bill)
                            <tr>
                                <td>{{$bill->id}}</td>
                                <td>{{$bill->first_name}}</td>
                                <td>{{$bill->last_name}}</td>
                                <td>{{$bill->email}}</td>
                                <td>{{$bill->phone}}</td>
                                <td>{{$bill->id_tour}}</td>
                                <td>{{$bill->date_booked}}</td>
                                <td>{{$bill->adult_number}}</td>
                                <td>{{$bill->children_number}}</td>
                                <td>{{$bill->youngchildren_number}}</td>
                                <td>{{$bill->total_price}}$</td>
                                <td>
                                    <a href="/admin-deletebill/{{$bill->id}}"><button class="btn btn-danger mt-1" style="width:100%">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">{{$bills->links("pagination::bootstrap-4")}}</div>
            </div>
        </div>
    </div>

</div>
@endsection