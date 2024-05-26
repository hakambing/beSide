<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Task;
use App\Models\Category;

class Category_TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve all tasks and categories
        $tasks = Task::all();
        $categories = Category::all();

        // Assign each task to a random set of categories
        foreach ($tasks as $task) {
            // Select a random number of categories
            $randomCategories = $categories->random(rand(1, 3));

            // Attach each selected category to the task
            foreach ($randomCategories as $category) {
                DB::table('category_task')->insert([
                    'task_id' => $task->id,
                    'category_id' => $category->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
