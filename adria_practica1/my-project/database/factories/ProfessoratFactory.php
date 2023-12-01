<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professorat>
 */
class ProfessoratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Crea i omple la taula Professorat amb els següents atributs
            'name' => fake()->text(30),
            'surname' => fake()->text(30),
            'email' => fake()->text(30)
        ];
    }
}
