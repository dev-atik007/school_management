@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Subject</h1>  
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">

              <form action="{{ route('subject.update', $subject->id) }}" method="POST">
                @csrf

              <div class="card-body">
                  <div class="form-group">
                    <label>Subject Name</label>
                    <input type="text" class="form-control" value="{{ $subject->name }}"  name="name" placeholder="Class Name">
                    <div style="color: red;">{{ $errors->first('name') }}</div>
                  </div>

                  <div class="form-group">
                    <label>Status</label>
                    <select name="status"  class="form-control" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Subject Type</label>
                    <select name="type" class="form-control" required>
                      <option value="theory">Theory</option>
                      <option value="practical">Practical</option>
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