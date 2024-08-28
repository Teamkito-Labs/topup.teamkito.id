<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
			$item = new Item();
			$item->produk_id = 1;
			$item->kategori_id = 1;
			$item->brand_id = 1;
			$item->tipe_id = 1;
			$item->kode_produk = 'MLD-' . str_pad($i, 4, '0', STR_PAD_LEFT);
			
			// Dummy product names and prices
			$productNames = [
				'Mobile Legend 50 Diamonds', 'Mobile Legend 100 Diamonds', 'Mobile Legend 150 Diamonds', 'Mobile Legend 200 Diamonds',
				'Mobile Legend 250 Diamonds', 'Mobile Legend 300 Diamonds', 'Mobile Legend 350 Diamonds', 'Mobile Legend 400 Diamonds',
				'Mobile Legend 450 Diamonds', 'Mobile Legend 500 Diamonds', 'Mobile Legend 600 Diamonds', 'Mobile Legend 700 Diamonds',
				'Mobile Legend 800 Diamonds', 'Mobile Legend 900 Diamonds', 'Mobile Legend 1000 Diamonds', 'Mobile Legend 1500 Diamonds',
				'Mobile Legend 2000 Diamonds', 'Mobile Legend 2500 Diamonds', 'Mobile Legend 3000 Diamonds', 'Mobile Legend 5000 Diamonds'
			];

			$customProductNames = [
				'50 Diamond', '100 Diamond', '150 Diamond', '200 Diamond',
				'250 Diamond', '300 Diamond', '350 Diamond', '400 Diamond',
				'450 Diamond', '500 Diamond', '600 Diamond', '700 Diamond',
				'800 Diamond', '900 Diamond', '1000 Diamond', '1500 Diamond',
				'2000 Diamond', '2500 Diamond', '3000 Diamond', '5000 Diamond'
			];

			$profitPrices = [
				2000, 4000, 6000, 8000, 10000, 12000, 14000, 16000, 18000, 20000,
				24000, 28000, 32000, 36000, 40000, 60000, 80000, 100000, 120000, 200000
			];
			

			$prices = [
				10000, 19000, 28000, 37000, 46000, 55000, 64000, 73000, 82000, 90000,
				110000, 130000, 150000, 170000, 190000, 280000, 370000, 460000, 550000, 900000
			];
			
			$item->nama_item = $productNames[$i - 1];
			$item->nama_custom_item = $customProductNames[$i - 1];
			$item->slug = Str::slug($item->nama_item, '-');
			$item->modal = $prices[$i - 1];
			$item->profit = $profitPrices[$i - 1];
			
			$item->save();
		}

		// for ($i = 1; $i <= 20; $i++) {
		// 	$item = new Item();
		// 	$item->produk_id = $i;
		// 	$item->kategori_id = 1;
		// 	$item->brand_id = 2; // Brand ID untuk Free Fire
		// 	$item->tipe_id = 1;
		// 	$item->kode_produk = 'FF-' . str_pad($i, 4, '0', STR_PAD_LEFT);
			
		// 	// Dummy product names and prices for Free Fire
		// 	$productNames = [
		// 		'Top-Up 50 Diamonds', 'Top-Up 100 Diamonds', 'Top-Up 150 Diamonds', 'Top-Up 200 Diamonds',
		// 		'Top-Up 250 Diamonds', 'Top-Up 300 Diamonds', 'Top-Up 350 Diamonds', 'Top-Up 400 Diamonds',
		// 		'Top-Up 450 Diamonds', 'Top-Up 500 Diamonds', 'Top-Up 600 Diamonds', 'Top-Up 700 Diamonds',
		// 		'Top-Up 800 Diamonds', 'Top-Up 900 Diamonds', 'Top-Up 1000 Diamonds', 'Top-Up 1500 Diamonds',
		// 		'Top-Up 2000 Diamonds', 'Top-Up 2500 Diamonds', 'Top-Up 3000 Diamonds', 'Top-Up 5000 Diamonds'
		// 	];
		
		// 	$prices = [
		// 		12000, 22000, 32000, 42000, 52000, 62000, 72000, 82000, 92000, 102000,
		// 		122000, 142000, 162000, 182000, 202000, 302000, 402000, 502000, 602000, 1020000
		// 	];
			
		// 	$item->nama_item = $productNames[$i - 1];
		// 	$item->slug = Str::slug($item->nama_item, '-');
		// 	$item->modal = $prices[$i - 1];
			
		// 	$item->save();
		// }
    }
}
