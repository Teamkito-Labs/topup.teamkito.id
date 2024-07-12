<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetodePembayaranRequest;
use App\Interfaces\KategoriPembayaranInterface;
use App\Interfaces\MetodePembayaranInterface;
use App\Interfaces\PenyediaPembayaranInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
	private PenyediaPembayaranInterface $penyediaPembayaranRepository;
	private KategoriPembayaranInterface $kategoriPembayaranRepository;
	private MetodePembayaranInterface $metodePembayaranRepository;

	public function __construct(PenyediaPembayaranInterface $penyediaPembayaranRepository, KategoriPembayaranInterface $kategoriPembayaranRepository, MetodePembayaranInterface $metodePembayaranRepository)
    {
        $this->penyediaPembayaranRepository = $penyediaPembayaranRepository;
		$this->kategoriPembayaranRepository = $kategoriPembayaranRepository;
		$this->metodePembayaranRepository = $metodePembayaranRepository;
    }

    function index() : View {
		$kategoriPembayaran = $this->kategoriPembayaranRepository->getAllKategoriPembayaran();
		$metodePembayaran = $this->metodePembayaranRepository->getAllMetodePembayaran();

		return view('pemilik.metode-pembayaran.index', compact('kategoriPembayaran', 'metodePembayaran'));
	}

	function show($kategoriPembayaranSlug) : View {
		$kategoriPembayaran = $this->kategoriPembayaranRepository->getAllKategoriPembayaran();
		$dataKategoriPembayaran = $this->kategoriPembayaranRepository->getKategoriPembayaranBySlug($kategoriPembayaranSlug);
		$metodePembayaran = $this->metodePembayaranRepository->getAllMetodePembayaranByKategoriPembayaranId($dataKategoriPembayaran->id);

		return view('pemilik.metode-pembayaran.index', compact('kategoriPembayaran', 'metodePembayaran'));
	}

	function create() : View {
		$penyediaPembayaran = $this->penyediaPembayaranRepository->getAllPenyediaPembayaran();
		$kategoriPembayaran = $this->kategoriPembayaranRepository->getAllKategoriPembayaran();

		return view('pemilik.metode-pembayaran.partials.tambah', compact('penyediaPembayaran', 'kategoriPembayaran'));
	}

	function store(MetodePembayaranRequest $request) : RedirectResponse {
		$this->metodePembayaranRepository->storeNewMetodePembayaran($request);

		return to_route('metode-pembayaran')->with('success', 'Berhasil menambah metode pembayaran');
	}

	function edit($slug) : View {
		$penyediaPembayaran = $this->penyediaPembayaranRepository->getAllPenyediaPembayaran();
		$kategoriPembayaran = $this->kategoriPembayaranRepository->getAllKategoriPembayaran();
		$data = $this->metodePembayaranRepository->getMetodePembayaranBySlug($slug);

		return view('pemilik.metode-pembayaran.partials.edit', compact('penyediaPembayaran', 'kategoriPembayaran', 'data'));
	}

	function update(MetodePembayaranRequest $request, $id) : RedirectResponse {
		$this->metodePembayaranRepository->updateMetodePembayaran($request, $id);

		return to_route('metode-pembayaran')->with('success', 'Berhasil mengubah metode pembayaran');
	}

	function destroy($id) : RedirectResponse {
		$this->metodePembayaranRepository->destroyMetodePembayaran($id);

		return to_route('metode-pembayaran')->with('success', 'Berhasil menghapus metode pembayaran');
	}
}
