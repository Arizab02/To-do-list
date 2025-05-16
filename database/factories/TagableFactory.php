<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\ToDoList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tagable>
 */
class TagableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tag_id' => Tag::all()->random()->id,
            'tagable_id' => fake()->randomElement([
                Tag::all()->random()->id,
                ToDoList::all()->random()->id,
            ]),
            'tagable_type' => fake()->randomElement([
                Tag::class,
                ToDoList::class,
            ]),
        ];
    }
}
