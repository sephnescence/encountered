<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Ramsey\Uuid\Uuid;

/**
 * @property array<string> $aliases
 * @property array<Cast> $cast
 * @property Carbon $created_at
 * @property Carbon $deleted_at
 * @property array<Favourite> $favourites
 * @property Uuid $id
 * @property string $name
 * @property Carbon $updated_at
 */
class Actor extends Model
{
    use HasFactory, HasUuids;

    public function cast(): HasMany // BTTODO - Curious if this works since it's not a plural
    {
        return $this->hasMany(Cast::class, 'actor_id');
    }

    public function favourites(): HasMany
    {
        return $this->hasMany(Favourite::class, 'actor_id');
    }
}
