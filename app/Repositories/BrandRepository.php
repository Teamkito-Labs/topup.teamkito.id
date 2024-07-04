<?php

namespace App\Repositories;

use App\Http\Requests\BrandRequest;
use App\Interfaces\BrandInterface;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandRepository implements BrandInterface
{
	public function getAllBrand()
	{
		return Brand::orderBy('nama_brand', 'ASC')->get();
	}

	public function getAllBrandStatus($status)
	{
		return Brand::where('aktif', $status)->orderBy('nama_brand', 'ASC')->get();
	}

	public function storeNewBrand(BrandRequest $request)
	{
		$data = new Brand();
		$data->kategori_id = $request->kategori_id;
		$data->nama_brand = $request->nama_brand;
		$data->slug = Str::slug($request->nama_brand, '-');
		$data->save();

		return $data;
	}
}