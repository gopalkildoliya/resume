@extends('layouts.backend')
@section('head')
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css')}}">
@stop

@section('content')
    <section class="content-header">
        <h1>
            Education
            <small>Edit Education</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Education</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Education Details</h3>
                </div>

                <form role="form" method="post" action="{{route('admin.skill.update', ['id'=> $skill->id])}}">
                    {!! csrf_field() !!}
                    {!! method_field('put') !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="skill">Skill</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$skill->name}}">
                        </div>

                        <div class="form-group">
                            <label for="proficiency">Proficiency</label>
                            <input type="text" name="proficiency" class="form-control" id="proficiency" value="{{$skill->proficiency}}">
                        </div>

                        <div class="form-group">
                            <label for="sort_order">Sort Order</label>
                            <input type="text" name="sort_order" class="form-control" id="sort_order" value="{{$skill->sort_order}}">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="enable" {{$skill->enable?"checked":""}} value="1"> Show on resume
                            </label>
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update Skill</button>
                        <a href="{{route('admin.skill.index')}}" class="btn btn-warning">Cancel</a>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>

    </section><!-- /.content -->
@stop
