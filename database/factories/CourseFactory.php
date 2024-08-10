<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul"     => $this->faker->words(3, true),
            "deskripsi" => $this->faker->text(),
            // "durasi"    => "0" . $this->faker->randomNumber(2) . ":0" . $this->faker->randomNumber(2),
            "durasi"    => $this->faker->time('H:i', 'now'),
        ];
    }
}
