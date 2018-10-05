@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12" style="margin: 0 auto; float: none;">
        <form action="{{Route('todos.save',['id'=>$todo->id])}}" method="post">
            {{ csrf_field() }}
            <input class="form-control input-lg" name="todo" value="{{$todo->todo}}"></input>
        </form>
        
    </div>
</div>



@stop