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
        Schema::table('character_contest', function (Blueprint $table) {
            $table->float('hero_hp')->default(20);
            $table->float('enemy_hp')->default(20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('character_contest', function (Blueprint $table) {
            //
        });
    }
};
