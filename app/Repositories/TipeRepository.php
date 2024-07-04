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

	public function getAllTipeStatus($status)
	{
		return Tipe::where('aktif', $status)->orderBy('nama_tipe', 'ASC')->get();
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
}