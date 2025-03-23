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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->foreignID('country_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignID('state_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignID('city_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
