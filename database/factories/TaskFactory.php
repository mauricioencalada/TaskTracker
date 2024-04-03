<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' =>$this->faker->sentence,
            'descripcion' =>$this->faker->paragraph,
            'slug'=>$this->faker->slug(),    
            'completed' =>$this->faker->boolean,
            'start_date' =>$this->faker->dateTimeBetween('-1 month', 'now') ,
            'due_date' =>$this->faker->dateTimeBetween('now', '+1 month') ,
        ];
    }
}
