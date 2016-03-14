@extends('layouts.backend')

@section('content')
    <section class="content-header">
        <h1>
            Education
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Education</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Educations added</h3>
                    <div class="box-tools">
                        <a href="{{route('admin.education.create')}}" class="btn btn-primary">Add new Education</a>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Degree, Field</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>School</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($educations as $education)
                            <tr>
                                <td>{{$education->degree}}, {{$education->field}}</td>
                                <td>{{$education->start_date}}</td>
                                <td>{{$education->end_date}}</td>
                                <td><span class="label label-{{$education->enable?"success":"danger"}}">{{$education->enable?"Enabled":"Disabled"}}</span></td>
                                <td>{{$education->school}}</td>
                                <td>
                                    <a href="{{route('admin.education.edit', ['id'=> $education->id])}}" class="btn btn-sm btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.education.destroy', ['id'=> $education->id])}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div><!-- /.box-body -->
            </div>
        </div>

    </section><!-- /.content -->
@stop