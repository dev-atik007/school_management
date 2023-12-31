@extends('layouts.app')
@section('content')



<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Assign Subject List</h1>
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <a href="{{ route('assign.add') }}" class="btn btn-primary">Add new Assign Subject</a>
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
                        <h5>Search Assign Subject</h5>
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
                        <h3 class="card-title">Subject Assign List</h3>
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
                                
                            </tbody>
                        </table>
                        <div style="padding: 10px; float:right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>



@endsection