@extends('admin-source')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Tours</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="mt-2 font-weight-bold text-primary" style="float: left">Tours Table</h6>
            <a href="#" type="button" class="btn btn-primary" style="float: right">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Tour Type</th>
                        <th>Tour Name</th>
                        <th>First Image</th>
                        <th>Second Image</th>
                        <th>Short Description</th>
                        <th>Start Date</th>
                        <th>Number of Days</th>
                        <th>Available Seats</th>
                        <th>Long Description</th>
                        <th>Adult (>17)</th>
                        <th>Children (14-17)</th>
                        <th>Children (<14)</th>
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
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, asperiores, aut
                            distinctio est et illo in molestias nesciunt numquam perferendis, perspiciatis
                            repudiandae rerum sit. Architecto beatae laudantium magni ratione sapiente?
                        </td>
                        <td>$106,450</td>
                        <td>$106,450</td>
                        <td>$106,450</td>
                        <td>
                            <button class="btn btn-warning" style="width:100%">Edit</button>
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
