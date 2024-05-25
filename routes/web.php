<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Task; // Ensure you have a Task model

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});

//  for /task page ------------------------------------------------------------------------------------------
// Define the route for /taskcard

Route::get('/taskcard', function () {
    $tasks = Task::all(); // Fetch all tasks . if i want fetch just one or first one use 'Task::firstOrFail();'  

    return view('taskcard', [
        'tasks' => $tasks // Pass all tasks to the view
    ]);
});
Route::get('taskcard', [TaskController::class, 'taskcard'])->name('taskcard');
// ---------------------------------------------------------------------------------------------------------


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes for creating a task
    Route::get('/dashboard/create-task', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/dashboard/create-task', [TaskController::class, 'store'])->name('tasks.store');
});

require __DIR__.'/auth.php';
