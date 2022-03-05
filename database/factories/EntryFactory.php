<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class EntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'command' => $this->faker->jobTitle(),
            'info' => $this->faker->text(),
            'dictionary_id' => \rand(1, 4),
            'user_id' => \rand(1, 3),
            'ip' => '127.0.0.1',
            'library' => $this->faker->name(),
            'example' => $this->faker->text(),
            'validated' => true,
        ];
    }
}
