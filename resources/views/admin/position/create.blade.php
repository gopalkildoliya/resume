@extends('layouts.backend')
@section('head')
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css')}}">
@stop

@section('content')
    <section class="content-header">
        <h1>
            Project
            <small>Add new Position or Work Experience</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Position</a></li>
            <li class="active">create</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Position/Experience Details</h3>
                </div>

                <form role="form" method="post" action="{{route('admin.position.store')}}">
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" name="company" class="form-control" id="company" placeholder="Enter Company name">
                        </div>

                        <div class="form-group">
                            <label>Work Duration</label>
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
                                    <input type="checkbox" name="working" value="1"> Currently Working
                                </div>
                            </div><!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label for="title">Position Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Position Title">
                        </div>

                        <div class="form-group">
                            <label for="title">Work Location</label>
                            <input type="text" name="location" class="form-control" id="location" placeholder="Location">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="sort_order">Sort Order</label>
                            <input type="text" name="sort_order" class="form-control" id="sort_order" placeholder="0">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="enable" checked="checked" value="1"> Show this project on resume
                            </label>
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Add Position</button>
                        <a href="{{route('admin.position.index')}}" class="btn btn-warning">Cancel</a>
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