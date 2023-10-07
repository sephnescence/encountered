<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Ramsey\Uuid\Uuid;

/**
 * @property Carbon $created_at
 * @property Carbon $deleted_at
 * @property Uuid $id
 * @property string $name
 * @property array<Performance> $performances
 * @property Carbon $updated_at
 */
class PerformanceType extends Model
{
    use HasFactory, HasUuids;

    public static string $PERFORMANCE_TYPE_ANIMATED_MOVIE = 'fb230e6c-dc78-4525-ac7b-53f0875580e4';
    public static string $PERFORMANCE_TYPE_ANIMATED_SERIES = '8e79599c-bd11-43b9-9a8a-1bdbcc632aca';
    public static string $PERFORMANCE_TYPE_GAME = '1666e03d-a87c-416c-8b93-39bbd083748d';
    public static string $PERFORMANCE_TYPE_LIVE_ACTION_MOVIE = '8002c726-fd4f-4c26-b0ca-d3a3ec6bfafc';
    public static string $PERFORMANCE_TYPE_LIVE_ACTION_SERIES = 'b3518707-0221-4f7c-8c2d-4f02a39dc4b9';
    public static string $PERFORMANCE_TYPE_PLAY = '6de838ce-e8a3-4384-9e81-4ea643bee530';
    public static string $PERFORMANCE_TYPE_SINGER = '3dc4af70-3b24-4b53-8f4c-1c6c6f3fed5a';
    
    public function performances(): HasMany
    {
        return $this->hasMany(Performance::class, 'performance_type_id');
    }
}
