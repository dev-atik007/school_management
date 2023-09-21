@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>  
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

              @include('_message')

            <div class="card card-primary">

              <form action="" method="POST">
                @csrf

              <div class="card-body">
                  <div class="form-group">
                    <label>Old Password</label>
                    <input type="password" class="form-control" value="{{ old('name') }}" name="old_password" placeholder="Enter old Password" required>
                    <div style="color: red;">{{ $errors->first('name') }}</div>
                  </div>

                  <div class="form-group">
                    <label>New Password</label>
                    <input type="password" class="form-control" value="{{ old('name') }}" name="new_password" placeholder="New Password" required>
                    <div style="color: red;">{{ $errors->first('name') }}</div>
                  </div>

                  

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div> 

            </div>
        </div>
        </div>
    </section>
   


@endsection