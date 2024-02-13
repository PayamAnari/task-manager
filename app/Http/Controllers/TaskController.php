<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskCollection;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(request $request)
    {

        return new TaskCollection(Task::all());
    }

    public function show(Request $request, Task $task)
    {
        return new TaskResource($task);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:225',
        ]);

        $task = Task::create($validated);
        return new TaskResource($task);
    }
}
