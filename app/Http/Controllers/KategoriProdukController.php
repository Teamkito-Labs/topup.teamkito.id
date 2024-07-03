<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriRequest;
use App\Http\Requests\ProdukRequest;
use App\Interfaces\KategoriInterface;
use App\Interfaces\ProdukInterface;
use App\Repositories\KategoriRepository;
use App\Repositories\ProdukRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
	private ProdukInterface $produkRepository;
	private KategoriInterface $kategoriRepository;

	public function __construct(ProdukInterface $produkRepository,  KategoriInterface $kategoriRepository)
    {
        $this->produkRepository = $produkRepository;
        $this->kategoriRepository = $kategoriRepository;
    }

	function index() : View {
		$produk = $this->produkRepository->getAllProduk();
		$kategori = $this->kategoriRepository->getAllKategori();

		return view('pemilik/kategori-produk', compact('produk', 'kategori')); 
	}

    function produk_store(ProdukRequest $request) : RedirectResponse {
		$this->produkRepository->storeNewProduk($request);

		return to_route('kategori-produk')->with('success', 'Berhasil menambah kategori produk');
	}

	function kategori_store(KategoriRequest $request) : RedirectResponse {
		$this->kategoriRepository->storeNewKategori($request);

		return to_route('kategori-produk')->with('success', 'Berhasil menambah kategori produk');
	}
}
