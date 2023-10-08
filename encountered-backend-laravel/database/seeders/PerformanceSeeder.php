<?php

namespace Database\Seeders;

use App\Models\Performance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerformanceSeeder extends Seeder
{
    use WithoutModelEvents;
    
    public function run(): void
    {
        Performance::factory(10)->create();
    }
}
