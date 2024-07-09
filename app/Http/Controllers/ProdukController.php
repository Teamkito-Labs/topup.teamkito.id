<?php

namespace App\Http\Controllers;

use App\Interfaces\BrandInterface;
use App\Interfaces\KategoriInterface;
use App\Interfaces\TipeInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
	private KategoriInterface $kategoriRepository;
	private BrandInterface $brandRepository;
	private TipeInterface $tipeRepository;

	public function __construct(KategoriInterface $kategoriRepository, BrandInterface $brandRepository, TipeInterface $tipeRepository)
    {
        $this->kategoriRepository = $kategoriRepository;
		$this->brandRepository = $brandRepository;
		$this->tipeRepository = $tipeRepository;
    }

    function index_prabayar() : View {
		$kategori = $this->kategoriRepository->getAllKategori();
		$brand = $this->brandRepository->getAllBrandByKategoriId($kategori->first()->value('id'));

		return view('pemilik.produk.prabayar', compact('kategori', 'brand'));
	}

	function show_prabayar($slug) : View {
		$data = $this->kategoriRepository->getKategoriBySlug($slug);
		$kategori = $this->kategoriRepository->getAllKategori();
		$brand = $this->brandRepository->getAllBrandByKategoriId($data->id);

		return view('pemilik.produk.prabayar', compact('kategori', 'brand', 'data'));
	}

	function show_item($slug) : View {
		$tipe = $this->tipeRepository->getAllTipeByKategoriId($slug);

		return view('pemilik.produk.item');
	}
}
