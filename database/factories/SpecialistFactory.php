<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class SpecialistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->firstName(), 
            'last_name' => fake()->lastName(), 
            'year_of_birth' => fake()->year(),
            'year_of_starting' => fake()->year(),
            'about_text' => fake()->text($maxNbChars = 200),
            'education_text' => fake()->text($maxNbChars = 200),
            'doesnt_work_with' => fake()->sentence(),
        ];
    }
}
