<?php

namespace App\Repositories;

use App\Http\Requests\ItemRequest;
use App\Interfaces\ItemInterface;
use App\Models\Item;

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

	public function storeNewItem(ItemRequest $request, array $kodeProduk)
	{
		//
	}

	public function updateItemById($id)
	{
		//
	}
	public function updateMoreItem(array $kodeProduk)
	{
		//
	}
}