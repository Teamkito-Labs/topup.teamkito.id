<?php 

namespace App\Interfaces;

use App\Http\Requests\BrandRequest;

interface BrandInterface
{
	public function getAllBrand();
	public function getAllBrandByStatus($status);
	public function getBrandBySlug($slug);
	public function storeNewBrand(BrandRequest $request);
	public function updateBrand(BrandRequest $request, $id);
}