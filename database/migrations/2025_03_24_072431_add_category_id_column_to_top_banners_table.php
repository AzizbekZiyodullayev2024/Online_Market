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
        Schema::table('top_banners', function (Blueprint $table) {
            $table->foreignId('category_id')
                ->after('image')
                    ->nullable()
                        ->constrained('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('top_banners', function (Blueprint $table) {
            //
        });
    }
};