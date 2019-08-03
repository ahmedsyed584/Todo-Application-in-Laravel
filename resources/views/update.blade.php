@extends('layout')


@section('content')

<div class="row">
        <div class="col-lg-12">
         <form action="{{route('updated', ['id'=> $todo->id])}}" method="post">
            {{ csrf_field() }}
            <input type="text" name="todo" class="form-control input-lg" value="{{$todo->todo}}" placeholder="Create a Todo">
        </form>
        </div>
    </div>     
    <hr>
@stop