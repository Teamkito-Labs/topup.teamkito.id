<?php 

namespace App\Interfaces;

use App\Http\Requests\ItemRequest;

interface ItemInterface
{
	public function getAllItem();
	public function getAllItemByStatus($status);
	public function getAllItemByBrandId($brandId);
	public function getAllItemByBrandIdAndTipeId($brandId, $tipeId);
	public function storeNewItem(ItemRequest $request, $result);
	public function getItemBySlug($slug);
	public function getItemByKodeProduk($kodeProduk);
	public function updateItemById(ItemRequest $request, $result, $id);
	public function updateMoreItem(array $kodeProduk);
}