<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlashSaleRequest;
use App\Interfaces\BrandInterface;
use App\Interfaces\FlashSaleInterface;
use App\Interfaces\ItemInterface;
use App\Interfaces\KategoriInterface;
use App\Interfaces\ProdukInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FlashSaleController extends Controller
{
	private FlashSaleInterface $flashSaleRepository;
	private ProdukInterface $produkRepository;
	private KategoriInterface $kategoriRepository;
	private BrandInterface $brandRepository;
	private ItemInterface $itemRepository;

	public function __construct(FlashSaleInterface $flashSaleRepository, ProdukInterface $produkRepository, KategoriInterface $kategoriRepository, BrandInterface $brandRepository, ItemInterface $itemRepository)
	{
		$this->flashSaleRepository = $flashSaleRepository;
		$this->produkRepository = $produkRepository;
		$this->kategoriRepository = $kategoriRepository;
		$this->brandRepository = $brandRepository;
		$this->itemRepository = $itemRepository;
	}

    function index() : View {
		$kategori = $this->kategoriRepository->getAllKategori();
		$flashSale = $this->flashSaleRepository->getAllFlashSale();

		return view('pemilik.flash-sale.index', compact('flashSale', 'kategori'));
	}

	function show_by_kategori($kategoriSlug) : View {
		$itemKategori = $this->kategoriRepository->getKategoriBySlug($kategoriSlug);
		$brand = $this->brandRepository->getAllBrandByKategoriId($itemKategori->id);
		$flashSale = $this->flashSaleRepository->getAllFlashSaleByKategoriId($itemKategori->id);

		return view('pemilik.flash-sale.show-kategori', compact('flashSale', 'brand', 'itemKategori'));
	}

	function show_by_brand($kategoriSlug, $brandSlug) : View {
		$itemBrand = $this->brandRepository->getBrandBySlug($brandSlug);
		$itemKategori = $this->kategoriRepository->getKategoriBySlug($kategoriSlug);
		$brand = $this->brandRepository->getAllBrandByKategoriId($itemKategori->id);
		$flashSale = $this->flashSaleRepository->getAllFlashSaleByBrandId($itemBrand->id);

		return view('pemilik.flash-sale.show-brand', compact('flashSale', 'brand', 'itemBrand', 'itemKategori'));
	}

	function tambah() : View {
		$produk = $this->produkRepository->getAllProdukByStatus('Y');

		return view('pemilik.flash-sale.partials.tambah', compact('produk'));
	}

	function store(FlashSaleRequest $request) : RedirectResponse {
		$this->flashSaleRepository->storeNewFlashSale($request);

		return to_route('flash-sale')->with('success', 'Berhasil menambah flash sale');
	}

	function edit($id) : View {
		$data = $this->flashSaleRepository->getFlashSaleById($id);
		$produk = $this->produkRepository->getAllProdukByStatus('Y');
		$kategori = $this->kategoriRepository->getAllKategoriByProdukId(1);
		$brand = $this->brandRepository->getAllBrandByKategoriId($data->kategori_id);
		$items = $this->itemRepository->getAllItemByBrandId($data->brand_id);

		return view('pemilik.flash-sale.partials.edit', compact('produk', 'data', 'kategori', 'brand', 'items'));
	}

	function update(FlashSaleRequest $request, $id) : RedirectResponse {
		$this->flashSaleRepository->updateFlashSaleById($request, $id);

		return to_route('flash-sale')->with('success', 'Berhasil mengubah flash sale');
	}

	function delete($id) : RedirectResponse {
		$this->flashSaleRepository->deleteFlashSaleById($id);

		return to_route('flash-sale')->with('success', 'Berhasil menghapus flash sale');
	}
}
