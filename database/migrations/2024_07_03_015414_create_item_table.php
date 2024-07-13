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
        Schema::create('item', function (Blueprint $table) {
            $table->id();
			$table->foreignId('produk_id')->references('id')->on('produk');
			$table->foreignId('kategori_id')->references('id')->on('kategori');
			$table->foreignId('brand_id')->references('id')->on('brand');
			$table->foreignId('tipe_id')->references('id')->on('tipe');
			$table->string('kode_produk');
			$table->string('nama_item');
			$table->string('nama_custom_item')->nullable();
			$table->string('slug');
			$table->double('modal', 15, 2);
			$table->double('profit', 15, 2)->nullable();
			$table->enum('aktif', ['Y','N'])->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item');
    }
};
