<?php 

namespace App\Interfaces;

use App\Http\Requests\FlashSaleRequest;

interface FlashSaleInterface
{
	public function getAllFlashSale();
	public function getAllFlashSaleByStatus($status);
	public function getAllFlashSaleByKategoriId($kategoriId);
	public function getAllFlashSaleByBrandId($brandId);
	public function storeNewFlashSale(FlashSaleRequest $request);
	public function getFlashSaleById($id);
	public function updateFlashSaleById(FlashSaleRequest $request, $id);
	public function deleteFlashSaleById($id);
}