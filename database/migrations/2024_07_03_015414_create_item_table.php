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
			$table->foreignId('brand_id')->references('id')->on('brand');
			$table->foreignId('tipe_id')->references('id')->on('tipe');
			$table->string('kode_produk');
			$table->string('nama_item');
			$table->string('slug');
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
