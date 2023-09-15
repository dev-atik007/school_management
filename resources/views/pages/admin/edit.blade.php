@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Admin</h1>  
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">

              <form action="{{ route('update', $getRecord->id) }}" method="POST">
                @csrf

              <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{ $getRecord->name }}" name="name" placeholder="Name">
                  </div>

                  <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" value="{{ $getRecord->email }}" name="email" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password">
                    <p>Due you want change password so Please add new password</p>
                  </div>
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