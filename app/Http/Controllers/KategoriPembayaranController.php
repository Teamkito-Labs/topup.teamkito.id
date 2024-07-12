<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriPembayaranRequest;
use App\Http\Requests\PenyediaPembayaranRequest;
use App\Interfaces\KategoriPembayaranInterface;
use App\Interfaces\PenyediaPembayaranInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KategoriPembayaranController extends Controller
{
	private PenyediaPembayaranInterface $penyediaPembayaranRepository;
	private KategoriPembayaranInterface $kategoriPembayaranRepository;

	public function __construct(PenyediaPembayaranInterface $penyediaPembayaranRepository, KategoriPembayaranInterface $kategoriPembayaranRepository)
    {
        $this->penyediaPembayaranRepository = $penyediaPembayaranRepository;
		$this->kategoriPembayaranRepository = $kategoriPembayaranRepository;
    }

    function index() : View 
	{
		$penyediaPembayaran = $this->penyediaPembayaranRepository->getAllPenyediaPembayaran();
		$kategoriPembayaran = $this->kategoriPembayaranRepository->getAllKategoriPembayaran();

		return view('pemilik.pengaturan.pembayaran.index', compact('penyediaPembayaran', 'kategoriPembayaran')); 
	}

	function create() : View 
	{
		$penyediaPembayaran = $this->penyediaPembayaranRepository->getAllPenyediaPembayaran();
		$kategoriPembayaran = $this->kategoriPembayaranRepository->getAllKategoriPembayaran();

		return view('pemilik.pengaturan.pembayaran.show', compact('penyediaPembayaran', 'kategoriPembayaran'));
	}

	function edit($jenis, $slug) : View 
	{
		$penyediaPembayaran = $this->penyediaPembayaranRepository->getAllPenyediaPembayaran();
		$kategoriPembayaran = $this->kategoriPembayaranRepository->getAllKategoriPembayaran();

		if ($jenis == 'penyedia') {
			$data = $this->penyediaPembayaranRepository->getPenyediaPembayaranBySlug($slug);
		} else {
			$data = $this->kategoriPembayaranRepository->getKategoriPembayaranBySlug($slug);
		}
		
		return view('pemilik.pengaturan.pembayaran.show', compact('penyediaPembayaran', 'kategoriPembayaran', 'data'));
	}

	function delete($jenis, $slug) : View 
	{
		$penyediaPembayaran = $this->penyediaPembayaranRepository->getAllPenyediaPembayaran();
		$kategoriPembayaran = $this->kategoriPembayaranRepository->getAllKategoriPembayaran();

		if ($jenis == 'penyedia') {
			$data = $this->penyediaPembayaranRepository->getPenyediaPembayaranBySlug($slug);
		} else {
			$data = $this->kategoriPembayaranRepository->getKategoriPembayaranBySlug($slug);
		}
		
		return view('pemilik.pengaturan.pembayaran.show', compact('penyediaPembayaran', 'kategoriPembayaran', 'data'));
	}

	function penyedia_pembayaran_store(PenyediaPembayaranRequest $request) : RedirectResponse {
		$this->penyediaPembayaranRepository->storeNewPenyediaPembayaran($request);

		return to_route('pembayaran')->with('success', 'Berhasil menambah penyedia pembayaran');
	}

	function kategori_pembayaran_store(KategoriPembayaranRequest $request) : RedirectResponse {
		$this->kategoriPembayaranRepository->storeNewKategoriPembayaran($request);

		return to_route('pembayaran')->with('success', 'Berhasil menambah kategori pembayaran');
	}

	function penyedia_pembayaran_update(PenyediaPembayaranRequest $request, $id) : RedirectResponse {
		$this->penyediaPembayaranRepository->updatePenyediaPembayaran($request, $id);

		return to_route('pembayaran')->with('success', 'Berhasil mengubah penyedia pembayaran');
	}

	function kategori_pembayaran_update(KategoriPembayaranRequest $request, $id) : RedirectResponse {
		$this->kategoriPembayaranRepository->updateKategoriPembayaran($request, $id);

		return to_route('pembayaran')->with('success', 'Berhasil mengubah kategori pembayaran');
	}

	function penyedia_pembayaran_destroy(PenyediaPembayaranRequest $request, $id) : RedirectResponse {
		$this->penyediaPembayaranRepository->destroyPenyediaPembayaran($request, $id);

		return to_route('pembayaran')->with('success', 'Berhasil mengahapus penyedia pembayaran');
	}

	function kategori_pembayaran_destroy(KategoriPembayaranRequest $request, $id) : RedirectResponse {
		$this->kategoriPembayaranRepository->destroyKategoriPembayaran($request, $id);

		return to_route('pembayaran')->with('success', 'Berhasil mengahapus kategori pembayaran');
	}
}
