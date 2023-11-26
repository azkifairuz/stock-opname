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
        Schema::create('sparepart', function (Blueprint $table) {
            $table->increments('id_sparepart');
            $table->string('kd_sparepart');
            $table->string('part_number');
            $table->string('nm_sparepart');
            $table->string('ket_sparepart');
            $table->integer('id_rak');
            $table->string('image');
            $table->string('specifikasi');
            $table->integer('id_vendor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sparepart');
    }
};
