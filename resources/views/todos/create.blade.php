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
    <form action="{{route('insert')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input name="description" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input name="completed" value="1" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label  class="form-check-label" for="exampleCheck1">Completed</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
@section('title')
    <title> Create todo </title>
@endsection
