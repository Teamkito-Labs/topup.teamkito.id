<?php 

namespace App\Interfaces;

use App\Http\Requests\KategoriPembayaranRequest;

interface KategoriPembayaranInterface
{
	public function getAllKategoriPembayaran();
	public function getKategoriPembayaranBySlug($slug);
	public function storeNewKategoriPembayaran(KategoriPembayaranRequest $request);
	public function updateKategoriPembayaran(KategoriPembayaranRequest $request, $id);
	public function destroyKategoriPembayaran($id);
}