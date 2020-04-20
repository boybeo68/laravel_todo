@extends('todos.layouts.app')
@section('contend')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="text-center my-5">Edit Todos</h1>
    <form action="{{route('editTodo',[$todo->id])}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input value="{{$todo->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input value="{{$todo->description}}" name="description" type="text" class="form-control"
                   id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
@section('title')
    <title> Edit todo </title>
@endsection
