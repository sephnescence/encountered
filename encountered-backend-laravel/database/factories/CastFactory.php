<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\Performance;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cast>
 */
class CastFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Example of a foreign key / HasOne / BelongsTo relationship
            'actor_id' => Actor::all()->random()->id,
            'performance_id' => Performance::all()->random()->id,
        ];
    }
}
