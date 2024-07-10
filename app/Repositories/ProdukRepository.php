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
		return Produk::orderBy('nama_produk', 'ASC')->get();
	}

	public function getAllProdukByStatus($status)
	{
		return Produk::where('aktif', $status)->orderBy('nama_produk', 'ASC')->get();
	}

	public function getProdukBySlug($slug)
	{
		return Produk::where('slug', $slug)->first();
	}

	public function storeNewProduk(ProdukRequest $request)
	{
		$data = new Produk();
		$data->nama_produk = $request->nama_produk;
		$data->slug = Str::slug($request->nama_produk, '-');
		$data->save();

		return $data;
	}

	public function updateProduk(ProdukRequest $request, $id)
	{
		$data = Produk::findOrFail($id);
		$data->nama_produk = $request->nama_produk;
		$data->slug = Str::slug($request->nama_produk, '-');
		$data->save();

		return $data;
	}

	public function destroyProduk($id)
	{
		return Produk::where('id', $id)->delete();
	}
}