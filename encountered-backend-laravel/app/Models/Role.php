<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public static int $ROLE_ADMIN = 1;
    public static int $ROLE_USER = 2;

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
