<?php 

namespace App\Interfaces;

use App\Http\Requests\ProdukRequest;

interface ProdukInterface
{
	public function getAllProduk();
	public function getAllProdukStatus($status);
	public function storeNewProduk(ProdukRequest $request);
}