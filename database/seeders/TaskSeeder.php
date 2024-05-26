<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve the seeded users
        $user1 = User::where('email', 'john@example.com')->first();
        $user2 = User::where('email', 'jane@example.com')->first();

        // Seed tasks for the first user
        if ($user1) {
            DB::table('tasks')->insert([
                [
                    'title' => 'Fix Electrical Wiring',
                    'description' => 'Repair the electrical wiring in the living room.',
                    'deadline' => Carbon::now()->addDays(5),
                    'is_complete' => false,
                    'user_id' => $user1->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Install New Software',
                    'description' => 'Install the latest version of the accounting software.',
                    'deadline' => Carbon::now()->addDays(10),
                    'is_complete' => false,
                    'user_id' => $user1->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }

        // Seed tasks for the second user
        if ($user2) {
            DB::table('tasks')->insert([
                [
                    'title' => 'Plumbing Issue in Kitchen',
                    'description' => 'Fix the leaking sink in the kitchen.',
                    'deadline' => Carbon::now()->addDays(7),
                    'is_complete' => false,
                    'user_id' => $user2->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Network Setup',
                    'description' => 'Set up a new network for the office.',
                    'deadline' => Carbon::now()->addDays(15),
                    'is_complete' => false,
                    'user_id' => $user2->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }
    }
}
