<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $produk = new Produk();
		$produk->nama_produk = 'Prabayar';
		$produk->slug = Str::slug('Prabayar', '-');
		$produk->save();

		$kategori = new Kategori();
		$kategori->produk_id = $produk->id;
		$kategori->nama_kategori = 'Games';
		$kategori->slug = Str::slug('Games', '-');
		$kategori->save();

		$tipe = new Tipe();
		$tipe->kategori_id = $kategori->id;
		$tipe->nama_tipe = 'Umum';
		$tipe->slug = Str::slug('Umum', '-');
		$tipe->save();

		$brand1 = new Brand();
		$brand1->kategori_id = $kategori->id;
		$brand1->nama_brand = 'Mobile Legend';
		$brand1->perangkat = 'Mobile';
		$brand1->jumlah_input = 2;
		$brand1->keterangan = 'Masukkan Zone ID dan User ID di logo profile pojok kanan atas';
		$brand1->slug = Str::slug('Mobile Legend', '-');
		$brand1->logo = 'img_6694ab9a537c13.34035621.png';
		$brand1->save();

		$brand2 = new Brand();
		$brand2->kategori_id = $kategori->id;
		$brand2->nama_brand = 'Free Fire';
		$brand2->perangkat = 'Mobile';
		$brand2->jumlah_input = 2;
		$brand2->keterangan = 'Belum tau saya kalau ini';
		$brand2->slug = Str::slug('Free Fire', '-');
		$brand2->logo = 'img_6694ab9a537c13.34035621.png';
		$brand2->save();
    }
}
