<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ToDoList;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Sudo',
            'email' => 'Test@example.com',
            'password' => 'admin123',
        ]);
        User::factory(10)->create();
        ToDoList::factory(100)->create();
        Tag::factory(10)->create();
    }
}
