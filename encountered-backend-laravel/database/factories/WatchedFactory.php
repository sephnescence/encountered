<?php

namespace Database\Factories;

use App\Models\Performance;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Watched>
 */
class WatchedFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'performance_id' => Performance::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'notes' => fake()->text(),
        ];
    }
}
