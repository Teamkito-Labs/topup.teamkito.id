<?php 

namespace App\Interfaces;

use App\Http\Requests\ItemRequest;

interface ItemInterface
{
	public function getAllItem();
	public function getAllItemByStatus($status);
	public function getAllItemByBrandId($brandId);
	public function getAllItemByBrandIdAndTipeId($brandId, $tipeId);
	public function storeNewItem(ItemRequest $request, array $kodeProduk);
	public function updateItemById($id);
	public function updateMoreItem(array $kodeProduk);
}