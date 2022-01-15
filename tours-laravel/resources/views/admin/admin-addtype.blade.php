@extends('admin-source')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Tour Types</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="mt-2 font-weight-bold text-primary" style="float: left">Add New Type </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="form" style="margin: 0 20px 20px 20px">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" id="latestID" name="latestID" value="{{$type->id}}" hidden>
                        <div class="form-group">
                            <label for="shortDes">Type name</label>
                            <input class="form-control" type="text" id="typeName" name="typeName" required>
                        </div>
                        <div class="form-group">
                            <label for="shortDes">Type image</label>
                            <input class="form-control" type="file" id="typeImage" name="typeImage" required>
                        </div>
                        <div class="form-group">
                            <label for="longDes">Type description</label>
                            <textarea class="form-control" type="text" id="typeDes" name="typeDes" required></textarea>
                        </div>
                

                        <button class="btn btn-primary" type="submit" style="width: 100%">ADD NEW TYPE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
