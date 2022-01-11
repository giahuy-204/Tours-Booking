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
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Tour ID Booked</th>
                        <th>Tour Date Booked</th>
                        <th>Adult (>17)</th>
                        <th>Children (14-17)</th>
                        <th>Children (<14)</th>
                        <th>Total Price</th>
                        <th width="30px">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Hoi An</td>
                        <td>Vinpearl</td>
                        <td><img src="" alt="image1"></td>
                        <td><img src="" alt="image2"></td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        <td>dd/mm/yyyy</td>
                        <td>10</td>
                        <td>200</td>
                        <td>69
                        </td>
                        <td>$106,450</td>
                        <td>$106,450</td>
                        <td>
                            <button class="btn btn-danger mt-1" style="width:100%">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection