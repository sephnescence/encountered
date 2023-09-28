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
            $table->uuid()->primary();
            $table->text('name');
            $table->timestamps();
        });

        DB::table('roles')->insert([
            ['uuid' => Role::$ROLE_ADMIN, 'name' => 'Admin'],
            ['uuid' => Role::$ROLE_USER, 'name' => 'User'],
        ]);

        Schema::table('users', function (Blueprint $table) {
            $table->foreignUuid('role_id')->references('uuid')->on('roles');
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
