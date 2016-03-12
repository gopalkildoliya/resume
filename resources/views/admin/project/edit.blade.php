@extends('layouts.backend')
@section('head')
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css')}}">
@stop

@section('content')
    <section class="content-header">
        <h1>
            Project
            <small>Edit Project</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Project</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Project Details</h3>
                </div>

                <form role="form" method="post" action="{{route('admin.project.update', ['id'=> $project->id])}}">
                    {!! csrf_field() !!}
                    {!! method_field('put') !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Project Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$project->name}}">
                        </div>

                        <div class="form-group">
                            <label>Project Duration</label>
                            <div class="input-group">
                                <div class="input-group-addon">Start Date
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="start_date" id="start_date" value="{{$project->start_date}}">
                                <div class="input-group-addon">End Date
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="end_date" id="end_date" value="{{$project->end_date}}">
                                <div class="input-group-addon">
                                    <input type="checkbox" name="working" value="1" {{$project->working?"checked":""}}> Ongoing Project
                                </div>
                            </div><!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                        <div class="form-group">
                            <label for="url">Project Url</label>
                            <input type="text" name="url" class="form-control" id="url" value="{{$project->url}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Project Description</label>
                            <textarea name="description" class="form-control" id="description">{{$project->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="sort_order">Sort Order</label>
                            <input type="text" name="sort_order" class="form-control" id="sort_order" value="{{$project->sort_order}}">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="enable" {{$project->enable?"checked":""}} value="1"> Show this project on resume
                            </label>
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update Project</button>
                        <a href="{{route('admin.project.index')}}" class="btn btn-warning">Cancel</a>
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
            });

            $('#start_date').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD'));
            });
            $('#end_date').daterangepicker({
                singleDatePicker: true,
                "showDropdowns": true,
            });
            $('#end_date').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD'));
            });
        });
    </script>
@stop