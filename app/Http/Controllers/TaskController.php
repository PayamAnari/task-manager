<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskCollection;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class TaskController extends Controller
{
    public function index(request $request)
    {
        $tasks = QueryBuilder::for(Task::class)
            ->allowedFilters('is_done')
            ->defaultSorts('created_at')
            ->allowedSorts('title', 'is_done', 'created_at')
            ->paginate();

        return new TaskCollection($tasks);
    }

    public function show(Request $request, Task $task)
    {

        return new TaskResource($task);
    }

    public function store(StoreTaskRequest $request)
    {
        $validated = $request->validated();

        $task = Task::create($validated);
        return new TaskResource($task);
    }

    public function update(updateTaskRequest $request, Task $task)
    {
        $validated = $request->validated();

        $task->update($validated);
        return new TaskResource($task);
    }

    public function destroy(Request $request, Task $task)
    {
        $task->delete();
        return response()->noContent();
    }
}
