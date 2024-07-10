<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Http\Requests\KategoriRequest;
use App\Http\Requests\ProdukRequest;
use App\Http\Requests\TipeRequest;
use App\Interfaces\BrandInterface;
use App\Interfaces\KategoriInterface;
use App\Interfaces\ProdukInterface;
use App\Interfaces\TipeInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class KategoriProdukController extends Controller
{
	private ProdukInterface $produkRepository;
	private KategoriInterface $kategoriRepository;
	private BrandInterface $brandRepository;
	private TipeInterface $tipeRepository;

	public function __construct(ProdukInterface $produkRepository, KategoriInterface $kategoriRepository, BrandInterface $brandRepository, TipeInterface $tipeRepository)
    {
        $this->produkRepository = $produkRepository;
        $this->kategoriRepository = $kategoriRepository;
		$this->brandRepository = $brandRepository;
		$this->tipeRepository = $tipeRepository;
    }

	function index() : View {
		$produk = $this->produkRepository->getAllProduk();
		$kategori = $this->kategoriRepository->getAllKategori();
		$brand = $this->brandRepository->getAllBrand();
		$tipe = $this->tipeRepository->getAllTipe();

		return view('pemilik.pengaturan.kategori.index', compact('produk', 'kategori', 'brand', 'tipe')); 
	}

	function create() : View {
		$produk = $this->produkRepository->getAllProduk();
		$kategori = $this->kategoriRepository->getAllKategori();
		$brand = $this->brandRepository->getAllBrand();
		$tipe = $this->tipeRepository->getAllTipe();

		return view('pemilik.pengaturan.kategori.show', compact('produk', 'kategori', 'brand', 'tipe')); 
	}

	function edit($jenis, $slug) : View {
		$produk = $this->produkRepository->getAllProduk();
		$kategori = $this->kategoriRepository->getAllKategori();
		$brand = $this->brandRepository->getAllBrand();
		$tipe = $this->tipeRepository->getAllTipe();
		
		if ($jenis == 'produk') {
			$data = $this->produkRepository->getProdukBySlug($slug);
		} elseif ($jenis == 'kategori') {
			$data = $this->kategoriRepository->getKategoriBySlug($slug);
		} elseif ($jenis == 'brand') {
			$data = $this->brandRepository->getBrandBySlug($slug);
		} elseif ($jenis == 'tipe') {
			$data = $this->tipeRepository->getTipeBySlug($slug);
		}

		return view('pemilik.pengaturan.kategori.show', compact('produk', 'kategori', 'brand', 'tipe', 'data')); 
	}

	function delete($jenis, $slug) : View {
		$produk = $this->produkRepository->getAllProduk();
		$kategori = $this->kategoriRepository->getAllKategori();
		$brand = $this->brandRepository->getAllBrand();
		$tipe = $this->tipeRepository->getAllTipe();
		
		if ($jenis == 'produk') {
			$data = $this->produkRepository->getProdukBySlug($slug);
		} elseif ($jenis == 'kategori') {
			$data = $this->kategoriRepository->getKategoriBySlug($slug);
		} elseif ($jenis == 'brand') {
			$data = $this->brandRepository->getBrandBySlug($slug);
		} elseif ($jenis == 'tipe') {
			$data = $this->tipeRepository->getTipeBySlug($slug);
		}

		return view('pemilik.pengaturan.kategori.show', compact('produk', 'kategori', 'brand', 'tipe', 'data')); 
	}

    function produk_store(ProdukRequest $request) : RedirectResponse {
		$this->produkRepository->storeNewProduk($request);

		return to_route('kategori')->with('success', 'Berhasil menambah kategori produk');
	}

	function kategori_store(KategoriRequest $request) : RedirectResponse {
		$this->kategoriRepository->storeNewKategori($request);

		return to_route('kategori')->with('success', 'Berhasil menambah kategori');
	}

	function brand_store(BrandRequest $request) : RedirectResponse {
		$this->brandRepository->storeNewBrand($request);

		return to_route('kategori')->with('success', 'Berhasil menambah kategori brand');
	}

	function tipe_store(TipeRequest $request) : RedirectResponse {
		$this->tipeRepository->storeNewTipe($request);

		return to_route('kategori')->with('success', 'Berhasil menambah kategori tipe');
	}

	function produk_update(ProdukRequest $request, $id) : RedirectResponse {
		$this->produkRepository->updateProduk($request, $id);

		return to_route('kategori')->with('success', 'Berhasil mengubah kategori produk');
	}

	function kategori_update(KategoriRequest $request, $id) : RedirectResponse {
		$this->kategoriRepository->updateKategori($request, $id);

		return to_route('kategori')->with('success', 'Berhasil mengubah kategori');
	}

	function brand_update(BrandRequest $request, $id) : RedirectResponse {
		$this->brandRepository->updateBrand($request, $id);

		return to_route('kategori')->with('success', 'Berhasil mengubah kategori brand');
	}

	function tipe_update(TipeRequest $request, $id) : RedirectResponse {
		$this->tipeRepository->updateTipe($request, $id);

		return to_route('kategori')->with('success', 'Berhasil mengubah kategori tipe');
	}

	function produk_destroy($id) : RedirectResponse {
		$this->produkRepository->destroyProduk($id);

		return to_route('kategori')->with('success', 'Berhasil menghapus kategori produk');
	}

	function kategori_destroy($id) : RedirectResponse {
		$this->kategoriRepository->destroyKategori($id);

		return to_route('kategori')->with('success', 'Berhasil menghapus kategori');
	}

	function brand_destroy($id) : RedirectResponse {
		$this->brandRepository->destroyBrand($id);

		return to_route('kategori')->with('success', 'Berhasil menghapus kategori brand');
	}

	function tipe_destroy($id) : RedirectResponse {
		$this->tipeRepository->destroyTipe($id);

		return to_route('kategori')->with('success', 'Berhasil menghapus kategori tipe');
	}
}
