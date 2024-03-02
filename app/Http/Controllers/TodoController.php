<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoController extends Controller
{
    public function index()
    {
        $todo = Task::all();

        return view('todo', [
            'todos' => $todo,
        ]);
    }

    public function store(Request $request)
    {
        $todo = new Task;
        $todo->name = $request->name;
        $todo->is_result = false;
        $todo->save();

        return redirect()->route('index');
    }
}
