<?php

namespace Database\Seeders;

use App\Models\Watched;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WatchedSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Watched::factory(1000)->create();
    }
}
