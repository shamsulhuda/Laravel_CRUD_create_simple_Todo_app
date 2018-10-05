@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-6 col-lg-offset-3" style="margin: 0 auto; float: none;">
        <form action="/create/todo" method="post">
            {{ csrf_field() }}
            <input class="form-control input-lg" name="todo" placeholder="Create a new todo"></input>
        </form>
        
    </div>
</div>


    <hr>

    @foreach($todos as $todo)
        {{ $todo->todo }} <a href="{{route('todo.delete', ['id'=>$todo->id])}}" class="btn btn-danger">X</a>
        <a href="{{route('todo.update', ['id'=>$todo->id])}}" class="btn btn-success xs-btn">Edit</a>


        @if(!$todo->completed)
            <a href="{{route('todos.completed', ['id'=>$todo->id])}}" class="btn btn-xs btn-info">Mark as completed</a>

        @else
            <span class="text-success">Completed!</span>

        @endif
        <hr>
    @endforeach

@stop