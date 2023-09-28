<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watched extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'watched'; // Force Laravel refer to the non pluralised "watched"

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function performance()
    {
        return $this->belongsTo(Performance::class, 'performance_id');
    }
}
