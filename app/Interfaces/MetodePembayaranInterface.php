<?php 

namespace App\Interfaces;

use App\Http\Requests\MetodePembayaranRequest;

interface MetodePembayaranInterface
{
	public function getAllMetodePembayaran();
	public function getAllMetodePembayaranByKategoriPembayaranId($id);
	public function getMetodePembayaranBySlug($slug);
	public function storeNewMetodePembayaran(MetodePembayaranRequest $request);
	public function updateMetodePembayaran(MetodePembayaranRequest $request, $id);
	public function destroyMetodePembayaran($id);
}