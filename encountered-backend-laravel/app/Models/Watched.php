<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Ramsey\Uuid\Uuid;

/**
 * @property Carbon $created_at
 * @property Carbon $deleted_at
 * @property Uuid $id
 * @property Performance $performance
 * @property Carbon $updated_at
 * @property User $user
 */
class Watched extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'watched'; // Force Laravel to refer to the non pluralised "watched"

    public function performance(): BelongsTo
    {
        return $this->belongsTo(Performance::class, 'performance_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
