@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')


    <div class="panel panel-default">

        <div class="panel-heading">
            Edit your profile
        </div>

        <div class="panel-body">
            <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="name">Upload avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">New password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Facebook</label>
                    <input type="text" name="facebook" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Youtube</label>
                    <input type="text" name="youtube" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Twitter</label>
                    <input type="text" name="twitter" class="form-control">
                </div>

                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" id="about" cols="6" rows="6"></textarea>
                </div>



                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop