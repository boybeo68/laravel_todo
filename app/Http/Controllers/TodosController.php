<?php

namespace App\Http\Controllers;

use App\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index()
    {
        $todos = Todos::all();
        return view('todos.index')->with(['todos' => $todos]);
    }

    public function show(Todos $todo)
    {
        return view('todos.show')->with(['todo' => $todo]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function insertData(Request $request)
    {
        $this->validate($request, ['name' => 'required|min:6', 'description' => 'required']);
        $data = $request->all();
        $todo = new Todos();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        if ($request->has('completed')) {
            $todo->completed = $data['completed'];
        } else {
            $todo->completed = false;
        }
        session()->flash('success', 'Todo created successfully.');
        $todo->save();
        return redirect('todos');
    }

    public function delete(Todos $todo)
    {
        $todo->delete();
        session()->flash('success', 'Todo delete successfully.');
        return redirect('todos');
    }

    public function edit(Todos $todo)
    {
        return view('todos.edit')->with('todo', $todo);
    }

    public function editTodo(Todos $todo)
    {
        $this->validate(request(), ['name' => 'required|min:6', 'description' => 'required']);
        $data = request()->all();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        if (key_exists('completed', $data)) {
            $todo->completed = $data['completed'];
        } else {
            $todo->completed = false;
        }
        $todo->save();
        session()->flash('success', 'Todo edit successfully.');
        return redirect('todos');
    }

    public function complete(Todos $todo)
    {
        if ($todo->completed) {
            $todo->completed = false;
        } else {
            $todo->completed = true;
        }
        $todo->save();
        session()->flash('success', 'Todo complete successfully.');
        return redirect('todos');
    }
}
