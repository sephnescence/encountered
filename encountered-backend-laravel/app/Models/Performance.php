<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    public function cast()
    {
        return $this->hasMany(Cast::class, 'performance_id');
    }

    public function watched()
    {
        return $this->hasMany(Watched::class, 'performance_id');
    }

    public function performanceType()
    {
        return $this->hasOne(PerformanceType::class, 'performance_type_id');
    }
}
