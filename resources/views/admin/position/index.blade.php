@extends('layouts.backend')

@section('content')
    <section class="content-header">
        <h1>
            Work Experience
            <small>Positions</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Position</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Positions added</h3>
                    <div class="box-tools">
                        <a href="{{route('admin.position.create')}}" class="btn btn-primary">Add new Position</a>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Company</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($positions as $position)
                            <tr>
                                <td>{{$position->company}}</td>
                                <td>{{$position->start_date}}</td>
                                <td>{{$position->end_date}}</td>
                                <td><span class="label label-{{$position->enable?"success":"danger"}}">{{$position->enable?"Enabled":"Disabled"}}</span></td>
                                <td>{{$position->title}}</td>
                                <td>
                                    <a href="{{route('admin.position.edit', ['id'=> $position->id])}}" class="btn btn-sm btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.position.destroy', ['id'=> $position->id])}}" method="post">
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