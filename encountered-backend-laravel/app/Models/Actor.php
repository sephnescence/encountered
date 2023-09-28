<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    public function favourites()
    {
        return $this->hasMany(Favourite::class, 'actor_id');
    }

    public function cast()
    {
        return $this->hasMany(Cast::class, 'actor_id');
    }
}
