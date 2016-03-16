@extends('layouts.backend')

@section('content')
    <section class="content-header">
        <h1>
            Volunteer Experience
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Volunteer Experience</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Volunteer Experience added</h3>
                    <div class="box-tools">
                        <a href="{{route('admin.volunteer.create')}}" class="btn btn-primary">Add new Volunteer Experience</a>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Organization Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($volunteers as $volunteer)
                            <tr>
                                <td>{{$volunteer->organization}}</td>
                                <td>{{$volunteer->start_date}}</td>
                                <td>{{$volunteer->end_date}}</td>
                                <td><span class="label label-{{$volunteer->enable?"success":"danger"}}">{{$volunteer->enable?"Enabled":"Disabled"}}</span></td>
                                <td>{{$volunteer->description}}</td>
                                <td>
                                    <a href="{{route('admin.volunteer.edit', ['id'=> $volunteer->id])}}" class="btn btn-sm btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.volunteer.destroy', ['id'=> $volunteer->id])}}" method="post">
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