<?php 

namespace App\Interfaces;

use App\Http\Requests\KategoriRequest;

interface KategoriInterface
{
	public function getAllKategori();
	public function getAllKategoriStatus($status);
	public function getKategoriBySlug($slug);
	public function storeNewKategori(KategoriRequest $request);
	public function updateKategori(KategoriRequest $request, $id);
}