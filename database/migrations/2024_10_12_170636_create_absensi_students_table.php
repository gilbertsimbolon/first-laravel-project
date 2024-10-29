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
        Schema::create('absensi_students', function (Blueprint $table) {
            // $table->id();
            $table->string('nisn')->primary();
            $table->date('date');
            $table->string('status');
            $table->string('note');
            $table->string('qr_code');
            $table->time('time_in');
            $table->time('time_out');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_students');
    }
};
