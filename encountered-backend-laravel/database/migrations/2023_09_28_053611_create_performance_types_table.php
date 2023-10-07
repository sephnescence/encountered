<?php

use App\Models\PerformanceType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
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
        Schema::create('performance_types', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(new Expression('gen_random_uuid()'));
            $table->text('name');
            $table->timestamps();
        });

        DB::table('performance_types')->insert([
            ['id' => PerformanceType::$PERFORMANCE_TYPE_ANIME, 'name' => 'Anime'],
            ['id' => PerformanceType::$PERFORMANCE_TYPE_MOVIE, 'name' => 'Movie'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performance_types');
    }
};
