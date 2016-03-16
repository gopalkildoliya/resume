@extends('layouts.backend')

@section('content')
    <section class="content-header">
        <h1>
            Certifications
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Certifications</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

         <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Certificates added</h3>
                    <div class="box-tools">
                        <a href="{{route('admin.certification.create')}}" class="btn btn-primary">Add new Certificate</a>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Certification Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Certification Authority</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($certifications as $certification)
                            <tr>
                                <td>{{$certification->name}}</td>
                                <td>{{$certification->start_date}}</td>
                                <td>{{$certification->end_date}}</td>
                                <td><span class="label label-{{$certification->enable?"success":"danger"}}">{{$certification->enable?"Enabled":"Disabled"}}</span></td>
                                <td>{{$certification->authority}}</td>
                                <td>
                                    <a href="{{route('admin.certification.edit', ['id'=> $certification->id])}}" class="btn btn-sm btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.certification.destroy', ['id'=> $certification->id])}}" method="post">
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