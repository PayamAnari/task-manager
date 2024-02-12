<?php

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(request $request)
    {

        return response()->json(Task::all());
    }
}
