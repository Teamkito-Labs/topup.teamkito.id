<?php

namespace App\Repositories;

use App\Http\Requests\PenyediaPembayaranRequest;
use App\Interfaces\PenyediaPembayaranInterface;
use App\Models\PenyediaPembayaran;
use Illuminate\Support\Str;

class PenyediaPembayaranRepository implements PenyediaPembayaranInterface
{
	public function getAllPenyediaPembayaran()
	{
		return PenyediaPembayaran::orderBy('nama_penyedia', 'ASC')->get();
	}

	public function getPenyediaPembayaranBySlug($slug)
	{
		return PenyediaPembayaran::where('slug', $slug)->first();
	}

	public function storeNewPenyediaPembayaran(PenyediaPembayaranRequest $request)
	{
		$data = new PenyediaPembayaran();
		$data->nama_penyedia = $request->nama_penyedia;
		$data->slug = Str::slug($request->nama_penyedia, '-');
		$data->save();

		return $data;
	}

	public function updatePenyediaPembayaran(PenyediaPembayaranRequest $request, $id)
	{
		$data = PenyediaPembayaran::findOrFail($id);
		$data->nama_penyedia = $request->nama_penyedia;
		$data->slug = Str::slug($request->nama_penyedia, '-');
		$data->save();

		return $data;
	}

	public function destroyPenyediaPembayaran($id)
	{
		return PenyediaPembayaran::where('id', $id)->delete();
	}
}