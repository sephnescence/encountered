<?php

namespace Database\Seeders;

use App\Models\Cast;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CastSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Cast::factory(100)->create();
    }
}
