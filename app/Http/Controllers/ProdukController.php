<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Interfaces\BrandInterface;
use App\Interfaces\ItemInterface;
use App\Interfaces\KategoriInterface;
use App\Interfaces\ProdukInterface;
use App\Interfaces\TipeInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
	private ProdukInterface $produkRepository;
	private KategoriInterface $kategoriRepository;
	private BrandInterface $brandRepository;
	private TipeInterface $tipeRepository;
	private ItemInterface $itemRepository;

	public function __construct(ProdukInterface $produkRepository, KategoriInterface $kategoriRepository, BrandInterface $brandRepository, TipeInterface $tipeRepository, ItemInterface $itemRepository)
    {
        $this->produkRepository = $produkRepository;
		$this->kategoriRepository = $kategoriRepository;
		$this->brandRepository = $brandRepository;
		$this->tipeRepository = $tipeRepository;
		$this->itemRepository = $itemRepository;
    }

	function index($produkSlug) : View {
		$produk = $this->produkRepository->getProdukBySlug($produkSlug);
		$kategori = $this->kategoriRepository->getAllKategoriByProdukId($produk->id);
		$brand = $this->brandRepository->getAllBrandByKategoriId($kategori->first()->value('id'));

		return view('pemilik.produk.prabayar', compact('kategori', 'brand', 'produk'));
	}

	function show($produkSlug, $kategoriSlug) : View {
		$produk = $this->produkRepository->getProdukBySlug($produkSlug);
		$data = $this->kategoriRepository->getKategoriBySlug($kategoriSlug);
		$kategori = $this->kategoriRepository->getAllKategoriByProdukId($produk->id);
		$brand = $this->brandRepository->getAllBrandByKategoriId($data->id);

		return view('pemilik.produk.prabayar', compact('kategori', 'brand', 'data', 'produk'));
	}

	function index_brand($produkSlug, $kategoriSlug, $brandSlug) : View {
		$produk = $this->produkRepository->getProdukBySlug($produkSlug);
		$brand = $this->brandRepository->getBrandBySlug($brandSlug);
		$kategori = $this->kategoriRepository->getKategoriById($brand->kategori_id);
		$tipe = $this->tipeRepository->getAllTipeByKategoriId($brand->kategori_id);
		$items = $this->itemRepository->getAllItemByBrandId($brand->id);

		return view('pemilik.produk.item', compact('tipe', 'brand', 'kategori', 'produk', 'items'));
	}

	function show_brand($produkSlug, $kategoriSlug, $brandSlug, $tipeSlug) : View {
		$produk = $this->produkRepository->getProdukBySlug($produkSlug);
		$brand = $this->brandRepository->getBrandBySlug($brandSlug);
		$kategori = $this->kategoriRepository->getKategoriById($brand->kategori_id);
		$tipe = $this->tipeRepository->getAllTipeByKategoriId($brand->kategori_id);
		$data = $this->tipeRepository->getTipeBySlug($tipeSlug);
		$items = $this->itemRepository->getAllItemByBrandIdAndTipeId($brand->id, $data->id);

		return view('pemilik.produk.item', compact('tipe', 'brand', 'kategori', 'produk', 'data', 'items'));
	}

	function create_item($produkSlug, $kategoriSlug, $brandSlug) : View {
		$produk = $this->produkRepository->getProdukBySlug($produkSlug);
		$brand = $this->brandRepository->getBrandBySlug($brandSlug);
		$kategori = $this->kategoriRepository->getKategoriById($brand->kategori_id);
		$tipe = $this->tipeRepository->getAllTipeByKategoriId($brand->kategori_id);

		return view('pemilik.produk.partials.tambah', compact('tipe', 'brand', 'kategori', 'produk'));
	}

	function store_item(ItemRequest $request) : RedirectResponse {
		$result = checkHargaByKode($request->kode_produk);

		if ($result != '') {
			if ($this->itemRepository->getItemByKodeProduk($request->kode_produk) == NULL) {
				$this->itemRepository->storeNewItem($request, $result);
	
				return to_route('produk.brand', ['produkSlug' => $request->produk_slug, 'kategoriSlug' => $request->kategori_slug, 'brandSlug' => $request->brand_slug])->with('success', 'Berhasil menambah item baru');
			} else {
				return to_route('produk.brand', ['produkSlug' => $request->produk_slug, 'kategoriSlug' => $request->kategori_slug, 'brandSlug' => $request->brand_slug])->with('info', 'Kode produk sudah tersedia');
			}	
		} else {
			return to_route('produk.item.tambah', ['produkSlug' => $request->produk_slug, 'kategoriSlug' => $request->kategori_slug, 'brandSlug' => $request->brand_slug])->with('info', 'Kode produk tidak tersedia');
		}
	}

	function edit_item($produkSlug, $kategoriSlug, $brandSlug, $itemSlug) : View {
		$produk = $this->produkRepository->getProdukBySlug($produkSlug);
		$brand = $this->brandRepository->getBrandBySlug($brandSlug);
		$kategori = $this->kategoriRepository->getKategoriById($brand->kategori_id);
		$tipe = $this->tipeRepository->getAllTipeByKategoriId($brand->kategori_id);
		$data = $this->itemRepository->getItemBySlug($itemSlug);

		return view('pemilik.produk.partials.edit', compact('tipe', 'brand', 'kategori', 'produk', 'data'));
	}

	function update_item(ItemRequest $request, $id) : RedirectResponse {
		$result = checkHargaByKode($request->kode_produk);

		$this->itemRepository->updateItemById($request, $result, $id);

		return to_route('produk.brand', ['produkSlug' => $request->produk_slug, 'kategoriSlug' => $request->kategori_slug, 'brandSlug' => $request->brand_slug])->with('success', 'Berhasil mengubah data item');
	}

	function delete_item(Request $request, $id) : RedirectResponse {
		$this->itemRepository->deleteItemById($id);

		return to_route('produk.brand', ['produkSlug' => $request->produk_slug, 'kategoriSlug' => $request->kategori_slug, 'brandSlug' => $request->brand_slug])->with('success', 'Berhasil menghapus data item');
	}
}
