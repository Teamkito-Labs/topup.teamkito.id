<?php

namespace App\Repositories;

use App\Http\Requests\ProdukRequest;
use App\Interfaces\ProdukInterface;
use App\Models\Produk;
use Illuminate\Support\Str;

class ProdukRepository implements ProdukInterface
{
	public function getAllProduk()
	{
		return Produk::latest()->get();
	}

	public function getAllProdukStatus($status)
	{
		return Produk::where('aktif', $status)->latest()->get();
	}

	public function storeNewProduk(ProdukRequest $request)
	{
		$data = new Produk();
		$data->nama_produk = $request->nama_produk;
		$data->slug = Str::slug($request->nama_produk, '-');
		$data->save();

		return $data;
	}
}