<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceType extends Model
{
    use HasFactory, HasUuids;

    public function performances()
    {
        return $this->hasMany(Performance::class, 'performance_type_id');
    }
}
