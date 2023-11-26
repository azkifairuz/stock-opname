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
        Schema::create('det_pembelian_sparepart', function (Blueprint $table) {
            $table->increments('id_det_pembelian_sparepart');
            $table->integer('id_pembelian');
            $table->integer('id_sparepart');
            $table->integer('qty');
            $table->integer('harga_beli_satuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_pembelian_sparepart');
    }
};
