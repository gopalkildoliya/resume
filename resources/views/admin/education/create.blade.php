@extends('layouts.backend')
@section('head')
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css')}}">
@stop

@section('content')
    <section class="content-header">
        <h1>
            Education
            <small>Add new Project</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Education</a></li>
            <li class="active">create</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Education Details</h3>
                </div>

                <form role="form" method="post" action="{{route('admin.education.store')}}">
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="school">School/College</label>
                            <input type="text" name="school" class="form-control" id="school" placeholder="Enter school name">
                        </div>

                        <div class="form-group">
                            <label>Education Duration</label>
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
                                    <input type="checkbox" name="studding" value="1"> Ongoing Study
                                </div>
                            </div><!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label for="degree">Degree</label>
                            <input type="text" name="degree" class="form-control" id="degree" placeholder="Enter degree">
                        </div>

                        <div class="form-group">
                            <label for="name">Field of study</label>
                            <input type="text" name="field" class="form-control" id="field" placeholder="Enter field of study">
                        </div>

                        <div class="form-group">
                            <label for="name">Grade</label>
                            <input type="text" name="grade" class="form-control" id="grade" placeholder="Enter grade">
                        </div>

                        <div class="form-group">
                            <label for="description">Activities</label>
                            <textarea name="activities" class="form-control" id="activities"></textarea>
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
                                <input type="checkbox" name="enable" checked="checked" value="1"> Show on resume
                            </label>
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Add Education</button>
                        <a href="{{route('admin.education.index')}}" class="btn btn-warning">Cancel</a>
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