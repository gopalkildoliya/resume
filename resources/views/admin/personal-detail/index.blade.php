@extends('layouts.backend')

@section('content')
    <section class="content-header">
        <h1>
            Personal Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard active"></i> Personal Details</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Personal Details</h3>
                </div>
                @if($detail!=null)
                <form role="form" method="post" action="{{route('admin.personal-detail.update', ['id'=> $detail->id])}}">
                    {!! method_field('put') !!}
                @else
                    <form role="form" method="post" action="{{route('admin.personal-detail.store')}}">
                @endif
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$detail->name or 'Your Name'}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{$detail->email or 'gopalkildoliya@gmail.com'}}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone No</label>
                            <input type="text" name="phone" class="form-control" id="phone" value="{{$detail->phone or 'xxxxxxxxxx'}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="text" name="image" class="form-control" id="image" value="{{$detail->image or 'images/profile.jpg'}}">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control" id="address">{{$detail->address or 'Your address'}}</textarea>
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update Details</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>


    </section><!-- /.content -->
@stop