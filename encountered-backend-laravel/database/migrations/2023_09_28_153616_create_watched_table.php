<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('watched', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(new Expression('gen_random_uuid()'));
            $table->foreignUuid('user_id')->constrained('users');
            $table->foreignUuid('performance_id')->constrained('performances');
            $table->text('notes');
            $table->timestampsTz();
            $table->timestampTz('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watched');
    }
};
