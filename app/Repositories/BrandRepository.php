<?php

namespace App\Repositories;

use App\Http\Requests\BrandRequest;
use App\Interfaces\BrandInterface;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrandRepository implements BrandInterface
{
	public function getAllBrand()
	{
		return Brand::orderBy('nama_brand', 'ASC')->get();
	}

	public function getAllBrandByStatus($status)
	{
		return Brand::where('aktif', $status)->orderBy('nama_brand', 'ASC')->get();
	}

	public function getAllBrandByKategoriId($kategoriId)
	{
		return Brand::withCount(['items'])->where('kategori_id', $kategoriId)->orderBy('nama_brand', 'ASC')->get();
	}

	public function getAllBrandByPerangkat($perangkat)
	{
		return Brand::where('perangkat', $perangkat)->orderBy('nama_brand', 'ASC')->get();
	}

	public function getBrandBySlug($slug)
	{
		return Brand::where('slug', $slug)->first();
	}

	public function storeNewBrand(BrandRequest $request)
	{
		$value = $request->file('logo');
        $extension = $value->extension();
        $imageNames = uniqid('img_', microtime()) . '.' . $extension;
        Storage::putFileAs('public/images/brand-logo', $value, $imageNames);

		$data = new Brand();
		$data->kategori_id = $request->kategori_id;
		$data->nama_brand = $request->nama_brand;
		$data->perangkat = $request->perangkat;
		$data->jumlah_input = $request->jumlah_input;
		$data->keterangan = $request->keterangan;
		$data->slug = Str::slug($request->nama_brand, '-');
		$data->logo = $imageNames;
		$data->save();

		return $data;
	}

	public function updateBrand(BrandRequest $request, $id)
	{
		$data = Brand::findOrFail($id);

		if ($request->logo != '') {
			$value = $request->file('logo');
			$extension = $value->extension();
			$imageNames = uniqid('img_', microtime()) . '.' . $extension;
			Storage::putFileAs('public/images/brand-logo', $value, $imageNames);
		} else {
			$imageNames = $data->logo;
		}
		
		$data->kategori_id = $request->kategori_id;
		$data->nama_brand = $request->nama_brand;
		$data->perangkat = $request->perangkat;
		$data->jumlah_input = $request->jumlah_input;
		$data->keterangan = $request->keterangan;
		$data->slug = Str::slug($request->nama_brand, '-');
		$data->save();

		return $data;
	}

	public function destroyBrand($id)
	{
		return Brand::where('id', $id)->delete();
	}
}