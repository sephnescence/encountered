<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, HasUuids;

    public static string $ROLE_ADMIN = '487f28cf-09ea-4de1-9592-45cc78177b70';
    public static string $ROLE_USER = '4a7bbb11-322f-4f45-a796-b3b3f62c8f9e';

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
