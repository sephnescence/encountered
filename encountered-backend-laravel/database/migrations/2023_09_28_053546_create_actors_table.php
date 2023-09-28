<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('name');
            $table->json('aliases');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('actors');
    }
};
