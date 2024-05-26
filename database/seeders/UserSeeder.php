<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insertOrIgnore([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'username' => 'john_doe',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'),
                'home_address' => '123 Main St',
                'home_coordinates' => DB::raw("ST_GeomFromText('POINT(30.2672 -97.7431)', 4326)"),
                'phone_num' => '123-456-7890',
                'is_online' => false,
                'points' => 0,
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'username' => 'jane_smith',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'),
                'home_address' => '456 Elm St',
                'home_coordinates' => DB::raw("ST_GeomFromText('POINT(40.7128 -74.0060)', 4326)"),
                'phone_num' => '987-654-3210',
                'is_online' => false,
                'points' => 0,
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
