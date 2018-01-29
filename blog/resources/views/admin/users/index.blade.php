@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Users
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Permissions</th>
                    <th>Delete</th>
                </tr>
                </thead>

                <tbody>
                @if($users->count() > 0)
                    @foreach($users as $user)
                        <tr>
                            <td>
                                @foreach($profiles as $profile)
                                <img src="{{$profile->avatars}}" width="60px" height="60px" style="border-radius: 50%">
                                @endforeach
                            </td>

                            <td>
                                {{$user->name}}
                            </td>

                            <td>
                                @if($user->admin)
                                    <a href="{{route('user.notadmin', ['id'=>$user->id])}}" class="btn btn-xs btn-danger">Remove admin</a>
                                @else
                                    <a href="{{route('user.admin', ['id'=>$user->id])}}" class="btn btn-xs btn-success">Make admin</a>
                                @endif
                            </td>

                            <td>
                                @if(Auth::id() !== $user->id)
                                    <a href="{{route('user.delete', ['id'=>$user->id])}}" class="btn btn-xs btn-danger">Delete</a>
                                @else
                                    <button class="btn btn-xs btn-info">Can not delete</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No users</th>
                    </tr>
                @endif
                </tbody>

            </table>
        </div>
    </div>

@stop