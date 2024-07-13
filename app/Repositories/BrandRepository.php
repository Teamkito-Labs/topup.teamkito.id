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

	public function getAllBrandByStatus($status)
	{
		return Brand::where('aktif', $status)->orderBy('nama_brand', 'ASC')->get();
	}

	public function getAllBrandByKategoriId($kategoriId)
	{
		return Brand::withCount(['items'])->where('kategori_id', $kategoriId)->orderBy('nama_brand', 'ASC')->get();
	}

	public function getBrandBySlug($slug)
	{
		return Brand::where('slug', $slug)->first();
	}

	public function storeNewBrand(BrandRequest $request)
	{
		$image = $request->file('logo');
		$extension = $image->extension();
		$imageNames = uniqid('img_', microtime()) . '.' . $extension;
		$image->move(public_path('images/brand-logo'), $imageNames);

		$data = new Brand();
		$data->kategori_id = $request->kategori_id;
		$data->nama_brand = $request->nama_brand;
		$data->slug = Str::slug($request->nama_brand, '-');
		$data->logo = $imageNames;
		$data->save();

		return $data;
	}

	public function updateBrand(BrandRequest $request, $id)
	{
		$data = Brand::findOrFail($id);

		if ($request->logo != '') {
			$image = $request->file('logo');
			$extension = $image->extension();
			$imageNames = uniqid('img_', microtime()) . '.' . $extension;
			$image->move(public_path('images/brand-logo'), $imageNames);
		} else {
			$imageNames = $data->logo;
		}
		
		$data->kategori_id = $request->kategori_id;
		$data->nama_brand = $request->nama_brand;
		$data->slug = Str::slug($request->nama_brand, '-');
		$data->save();

		return $data;
	}

	public function destroyBrand($id)
	{
		return Brand::where('id', $id)->delete();
	}
}