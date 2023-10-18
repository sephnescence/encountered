<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    
    public function run(): void
    {
        $this->call([
            ActorSeeder::class,
            PerformanceSeeder::class,
            CastSeeder::class,
            UserSeeder::class,
            FavouriteSeeder::class,
            WatchedSeeder::class,
        ]);
    }
}
