@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage  Employee Salary</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active"> Employee Salary</li>
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
                            <h3>
                                Add/Edit  Employee Salary
                                <a class="btn btn-success float-right btn-sm" href="{{ route('accounts.fee.view') }}"><i class="fa fa-list"></i>  Employee Salary List</a>
                            </h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="control-label">Date</label>
                                    <input type="text" name="date" id="date" class="form-control form-control-sm singledatepicker" autocomplete="off" placeholder="Date" readonly>
                                </div>
                                <div class="form-group col-md-2">
                                    <a class="btn btn-sm btn-success" id="search" style="margin-top: 31px; color: white">Search</a>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                        <div class="card-body">
                            <div id="DocumentResults"></div>
                            <script id="document-templete" type="text/x-handlebars-template">
                                <form action="{{ route('accounts.salary.store') }}" method="POST">
                                    @csrf

                                    <table class="table-sm table-bordered table-striped" style="width: 100%">
                                        <thead>
                                            <tr>
                                                @{{{thsource}}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @{{#each this}}
                                            <tr>
                                                @{{{tdsource}}}
                                            </tr>
                                            @{{/each}}
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 10px">Submit</button>
                                </form>
                            </script>
                        </div>

                    </div>
                    <!-- /.card -->
                </section>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script type="text/javascript">
    $(document).on('click', '#search', function() {
        var date = $('#date').val();
        $('.notifyjs-corner').html('');
        if (date == '') {
            $.notify("Date required", {globalPosition: 'top right',className: 'error'});
            return false;
        }
        $.ajax({
           url: "{{ route('accounts.salary.getemployee') }}",
           type: "GET",
           data: {'date':date},
           beforeSend: function() {

           },
           success: function (data) {
               var source = $("#document-templete").html();
               var template = Handlebars.compile(source);
               var html = template(data);
               $('#DocumentResults').html(html);
               $('[data-toggle="tooltip"]').tooltip();
           }
        });
    });
</script>


@endsection
