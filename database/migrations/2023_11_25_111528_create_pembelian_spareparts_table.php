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
        Schema::create('pembelian_sparepart', function (Blueprint $table) {
            $table->increments('id_pembelian');
            $table->string('no_invoice');
            $table->date('tgl_pembelian');
            $table->integer('id_vendor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_sparepart');
    }
};
