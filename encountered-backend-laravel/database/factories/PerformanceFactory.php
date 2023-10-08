<?php

namespace Database\Factories;

use App\Models\PerformanceType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Performance>
 */
class PerformanceFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            // Example of a foreign key / HasOne / BelongsTo relationship
            'performance_type_id' => PerformanceType::all()->random()->id,
        ];
    }
}
