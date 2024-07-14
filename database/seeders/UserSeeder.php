<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Task;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->count(10)
            ->has(Task::factory()->count(3)) // This line creates 3 tasks for each user
            ->create();
    }
}
