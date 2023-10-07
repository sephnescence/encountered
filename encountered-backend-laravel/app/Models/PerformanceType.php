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

    public static string $PERFORMANCE_TYPE_ANIME = '06016e06-932d-4314-99ba-e45675630647';
    public static string $PERFORMANCE_TYPE_MOVIE = '5b128e18-0d98-49dd-ae57-0fd13e35e44a';

    public function performances(): HasMany
    {
        return $this->hasMany(Performance::class, 'performance_type_id');
    }
}
