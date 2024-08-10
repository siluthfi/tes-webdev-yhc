<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul"      => $this->faker->words(3, true),
            "deskripsi"  => $this->faker->text(),
            "link_embed" => $this->faker->url(),
            "course_id"  => $this->faker->randomDigitNotNull(),
        ];
    }
}
