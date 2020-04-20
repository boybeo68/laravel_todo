@extends('todos.layouts.app')
@section('contend')
    <h1 class="text-center my-5">{{ $todo->name }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>
            </div>
        </div>

    </div>
    <div class="row justify-content-center ">
        <a href="{{route('edit',[$todo->id])}}" class="btn btn-primary btn-sm ">Edit</a>
    </div>
    @endsection
@section('title')
    <title> {{ $todo->id}}: {{ $todo->name}}</title>
@endsection
