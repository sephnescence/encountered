<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Ramsey\Uuid\Uuid;

/**
 * @property array<Cast> $cast
 * @property Carbon $created_at
 * @property Carbon $deleted_at
 * @property Uuid $id
 * @property string $image_location
 * @property string $name
 * @property PerformanceType $performanceType
 * @property Carbon $updated_at
 * @property array<Watched> $watched
 */
class Performance extends Model
{
    use HasFactory, HasUuids;

    public function cast(): HasMany
    {
        return $this->hasMany(Cast::class, 'performance_id');
    }

    public function performanceType(): BelongsTo
    {
        return $this->belongsTo(PerformanceType::class, 'performance_type_id');
    }

    public function watched(): HasMany // BTTODO - Curious if this works since it's not a plural
    {
        return $this->hasMany(Watched::class, 'performance_id');
    }
}
