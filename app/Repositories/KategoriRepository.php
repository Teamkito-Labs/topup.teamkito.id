<?php

namespace App\Repositories;

use App\Http\Requests\KategoriRequest;
use App\Interfaces\KategoriInterface;
use App\Models\Kategori;
use Illuminate\Support\Str;

class KategoriRepository implements KategoriInterface
{
	public function getAllKategori()
	{
		return Kategori::orderBy('produk_id', 'ASC')->get();
	}

	public function getAllKategoriStatus($status)
	{
		return Kategori::where('aktif', $status)->orderBy('produk_id', 'ASC')->get();
	}

	public function getAllKategoriByProdukId($produkId)
	{
		return Kategori::where('produk_id', $produkId)->orderBy('produk_id', 'ASC')->get();
	}

	public function getKategoriBySlug($slug)
	{
		return Kategori::where('slug', $slug)->first();
	}

	public function getKategoriById($id)
	{
		return Kategori::where('id', $id)->first();
	}

	public function storeNewKategori(KategoriRequest $request)
	{
		$data = new Kategori();
		$data->produk_id = $request->produk_id;
		$data->nama_kategori = $request->nama_kategori;
		$data->slug = Str::slug($request->nama_kategori, '-');
		$data->save();

		return $data;
	}

	public function updateKategori(KategoriRequest $request, $id)
	{
		$data = Kategori::findOrFail($id);
		$data->produk_id = $request->produk_id;
		$data->nama_kategori = $request->nama_kategori;
		$data->slug = Str::slug($request->nama_kategori, '-');
		$data->save();

		return $data;
	}
}