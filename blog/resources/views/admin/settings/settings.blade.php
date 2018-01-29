@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')


    <div class="panel panel-default">

        <div class="panel-heading">
            Edit Blog's settings
        </div>

        <div class="panel-body">
            <form action="{{route('settings.update')}}" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="name">Stite name</label>
                    <input type="text" name="site_name" value="{{$settings[0]->site_name}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" name="address" value="{{$settings[0]->address}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Contact Email</label>
                    <input type="email" name="contact_email" value="{{$settings[0]->contact_email}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Contact Number</label>
                    <input type="text" name="contact_number" value="{{$settings[0]->contact_number}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">About blog</label>
                    <input type="text" name="about" value="{{$settings[0]->about}}" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Submit settings</button>
                    </div>
                </div>



            </form>
        </div>
    </div>
@stop