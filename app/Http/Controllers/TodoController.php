<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', [
            'todos' => $todos
        ]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoRequest $request)
    {
        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => 0

        ]);
        $request->session()->flash('alert-success', 'Todo created successfully!');
        return redirect(route('todos.index'));
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            request()->session()->flash('error', 'Todo does not exist!');
            return redirect(route('todos.index'))->withErrors([
                'error' => 'Todo does not exist'
            ]);
        }
        return view('todos.show', [
            'todo' => $todo
        ]);
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            request()->session()->flash('error', 'Todo does not exist!');
            return redirect(route('todos.index'))->withErrors([
                'error' => 'Todo does not exist'
            ]);
        }
        return view('todos.edit', [
            'todo' => $todo
        ]);
    }
    public function update(TodoRequest $request)
    {
        $todo = Todo::find($request->todo_id);
        if (!$todo) {
            request()->session()->flash('error', 'Todo does not exist!');
            return redirect(route('todos.index'))->withErrors([
                'error' => 'Todo does not exist'
            ]);
        }
        $todo->update([
           'title' => $request->title,
           'description' => $request->description,
            'is_completed' => $request->is_completed
        ]);
        $request->session()->flash('alert-info', 'Todo updated successfully!');
        return redirect(route('todos.index'));
    }
    public function delete(Request $request)
    {
        $todo = Todo::find($request->todo_id);
        if (!$todo) {
            request()->session()->flash('error', 'Todo does not exist!');
            return redirect(route('todos.index'))->withErrors([
                'error' => 'Todo does not exist'
            ]);
        }
        $todo->delete();
        $request->session()->flash('alert-success', 'Todo deleted successfully!');
        return redirect(route('todos.index'));
    }
}
