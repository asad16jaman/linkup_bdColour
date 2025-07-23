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
        Schema::table('dealers', function (Blueprint $table) {
            //
            $table->foreignId('area_id')->nullable()->after('name')->constrained()->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dealers', function (Blueprint $table) {
            
            // First drop the foreign key constraint
            $table->dropForeign(['area_id']);

            // Then drop the column
            $table->dropColumn('area_id');

        });
    }
};
