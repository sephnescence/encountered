<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Ramsey\Uuid\Uuid;

/**
 * @property Actor $actor
 * @property Carbon $created_at
 * @property Carbon $deleted_at
 * @property Uuid $id
 * @property Performance $performance
 * @property Carbon $updated_at
 */
class Cast extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'cast'; // Force Laravel to refer to the non pluralised "cast"

    public function actor(): BelongsTo
    {
        return $this->belongsTo(Actor::class, 'actor_id');
    }

    public function performance(): BelongsTo
    {
        return $this->belongsTo(Performance::class, 'performance_id');
    }
}
