<?php 

namespace App\Interfaces;

use App\Http\Requests\ProdukRequest;

interface ProdukInterface
{
	public function getAllProduk();
	public function getAllProdukByStatus($status);
	public function getProdukBySlug($slug);
	public function storeNewProduk(ProdukRequest $request);
	public function updateProduk(ProdukRequest $request, $id);
	public function destroyProduk($id);
}