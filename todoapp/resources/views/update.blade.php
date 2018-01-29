@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-lg-16">
            <form action="{{route('todo.save', ['id'=>$todo->id])}}" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control input-lg" value="{{$todo->todo}}" name="todo" placeholder="New todo">
            </form>
        </div>
    </div>
@stop
