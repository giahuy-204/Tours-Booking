@extends('admin-source')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Tours</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="mt-2 font-weight-bold text-primary" style="float: left">Add New Tour</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="form" style="margin: 0 20px 20px 20px">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tourType">Tour type</label>
                                    <select class="form-control" id="tourType" name="tourType">
                                        @foreach ($types as $type)
                                            <option value = "{{$type->id}}" >{{$type->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tourName">Tour name</label>
                                <input class="form-control" type="text" id="tourName" name="tourName" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fImg">First image</label>
                                <input class="form-control" type="file" id="fImg" name="fImg" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sImg">Second image</label>
                                <input class="form-control" type="file" id="sImg" name="sImg" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shortDes">Short description</label>
                            <input class="form-control" type="text" id="shortDes" name="shortDes" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="startDate">Start date</label>
                                <input class="form-control" type="date" id="startDate" name="startDate" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="numDays">Number of days</label>
                                <input class="form-control" type="number" id="numDays" name="numDays" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="numSeat">Available seat</label>
                                <input class="form-control" type="number" id="numSeat" name="numSeat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="longDes">Long Description</label>
                            <input class="form-control" type="text" id="longDes" name="longDes" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="priceAdult">Adult price (> 17)</label>
                                <input class="form-control" type="number" id="priceAdult" name="priceAdult" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="priceChildren">Children price (14 - 17)</label>
                                <input class="form-control" type="number" id="priceChildren" name="priceChildren" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="priceYChildren">Young children price (< 14)</label>
                                <input class="form-control" type="number" id="priceYChildren" name="priceYChildren" required>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit" style="width: 100%">ADD NEW TOUR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
