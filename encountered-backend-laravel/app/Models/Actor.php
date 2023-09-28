<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory, HasUuids;

    public function favourites()
    {
        return $this->hasMany(Favourite::class, 'actor_id');
    }

    public function cast()
    {
        return $this->hasMany(Cast::class, 'actor_id');
    }
}
