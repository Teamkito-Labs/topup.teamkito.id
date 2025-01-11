<?php

namespace App\Repositories;

use App\Http\Requests\FlashSaleRequest;
use App\Interfaces\FlashSaleInterface;
use App\Models\FlashSale;
use Illuminate\Support\Facades\Storage;

class FlashSaleRepository implements FlashSaleInterface
{
	public function getAllFlashSale()
	{
		return FlashSale::orderBy('updated_at', 'DESC')->get();
	}

	public function getAllFlashSaleByStatus($status)
	{
		return FlashSale::where('aktif', $status)->orderBy('updated_at', 'DESC')->get();
	}

	public function getAllFlashSaleByProdukId($produkId)
	{
		return FlashSale::where('produk_id', $produkId)->orderBy('updated_at', 'DESC')->get();
	}

	public function getAllFlashSaleByKategoriId($kategoriId)
	{
		return FlashSale::where('kategori_id', $kategoriId)->orderBy('updated_at', 'DESC')->get();
	}

	public function getAllFlashSaleByBrandId($brandId)
	{
		return FlashSale::where('brand_id', $brandId)->orderBy('updated_at', 'DESC')->get();
	}

	public function storeNewFlashSale(FlashSaleRequest $request)
	{
		if ($request->file('logo')) {
			$value = $request->file('logo');
			$extension = $value->extension();
			$imageNames = uniqid('img_', microtime()) . '.' . $extension;
			Storage::putFileAs('public/img/thumbnail-flash-sale', $value, $imageNames);
		} else {
			$imageNames = '';
		}
		

		$data = new FlashSale();
		$data->produk_id = $request->produk_id;
		$data->kategori_id = $request->kategori_id;
		$data->brand_id = $request->brand_id;
		$data->item_id = $request->item_id;
		$data->diskon = $request->diskon;
		$data->potongan = $request->potongan;
		$data->kuota = $request->kuota;
		$data->batas_waktu = $request->batas_waktu;
		$data->aktif = $request->aktif;
		$data->thumbnail = $imageNames;
		$data->save();

		return $data;
	}

	public function getFlashSaleById($id)
	{
		return FlashSale::findOrFail($id);
	}

	public function updateFlashSaleById(FlashSaleRequest $request, $id)
	{
		$data = FlashSale::findOrFail($id);

		if ($request->file('logo')) {
			$value = $request->file('logo');
			$extension = $value->extension();
			$imageNames = uniqid('img_', microtime()) . '.' . $extension;
			Storage::putFileAs('public/img/thumbnail-flash-sale', $value, $imageNames);
		} else {
			$imageNames = $data->thumbnail;
		}
		
		$data->produk_id = $request->produk_id;
		$data->kategori_id = $request->kategori_id;
		$data->brand_id = $request->brand_id;
		$data->item_id = $request->item_id;
		$data->diskon = $request->diskon;
		$data->potongan = $request->potongan;
		$data->kuota = $request->kuota;
		$data->batas_waktu = $request->batas_waktu;
		$data->aktif = $request->aktif;
		$data->thumbnail = $imageNames;
		$data->save();

		return $data;
	}

	public function deleteFlashSaleById($id)
	{
		return FlashSale::where('id', $id)->delete();
	}
}