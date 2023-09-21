@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Subject</h1>  
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
                    <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Subject Name">
                    <div style="color: red;">{{ $errors->first('name') }}</div>
                  </div>

                  <div class="form-group">
                        <label>Subject Type</label>
                        <select name="type" id="" class="form-control">
                                <option value="0">Active</option>
                                <option value="1">Inactive</option>
                        </select>
                  </div>

                  <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="" class="form-control">
                                <option value="Theory">Theory</option>
                                <option value="Practical">Practical</option>
                        </select>
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