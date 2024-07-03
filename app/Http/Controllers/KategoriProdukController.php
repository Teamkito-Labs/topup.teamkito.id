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
use App\Repositories\KategoriRepository;
use App\Repositories\ProdukRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

		return view('pemilik.pengaturan.kategori-produk', compact('produk', 'kategori', 'brand', 'tipe')); 
	}

    function produk_store(ProdukRequest $request) : RedirectResponse {
		$this->produkRepository->storeNewProduk($request);

		return to_route('kategori-produk')->with('success', 'Berhasil menambah kategori produk');
	}

	function kategori_store(KategoriRequest $request) : RedirectResponse {
		$this->kategoriRepository->storeNewKategori($request);

		return to_route('kategori-produk')->with('success', 'Berhasil menambah kategori');
	}

	function brand_store(BrandRequest $request) : RedirectResponse {
		$this->brandRepository->storeNewBrand($request);

		return to_route('kategori-produk')->with('success', 'Berhasil menambah kategori brand');
	}

	function tipe_store(TipeRequest $request) : RedirectResponse {
		$this->tipeRepository->storeNewTipe($request);

		return to_route('kategori-produk')->with('success', 'Berhasil menambah kategori tipe');
	}
}
