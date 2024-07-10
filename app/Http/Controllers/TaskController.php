<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
{
    $task = Task::create([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return response()->json($task);
}
}
