<?php

namespace App\Http\Controllers;

use App\Models\TaskResponse;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskResponseController extends Controller
{
    /**
     * Display a listing of the task responses.
     */
    public function index()
    {
        $taskResponses = TaskResponse::with(['task', 'helper'])->get();
        return view('task_responses.index', compact('taskResponses'));
    }

    /**
     * Show the form for creating a new task response.
     */
    public function create()
    {
        $tasks = Task::all();
        $users = User::all();
        return view('task_responses.create', compact('tasks', 'users'));
    }

    /**
     * Store a newly created task response in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string',
            'did_issuer_review' => 'required|boolean',
            'did_helper_review' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
            'task_id' => 'required|exists:tasks,id',
        ]);

        TaskResponse::create($validated);

        return redirect()->route('task_responses.index')->with('success', 'Task response created successfully.');
    }

    /**
     * Display the specified task response.
     */
    public function show(TaskResponse $taskResponse)
    {
        return view('task_responses.show', compact('taskResponse'));
    }

    /**
     * Show the form for editing the specified task response.
     */
    public function edit(TaskResponse $taskResponse)
    {
        $tasks = Task::all();
        $users = User::all();
        return view('task_responses.edit', compact('taskResponse', 'tasks', 'users'));
    }

    /**
     * Update the specified task response in storage.
     */
    public function update(Request $request, TaskResponse $taskResponse)
    {
        $validated = $request->validate([
            'message' => 'required|string',
            'did_issuer_review' => 'required|boolean',
            'did_helper_review' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
            'task_id' => 'required|exists:tasks,id',
        ]);

        $taskResponse->update($validated);

        return redirect()->route('task_responses.index')->with('success', 'Task response updated successfully.');
    }

    /**
     * Remove the specified task response from storage.
     */
    public function destroy(TaskResponse $taskResponse)
    {
        $taskResponse->delete();

        return redirect()->route('task_responses.index')->with('success', 'Task response deleted successfully.');
    }
}
