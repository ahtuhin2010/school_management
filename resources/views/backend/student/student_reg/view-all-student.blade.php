@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Students</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Students</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-md-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3>All Student List
                                <a class="btn btn-success float-right btn-sm" href="{{ route('students.registration.add') }}"><i class="fa fa-plus-circle"></i> Add Student</a>
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="7%">SL.</th>
                                        <th>Name</th>
                                        {{-- <th>ID NO</th>
                                        <th>Roll</th>
                                        <th>Year</th>
                                        <th>Class</th>
                                        <th>Image</th> --}}
                                        @if (Auth::user()->usertype=='admin')
                                        <th>Email</th>
                                        @endif
                                        <th width="14%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($student as $key => $value)
                                    <tr class="{{ $value->id }}">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        {{-- <td>{{ $value['student']['id_no'] }}</td>
                                        <td>{{ $value->roll }}</td>
                                        <td>{{ $value['year']['name'] }}</td>
                                        <td>{{ $value['student_class']['name'] }}</td>
                                        <td>
                                            <img src="{{ (!empty($value['student']['image']))?url('upload/student_images/'.$value['student']['image']):url('upload/no_image.png') }}" style="width: 70px;height:80px;">
                                        </td> --}}
                                        @if (Auth::user()->usertype=='admin')
                                        <td>{{ $value->email }}</td>
                                        @endif

                                        <td>
                                            <a title="Edit" class="btn btn-sm btn-primary" href="{{ route('students.registration.edit', $value->student_id) }}"><i class="fa fa-edit"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
