@extends('todos.layouts.app')
    @section('contend')
        <h1 class="text-center my-5">TODOS PAGE</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($todos as $todo)
                                <li class="list-group-item">
                                    @if($todo->completed)
                                        <h4 class="textDecoration">{{ $todo->name }}</h4>
                                    @else
                                    <h4>{{ $todo->name }}</h4>
                                    @endif
                                    <a href="{{route('todo',[$todo->id])}}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                                    <a href="{{route('delete',[$todo->id])}}" class="btn btn-danger btn-sm float-right mr-2">Delete</a>
                                    <a href="{{route('complete',[$todo->id])}}" class="btn btn-warning btn-sm float-right mr-2">Complete</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@section('title')
    <title>Todos</title>
    @endsection
