<?php

namespace App\Repositories;

use App\Http\Requests\MetodePembayaranRequest;
use App\Interfaces\MetodePembayaranInterface;
use App\Models\MetodePembayaran;
use Illuminate\Support\Str;

class MetodePembayaranRepository implements MetodePembayaranInterface
{
	public function getAllMetodePembayaran()
	{
		return MetodePembayaran::orderBy('nama_metode', 'ASC')->get();
	}

	public function getAllMetodePembayaranByKategoriPembayaranId($id)
	{
		return MetodePembayaran::where('kategori_pembayaran_id', $id)->orderBy('nama_metode', 'ASC')->get();
	}

	public function getMetodePembayaranBySlug($slug)
	{
		return MetodePembayaran::where('slug', $slug)->first();
	}

	public function storeNewMetodePembayaran(MetodePembayaranRequest $request)
	{
		$value = $request->file('logo');
        $extension = $value->extension();
        $imageNames = uniqid('img_', microtime()) . '.' . $extension;
        Storage::putFileAs('public/img/metode-pembayaran-logo', $value, $imageNames);

		$data = new MetodePembayaran();
		$data->penyedia_pembayaran_id = $request->penyedia_pembayaran_id;
		$data->kategori_pembayaran_id = $request->kategori_pembayaran_id;
		$data->nama_metode = $request->nama_metode;
		$data->kode_unik = $request->kode_unik;
		$data->slug = Str::slug($request->nama_metode, '-');
		$data->logo = $imageNames;
		$data->save();

		return $data;
	}
	
	public function updateMetodePembayaran(MetodePembayaranRequest $request, $id)
	{
		$data = MetodePembayaran::findOrFail($id);

		if ($request->logo != '') {
			$value = $request->file('logo');
			$extension = $value->extension();
			$imageNames = uniqid('img_', microtime()) . '.' . $extension;
			Storage::putFileAs('public/img/metode-pembayaran-logo', $value, $imageNames);
		} else {
			$imageNames = $data->logo;
		}	

		$data->penyedia_pembayaran_id = $request->penyedia_pembayaran_id;
		$data->kategori_pembayaran_id = $request->kategori_pembayaran_id;
		$data->nama_metode = $request->nama_metode;
		$data->kode_unik = $request->kode_unik;
		$data->slug = Str::slug($request->nama_metode, '-');
		$data->logo = $imageNames;
		$data->save();

		return $data;
	}

	public function destroyMetodePembayaran($id)
	{
		return MetodePembayaran::where('id', $id)->delete();
	}
}