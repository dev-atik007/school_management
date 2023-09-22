@extends('layouts.app')
@section('content')



<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Subject List</h1>
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <a href="{{ route('subject.add') }}" class="btn btn-primary">Add new Subject</a>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h5>Search Subject</h5>
                    </div>
                    <form action="" method="GET">

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Name">
                                </div>

                                <div class="form-group col-md-3">
                                    <button class="btn btn-primary" style="margin-top: 30px;">Search</button>
                                    <a href="" class="btn btn-success" style="margin-top: 30px;">Reset</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                @include('_message')

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Subject List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subject as $key=>$value)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->type }}</td>
                                    <td>{{ $value->status }}</td>
                                    <td>{{ $value->create_by }}</td>
                                    <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('subject.edit', $value->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('subject.delete', $value->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="padding: 10px; float:right">
                            {{ $subject->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>



@endsection