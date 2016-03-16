@extends('layouts.backend')
@section('head')
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css')}}">
@stop

@section('content')
    <section class="content-header">
        <h1>
            Certificate
            <small>Add new Certificate</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Certification</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Certificate Details</h3>
                </div>

                <form role="form" method="post" action="{{route('admin.certification.store')}}">
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Certification Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Certification Name">
                        </div>

                        <div class="form-group">
                            <label>Duration</label>
                            <div class="input-group">
                                <div class="input-group-addon">Start Date
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="start_date" id="start_date">
                                <div class="input-group-addon">End Date
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="end_date" id="end_date">
                                <div class="input-group-addon">
                                    <input type="checkbox" name="unlimited" value="1"> This certificate does not expire
                                </div>
                            </div><!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label for="authority">Certification Authority</label>
                            <input type="text" name="authority" class="form-control" id="authority" placeholder="Enter Certification Authority">
                        </div>
                        
                        <div class="form-group">
                            <label for="license_number">License Number</label>
                            <input type="text" name="license_number" class="form-control" id="license_number" placeholder="Enter License Number">
                        </div>
                        
                        <div class="form-group">
                            <label for="url">Certification URL</label>
                            <input type="text" name="url" class="form-control" id="url" placeholder="Enter Certification Url">
                        </div>

                        <div class="form-group">
                            <label for="sort_order">Sort Order</label>
                            <input type="text" name="sort_order" class="form-control" id="sort_order" placeholder="0">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="enable" checked="checked" value="1"> Show this certificate on resume
                            </label>
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Add Certificate</button>
                        <a href="{{route('admin.certification.index')}}" class="btn btn-warning">Cancel</a>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>

    </section><!-- /.content -->
@stop

@section('scripts')
    <script src="{{asset('plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script>
        $(function () {
            $('#start_date').daterangepicker({
                singleDatePicker: true,
                "showDropdowns": true,
                locale: {
                    format: 'YYYY-MM-DD'
                }
            });


            $('#end_date').daterangepicker({
                singleDatePicker: true,
                "showDropdowns": true,
                locale: {
                    format: 'YYYY-MM-DD'
                }
            });
        });
    </script>
    @stop