<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Actor::factory(10)->create();
    }
}
