<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favourite>
 */
class FavouriteFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'actor_id' => Actor::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
