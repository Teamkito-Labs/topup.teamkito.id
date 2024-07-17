<?php

namespace App\Http\Controllers;

use App\Interfaces\BrandInterface;
use App\Interfaces\ItemInterface;
use App\Interfaces\KategoriInterface;
use Illuminate\Http\Request;
use Nekoding\Tripay\Networks\HttpClient;
use Nekoding\Tripay\Tripay;

class APIController extends Controller
{
	private KategoriInterface $kategoriRepository;
	private BrandInterface $brandRepository;
	private ItemInterface $itemRepository;

	public function __construct(KategoriInterface $kategoriRepository, BrandInterface $brandRepository, ItemInterface $itemRepository)
	{
		$this->kategoriRepository = $kategoriRepository;
		$this->brandRepository = $brandRepository;
		$this->itemRepository = $itemRepository;
	}

    public function getTotalHarga(Request $request)
	{
		$number = $request->harga;

		$tripay = new Tripay(new HttpClient(env('TRIPAY_API_KEY')));

		$data = $tripay->getBiayaTransaksi($number, $request->kodePembayaran);

		// dd($data['data'][0]['total_fee']['customer']);

		$total = $number + $data['data'][0]['total_fee']['customer'];

		return response()->json($total);
	}

	public function getKategoriByProdukId($produkId)
	{
		$kategori = $this->kategoriRepository->getAllKategoriByProdukId($produkId);

		$filteredKategori = $kategori->map(function($item) {
			return [
				'id' => $item->id,
				'nama_kategori' => $item->nama_kategori,
			];
		});
		
		return response()->json($filteredKategori);
	}

	public function getBrandByKategoriId($kategoriId)
	{
		$brand = $this->brandRepository->getAllBrandByKategoriId($kategoriId);

		$filteredBrand = $brand->map(function($item) {
			return [
				'id' => $item->id,
				'nama_brand' => $item->nama_brand,
			];
		});
		
		return response()->json($filteredBrand);
	}

	public function getItemByBrandId($brandId)
	{
		$item = $this->itemRepository->getAllItemByBrandId($brandId);

		$filteredItem = $item->map(function($item) {
			return [
				'id' => $item->id,
				'nama_item' => $item->nama_custom_item,
			];
		});
		
		return response()->json($filteredItem);
	}

	public function getHargaItemByItemId($itemId)
	{
		$item = $this->itemRepository->getItemById($itemId);
		
		$harga = $item->modal + $item->profit;

		return response()->json($harga);
	}
}
