<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTask;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate();
        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function show(Task $task)
    {
        return view('task.show', compact('task'));
    }

    public function store(StoreTask $request)
    {

        $task = Task::create($request->all());

        return redirect()->route('tasks.show', $task);
    }

    public function edit(Task $task)
    {

        return view('task.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {

        $request->validate([
            'titulo' => 'required|string|max:255|min:3',
            'slug'=> 'required|unique:tasks,slug,'.$task->id,
            'descripcion' => 'required|string',
            'completed' => 'required|boolean',
            'start_date' => 'required|date',
            'due_date' => 'required|date',
        ]);
        $task->update($request->all());
        return redirect()->route('tasks.show', $task);
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('tasks.index');

    }
}
