@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Class</h1>  
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
                    <label>Class Name</label>
                    <input type="text" class="form-control" value="{{ $getRecord->name }}"  name="name" placeholder="Class Name">
                    <div style="color: red;">{{ $errors->first('name') }}</div>
                  </div>

                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option {{ ($getRecord->status == 0) ? 'selected' : ''}}  value="0">Active</option>
                        <option {{ ($getRecord->status == 1) ? 'selected' : ''}} value="1">Inactive</option>
                    </select>
                    
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