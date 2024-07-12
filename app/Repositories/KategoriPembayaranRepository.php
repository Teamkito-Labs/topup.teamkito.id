<?php

namespace App\Repositories;

use App\Http\Requests\KategoriPembayaranRequest;
use App\Interfaces\KategoriPembayaranInterface;
use App\Models\KategoriPembayaran;
use Illuminate\Support\Str;

class KategoriPembayaranRepository implements KategoriPembayaranInterface
{
	public function getAllKategoriPembayaran()
	{
		return KategoriPembayaran::orderBy('nama_kategori', 'ASC')->get();
	}

	public function getKategoriPembayaranBySlug($slug)
	{
		return KategoriPembayaran::where('slug', $slug)->first();
	}

	public function storeNewKategoriPembayaran(KategoriPembayaranRequest $request)
	{
		$data = new KategoriPembayaran();
		$data->nama_kategori = $request->nama_kategori;
		$data->slug = Str::slug($request->nama_kategori, '-');
		$data->save();

		return $data;
	}

	public function updateKategoriPembayaran(KategoriPembayaranRequest $request, $id)
	{
		$data = KategoriPembayaran::findOrFail($id);
		$data->nama_kategori = $request->nama_kategori;
		$data->slug = Str::slug($request->nama_kategori, '-');
		$data->save();

		return $data;
	}

	public function destroyKategoriPembayaran($id)
	{
		return KategoriPembayaran::where('id', $id)->delete();
	}
}