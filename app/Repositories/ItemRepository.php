<?php

namespace App\Repositories;

use App\Http\Requests\ItemRequest;
use App\Interfaces\ItemInterface;
use App\Models\Item;
use Illuminate\Support\Str;

class ItemRepository implements ItemInterface
{
	public function getAllItem()
	{
		return Item::orderBy('nama_item', 'ASC')->get();
	}

	public function getAllItemByStatus($status)
	{
		return Item::where('aktif', $status)->orderBy('nama_item', 'ASC')->get();
	}

	public function getAllItemByBrandId($brandId)
	{
		return Item::where('brand_id', $brandId)->orderBy('nama_item', 'ASC')->get();
	}

	public function getAllItemByBrandIdAndTipeId($brandId, $tipeId)
	{
		return Item::where('brand_id', $brandId)->where('tipe_id', $tipeId)->orderBy('nama_item', 'ASC')->get();
	}

	public function getItemBySlug($slug)
	{
		return Item::where('slug', $slug)->first();
	}

	public function getItemByKodeProduk($kodeProduk)
	{
		return Item::where('kode_produk', $kodeProduk)->first();
	}

	public function storeNewItem(ItemRequest $request, $result)
	{
		$data = new Item();
		$data->produk_id = $request->produk_id;
		$data->kategori_id = $request->kategori_id;
		$data->brand_id = $request->brand_id;
		$data->tipe_id = $request->tipe_id;
		$data->kode_produk = $request->kode_produk;
		$data->nama_item = $result['product_name'];
		$data->slug = Str::slug($result['product_name'], '-');
		$data->modal = $result['price'];
		$data->save();

		return $data;
	}

	public function updateItemById(ItemRequest $request, $result, $id)
	{
		$data = Item::findOrFail($id);
		$data->tipe_id = $request->tipe_id;
		$data->kode_produk = $request->kode_produk;
		$data->profit = $request->profit;
		$data->nama_item = $result['product_name'];
		$data->slug = Str::slug($result['product_name'], '-');
		$data->modal = $result['price'];
		$data->save();

		return $data;
	}
	public function updateMoreItem(array $kodeProduk)
	{
		//
	}
}