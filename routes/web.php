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
// Route::get('/taskcard', function () {
//     $task = Task::firstOrFail(); // Fetch the first task; if no task exists, it will throw an exception

//     // Optionally, provide a default image path if your tasks don't include images
//     // $image = asset('path/to/default-image.jpg'); // Use a default or specific path if no image

//     // Pass the task data to the view
//     return view('taskcard', [
//         'title' => $task->title,
//         'description' => $task->description,
//         // 'deadline' => $task->deadline->format('Y-m-d H:i:s') // Now this should work correctly
//     ]);
// });

Route::get('/taskcard', function () {
    $tasks = Task::all(); // Fetch all tasks

    return view('taskcard', [
        'tasks' => $tasks // Pass all tasks to the view
    ]);
});
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
