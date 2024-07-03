<?php 

namespace App\Interfaces;

use App\Http\Requests\BrandRequest;

interface BrandInterface
{
	public function getAllBrand();
	public function getAllBrandStatus($status);
	public function storeNewBrand(BrandRequest $request);
}