@extends('source')
@section('content')
<style>
    .form-error {
        border: 2px solid #e74c3c;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card border-0 shadow rounded-3 my-5">
        <div class="card-body p-4 p-sm-5">
          <h5 class="card-title text-center mb-5 fw-light fs-5"><a href="/index" style="color: #074e44; text-transform: uppercase; font-weight: bold">Wanderer</a></h5>
          <form method="post">
            @csrf
            <div class="form-floating mb-3">
              <input type="text" class="form-control{{($errors->first('first_name') ? " form-error" : "")}}" id="first_name" name = "first_name" placeholder="Enter your first name">
              <label for="first_name" >First name</label>
              @error('first_name')
                <p style = "color:red">{{$message}}</p>
              @enderror
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control{{($errors->first('last_name') ? " form-error" : "")}}" id="last_name" name = "last_name" placeholder="Enter your last name">
              <label for="last_name">Last name</label>
              @error('last_name')
                <p style = "color:red">{{$message}}</p>
              @enderror
            </div>

            <div class="form-floating mb-3">
              <input type="email" class="form-control{{($errors->first('email') ? " form-error" : "")}}" id="email" name = "email" placeholder="Enter your email">
              <label for="email">Email address</label>
              @error('email')
                <p style = "color:red">{{$message}}</p>
              @enderror
            </div>

            <div class="form-floating mb-3">
              <input type="password" class="form-control{{($errors->first('password') ? " form-error" : "")}}" id="password" name = "password" placeholder="Enter your password">
              <label for="password">Password</label>
              @error('password')
                <p style = "color:red">{{$message}}</p>
              @enderror
            </div>

            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
              <label class="form-check-label" for="rememberPasswordCheck">
                Remember password
              </label>
            </div>

            <div class="d-grid">
              <button class="btn btn-login text-uppercase fw-bold" type="submit" style="background-color: #074e44; color: white">
                Register
              </button>
            </div>

            <hr class="my-4">

            <div class="d-grid">
              <a href="/login" class="btn fw-bold btn-secondary" type="button">
                Have an Account
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection