<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'cast'; // Force Laravel refer to the non pluralised "cast"

    public function actor()
    {
        return $this->belongsTo(Actor::class, 'actor_id');
    }

    public function performance()
    {
        return $this->belongsTo(Performance::class, 'performance_id');
    }
}
