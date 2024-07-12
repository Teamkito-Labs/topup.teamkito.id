<?php 

namespace App\Interfaces;

use App\Http\Requests\PenyediaPembayaranRequest;

interface PenyediaPembayaranInterface
{
	public function getAllPenyediaPembayaran();
	public function getPenyediaPembayaranBySlug($slug);
	public function storeNewPenyediaPembayaran(PenyediaPembayaranRequest $request);
	public function updatePenyediaPembayaran(PenyediaPembayaranRequest $request, $id);
	public function destroyPenyediaPembayaran($id);
}