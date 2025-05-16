<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ToDoList>
 */
class ToDoListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'body' => fake()->paragraph(3),
            'user_id' => User::all()->random()->id,
            'status' => fake()->randomElement(['Selesai', 'Belum dikerjakan', 'Berjalan'])
        ];
    }
}
