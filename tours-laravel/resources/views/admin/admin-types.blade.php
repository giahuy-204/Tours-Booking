@extends('admin-source')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Tours</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="mt-2 font-weight-bold text-primary" style="float: left">Tour Types Table</h6>
            <a href="#" type="button" class="btn btn-primary" style="float: right">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Tour Type ID</th>
                        <th>Tour Type Name</th>
                        <th>Tour Type Image</th>
                        <th>Tour Type Description</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($types as $type)
                        <tr>                     
                            <td>{{$type->id}}</td>
                            <td>{{$type->name}}</td>
                            <td><img src="{{$type->image}}" alt="image1" width = "200px" height ="200px"></td>
                            <td>{{$type->description}}</td>                        
                            <td>
                                <button class="btn btn-warning" style="width:100%">Edit</button>
                                <button class="btn btn-danger mt-1" style="width:100%">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection