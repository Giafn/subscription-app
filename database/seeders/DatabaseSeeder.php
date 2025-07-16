<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'id' => Str::uuid(),
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        Plan::insert([
            [
                'id' => Str::uuid(),
                'name' => 'Bulanan',
                'type' => 'recurring',
                'price' => 100000,
                'duration_days' => 30,
                'description' => 'Unlimited Event, Gratis 2x Team Support Lomba, Server Mandiri, Unlimited Juri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Per Lomba',
                'type' => 'one_time',
                'price' => 50000,
                'duration_days' => null,
                'description' => 'Untuk 1 Event, Server Shared, Unlimited Juri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
