<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // for ($i=1; $i < 11; $i++) { 
        //     Group::create([
        //         'name' => 'Name' . $i,
        //         'order' => rand(1,10)
        //     ]); 
        // }

        for ($i=1; $i < 20; $i++) { 
            Task::create([
                'name' => fake()->name(),
                'content' => fake()->text(30),
                'status' => rand(1,4)
            ]);
        }
    }
}
