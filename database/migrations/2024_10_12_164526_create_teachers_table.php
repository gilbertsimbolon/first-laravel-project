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
        Schema::create('teachers', function (Blueprint $table) {
            // $table->id();
            $table->string('nip')->primary();
            $table->string('name');
            $table->string('class');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('place_born');
            $table->date('date_born');
            $table->string('address');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
