<?php

namespace App\Repositories;

use App\Http\Requests\TipeRequest;
use App\Interfaces\TipeInterface;
use App\Models\Tipe;
use Illuminate\Support\Str;

class TipeRepository implements TipeInterface
{
	public function getAllTipe()
	{
		return Tipe::orderBy('nama_tipe', 'ASC')->get();
	}

	public function getAllTipeByStatus($status)
	{
		return Tipe::where('aktif', $status)->orderBy('nama_tipe', 'ASC')->get();
	}

	public function getAllTipeByKategoriId($kategoriId)
	{
		return Tipe::where('kategori_id', $kategoriId)->orderBy('nama_tipe', 'ASC')->get();
	}

	public function getTipeBySlug($slug)
	{
		return Tipe::where('slug', $slug)->first();
	}

	public function storeNewTipe(TipeRequest $request)
	{
		$data = new Tipe();
		$data->kategori_id = $request->kategori_id;
		$data->nama_tipe = $request->nama_tipe;
		$data->slug = Str::slug($request->nama_tipe, '-');
		$data->save();

		return $data;
	}

	public function updateTipe(TipeRequest $request, $id)
	{
		$data = Tipe::findOrFail($id);
		$data->kategori_id = $request->kategori_id;
		$data->nama_tipe = $request->nama_tipe;
		$data->slug = Str::slug($request->nama_tipe, '-');
		$data->save();

		return $data;
	}

	public function destroyTipe($id)
	{
		return Tipe::where('id', $id)->delete();
	}
}