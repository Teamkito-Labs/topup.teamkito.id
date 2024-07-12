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
        Schema::create('metode_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penyedia_pembayaran_id')->references('id')->on('penyedia_pembayaran');
            $table->foreignId('kategori_pembayaran_id')->references('id')->on('kategori_pembayaran');
			$table->string('nama_metode');
            $table->string('slug');
            $table->string('logo');
            $table->string('kode_unik')->nullable();
			$table->enum('aktif', ['Y','N'])->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metode_pembayaran');
    }
};
