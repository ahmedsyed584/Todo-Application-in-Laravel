@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
         <form action="create/todos" method="post">
            {{ csrf_field() }}
            <input type="text" name="todo" class="form-control input-lg" placeholder="Create a Todo">
        </form>
        </div>
    </div>     
    <hr>
    @foreach($todos as $todo)

        {{ $todo->todo }} <a href="delete/todos/{{$todo->id}}" class="btn btn-danger">x</a>
        <a href="update/todos/{{$todo->id}}" class="btn btn-info btn-xs">update</a>
        <hr>
    @endforeach
@stop
