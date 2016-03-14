@extends('layouts.backend')

@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Dashboard</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Skills</h3>
                    <hr>
                    <div class="">
                        <form class="form-inline" action="{{route('admin.skill.store')}}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Skill name">
                            </div>
                            <div class="form-group">
                                <label for="proficiency">Proficiency</label>
                                <input type="text" name="proficiency" class="form-control" id="proficiency" placeholder="100">
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
                            <button type="submit" class="btn btn-default">Add Skill</button>
                        </form>

                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Skill</th>
                            <th>proficiency</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($skills as $skill)
                            <tr>
                                <td>{{$skill->name}}</td>
                                <td>{{$skill->proficiency}}</td>
                                <td><span class="label label-{{$skill->enable?"success":"danger"}}">{{$skill->enable?"Enabled":"Disabled"}}</span></td>
                                <td>
                                    <a href="{{route('admin.skill.edit', ['id'=> $skill->id])}}" class="btn btn-sm btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.skill.destroy', ['id'=> $skill->id])}}" method="post">
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