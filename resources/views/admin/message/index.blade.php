@extends('layouts.backend')

@section('content')
    <section class="content-header">
        <h1>
            Messages
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Message</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Messages</h3>
                    
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>IP</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->message}}</td>
                                <td>{{$message->ip}}</td>
                                <td>
                                    <form action="{{route('admin.message.destroy', ['id'=> $message->id])}}" method="post">
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