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

	public function storeNewKategori(KategoriRequest $request)
	{
		$data = new Kategori();
		$data->produk_id = $request->produk_id;
		$data->nama_kategori = $request->nama_kategori;
		$data->slug = Str::slug($request->nama_kategori, '-');
		$data->save();

		return $data;
	}
}