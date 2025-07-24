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
            $table->string('phone2')->nullable()->after('address');
            $table->string('email')->nullable()->after('phone2');
            $table->mediumText('website')->nullable()->after('email');
            $table->enum('status', ['p','a','r'])->default('p')->after('website');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dealers', function (Blueprint $table) {
            //
            $table->dropColumn(['phone2','email','website','status']);
        });
    }
};
