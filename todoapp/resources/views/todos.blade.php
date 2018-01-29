@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control input-lg" name="todo" placeholder="New todo">
            </form>
        </div>
    </div>
    <hr>
    @foreach($todos as $todo)
        {{$todo->todo}} <a href="{{route('todo.delete', ['id' => $todo->id])}}" "btn btn-xs btn-danger"> x</a>
        <a href="{{route('todo.update', ['id' => $todo->id])}}" "btn btn-xs">Update</a>
        @if(!$todo->completed)
            <a href="{{route('todo.completed', ['id'=>$todo->id])}}" class="btn btn-xs btn-success">Mark as Completed</a>
        @else
            <span class="text-success">Completed!</span>
        @endif
        <hr>
    @endforeach


@stop
