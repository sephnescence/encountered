<?php

use Illuminate\Database\Migrations\Migration;
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
            $table->uuid()->primary();
            $table->foreignUuid('user_id')->references('uuid')->on('users');
            $table->foreignUuid('performance_id')->references('uuid')->on('performances');
            $table->text('notes');
            $table->timestamps();
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
