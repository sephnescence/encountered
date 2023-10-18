<?php

namespace Database\Seeders;

use App\Models\Favourite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavouriteSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Favourite::factory(1000)->create();
    }
}
