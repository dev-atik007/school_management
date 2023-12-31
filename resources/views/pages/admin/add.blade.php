@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Admin</h1>  
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">

              <form action="" method="POST">
                @csrf

              <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Name">
                    <div style="color: red;">{{ $errors->first('name') }}</div>
                  </div>

                  <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Enter email">
                    <div style="color: red;">{{ $errors->first('email') }}</div>
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" value="{{ old('password') }}" name="password" placeholder="Password">
                    <div style="color: red;">{{ $errors->first('password') }}</div>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div> 

            </div>
        </div>
        </div>
    </section>
   


@endsection