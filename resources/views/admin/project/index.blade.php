@extends('layouts.backend')

@section('content')
    <section class="content-header">
        <h1>
            Projects
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Projects</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Projects added</h3>
                    <div class="box-tools">
                        <a href="{{route('admin.project.create')}}" class="btn btn-primary">Add new Project</a>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Project Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{$project->name}}</td>
                                <td>{{$project->start_date}}</td>
                                <td>{{$project->end_date}}</td>
                                <td><span class="label label-{{$project->enable?"success":"danger"}}">{{$project->enable?"Enabled":"Disabled"}}</span></td>
                                <td>{{$project->description}}</td>
                                <td>
                                    <a href="{{route('admin.project.edit', ['id'=> $project->id])}}" class="btn btn-sm btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.project.destroy', ['id'=> $project->id])}}" method="post">
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