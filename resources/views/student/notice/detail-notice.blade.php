@extends('student.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Notice Board</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('student.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"></li> Notice Board</li>
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
                            <h3>Student Notice Board</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div style="border: solid 2px; padding: 7px">
                                <div class="row">
                                    <div style="float: right;" class="col-md-3 text-center">
                                        <img src="{{ url('upload/abc_school.jpg') }}" alt="" style="width: 120px; height: 120px">
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4 text-center" style="float: left;">
                                        <h4><strong>ABC School</strong></h4>
                                        <h5><strong>Ashuliya, Savar, Dhaka - 1216</strong></h5>
                                        <h6><strong><u><i>Notice Board</i></u></strong></h6>
                                        <h6><strong>Subject : {{ $detailsData->subject }}</strong></h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr style="border: solid 1px; width: 100%; color: #DDD; margin-bottom: 0px">
                                    <p style="text-align: right"><u><i>Print Date : </i>{{ date("d M Y") }}</u></p>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="description" style="margin: 0px 50px">
                                            {!! $detailsData->description !!}
                                        </div>
                                    </div>

                                </div><br>



                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <hr style="border: solid 1px; width: 60%; color: #000; margin-bottom: -3px;">
                                        <div class="text-center">Principal/Headmaster</div>
                                    </div>
                                </div>

                            </div>
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
