<?php 

namespace App\Interfaces;

use App\Http\Requests\TipeRequest;

interface TipeInterface
{
	public function getAllTipe();
	public function getAllTipeByStatus($status);
	public function getAllTipeByKategoriId($kategoriId);
	public function getTipeBySlug($slug);
	public function storeNewTipe(TipeRequest $request);
	public function updateTipe(TipeRequest $request, $id);
}