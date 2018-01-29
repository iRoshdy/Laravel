@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">

        <div class="panel-heading">
            Update category: {{$tags->tag}}
        </div>

        <div class="panel-body">
            <form action="{{route('tag.update', ['id'=>$tags->id])}}" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="tag" value="{{$tags->tag}}" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update tag</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop