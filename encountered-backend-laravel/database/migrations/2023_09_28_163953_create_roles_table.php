<?php

use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('name');
            $table->timestamps();
        });

        DB::table('roles')->insert([
            ['id' => Role::$ROLE_ADMIN, 'name' => 'Admin'],
            ['id' => Role::$ROLE_USER, 'name' => 'User'],
        ]);

        Schema::table('users', function (Blueprint $table) {
            $table->foreignUuid('role_id')->constrained('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
