<?php

namespace App\Repositories;

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
		//
	}

	public function getAllItemByBrandId($brandId)
	{
		return Item::where('brand_id', $brandId)->orderBy('nama_item', 'ASC')->get();
	}

	public function getAllItemByBrandIdAndTipeId($brandId, $tipeId)
	{
		return Item::where('brand_id', $brandId)->where('tipe_id', $tipeId)->orderBy('nama_item', 'ASC')->get();
	}
}