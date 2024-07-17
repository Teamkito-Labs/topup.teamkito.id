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
        Schema::create('flash_sale', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->references('id')->on('produk');
            $table->foreignId('kategori_id')->references('id')->on('kategori');
            $table->foreignId('brand_id')->references('id')->on('brand');
            $table->foreignId('item_id')->references('id')->on('item');
			$table->integer('diskon');
			$table->integer('potongan');
			$table->integer('kuota');
			$table->integer('batas_waktu');
			$table->string('thumbnail')->nullable();
			$table->enum('aktif', ['Y','N'])->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flash_sale');
    }
};
